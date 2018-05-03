
<!doctype html>
<html>
<head>
  <title>jQuery Emoji Picker Demo</title>
  <link rel="stylesheet" type="text/css" href="css/jquery.emojipicker.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="js/jquery.emojipicker.js"></script>

  <!-- Emoji Data -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/jquery.emojipicker.tw.css'); ?>">
  <script type="text/javascript" src="<?php echo base_url('js/jquery.emojis.js'); ?>"></script>
  <!--script type="text/javascript" src="<?php echo base_url('js/compile.js'); ?>"></script-->

  <script type="text/javascript">
    $(document).ready(function(e) {
      $('.myclass').emojiPicker();
    });
  </script>
  <style type="text/css">
    body {background:#888;}
    form {margin:200px 0 0 0; text-align:center;}
    input {width:400px; height:30px;}
    input,textarea,button {padding:5px 10px; font-family:"Helvetica Neue", "Helvetica", "Arial", sans-serif; font-size:24px; font-weight:300; outline:none; border:none;}
    #emojiPickerWrap {margin:10px 0 0 0;}
    .field { padding: 20px 0; }
    textarea { width: 400px; height: 200px; }
  </style>

</head>
<body>
    <div class="field">
      <input type="text"  class="emojiable-option myclass" placeholder="Default">
    </div>
	
	
</body>
</html>

 <script type="text/javascript" src="<?php echo base_url("js/lightwsd.js") ?>"></script> 
 <!--script type="text/javascript" src="<?php echo base_url("js/complied.js") ?>"></script-->
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

    	chat.init("wss://cluster.lightwsd.com", "acf7687d-a878-4193-8422-84fe19b91bab", "<?php echo $Model_profile[0]['text_channel'] ?>");

        function myfeed() {
			var message = document.getElementById("feed").value;
			chat.send({
                name: '<?php echo $id[0]['username']; ?>', 
                message: message
            });
			$('#feed').val('');
			$('#append_chat').append('<div class="row"><div class="col-lg-12"><div class="media"><div class="media-body"><span class="mycmt">me:</span> <p class="livep">'+message+'</p></div></div></div></div>');
        }
		
		  chat.on("chat", onMessage);
        
		 /*start subscribe callback feeds*/
        function onMessage(event) {
			
				$('.btlive3').css('display','none');
				$('.chatbox').css('display','block');
			var obj = JSON.parse(event);
            var name = obj.name;
			var Username = '<?php echo $id[0]['username']; ?>';
			if(name != Username){
            var message = obj.message;
            var html = '<div class="row"><div class="col-lg-12"><div class="media"><div class="media-body"><span class="other">'+name+':</span><p class="livep">'+message+'</p></div></div></div></div>';
            $("#append_chat").append(html);
			}
        }

    </script>