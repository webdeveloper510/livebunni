/*!
*********************************************************
        This code is a proprietary of lightwsd.com

Following may not be used in part or in whole without the
prior permission of lightwsd.com

Author: Vikas Sood
Date: 20/09/2016
Purpose: LightWSD Cluster Javascript API
*********************************************************
*/
function Lightwsd (a, c, e ) {
	
	var appsecret = a;	//App secret

	var address = c;	//Cluster to connect
	
	var autoconnect = e || true; //auto connect on disconnection

	var websocket = null;	//Web socket

	var queue = [];	//Out Queue

	var subscription_callbacks = {};	//subscription callbacks

	var status_callbacks = {};     //status callbacks
		
	var heartbeatTimer = null;     // timer object

	var heartbeatInterval = 25000; // 25 seconds
			
	var heartbeats_missed = 0; //heartbeat counter
	
	var heartbeat_received = false;

	var disconnected = false;

	var authorized = false;

	/*!
	 *	Connection close callback
	 */
	function close() {
		console.log("<lightwsd>: connection closed");
		
		statusChange("disconnected");
		disconnected = true;
		authorized = false;

		stopHeartbeat();
		
		if(autoconnect === true) {
			tryReconnect();
		}
	}

	/*! 
	 * Connection open callback
	 */
	function open() {
		console.log("<lightwsd>: connection open");
		statusChange("connected");

		/*
		 * Start the heartbeat timer
		 */
		startHeartbeat();

		/*
		 * Authorize with the server
		 */
		authorize();
	}
	
	/*!
	 * Callback processor method
	 */
	function incoming(evt) {
		var event = xmlToDom(evt.data);
		var params = event.getElementsByTagName("params");

		//console.log(evt.data);
		
		//find the channel and call the callback
		var channel = getChannel(event);
		var payload = getParam(params[0], "payload");

		if(channel === "ping") {
			console.log("<lightwsd>: server ping");
			heartbeat_received = true;
			
			if(heartbeats_missed > 0)
				statusChange("connected");
			
			heartbeats_missed = 0;
			pong();
		} else {
			subscription_callbacks[String(channel)](unescape(payload));
		}
	}

	/*!
	 * wait loop during connection is established to the lightwsd cluster
	 */
	function wait() {
		setTimeout(
			function () {
				if (websocket.readyState === 2 || websocket.readyState ===3) {
					console.log("<lightwsd>: Could not connect.");
					return;
				} 
				if (websocket.readyState === 1) {
					open();
				}  
				
				else {
					console.log("<lightwsd>: connecting");	//connection is in progress
					wait();
					statusChange("connecting");
				}
			}, 5);	// wait 5 milisecond for the connection...		
	}
	
	/*!
	 * Schedule a reconnect
	 */
	function tryReconnect () {
		setTimeout(
			function () {
				reconnect();
			}, 5000);
	}

	/*!
	 * reconnect to websocket server
	 */	
	function reconnect () {
		websocket = new WebSocket(address, "websocket");	
						
		if( (websocket == null) || 
				(websocket.readyState === 3) || 
				(websocket.readyState === 2) ) {
					console.log("<lightwsd>: connection failed");
		} else {
			websocket.onclose = close;
			websocket.onmessage = incoming;
			wait();
		}		
	}

	/*!
	 * Start a heartbeat timer.
	 * This serves as an application layer keepalive
	 */
	function startHeartbeat() {
		heartbeats_missed = 0;
		heartbeatTimer = setInterval(heartBeatThread, heartbeatInterval);
	}

	/*!
	 * Stop the heartbeat timer.
	 */
	function stopHeartbeat() {
		clearInterval(heartbeatTimer);
		heartbeatTimer = null;
	}

	/*!
	 * Send an application layer ping
	 */
	function heartBeatThread() {
		
		if(!heartbeat_received) {
			heartbeats_missed++;
			console.log("<lightwsd>: heartbeat lost " + heartbeats_missed);
		}
		
		if(heartbeats_missed == 1) {
			console.log("<lightwsd>: connection lost");
			statusChange("disconnected");
		}
		
		
		if(heartbeats_missed > 5) {
			console.log("<lightwsd>: Connection permanently lost");
			statusChange("disconnected");
			websocket.close();
		}
		
		heartbeat_received = false;
	}
	
	/*!
	 * Send pong
	 */ 
	function pong() { 
		console.log("<lightwsd>: client pong");
		var pong = toLightwsdMessage(appsecret, "pong", 
							{}, "pong");
		send(pong);
	}
	
	/*!
	 * resubscribe any previous subs
	 */ 
	function subscribe() {
		for (subs in subscription_callbacks) {
			if (subscription_callbacks.hasOwnProperty(subs)) {
				var subscription = toLightwsdMessage(appsecret, subs, 
										{}, "subscribe");
				queue.push(subscription);
			}
		}
	}

	/*!
	 * Authorize to server
	 */
	function authorize() {
		var authorization = toLightwsdMessage(appsecret, "authorize", 
									{}, "authorize");
		console.log("<lightwsd>: authorizing with server");
		subscription_callbacks["authorize"] = auth_complete;
		send(authorization);
	}

	function auth_complete(data) {
		payload = JSON.parse(data);
		
		//remove the auth event from subscription_callbacks
		delete subscription_callbacks["authorize"];

		if(payload.status == "true") {
			console.log("<lightwsd>: " + payload.reason);
			statusChange("authorized");
			
			authorized = true;

			/*
			 * subscribe any subs
			 */
			if(disconnected === true)
				subscribe(); 
			
			/*
			 * Check the out queue and clear
			 */
			process();
		}

		else {
			console.log("<lightwsd>: " + payload.reason);
			statusChange("unauthorized");
		}
	}
	
	/*!
	 * Send to lightwsd websocket
	 */
	function send (data) {
		//check the connection progress
		if( (websocket !== null) && (websocket.readyState === 0) ) {
			console.log("<lightwsd>: connection is in progress. Can not send at this moment");
		}
		else if( (websocket == null) || 
					(websocket.readyState === 3) || 
					(websocket.readyState === 2) ) {
			console.log("<lightwsd>: connection is in progress. Can not send at this moment");		
		} 
		else if (websocket.readyState === 1) {
			websocket.send(data);
		}
	}
	
	/*!
	 * Convert message to Push FYI XML Format
	 * @param params this is a JSON string of input key value pairs
	 */
	var toLightwsdMessage = function (topic, subtopic, params, command) {
	var event = "<ims-event>\n";
		if(topic) {
			event += "<topic>"    + topic    + "</topic>\n";
		}
		if(subtopic) {
			event += "<subtopic>" + subtopic + "</subtopic>\n";
		}
		event += "<params>\n";
 
		if(params) {
			if (typeof(params) == "object") {
				//this should be JSON
				//var obj = JSON.parse(params);
				if(Object.keys(params).length > 0) {
					var json = JSON.stringify(params);
					event += '<var name="payload">' + escape(json) + '</var>\n';
				} //else 
					//console.log(params);
			}
			else if (typeof(params) == "string") {
				event += '<var name="payload">' + escape(params) + '</var>\n';
			}
		}

	event += '<var name="command">' + command + '</var>\n';
		event += "</params>\n</ims-event>";
		return event;
	}
	
	/*!
	 * Convert XML string to DOM for parsing
	 */
	function xmlToDom(xml) {
		if(DOMParser) {
		var dom = new DOMParser();
		var doc = dom.parseFromString(xml, "text/xml");
		return doc;
		} else {
		alert("your browser does not support xml parsing");
		return null;
		}
	}

	function getChannel(event) {
		var sub = event.getElementsByTagName("subtopic");
		return sub[0].firstChild.nodeValue;
	}    

	/*!
	 * Extract key value pair
	 */
	function getParam(params, name)
	{
		var vars = params.getElementsByTagName("var");
		for (var i = 0; i < vars.length; i++) {
			var param = vars[i];
			var key   = param.getAttribute("name");

			if (key == name &&		
				param.firstChild) {
				if(param.firstChild.nodeName=='#text'){
					return param.firstChild.nodeValue;
				}
				else {
					return param.firstChild;
				}
			}
		}
		return "";
	}
	
	function process() {
		while(queue.length != 0) {
			var event = queue.shift();
			if(event) {
				console.log("<lightwsd>: sending");
				send(event);
			}
		}
	}

	/**
	 *	Initialize the lightwsd_websocket
	 */	
	this.init = function () {
		websocket = new WebSocket(address, "websocket");	
						
		if( (websocket == null) || 
				(websocket.readyState === 3) || 
				(websocket.readyState === 2) ) {
					console.log("<lightwsd>: connection failed");
		} else {
			websocket.onclose = close;
			websocket.onmessage = incoming;
			wait();
		}		
	}
	
	/*!
	 * Subscribe for a topic and subtopic
	 */
	this.subscribe = function (event, callback) {
		if(typeof callback === 'function') {
			var subscription = toLightwsdMessage(appsecret, event, 
									{}, "subscribe");
			queue.push(subscription);
			subscription_callbacks[event] = callback;
			
			if( (websocket.readyState === 1) && (authorized === true) ) {
				process();
			}
		}
		else
			console.log('<lightwsd>: invalid subscription callback.');		
	}
	
	/*!
	 * Publish a message to the data channel on the Push FYI Cluster
	 */
	this.publish = function(event, params) {
		var publication = toLightwsdMessage(appsecret, event, 
									params, "publish");
		console.log("<lightwsd>: publishing event = " + event);
		queue.push(publication);
			
		if( (websocket.readyState === 1) && (authorized === true) ) {
			process();
		}
	}

	/*!
	 * Unsubscribe for a message from the specified data channel
	 */
	this.unsubscribe = function(event) {
		var unsubscription = toLightwsdMessage(appsecret, event, 
							null, "unsubscribe");
		queue.push(unsubscription);
		
		if(websocket.readyState === 1) {
			process();
		}										
	}
	
	this.deinit = function() {
		close();
	}
	
	/*!
	 * Subscribe for a topic and subtopic
	 */
	this.on = function (event, callback) {
		if (typeof callback === 'function') {
			if(event === "connecting" || event === "connected" || event === "disconnected" || 
						event === "authorized" || event === "unauthorized")
				status_callbacks[event] = callback;
			else
				console.log('<lightwsd>: invalid event.');
		}
		else
			console.log('<lightwsd>: invalid status callback.');
	}

	function statusChange(status) {
		var cb = status_callbacks[status];

		if(typeof cb === 'function')
			cb(status);
	}
}
