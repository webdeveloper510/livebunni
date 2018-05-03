<?php  require_once("memberheader.php");?>


<ul id="getchat">

</ul>





  <script type="text/javascript" src="<?php echo base_url("js/lightwsd.js") ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("js/lightwsd.chat.js") ?>"></script>
	
	
	 <script>
        
        var chat = new ChatClient();

        chat.on("connecting", function() {
            //you should update your UI here
            console.log('Connecting to chat service');
        });

        chat.on("connected", function() {
            //you should update your UI here
			console.log('Chat Connected');
		});
		
        chat.on("disconnected", function() {
            //you should update your UI here
			console.log('Chat Disconnected');
		});

        chat.on("authorized", function() {
            //you should update your UI here
            console.log('Chat Application Authorized');
        });

        chat.on("unauthorized", function() {
            //you should update your UI here
            console.log('Chat Application UnAuthorized');
        });

        chat.on("chat", onMessage);

        chat.init("wss://cluster.lightwsd.com", "acf7687d-a878-4193-8422-84fe19b91bab", "<?php echo $user_profile[0]['text_channel'] ?>");
        
		 /*start subscribe callback feeds*/
        function onMessage(event) {
			console.log('sdf');
			var obj = JSON.parse(event);
            var name = obj.name;
            var message = obj.message;
            var html = '<li class="feeds">'+name+': '+message+'</li>';
            $("#getchat").prepend(html);
			//$('.feeds').first().text(name+' '+ message);
			
			

        }

        /*end subscribe*/
    </script>