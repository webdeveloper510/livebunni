<!DOCTYPE html>
<html lang="en">
<head>
<style>

</style>
  <!-- Theme Made By www.w3schools.com - No Copyright -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
  
  </style>
  <?php include($header);?>
  <div class="container">
<div class="row no-gutters">  
  <div class="col-12 col-sm-6 col-md-8"> 
  <div class="livenow">
  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/XGSy3_Czz8k">
              </iframe></div>
		
			<div class="container leftside">
			  <div class="row livecambt">
		

				
</div>
	</div>
		</div>
			  
	 <div class="col-md-4 col-sm-4 colleft">
				   <button type="button" class="btlive3">Chat Box</button>
  <div class="container bootstrap snippet">     
    <div class="chatbox">
        <i class="fa fa-caret-down downit"></i>
            <div class="portlet portlet-default">
                
                <div id="chat" class="panel-collapse collapse in">
                    <div>
                    <div id="append_chat" class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 386px;">
                        <div class="row">
                           
                        </div>
                        <!----div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <div class="media-body">
                                       <span class="mycmt">me:</span> <p class="livep">helloooo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
						 <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    
                                    <div class="media-body">
                                        
                                     <span class="other">Arvind:</span>     <p class="livep">Hi,</p>
                                    </div>
                                </div>
                            </div>
                        </div--->

                    </div>
                    </div>
                    <div class="liveall">
                                <input type="text" id="feed" class="livemessg" name="lname" >
								  <button onclick="myfeed();" type="button" class="btlive">Send</button>
                            </div>
                           
                </div>
            </div>
   
        <script>
			 $("#feed").on("keydown", function (e) {
				if (e.keyCode === 13) {  //checks whether the pressed key is "Enter"
					myfeed();
				}
				});
		</script>	       
                            
                       
                    
        <!-- /.col-md-4 -->
		
    </div>
	
	
</div> 
<script>
  $('.btlive3').click(function(){
	
	$('.btlive3').css('display','none');
	$('.chatbox').css('display','block');
	 
  })
  $('.downit').click(function(){      
	  $('.btlive3').css('display','block');
	$('.chatbox').css('display','none');
  })
  </script>
				 </div>
  </div>
 
 
 


</div>

  <? include("footer.php");?>	
  
  </html> 

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