/*!
*********************************************************
        This code is a proprietary of lightwsd.com

Following may not be used in part or in whole without the
prior permission of lightwsd.com

Author: Vikas Sood
Date: 25/02/2018
Purpose: Chat SDK With Lightwsd service
*********************************************************
*/
ChatClient = function() {
    'use strict';
	
	/*
 	 * Logger is our Observer
	 */
	var mLogger = null;
	
	/*
	 * This is our Subject / Observable
	 *
	 * This can be used to cache chat messages
	 * or even sync them with a storage server
	 * for later viewing.
	 */
	var mChats = null;

	/*
	 * Callbacks registered by the UI
	 */
	var chat_callbacks = {};

	/*
	 * Chat Service Interface
	 */
	var mLightwsdClient = null;

	/*
	 * Chat Service Interface
	 */
	var mChatChannel = null;

	/**
	 * Public interface to this plugin.
	 * 
	 * init the chat service and start receving chats for
	 * given data channel.
	 */ 
    this.init = function(endpoint, appsecret, data_channel) {
    	mChatChannel = data_channel;

		initLogger();
		initChats();

		initChatService(endpoint, appsecret);
    }

	/**
	 * Public interface to this plugin.
	 * 
	 * send a chat
	 */ 
    this.send = function(payload) {
    	mLightwsdClient.publish(mChatChannel, payload);
    }

	/**
	 * Public interface to this plugin.
	 * 
	 * Recieve events from chat service.
	 */ 
    this.on = function(event, callback) {
		if (typeof callback === 'function') {
			if(event === "connecting" || event === "connected" || event === "disconnected" || 
						event === "authorized" || event === "unauthorized" ||  event === "chat")
				chat_callbacks[event] = callback;
		}
		else
			console.log('callback must be function');
    }

    /*
     * Initialize the chat service
     */
    function initChatService(endpoint, appsecret) {
    	mLightwsdClient = new Lightwsd(appsecret, endpoint, true);
    	mLightwsdClient.on('connecting', alertui);
    	mLightwsdClient.on('connected', alertui);
    	mLightwsdClient.on('disconnected', alertui);
    	mLightwsdClient.on('authorized', alertui);
    	mLightwsdClient.on('unauthorized', alertui);

    	mLightwsdClient.init();
    	mLightwsdClient.subscribe(mChatChannel, alertui);
    }
    
    /*
     * Alert the User Interface
     */
    function alertui(event) {
		if(event === "connecting" || event === "connected" || event === "disconnected" || 
					event === "authorized" || event === "unauthorized") {
			var cb = chat_callbacks[event];
			if(typeof cb === 'function')
				cb(event);
		} else {
			/*
			 * This is an incoming chat from a user
			 */
			console.log('chat received');
			var cb = chat_callbacks["chat"];
			if(typeof cb === 'function')
				cb(event);
		}
    }

    /*
     * Log incoming events before initiating callbacks
     */
    function initLogger () {
		mLogger = {};
		extend(mLogger, new Observer());
		mLogger.update = function(event, object) {
			console.log('Received event ' + event);
		}
	}
	
	function initChats () {
		mChats = new Chats();
		extend(mChats, new Subject());
		
		mChats.addObserver(mLogger);		
	}
    
    /**
     * Chats Container
     */
    function Chats() {

	};

	Chats.prototype.initchats = function () {
	}

	/**
     * Lets create our ObserverList container
     */    
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
	
	/**
	 * Lets create our abstract subject.
	 * 
	 */ 
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

	/**
	 * Abstract observer
	 */ 
	function Observer() {
		//Concrete observers must override this
		this.update = function(){
			// ...
		};
	}
	
	/**
	 * Inheritance the JS style
	 * 
	 * @param derived class object
	 * @param base class object
	 */ 
	function extend( obj, extension ) {
		for ( var key in extension ){
			obj[key] = extension[key];
		}
	}
}