//////////////////////////////////////////////
//  PushFYI WebRTC API                      //
//  Client: PushFYI                         //
//  Date: 09/05/2017                        //
//  Purpose: Integrate PushFYI as signaling //
//              platform for WebRTC         //
//                                          //
//  Author: Vikas Sood                      //
//////////////////////////////////////////////
(function(){
//////////////////////////////////////////////////////////////////////////////////////////
// PushFYI WebRTC API Audio and Video Calling                                           //
//////////////////////////////////////////////////////////////////////////////////////////
var LightWSDRTC = window.LightWSDRTC = function(config) {
    var LightWSDRTC         = function(){};
    var mPushFYIClient      = config.signalingService;
    var snapper             = function(){ return ' ' }
    var autocam             = config.autocam !== false;
    var sessionid     		= uuid();
    var mystream      		= null;
    var myvideo       		= config.selfVideoElement;
    var myconnection  		= false;
    var mediaconf     		= config.media || { audio : true, video : true };
    var conversations 		= {};

    //////////////////////////////////////////////////////////////////////////////////////////
    // RTC Peer Connection Session (one per call)                                           //
    //////////////////////////////////////////////////////////////////////////////////////////
    var PeerConnection =
        window.RTCPeerConnection    ||
        window.mozRTCPeerConnection ||
        window.webkitRTCPeerConnection;

    //////////////////////////////////////////////////////////////////////////////////////////
    // ICE (many route options per call)                                                    //
    //////////////////////////////////////////////////////////////////////////////////////////
    var IceCandidate =
        window.mozRTCIceCandidate ||
        window.RTCIceCandidate;

    //////////////////////////////////////////////////////////////////////////////////////////
    // Media Session Description (offer and answer per call)                                //
    //////////////////////////////////////////////////////////////////////////////////////////
    var SessionDescription =
        window.RTCSessionDescription    ||
        window.mozRTCSessionDescription ||
        window.webkitRTCSessionDescription;

    //////////////////////////////////////////////////////////////////////////////////////////
    // Local Microphone and Camera Media (one per device)                                   //
    //////////////////////////////////////////////////////////////////////////////////////////
    navigator.getUserMedia = 
        navigator.getUserMedia       ||
        navigator.webkitGetUserMedia ||
        navigator.mozGetUserMedia    ||
        navigator.msGetUserMedia;

    //////////////////////////////////////////////////////////////////////////////////////////
    // STUN Server List Configuration (public STUN list)                                    //
    //////////////////////////////////////////////////////////////////////////////////////////
    var rtcconfig = { iceServers : [{ "url" :
        navigator.mozGetUserMedia    ? "stun:stun.services.mozilla.com" :
        navigator.webkitGetUserMedia ? "stun:stun.l.google.com:19302"   :
                                       "stun:23.21.150.121"
    },
        {url: "stun:stun.l.google.com:19302"},
        {url: "stun:stun1.l.google.com:19302"},
        {url: "stun:stun2.l.google.com:19302"},
        {url: "stun:stun3.l.google.com:19302"},
        {url: "stun:stun4.l.google.com:19302"},
        {url: "stun:23.21.150.121"},
        {url: "stun:stun01.sipphone.com"},
        {url: "stun:stun.ekiga.net"},
        {url: "stun:stun.fwdnet.net"},
        {url: "stun:stun.ideasip.com"},
        {url: "stun:stun.iptel.org"},
        {url: "stun:stun.rixtelecom.se"},
        {url: "stun:stun.schlund.de"},
        {url: "stun:stunserver.org"},
        {url: "stun:stun.softjoys.com"},
        {url: "stun:stun.voiparound.com"},
        {url: "stun:stun.voipbuster.com"},
        {url: "stun:stun.voipstunt.com"},
        {url: "stun:stun.voxgratia.org"},
        {url: "stun:stun.xten.com"}
    ] };

	var mediaConstraints = {
		optional: [],
		mandatory: {
			OfferToReceiveAudio: true,
			OfferToReceiveVideo: true
		}
	};

	function uuid() {
	    function s4() {
		    return Math.floor((1 + Math.random()) * 0x10000)
		        .toString(16)
		  		.substring(1);
	  	}
	  	
	  	return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
		s4() + '-' + s4() + s4() + s4();
	}

    //////////////////////////////////////////////////////////////////////////////////////////
    // Custom STUN Options 								                                    //
    //////////////////////////////////////////////////////////////////////////////////////////
    function add_servers(servers) {
        if (servers.constructor === Array)
            [].unshift.apply(rtcconfig.iceServers, servers);
        else rtcconfig.iceServers.unshift(servers);
    }

    if ('servers' in config) add_servers(config.servers);

    //////////////////////////////////////////////////////////////////////////////////////////
    // WebRTC Events 									                                    //
    //////////////////////////////////////////////////////////////////////////////////////////
	var messagecb    = function(){};
    var readycb      = function(){};
    var unablecb     = function(){};
    var debugcb      = function(){};
    var connectcb    = function(){};
    var disconnectcb = function(){};
    var reconnectcb  = function(){};
    var callstatuscb = function(){};
    var receivercb   = function(){};

    LightWSDRTC.message    = function(cb) { messagecb    = cb };
    LightWSDRTC.ready      = function(cb) { readycb      = cb };
    LightWSDRTC.unable     = function(cb) { unablecb     = cb };
    LightWSDRTC.callstatus = function(cb) { callstatuscb = cb };
    LightWSDRTC.debug      = function(cb) { debugcb      = cb };
    LightWSDRTC.connect    = function(cb) { connectcb    = cb };
    LightWSDRTC.disconnect = function(cb) { disconnectcb = cb };
    LightWSDRTC.reconnect  = function(cb) { reconnectcb  = cb };
    LightWSDRTC.receive    = function(cb) { receivercb   = cb };

    //////////////////////////////////////////////////////////////////////////////////////////
    // Add/Get Conversation - Creates a new PC or Returns Existing PC                       //
    //////////////////////////////////////////////////////////////////////////////////////////
    function get_conversation(number) {
        var talk = conversations[number] || (function(number){
            var talk = {
                number  : number,
                status  : '',
                image   : document.createElement('img'),
                started : +new Date,
                imgset  : false,
                imgsent : 0,
                pc      : new PeerConnection(rtcconfig),
                closed  : false,
                usermsg : function(){},
                thumb   : null,
                connect : function(){},
                end     : function(){}
            };

            // Setup Event Methods
            talk.pc.onaddstream    = config.onaddstream || onaddstream;
            talk.pc.onicecandidate = onicecandidate;
            talk.pc.number         = number;

            // Disconnect and Hangup
            talk.hangup = function(signal) {
                if (talk.closed) return;

                talk.closed = true;
                talk.imgset = false;
                clearInterval(talk.snapi);

                if (signal !== false) transmit( number, { hangup : true } );

                talk.end(talk);
                talk.pc.close();
                close_conversation(number);
            };
            
            // Stop Audio/Video Stream
            talk.stop = function() {
                if (mystream) mystream.stop();
                return mystream;
            };

            // Sending Messages
            talk.send = function(message) {
                transmit( number, { usermsg : message } );
            };

            // Nice Accessor to Update Disconnect & Establis CBs
            talk.thumbnail = function(cb) {talk.thumb   = cb; return talk};
            talk.ended     = function(cb) {talk.end     = cb; return talk};
            talk.connected = function(cb) {talk.connect = cb; return talk};
            talk.message   = function(cb) {talk.usermsg = cb; return talk};

            // Add Local Media Streams Audio Video Mic Camera
            if (mystream) talk.pc.addStream(mystream);

            // Notify of Call Status
            update_conversation( talk, 'connecting' );

            // Return Brand New Talk Reference
            conversations[number] = talk;
            return talk;
        })(number);

        // Return Existing or New Reference to Caller
        return talk;
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    // Remove Conversation 											                     	//
    //////////////////////////////////////////////////////////////////////////////////////////
    function close_conversation(number) {
        conversations[number] = null;
        delete conversations[number];
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    // Notify of Call Status Events									                     	//
    //////////////////////////////////////////////////////////////////////////////////////////
    function update_conversation( talk, status ) {
        talk.status = status;
        callstatuscb(talk);
        return talk;
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    // Get Number													                     	//
    //////////////////////////////////////////////////////////////////////////////////////////
    LightWSDRTC.number = function() {
        return config.number;
    };

    //////////////////////////////////////////////////////////////////////////////////////////
    // Make Call 													                     	//
    //////////////////////////////////////////////////////////////////////////////////////////
    LightWSDRTC.call = function(number, servers) {
        if (!!servers) 
        	add_servers(servers);

        var talk = get_conversation(number);
        var pc   = talk.pc;

        // Prevent Repeat Calls
        if (talk.dialed) return false;
        talk.dialed = true;

        // Send SDP Offer (Call)
        pc.createOffer( function(offer) {
            transmit( number, { hangup : true } );
            transmit( number, offer, 2 );
            pc.setLocalDescription( offer, debugcb, debugcb );
        }, debugcb );

        // Return Session Reference
        return talk;
    };

    //////////////////////////////////////////////////////////////////////////////////////////
    // Send Image Snap - Send Image Snap to All Calls or a Specific Call 	               	//
    //////////////////////////////////////////////////////////////////////////////////////////
    LightWSDRTC.snap = function( message, number ) {
        if (number) return get_conversation(number).snap(message);
        var pic = {};
        PUBNUB.each( conversations, function( number, talk ) {
            pic = talk.snap();
        } );
        return pic;
    };

    //////////////////////////////////////////////////////////////////////////////////////////
    // Send Message - Send Message to All Calls or a Specific Call 			               	//
    //////////////////////////////////////////////////////////////////////////////////////////
    LightWSDRTC.send = function( message, number ) {
        if (number) return get_conversation(number).send(message);
        PUBNUB.each( conversations, function( number, talk ) {
            talk.send(message);
        } );
    };

    //////////////////////////////////////////////////////////////////////////////////////////
    // End Call - Close All Calls or a Specific Call 						               	//
    //////////////////////////////////////////////////////////////////////////////////////////
    LightWSDRTC.hangup = function(number) {
        if (number) return get_conversation(number).hangup();
        PUBNUB.each( conversations, function( number, talk ) {
            talk.hangup();
        } );
    };

    //////////////////////////////////////////////////////////////////////////////////////////
    // Grab Local Video Snapshot 											               	//
    //////////////////////////////////////////////////////////////////////////////////////////
    function snapshots_setup(stream) {
        var video   = myvideo;
        var canvas  = document.createElement('canvas');
        var context = canvas.getContext("2d");
        var snap    = { width: 240, height: 180 };

        // Video Settings
        video.width  = snap.width;
        video.height = snap.height;
        video.src    = URL.createObjectURL(stream);
        video.volume = 0.0;
        video.play();

        // Canvas Settings
        canvas.width  = snap.width;
        canvas.height = snap.height;

        // Capture Local Pic
        snapper = function() {
            try {
                context.drawImage( video, 0, 0, snap.width, snap.height );
            } catch(e) {}
            return canvas.toDataURL( 'image/jpeg', 0.30 );
        };

        LightWSDRTC.video = video;
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    // Visually Display New Stream											               	//
    //////////////////////////////////////////////////////////////////////////////////////////
    function onaddstream(obj) {
    	console.log("recived remote stream");
        var vid    = document.createElement('video');
        var stream = obj.stream;
        var number = (obj.srcElement || obj.target).number;
        var talk   = get_conversation(number);

        vid.setAttribute( 'autoplay', 'autoplay' );
        vid.setAttribute( 'width', '100%' );
        vid.setAttribute( 'height', '100%' );
        vid.src = URL.createObjectURL(stream);

        talk.video = vid;
        talk.connect(talk);
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    // On ICE Route Candidate Discovery										               	//
    //////////////////////////////////////////////////////////////////////////////////////////
    function onicecandidate(event) {
        if (!event.candidate) return;
        transmit( this.number, event.candidate );
    };

    //////////////////////////////////////////////////////////////////////////////////////////
    // Listen For New Incoming Calls                                                        //
    //////////////////////////////////////////////////////////////////////////////////////////
    function subscribe() {
        mPushFYIClient.subscribe(
            config.number,
            receive
        );
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    // When Connected to Signaling Service, prepare to receive calls 						//
    //////////////////////////////////////////////////////////////////////////////////////////
    function onready() {
    	subscribe();

        connectcb();
        readycb();
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    // Prepare Local Media Camera and Mic                                                   //
    //////////////////////////////////////////////////////////////////////////////////////////
    function startcamera() {
        navigator.getUserMedia( mediaconf, function(stream) {
            if (!stream) return unablecb(stream);
            mystream = stream;
            snapshots_setup(stream);

            if (autocam) startservice();
        }, function(info) {
            debugcb(info);
            return unablecb(info);
        } );
    }
    
    //////////////////////////////////////////////////////////////////////////////////////////
    // Initiate Dialing Socket 				                                                //
    //////////////////////////////////////////////////////////////////////////////////////////
    function startservice() {
    	console.log("starting lightwsd service");

    	mPushFYIClient.init();
    	mPushFYIClient.on("connected", onready);
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    // Send SDP Call Offers/Answers and ICE Candidates to Peer                              //
    //////////////////////////////////////////////////////////////////////////////////////////
    function transmit( phone, packet, times, time ) {
        if (!packet) return;
        var number  = config.number;
        var message = { packet : packet, id : sessionid, number : number };
        debugcb(message);
        mPushFYIClient.publish( phone, message );

        // Recurse if Requested for
        if (!times) return;
        time = time || 1;
        if (time++ >= times) return;
        setTimeout( function(){
            transmit( phone, packet, times, time );
        }, 150 );
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    // SDP Offers & ICE Candidates Receivable Processing 		                            //
    //////////////////////////////////////////////////////////////////////////////////////////
    function receive(message) {
        // Debug Callback of Data to Watch
        debugcb(message);

        message = JSON.parse(message);
        //console.log(message);

        // Get Call Reference
        var talk = get_conversation(message.number);

        // Ignore if Closed
        if (talk.closed) return;

        // User Message
        /*
        if (message.packet.usermsg) {
            messagecb( talk, message.packet.usermsg );
            return talk.usermsg( talk, message.packet.usermsg );
        }

        // Thumbnail Preview Image
        if (message.packet.thumbnail) return create_thumbnail(message);
		*/

        // If Hangup Request
        if (message.packet.hangup) return talk.hangup(false);
		

        // If Peer Calling Inbound (Incoming)
        if ( message.packet.sdp && !talk.received ) {
            talk.received = true;
            receivercb(talk);
        }

        // Update Peer Connection with SDP Offer or ICE Routes
        if (message.packet.sdp) add_sdp_offer(message);
        else                    add_ice_route(message);
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    // Create Remote Friend Thumbnail 					                                    //
    //////////////////////////////////////////////////////////////////////////////////////////
    function create_thumbnail(message) {
        var talk       = get_conversation(message.number);
        talk.image.src = message.packet.thumbnail;

        // Call only once
        if (!talk.thumb) return;
        if (!talk.imgset) talk.thumb(talk);
        talk.imgset = true;
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    // Add SDP Offer/Answers                                 								//
    //////////////////////////////////////////////////////////////////////////////////////////
    function add_sdp_offer(message) {
        // Get Call Reference
        var talk = get_conversation(message.number);
        var pc   = talk.pc;
        var type = message.packet.type == 'offer' ? 'offer' : 'answer';

        // Deduplicate SDP Offerings/Answers
        if (type in talk) return;
        talk[type]  = true;
        talk.dialed = true;

        // Notify of Call Status
        update_conversation( talk, 'routing' );

        // Add SDP Offer/Answer
        pc.setRemoteDescription(
            new SessionDescription(message.packet), function() {
                // Set Connected Status
                update_conversation( talk, 'connected' );

                // Call Online and Ready
                if (pc.remoteDescription.type != 'offer') return;

                // Create Answer to Call
                pc.createAnswer( function(answer) {
                    pc.setLocalDescription( answer, debugcb, debugcb );
                    transmit( message.number, answer, 2 );
                }, debugcb );
            }, debugcb
        );
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    // Add ICE Candidate Routes                        							            //
    //////////////////////////////////////////////////////////////////////////////////////////
    function add_ice_route(message) {
        // Leave if Non-good ICE Packet
        if (!message.packet)           return;
        if (!message.packet.candidate) return;

        // Get Call Reference
        var talk = get_conversation(message.number);
        var pc   = talk.pc;

        // Add ICE Candidate Routes
        pc.addIceCandidate(
            new IceCandidate(message.packet),
            debugcb,
            debugcb
        );
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    // PushFYIRTC EntryPoint - Request Camera and Mic                                       //
    //////////////////////////////////////////////////////////////////////////////////////////
    LightWSDRTC.startcamera = startcamera;
    if (autocam) startcamera();
    else         startsubscribe();

    return LightWSDRTC;
};

})();