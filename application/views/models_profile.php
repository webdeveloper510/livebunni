<?php include($header); ?>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	
	<link rel="stylesheet" href="<?php echo base_url("css/comliedss.css") ?>">
	<!--script src="<?php echo base_url();?>js/compile.js"></script-->
	<style>
.allit {
       border: 1px solid #ff000047;
    background-color: #89858538; 
}
span.statusmodel {
    font-size: 18px;
    text-transform: uppercase;
    text-shadow: 1px 1px 0px white, 0 0 3px #cf1d65, 0 0 0px #cf1d65;
    margin-top: 18%;
    margin-left: 11px;
	width: 90%;
	overflow: hidden;
	text-align: center;
	max-height: 515px;
}
.profile_pic img {
    height: 50px;
    width: 100%;
    border-radius: 50%;
    float: left;
    width: 70%;
    margin-right: 20px;
    border-radius: 50%;
}
.profile_pic {
   float: left;
    width: 20%;
    height: 50px;
}
.username {
    font-size: 30px;
    color: #fff;
    text-transform: capitalize;	
}
.likebox01 {
    display: inline-flex;
    margin-top: 15px;
    margin-bottom: 14px;
    color: #fff;
    text-align: center;
    width: 100%;
}
<!--.div-section {
    margin-right: 71px;
} *-->

.div-section .fa:hover {
    color: #fff;
	cursor:pointer;
}
.imagepopit {
    height: 40px;
    width: 55px;
}
.commentis01 {
    overflow-y: scroll;
    height: 253px;
}

<!-- comment box-->
.singlecomment-section {
    width: 100%;float: left;clear: both;
}
.imagepopit {
    width: 20%;
    float: left;
}
.imagepopit img {
    height: 35px;
    float: left;
    max-width: 40px;
    width: 100%;
    margin-right: 20px;
     border-radius: 50%;
}
.text-comment {
    width: 80%;
    float: left;
    padding-top: 50pz;
    text-align: left;
    padding: 10px 0px;
}
span.textcomment {
    padding-top: 74px;
	    color: #d21d61;
}
.modal-content .mySlides img {
    max-height: 399px;
    min-height: 399px !important;
    border: 1px solid;
    max-height: 399px !important;
    height: 399px !important;
}
<!-- comment box end-->
.modal-right {
    width: 40% !important;
    float: right !important;
}
.modal-content
{
	 width: 70% !important;    float: left !important;
}
.inputme01 {
    width: 98%;
}
.inputme01 input#fname {
    width: 85%;
    padding: 9px;
    color: #fff;
    border-radius: 5px;
}
.inputme01 button.commentbt01 {
    padding: 8px 10px;
}
.modal {
    top: 110px !important;height: 75% !important; padding-top: 38px !important;     width: 83% !important;margin: 0 auto !important;}
	#video11 {
    top: 112px !important;
    height: 59% !important;
    padding-top: 0px !important;
    width: 50% !important;
    margin: 0 auto !important;
	z-index: 99999;
}	
#video11 .modal-dialog {
    margin: 0px auto;
}
#video11 video {
    height: 308px;
}
.emojiPickerIcon.black {
    height: 32.2969px !important;
    width: 30.2969px !important;
    background-color: rgb(238, 238, 238) !important;
    position: absolute !important;
    left: 191px !important;
}
#feed {
    width: 222px !important;
    height: 36px !important;
    margin-top: -4px !important;
}
button.btlive {
    height: 36px !important;
    width: 67px !important;
    margin-top: 7px;

}
.modal-header {
    padding: 15px;
    border-bottom: 1px solid #e5e5e500;
}
.liveall {
    height: 32px !important;
}
.modal-header .close {
    margin-top: -2px;
    color: #000 !important;
    z-index: 999;
}
.teste {
    width: 100%;
    float: left;
    height: auto;
}
.teste img {
    width: 100%;
}
.likebox.div-section {
    width: 50%;
    float: left;
    display: inline-block;
    padding: 7px;
}
i#popup_thumbs {
    padding-right: 9px;
}
.commentbox.div-section {
    width: 50%;
    float: right;
    display: inline-block;
    padding: 7px;
}
.start_show {
    width: 90%;
    float: left;
}
.start_show input {
    width: 100%;
}
#private_show .modal-header {
    padding: 8px;
    border-bottom: 1px solid #e5e5e500;
    background: #4e4c4c;
    color: #fff;
    text-align: center;
}
#private_show .close {
    float: right;
    font-size: 21px !important;
    font-weight: 700;
    line-height: 1;
    color: #fff !important;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: .9;
}
#private_show .modal-content {
    position: relative;
    background-color: #808080;
}
#private_show .modal-body {
    text-align: center;
        padding: 20px;
  background: transparent;    
      margin-bottom: 23px;    
}
#private_show .join_noww {
    background: #EBBA16;
    border-color: #ebba16;
    color: #fff;
    height: 34px;
    position: relative;
    width: 100px;
    top: 75%;
    left: 39%;
}
#private_show .modal-footer {
    padding: 0px;
    text-align: center;
    border-top: 1px solid #e5e5e5;
    color: #FFF;
}
#private_show .modal-content {
    width: 60% !important;
    float: left !important;
}
.join_out {
    width: 100%;
}
.start_show input , .buy_cred input{
    background: #F1A33E;
    color: #fff;
    height: 40px;
}
.modal-footer a {
    color: #fff;
}
div#remotevideo {
    height: 50%;
    border: 1px solid;
}
.buy_cred {
    z-index: 9999;
    position: absolute;
    right: 0;
}
.main_div {
    width: 91%;
}
.myheading input {
    background: #FB4;
    color: #fff;
    height: 45px;
    width: 170px;
    margin-right: 15px;
}

