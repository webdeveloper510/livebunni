<!DOCTYPE html>
<html lang="en">
<head>
<style></style>
<?php  
//print_r($user_profile[0]);
?>

  <!-- Theme Made By www.w3schools.com - No Copyright -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
  </head>
   
  <style>
input.livemessg {
    position: relative;
    top: 84%;
    width: 222px !important;
    height: 42px !important;
}
button.btlive {
    height: 43px;
    width: 68px;
}
.livenow video{
    width: 100%;
    height: 100%;
}
.livenow iframe {
    width: 100%;
    height: 100%;
}
.chatbox {
top: 16%;}
#myModal .modal-header {
    background:#A60000;
}
#myModal .modal-footer {
    background: #A60000;
    border-top: 1px solid #A60000;
}
#myModal .modal-body {
    padding: 41px 9px !important;
    background: rgba(243, 243, 243, 0.61)!important;
}
#myModal p {
    font: normal 16px/11px Arial !important;
    color: #000 !important;
}
#myModal button.btn.btn-default {
    color: #fff !important;
    background: linear-gradient(to bottom, #fc0, #F98706) !important;
}
.modal {
    background-color: #920303 !important;
}
  </style>
  <?php include($header); ?>

  <div class="container">
<div class="row no-gutters">  
  <div class="col-12 col-sm-6 col-md-8"> 
  <div class="livenow">
 
<center>
          <video height="600" id="video" ></video>
      </center>
      <!--a href="<?php echo base_url('video_call'); ?>">private chat</a-->
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>

      

      <script>
        if(Hls.isSupported()) {
          var video = document.getElementById('video');
          var hls = new Hls();
          hls.loadSource('https://ec2-13-127-173-191.ap-south-1.compute.amazonaws.com:8080/angel/<?php echo $user_profile[0]['video_channel']?>.m3u8');
          hls.attachMedia(video);
          hls.on(Hls.Events.MANIFEST_PARSED,function() {
            video.play();
        });
       }
       // hls.js is not supported on platforms that do not have Media Source Extensions (MSE) enabled.
       // When the browser has built-in HLS support (check using `canPlayType`), we can provide an HLS manifest (i.e. .m3u8 URL) directly to the video element throught the `src` property.
       // This is using the built-in support of the plain video element, without using hls.js.
        else if (video.canPlayType('application/vnd.apple.mpegurl')) {
          video.src = 'https://video-dev.github.io/streams/x36xhzz/x36xhzz.m3u8';
          video.addEventListener('canplay',function() {
            video.play();
          });
        }
      </script>
</div>
		
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
                                <input type="text" id="feed" class="livemessg myclass" name="lname" > 
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
<script type="text/javascript">
    $(document).ready(function(e) {
      $('.myclass').emojiPicker();
    });
  </script>		
                            
                       
                    
        <!-- /.col-md-4 -->
		
    </div>
	
	
</div> 

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="trigger_popup" style="display:none">Open Modal</button> 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="z-index: 99999 !important;">
    <div class="modal-dialog" style="z-index: 99999 !important;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p class="giff"><img src="https://teky.edu.vn/wp-content/themes/teky_v2/images/call_me.gif"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" id="accept_call">Accept</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Reject</button>
        </div>
      </div>
      
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

 <script type="text/javascript" src="<?php echo base_url("js/lightwsd1.js") ?>"></script>
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

    	chat.init("wss://cluster.lightwsd.com", "acf7687d-a878-4193-8422-84fe19b91bab", "<?php echo $user_profile[0]['text_channel'] ?>");

        function myfeed() {
			var message = document.getElementById("feed").value;
			chat.send({
                name: '<?php echo $user_profile[0]['First_name']; ?>', 
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
      if(obj.message.indexOf("private_chat_init")!=-1) 
      {
        var id = obj.message.split('?');
        
        $('#accept_call').attr('user_id',id[1]);
        $('#trigger_popup').trigger('click'); return false;
      }
			console.log(obj);
            var name = obj.name;
			var Username = '<?php echo $user_profile[0]['First_name']; ?>';
			if(name != Username){
            var message = obj.message;
            var html = '<div class="row"><div class="col-lg-12"><div class="media"><div class="media-body"><span class="other">'+name+':</span><p class="livep">'+message+'</p></div></div></div></div>';
            $("#append_chat").append(html);
			}
        }
        $('#accept_call').click(function(){
          var u_id = $('#accept_call').attr('user_id');
          var url = '<?php echo base_url('video_model_end/');?>'+u_id;
          $('.livenow').html("<iframe src='"+url+"'></iframe>");
        });
    </script>