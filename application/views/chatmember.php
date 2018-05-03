<?php  require_once("memberheader.php");?>

 <script type="text/javascript" src="<?php echo base_url("js/lightwsd.js") ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("js/lightwsd.chat.js") ?>"></script>
	<input type="text" id="feed" >
<button onclick="myfeed();">Submit</button>
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

    	chat.init("wss://cluster.lightwsd.com", "acf7687d-a878-4193-8422-84fe19b91bab", "99047-18500-28724-21875");

        function myfeed() {
			
            //var name = document.getElementById("name").value;
			var message = document.getElementById("feed").value;
			

			chat.send({
                name: '<?php echo $id[0]['username']; ?>', 
                message: message
            });
        }

    </script>
	