</style>

  <div class="container">
<div class="row no-gutters">  
  <div class="col-12 col-sm-6 col-md-8"> 
  <div class="livenow">
  <!--iframe width="100%" height="100%" src="https://www.youtube.com/embed/XGSy3_Czz8k"-->
  <!-- <iframe  src="<?php echo base_url('hls/demo/basic-usage.html'); ?>" id="myiframe" width="100%" height="100%" scrolling="no"> 
</iframe> -->
	<video height="100%" width="100%"  id="video" ></video>
  <div class="main_div">
  <div class="start_show"><input type="button" value="Start Private Show " onclick="start_show();">
  
  </div>
  <div class="buy_cred">
    <input type="button" value="Buy Credits" onclick="buy_now_credit();">
  </div>
</div>
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
                      

                    </div>
                    </div>
                    <div class="liveall">
                                <input type="text" id="feed" class="livemessg myclass" name="lname" >
								 <button onclick="myfeed();" type="button" class="btlive">Send</button> 
                            </div>
                          
                </div>
				
            </div>
        <button type="button" class="btn btn-info btn-lg" id="open_chatpop" style="display:none;" data-toggle="modal" data-target="#private_show">Open Modal</button>
<div class="modal fade" id="private_show" role="dialog" style=" z-index: 999999;     background-color: transparent !important;">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up</h4>
        </div>
        <div class="modal-body">
          <p style="color: #fff;">Sign Up now and take a look into Private Chat</p>
            <div class="join_out"><a href="<?php echo base_url('login1'); ?>" class="btn btn-default join_noww" >Join Now</a>
          </div>
      </div>
        <div class="modal-footer">
          <a href="<?php echo base_url('member_signup'); ?>" class="model_footer">Sign Up</a>
        </div>
      </div>
      
    </div>
  </div>
        <script>
		function buy_now_credit(){
			alert('hello');
			var cus_url = '<?php echo base_url('Products/buy_credit'); ?>';
			window.location.href=cus_url;
		}
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
 
 <br><br>
 <div class="container" style="padding-left: 5px; padding-right: 5px;">
  
  <ul class="nav nav-pills modelpills">
    <li class="active modelact"><a data-toggle="pill" href="#home"><?php echo $Model_profile[0]['First_name'];?> </a></li>
    <li><a data-toggle="pill" href="#menu1">Free</a></li>
    <li><a data-toggle="pill" href="#menu2">Preminum</a></li>

  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
	<div id="container" class="clickable clearfix">

  <div class="corner-stamp">
  <div class="team-member">
			       <img src="<?php echo base_url('/uploads/gallery/'.$Model_profile[0]['profile_img']); ?>"  class=" img-responsive img-circle" alt="" style="width:100%;
    height:100%;">
				  </div>
				  
<div class="rating">
  <label>
    <input type="radio" name="rating" value="5" title="5 stars"> 5
  </label>
  <label>
    <input type="radio" name="rating" value="4" title="4 stars"> 4
  </label>
  <label>
    <input type="radio" name="rating" value="3" title="3 stars"> 3
  </label>
  <label>
    <input type="radio" name="rating" value="2" title="2 stars"> 2
  </label>
  <label>
    <input type="radio" name="rating" value="1" title="1 star"> 1
  </label>
