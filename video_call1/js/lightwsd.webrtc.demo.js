//////////////////////////////////////////////
//	LightWSD WebRTC API	    				//
//  Client: Lightwsd 						//
//  Date: 09/05/2017						//
//  Purpose: Integrate Lightwsd as signaling//
//			platform for WebRTC  			//
//											//
//  Author: Lightwsd Technologies			//
//////////////////////////////////////////////

LightWSDRTCDemo = function(params) {
    'use strict';

    //this is a channel name you make a video call to.
    //this should be an application defined channel name.
    //for sake of ease this demo uses a 3 digit number as a channel.
    //var mNumber = Math.floor(Math.random()*999+1);
    var mNumber = document.getElementById('my_id').value;
   


	var mUI = null;
	var mLogger = null;
	
	var mSignalingService = new Lightwsd('acf7687d-a878-4193-8422-84fe19b91bab', 
											'wss://cluster.lightwsd.com', true);
	//mSignalingService.init();

	var mLightWSDWebRTC = null;
	function initWebRTCDemo() {
		initUI();
		initLogger();
		initializeWebRTC();
	}

    function initLogger () {
		mLogger = {};
		extend(mLogger, new Observer());
		mLogger.update = function(event, object) {
			console.log('Received event ' + event);
		}
	}
    
    function initUI() {
		mUI = new UI();
		extend(UI, new Observer());
		
		mUI.update = function ( event, obj ) {
			try {
				eval('this.'+event)( obj );
			}
			
			catch (err) {
				console.log(err.stack);
			}
		}
	}

    this.init = function () {
    	initWebRTCDemo();
    }

    function initializeWebRTC() {
		mLightWSDWebRTC = window.LightWSDRTC = LightWSDRTC({
			'number': mNumber,
			'signalingService': mSignalingService,
          	'selfVideoElement': document.getElementById("selfvideo")
      	});

      	mSignalingService.on('connected', function() {
      		console.log('Signaling service is online.');
      	});
      	mSignalingService.on('disconnected', function() {
      		console.log('Signaling service is offline.');
      	});

		//we are ready
		mLightWSDWebRTC.ready(function () {
			console.log("we are ready to receive calls");
		});

		//we have an incoming call
		mLightWSDWebRTC.receive(function(session){
			console.log("Call received");
			session.connected(accept);
		});	

		mUI.setUserNumber(mNumber);

        log({
        	'type': 'success',
        	'mesg': 'Waiting for incoming video call on ' + mNumber
        });
    }

	function makeCall(callee) {
		mLightWSDWebRTC.call(callee);

        log({
        	'type': 'success',
        	'mesg': 'Making video call to ' + callee
        });

		$('.video-chat .video-control .fullscreen').on('click', function() {
			goFS(document.getElementById("remotevideo"));
		});

		$('.video-chat .video-control .hangup').on('click', function() {
			mLightWSDWebRTC.hangup(callee);
			$("#remotevideo video").remove();
		});
	}

	function accept(session) {
	    var video_out = $("#remotevideo");

	    //add the video element, stream is already attached to it.
	    video_out.prepend(session.video);

	    console.log("Hi!");

		//add the call screen
        log({
        	'type': 'success',
        	'mesg': 'Receving call from ' + session.number
        });

		$('.video-chat .video-control .fullscreen').on('click', function() {
			goFS(document.getElementById("remotevideo"));
		});

		$('.video-chat .video-control .hangup').on('click', function() {
			mLightWSDWebRTC.hangup(callee);
			$("#remotevideo video").remove();
		});
	}

	function log(log) {
		var type = log.type;
		var mesg = log.mesg;

		if(type == 'success') {
			var markup = '<div class="alert alert-success fade in alert-dismissable" style="margin-top:18px;">' + 
							'<strong>Success!</strong> ' + mesg +  
							'</div>';

		}

		else if(type == 'alert') {
			var markup = '<div class="alert alert-danger fade in alert-dismissable" style="margin-top:18px;">' + 
							'<strong>Alert!</strong> ' + mesg +
							'</div>';			
		}
		$(".msg-wrapper").append(markup);

		var scrolltoh = $('.msg-wrapper')[0].scrollHeight;
		$('.msg-wrapper').scrollTop(scrolltoh);
	}

	//////////////////////////////////////////////
	//         User Interface of this plugin    //
	////////////////////////////////////////////// 
	function UI() {

		registerControls();

		function registerControls() {
			//connect button on modal
			$("#call-btn").on('click', function () {
				//var callee = $("#callee").attr('data-id');
				var callee = $("#callee").val();
				console.log("calling " + callee);

		        log({
		        	'type': 'success',
		        	'mesg': 'You have dialled ' + callee
		        });

		        makeCall(callee);
			})
		}

		this.setUserNumber = function (number) {
			//set the name
			$("#username").text(number);
		}

		this.queryUsername = function () {
			//show modal
			$('#intro').modal({backdrop: 'static', keyboard: false})
		}

		this.userEndcall = function ( object ) {
			//if we are here, calling is allowed
			var callee = object.party;
			var count = object.count;

			//remove the ui container
			$('#video_container_'+callee.id).remove();


	        log({
	        	'type': 'alert',
	        	'mesg': 'Call has been ended with ' + callee.name
	        });
		}

	}

	function goFS(element) {
		element.webkitRequestFullscreen();
	}

	function ObserverList() {
		this.observerList = [];
	}
	 
	ObserverList.prototype.add = function( obj ){
		return this.observerList.push( obj );
	};
	 
	ObserverList.prototype.count = function(){
		return this.observerList.length;
	};
	 
	ObserverList.prototype.get = function( index ) {
		if( index > -1 && index < this.observerList.length ){
			return this.observerList[ index ];
		}
	};
	 
	ObserverList.prototype.indexOf = function( obj, startIndex ) {
		var i = startIndex;
	 
		while( i < this.observerList.length ) {
			if( this.observerList[i] === obj ) {
				return i;
			}
			i++;
		}
		return -1;
	};
	 
	ObserverList.prototype.removeAt = function( index ) {
		this.observerList.splice( index, 1 );
	};
	
    function Subject() {
		this.observers = new ObserverList();
	}
 
	Subject.prototype.addObserver = function( observer ) {
		this.observers.add( observer );
	};
	 
	Subject.prototype.removeObserver = function( observer ) {
		this.observers.removeAt( this.observers.indexOf( observer, 0 ) );
	};
	 
	Subject.prototype.notify = function( event, context ) {
		var observerCount = this.observers.count();
		for(var i=0; i < observerCount; i++){
			this.observers.get(i).update( event, context );
		}
	};

	function Observer() {
		//Concrete observers must override this
		this.update = function(){
			// ...
		};
	}
	
	function extend( obj, extension ) {
		for ( var key in extension ) {
			obj[key] = extension[key];
		}
	}
}