</div>
  
  <div class="namemodel">
    <h2><?php echo $Model_profile[0]['First_name'];?> </h2>
  </div>
    <div class="col-md-12 col-sm-12 dp_text">
								    <p><?php echo $Model_profile [0]['Summary'] ?></p>
								  </div>

								  
								  <div class="modeldata">
  <h2 class="modeldata4">Basic Profile </h2>
  <div style="overflow-x:auto;">
  
  <table>
    <tr class="alldatamodel">
      <th>Age</th>
      <th>Gender</th>
      <th>Sexuality</th>
      <th>Country</th>
     
    </tr>
    <tr class="alldatamodel" >
      <td><?php echo $Model_profile [0]['Age'] ?></td>
      <td><?php echo $Model_profile[0]['Gender']?></td>
      <td><?php $sexuality=explode(",",$Model_profile[0]['sexuality']);
		for($i=0;$i<count($sexuality);$i++){
			echo $sexuality[$i].'<br>';
		}
	  ?></td>
      <td><?php echo $Model_profile[0]['Country']?></td>
      
    
     
  
  </table>
</div>
</div>


<div class="modeldata">
<h2 class="modeldata4">Appearence</h2>
 <div style="overflow-x:auto;">

  <table>
    <tr class="alldatamodel">
      <th>Ethnicity</th>
      <th>Hair</th>
      <th>Willingness</th>
     
     
    </tr>
    <tr class="alldatamodel">
      <td>
	  <?
			for($i=0;$i<count($ethnicity);$i++){
					echo $ethnicity[$i]['cat_name'].'<br>';
				} 
				?>
	  </td>
      <td> <?
			for($i=0;$i<count($hair);$i++){
					echo $hair[$i]['cat_name'].'<br>';
				} 
				?></td>
      <td> <?
			for($i=0;$i<count($willingness);$i++){
					echo $willingness[$i]['cat_name'].'<br>';
				} 
				?></td>
 
      
    
     
  
  </table>
 
</div>
</div>
  </div>
  
  
            
		 <?php 
		 $r=1;
		 for($j=count($media);0<$j;$j--){
			 if($media[$j]['type']=='post'){
				
			 ?>
		  <div class="element transition1 metal1 allit   " data-symbol="Hg" data-category="transition1">
<div class="col-md-12 allalla">
		  <span class="statusmodel"><?php echo $media[$j]['product'];?></span>

    </div>
    </div>
		 <?}else  if($media[$j]['type']=='gallery'){?>
		 <div class="element transition1 metal1   " data-symbol="Hg" data-category="transition1">
    <img  src="<?php echo base_url('uploads/gallery/'.$media[$j]['product']); ?>"  alt="Smiley face" height="100%" width="100%" onclick="openModal();currentSlide(<?php echo $r; ?>)" > 
    </div>

		 <?php $r++; }
		  
		 }?>
	</div> 
 </div>
		<!-- popup code -->
		<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content" style="float:left;">
<?php 
for($j=count($media);0<$j;$j--){
	if($media[$j]['type']=='gallery'){
	?>
    <div class="mySlides" item-id="<?php echo $media[$j]['id'];?>">
      <img src="<?php echo base_url('uploads/gallery/'.$media[$j]['product']); ?>" style="width:100%" item-id="<?php echo $media[$j]['id'];?>">
    </div>
	<?php
	}}
	?>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<div class="modal-right" style="float: right; width: 29%;">
    <div class="profile_pic">
<img src="<?php echo base_url('/uploads/gallery/'.$Model_profile[0]['profile_img']); ?>"></div>
    <div class="username">helex</div>
	<div class="likebox01">
                  <div class="likebox div-section">
                     <i onclick="post_like(this)" id="popup_thumbs" class="fa fa-thumbs-up popcomment" item-id=""></i><span class="numberlikes only_like">0 Likes</span>
                  </div>
                  <div class="commentbox div-section"> 
                     <i class="fa fa-comment popcomment1" aria-hidden="true"></i><span class="numberlikes1">5 comments</span>
                  </div>
               </div>
			<div class="commentit01" id="div1">
               <div class="commenton01">
                  <pre class="commentis01" id="testDiv01">
			<!--Comment data Append Here-->
			
			</pre>
               </div>
               <div class="inputme01">
                  <input class="textme01" type="text" id="fname"  placeholder=" Write Comment Here " onkeypress="Item_comment(event,this);" name="fname">
                  <button class=" commentbt01" onclick="Item_comment(event,this);"><i class="fa fa-comment btcomment" aria-hidden="true"></i></button>
               </div>
            </div>
 </div>
</div>
<!-- popup code ends here -->
		
    <div id="menu1" class="tab-pane fade">
    <div class="tz-gallery">
		
        <div class="row">
		<div class="col-md-12"> 
		<?
	  
	   for($i=0;$i<count($media);$i++){
		   if($media[$i]['type']=='video_gallery'){
			  if($media[$i]['free']==0){?>
						
			<div class="col-md-4 another_div"> 			
			
       <div class="premiumlock">
			<!--a class="inline-video-preview js-video-preview" href="" data-video-preview="<?php echo '/video_gallery/'.$media[$i]['product']; ?>" ">
						<img class="b-lazy img-fluid js-video-image b-loaded b-loaded" alt="Jerk To My Armpits" src="<?php echo base_url('/uploads/screenshot/'.$media[$i]['screenshot']); ?>">
						
			 
			     
			</a-->
			<img class="b-lazy img-fluid js-video-image b-loaded b-loaded video" data-video="<?php echo base_url('/uploads/video_gallery/').$media[$i]['product']; ?>" alt="Jerk To My Armpits" src="<?php echo base_url('/uploads/screenshot/'.$media[$i]['screenshot']); ?>" data-toggle="modal" data-target="#video11">
			  <!-- Modal video-->
				  <div class="modal fade" id="video11" role="dialog" >
					<div class="modal-dialog modal-lg">
					  <div class="modal-content" style="width: 77% !important;float: left !important;">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title"></h4>
						</div>
						<div class="modal-body">
						   <video width="100%" height="240" autoplay controls>
							  <source src="<?php echo base_url('/uploads/video_gallery/').$media[$i]['product']; ?>" type="video/mp4">
							  
						  </video>
						</div>
					  </div>
					</div>
				  </div>
				  <!-- Modal video end-->
          </div>
		  
          </div>
			
        
			<?	  
			  }
		   }
	   }
	   ?>
           	
		
		     </div>
            </div>
            </div>
		
    </div>
    <div id="menu2" class="tab-pane fade">
     <div class="tz-gallery">
		
        <div class="row">
		<div class="col-md-12"> 
		<?
	  
	   for($i=0;$i<count($media);$i++){
		   if($media[$i]['type']=='video_gallery'){
			  if($media[$i]['free']==1){?>
			
<div class="col-md-4"> 			
 <div class="lock">
			<i class="fa fa-lock"></i>	<span class="alltextlock">
			Preminum
			</span></div>
			
			
           <div class="premiumlockit">
			<video style="display:none;" width="100%" height="100%" controls  >
				<source src="<?php echo base_url('/uploads/video_gallery/'.$media[$i]['product']); ?>" type="video/mp4">
				<source src="<?php echo base_url('/uploads/video_gallery/'.$media[$i]['product']); ?>" type="video/mp4">
			</video>
			<!--img class="vid-img" width="100%" height="100%" src="<?php echo base_url('/uploads/screenshot/'.$media[$i]['screenshot']); ?>" data-vids="<?php echo $media[$i]['product'];?>"/><br><br-->
			<div class="teste"><img src ="<?php echo base_url('/uploads/screenshot/'.$media[$i]['screenshot']); ?>"></div>
          </div>
          </div>
        
			<?	  
			  }
		   }
		    
	   }
	   ?>
	   <script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

 function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += "active";
  captionText.innerHTML = dots[slideIndex-1].alt;
} 
</script>
	   <script>
	    var imgtag='';
	   $(document).ready(function(){
		  
		 $(".vid-img").click(function(){
			 
				var img= $(this);
				alert(img);
				imgtag=$(this).parent().html();
				img.css('display','none');
				var vidname=img.attr('data-vids');
				var src= 'https://codenomad.org/secret-angels/uploads/video_gallery/'+vidname;
				var vdo = myFunction(src);
				$(this).parent().html(vdo);
				
			
			}) 
			$(".premiumlock").mouseout(function(){
				
			if(imgtag !=''){
				
				$(this).html(imgtag);
				imgtag='';
			}
			}) 
						
		});
	function myFunction(vids) {
    var x = document.createElement("VIDEO");
	x.setAttribute("src",vids);
    x.setAttribute("width", "100%");
    x.setAttribute("height", "100%");
    x.setAttribute("class", "vid-vid");
    x.setAttribute("autoplay", "autoplay");
    return x;
}
	   </script>
           	
		
		     </div>
            </div>
            </div>
        </div>

 

</div>
    </div>
   
  </div>




<script type="text/javascript">
    $(document).ready(function() { 
      $('.myclass').emojiPicker(); 
    });
  </script>

  <?php include("footer.php");?>	
  
  </html> 

 <script type="text/javascript" src="<?php echo base_url("js/lightwsd1.js") ?>"></script>
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
	<script>
    baguetteBox.run('.tz-gallery');
</script>   
<script>
$('.rating input').change(function () {
  var $radio = $(this);
  $('.rating .selected').removeClass('selected');
  $radio.closest('label').addClass('selected');
});
</script>
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script>
        if(Hls.isSupported()) {
          var video = document.getElementById('video');
          var hls = new Hls();
          hls.loadSource('https://ec2-13-127-173-191.ap-south-1.compute.amazonaws.com:8080/angel/<?php echo $Model_profile[0]['video_channel'];?>.m3u8');  
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
        setInterval(function(){
        var myvideo = document.getElementById('video');
        console.log(Math.floor(myvideo.currentTime / 60)); 
        },1000);
      </script>
<script>
	var broadcast_timer=0;
	var broad = setInterval(function(){
    broadcast_timer++
		/*var video = document.getElementById('video');
		console.log('currentTime ',video.currentTime);
		*/
    if(broadcast_timer>90)
		{
      clearInterval(broad);
			$('.livenow').html('<div class="myheading"><input type="button" onclick="continue_brodcast();" value="start Private chat"><input type="button" value="Buy Credits" onclick="buy_credits();"></div>');

		}
		
	},1000);
function buy_credits(){
  window.location.href='<?php echo base_url('Products/buy_credit'); ?>';
}
function continue_brodcast(){ 
clearInterval(broad); 
  //$('.livenow').html('<iframe   src="<?php echo base_url('hls/demo/basic-usage.html'); ?>" id="myiframe" width="100%" height="100%"scrolling="no" style="height:900px; width:900px;"></iframe>');
  chat.send({
                name: '<?php echo $id[0]['username']; ?>', 
                message: 'private_chat_init?'+'<?php  echo $userid; ?>' 
            }); 
  var url = '<?php echo  base_url('video_call/'.$Model_profile[0]['id']); ?>';
  $('.livenow').html('<iframe src="'+url+'" height="100%" width="100%"></iframe>');
  
 // window.location.href='<?php echo  base_url('video_call/'.$Model_profile[0]['id']); ?>';
  setInterval(function(){
	  console.log('hello');
    $.ajax({
      url : '<?php echo base_url("deduct_broadcast_credits"); ?>',
      type : 'post',
      data : '',
      success : function(res){
		  console.log('deduction =',res);
        if(res=="you don't have sufficient credits")
        {
          alert(res);
          window.location.href='<?php echo base_url(); ?>';
        }
        else
        {
          var json = JSON.parse(res);
          $('#mycredits').html(json.credit_left);
        }
      }
    })
  },60000);
}
function start_show(){
  var user_id = '<?php echo $_SESSION['userid']; ?>';
  
  if(!user_id)
  {
    $('#open_chatpop').trigger('click');
  }
  else
  {
    continue_brodcast();
  }
}
$(window).load(function() {
 	  setTimeout(function(){ 
var video = document.getElementById("video");
if ( video.readyState == 0 ) {
    var base_url = '<?php echo base_url(); ?>';
     //$('#video').attr('poster','https://euonthemove.eu/wp-content/uploads/2017/05/no-video.jpg');
    $('.livenow').html('<img style="height:98%; width:100%;" src="'+base_url+'uploads/no-video.jpg">');
    clearInterval(broad);
}   
 }, 2000); 
      
    var isWebRTCSupported = navigator.getUserMedia ||
        navigator.webkitGetUserMedia ||
        navigator.mozGetUserMedia ||
        navigator.msGetUserMedia ||
        window.RTCPeerConnection;
        if (isWebRTCSupported) {
            alert('supported webrtc');
        }
        else {
            console.log('Your browser does not support WebRTC');
            $('.livenow').html('<h1>Your browser does not support WebRTC Please update the browser</h1>');
        }
       
});


</script>
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script--> 