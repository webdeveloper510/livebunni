
<?php
/* foreach($id as $idss){
	$username=$idss['username'];
} */

//ini_set('max_execution_time', 3000);
  // print_r($user_profile);
   $img = $user_profile[0]['profile_img'];
	
/* echo "<pre>";
	print_r($user_profile);
	echo "</pre>"; */


   ?> 
<?php  require_once("memberheader.php");?>
   <link rel="stylesheet" href="<?php echo base_url('css/style3.css'); ?>" media="all" type="text/css"/>

      	<link rel="stylesheet" href="<?php echo base_url('css/star-rating.css'); ?>" media="all" type="text/css"/>
   <link rel="stylesheet" href="<?php echo base_url('css/landingpage.css'); ?>"/>
    <!--script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script-->
  <script src="<?php echo base_url('js/star-rating.js'); ?>" type="text/javascript"></script>
 


      <style>
	  body {
    background: #ffff;
	  }
 .col-md-4.slidetabpop01 {
    position: relative;
    margin-left: 0px;
    margin-right: 0px;
}


.imagepopup01 {
    height: 78px;
    width: 20%;
    position: relative;
    margin-left: -10%;
    margin-top: -3%;
}


span.namepop01 {
    position: absolute;
    top: 30%;
    left: 115%;
    font-weight: bold;
    font-size: 22PX;
}

.col-md-12.likebox01 {
    position: relative;
    margin-top: 12%;
    margin-left: -19%;
}

.popcomment {
    font-size: 19px!important;
    cursor: pointer !important;
    user-select: none !important;
    color: white !important;
    margin-left: 43px !important;
    position: absolute !important;
    top: -29px !important;
}

.numberlikes {
    margin-left: 69px;
    font-weight: bold;
    font-size: 12px;
    position: absolute;
    margin-top: -25px;
}
.popclose {
    font-size: 22px;
    color: #ffff!important;
    position: absolute;
    left: 87%;
	top:4px!important;
    cursor: pointer;
}
.popclose:hover {
    color: #a11835!important;
    background: white;
}
.popcomment1 {
    font-size: 19px!important;
    cursor: pointer;
    user-select: none;
    color: white;
    margin-left: 0px;
    position: absolute;
    top: -29px;
}
.popcomment:hover {
    color: darkblue!important;
}
.numberlikes1 {
    margin-left: 30px;
    font-weight: bold;
    font-size: 12px;
    position: absolute;
    margin-top: -25px;
}

.col-md-12.commentit01 {
    margin-left: -31px;
}

.commenton01 {
    position: relative;
    width: 73%;
    /* left: -5%; */
    /* height: 205px; */
}

pre.commentis01 {
    height: 265px;
}

input.textme01 {
    width: 238px;
    border-radius: 22px;
    height: 30px;
}

button.commentbt01 {
    width: 36px;
    border-radius: 14px;
    /* padding: 2px 6px 2px 7px; */
    height: 30px;
    margin-top: 3px;
}


	.sliderdiv {
        background-color: #a11835!important; 
    height: 477px;
    width: 112%;
	 box-shadow: 0 5px 14px 0 rgba(0, 0, 0, 1), 0 15px 44px 0 rgba(0, 0, 0, 1);
}
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
.commentit {
    position: relative;
    top: -36px;
    height: 603px;
}

.modelcamera {
    position: absolute;
    top: 65%;
    left: 20%;
	cursor:pointer;
}
.editimagepopup {
    width: 622px;
    min-height: 343px;
    box-shadow: 0 5px 14px 0 rgba(0, 0, 0, 1), 0 15px 44px 0 rgba(0, 0, 0, 1);
    background-color: #a11835;
}


.modelpicedit {
    height: 180px;
    width: 334px;
    margin-top: 34px;
    margin-left: 109px;
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
.sliderdiv {
        background-color: #a11835!important; 
    height: 477px;
    width: 112%;
	 box-shadow: 0 5px 14px 0 rgba(0, 0, 0, 1), 0 15px 44px 0 rgba(0, 0, 0, 1);
}
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.popupusername {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.loginpopup {
    display: none !important; /* Hidden by default */
    position: fixed !important; /* Stay in place */
    z-index: 1 !important; /* Sit on top */
    left: 0 !important;
    top: 0 !important;
    width: 100% !important; /* Full width */
   /*  height: 100%; */  /* Full height */
    overflow: auto !important; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.loginpopit {
    background-color: #fefefe!important;
    margin: 5% auto 15% auto !important;
    border: 1px solid #888!important;
    width: 29%!important;
       height: 439px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px !important;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}



.fileUpload.videoup {
    height: 139px;
    /* background-color: white; */
    width: 350px;
    /* border-width: 5px; */
    /* border-style: dotted; */
    border-width: 2px;
    border-style: dotted;
}


i.fa.fa-plus.addon {
    color: #ffffff;
    font-size: 25px;
    position: relative;
    margin-left: 155px;
    margin-top: 51px;
}
	.videoload {
    margin-top: 29px;
    margin-left: 104px;
    /* height: 190px; */
    height: 100%;
    width: 100%;
    /* opacity: 0.5; */
}
.videobtpop {
    position: relative;
    margin-top: 2%;
    left: 78%;
} 
.close-button {
    position: absolute;
    right: -20px;
    top: -20px;
}
.delimg {
    position: absolute;
    background: red;
    color: white;
    top: -1px !important;
    right: 0px;
	cursor:pointer;
}
.loader {
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #a11835;
    width: 80px;
    height: 80px;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
    margin-left: 40%;
	
	display:none;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
#videofiles{
	display:none;
}
.appear{color:white;}


.commentiss {
    background-color: #ffffff;
    overflow: auto;
    border: none;
    height: 47%;
    overflow-x: hidden;
    border: 1px solid white;
}
videoup2{
	    height: 100%;
    /* background-color: white; */
    width: 447px;
    /* border-width: 5px; */
    /* border-style: dotted; */
    border-width: 2px;
    border-style: dotted;
}
// #progress-div,#progress-div3{
	// background-color: mediumseagreen;
// }
    #progress-div {
    padding: 5px 0px;
    margin: 66px 0px;
    border-radius: 4px;
    text-align: center;
    background-color: forestgreen;
    width: 0px;
}
       
       #targetLayer {
           width: 100%;
           text-align: center;
       }
     #progress-bar1 {
		padding: 5px 0px;
		margin: 66px 0px;
		border-radius: 4px;
		text-align: center;
		width: 0px; 

       }

       #targetLayer1 {
           width: 100%;
           text-align: center;
       }
  .modelgender .col-md-3 {
    min-height: 170px !important;
    height: auto;
}    
#waterfall li {
    /* border: 1px solid black; */
    width: 50%;
    float: left;
}
span.w3-button.w3-display-topright.xclass {
    Z-INDEX: 99;
} 	  
.col-md-4.gender_model {
    min-height: 200px;
}
.col-md-3.gender_model {
    min-height: 150px;
} 
</style>
<body>
	<div class="modelpage">
  <div class="container model-profile">

    
    
    
    
    
    
   
    
    
    <div class="clearfix"></div>
    <div class="row1 text-center">
	
      <div class="col-sm-5 model_profile"> 
		<div class="col-md-12">
		 <i class="fa fa-camera modelcamera"></i><img src="<?php echo base_url('/uploads/gallery/'.$user_profile[0]['profile_img']); ?>" class="img-circle person" alt="Random Name" width="255" height="255">
			 
		</div>
	

	
		<div class="onlinebt">
<label class="switch">
  <input id="buttonThree" type="checkbox" <?php echo ($user_profile[0]['Online']==1 ? 'checked' : '');?>>
  <span class="slider round" id="onoff06"></span>
</label>

</div>
		
				
		<!--div class=" buttonmodel">
			<form method="post" action="<?php echo base_url('/Secret_controller/uploadprofile');?>" enctype="multipart/form-data">
                <div class="fileUpload btn btn-warning">
                    <span>Edit Image</span>
                    <input type="file" name="profile" class="upload" />
                </div>
				<div class="fileUpload btn btn-warning">
                    <span>Upload</span>
                    <input type="submit" class="upload" />
                </div>
                        
						
            </form>
				
		</div-->
		
		<div class="starcheck">
			
				<input type="text" class="rating rating-loading" value="0" data-size="sm" title="">
			<input type="text" class="kv-gly-star rating-loading" value="0" dir="rtl" data-size="sm" title="">

		
		</div>
		  <div class="editit">
		<i class="fa fa-pencil"   data-toggle="tooltip" title="edit"></i></div>
		<div class="okit">
		<i class="fa fa-check"  data-toggle="tooltip" title="save"></i></div>
		<div class="model_name">
			<h5><?php echo $user_profile[0]['First_name']." ".$user_profile[0]['Last_name'];?></h5>
		</div>
		<!-- context -->
		<textarea id="field" class="textall"  onkeyup="countChar(this)" name="about" disabled="disabled"><?php echo $user_profile[0]['Summary']?> </textarea>
			
			<div id="charNum" class="letters">Remaining Words : 350 </div>
							 
	
		<!--  context end-->
		<div class="col-md-12 modelgender">
		
		<h2 class="appear">Basic Profile</h2>
			<div class="col-md-3 gender_model">
				<div class="col-md-3 col-sm-3 gender"><h4 style="color: #fff";>Gender</h4><h5 style="color: yellow";><?php echo $user_profile[0]['Gender']?></h5></div>
			</div>
			<div class="col-md-3 gender_model">
				<div class="col-md-3 col-sm-3 Name"><h4 style="color: #fff";>Age</h4><h5 style="color: yellow";><?php echo $user_profile [0]['Age'] ?></h5></div>
			</div>
			<div class="col-md-3 gender_model">
				<div class="col-md-3 col-sm-3 big"><h4 style="color: #fff";>Sexuality</h4><h5 style="color: yellow";><?php $sexuality=explode(",",$user_profile [0]['sexuality']);
		for($i=0;$i<count($sexuality);$i++){
			echo $sexuality[$i].'<br>';
		}
	  ?></h5></div>
			</div>
				<div class="col-md-3 gender_model">
				<div class="col-md-3 col-sm-3 big"><h4 style="color: #fff";>Country</h4><h5 style="color: yellow";><?php echo $user_profile [0]['Country'] ?></h5></div>
			</div>
				
				    
			
		</div>
			<div class="col-md-12 modelgender">
		<h2 class="appear">Appearance</h2>
			<div class="col-md-4 gender_model">
				<div class="col-md-3 col-sm-3 gender"><h4 style="color: #fff";>Ethnicity</h4><h5 style="color: yellow";><?
			for($i=0;$i<count($ethnicity);$i++){
					echo $ethnicity[$i]['cat_name'].'<br>';
				} 
				?></h5></div>
			</div>
			<div class="col-md-4 gender_model">
				<div class="col-md-3 col-sm-3 Name"><h4 style="color: #fff";>Hair</h4><h5 style="color: yellow";><?
			for($i=0;$i<count($hair);$i++){
					echo $hair[$i]['cat_name'].'<br>';
				} 
				?></h5></div>
			</div>
			<div class="col-md-4 gender_model">
				<div class="col-md-3 col-sm-3 big"><h4 style="color: #fff";>Willingness</h4><h5 style="color: yellow";><?
			for($i=0;$i<count($willingness);$i++){
					echo $willingness[$i]['cat_name'].'<br>';
				} 
				?></h5></div>
			</div>
				
				
				    
			
		</div>

      </div>

	  

	  
	  
	  
	  <!-------------------------- -TABS Content---------------------------------->
      <div class="col-sm-7 scrolltext">
      	<div class="col-sm-12">
			
				<ul class="nav nav-tabs tabsall1">
					<li class="active"><a data-toggle="tab" href="#home">Timeline</a></li>
					<li><a data-toggle="tab" href="#menu1">About</a></li>
					<li><a data-toggle="tab" href="#menu2"> Gallery</a></li>
					<li><a data-toggle="tab" href="#menu3">Video</a></li>
				
					
					
				</ul>
			
			  <div class="tab-content">
			  <!----- --------------- TAB ONE-------->
			  
				<div id="home" class="tab-pane fade in active" style="">
				
                     <div class="panel panel-default col-md-12">
                        <div class="panel-body">
                           <div class="status-upload nopaddingbtm">

                                 <textarea class="form-control"id="postcontent" onkeyup="countChar(this)" name="post" placeholder="What are you doing right now?"></textarea>
                                 <br>
                                 <button type="submit" id="sharepost" class="btn btn-success pull-right modelshare"> Share</button>

                           </div>
                           <!-- Status Upload  --> 
                        </div>
						
                     </div>
					 <?php
					 
					 for($i=0;$i<count($post);$i++){?>
					 <div class="panel panel-default col-md-12">
                        <div class="panel-body">
                           <div class="pull-left">
                              <a href="#">
                              <img class="media-object img-circle" src="<?php echo base_url('/uploads/gallery/'.$user_profile[0]['profile_img']); ?>" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                              </a>
                           </div>
                           <h4> <i><i class="fa fa-clock-o" aria-hidden="true"></i> 
                              <small><?php echo time_elapsed_string($post[$i]['Submitted_date'], false);?></small></i></a>
                           </h4>
                          
                           <hr>
                           <div class="post-content"  user-id="<?php echo $post[$i]['User_id'];?>" post-id="<?php echo $post[$i]['Post_id'];?>">
                              <p><?php echo $post[$i]['Post_data'];?></p>
                           </div>
                          
                           <hr>
										
						   <div class="btn-show-cmt"><?echo (count($post[$i]['comment'][0])>0?'Hide Comment':'')?></div>
						   <div class="div-comment-holder">
						  
						 
						   <? 
						 
						   for($j=count($post[$i]['comment'][0])-1;$j>=0;$j--){
							    
							   ?>
							
							<div class="commenton"><pre class="commentiss" id="slimscrollbar"><div class="modelimageit"><img src="../uploads/gallery/<?  echo $post[$i]['comment'][0][$j]['profile_img'];?>" class="img-responsive img-circle" style="width:100%; height:100%;"></div>  <span class="textcomment"><? echo $post[$i]['comment'][0][$j]['comment'];?></span></pre></div>
							  <?
						   }
						    
						   
						   ?>
						   </div>
                           <div class="media">
                              <div class="pull-left">
                                 <a href="#">
                                 <img class="media-object img-circle" src="<?php echo base_url('/uploads/gallery/'.$user_profile[0]['profile_img']); ?>" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
                                 </a>
                              </div>
                              <div class="media-body">
                                 <textarea class="form-control" id="reply_comment" onkeypress="post_comment(event,this);" user-id="<?php echo $post[$i]['User_id'];?>" post-id="<?php echo $post[$i]['Post_id'];?>" rows="1" placeholder="Comment"></textarea>
                              </div> 
                           </div>
						 
                        </div>
                     </div>
					 <?php }?>
					 
					
					 

				</div>
			<!-- --------------       TAB TWO  ------>
    <div id="menu1" class="tab-pane fade model_detail">
    
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
	  
	  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
	  
	  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
    </div>
	
	
	<!-- --------------       TAB three  ------>
	
    <div id="menu2" class="tab-pane fade">
        <div class=" text-center text-lg-left">
                     <form method="post" action="<?php echo base_url('/upload_gallery');?>" enctype="multipart/form-data">
                        <div class="fileUpload btn btn-warning colorbt">
                           <span>Choose File</span>
                           <input Type="file" name="gallery"  class="upload" id="id201" accept="image/x-png,image/gif,image/jpeg" />
                        </div>
                     </form>
					
                  </div> 
				 
				  <div class="col-md-12 gallerymodel">
   



					 
						  <div id="Center">
        <ul id="waterfall">
		<!--li></li-->
		
		
		</ul>
		
		
    </div>
	<div id='guru'>
	</div>
                  
                     
                     <!--div class="row">
                        <?php  
                           for($j=0;$j<count($gallery);$j++)
                           {
                           	
                           ?>
                        
                          <div class="col-md-3">
                            <div class="thumbnail ">
                              <div class="content">
                          <a href="#" class="corner-link"></a>
                          <div class="corner-text-wrapper">
                              <div class="corner-text">
                                <span><strong>PREMIUM!</strong></span>
                            	</div>
                          </div>
                        </div>
                                <img src="<?php echo base_url('/uploads/gallery/'.$gallery[$j]['Images']); ?>" class="img_gallery" alt="Lights" style="width:100%;height: 197px;">
                               
                              </a>
                            </div>
                          </div>
                        <?php } ?>
                        </div-->
                  </div>
				    
               </div>
         
   
    <div id="menu3" class="tab-pane fade">
	
			<div class="col-md-4">
				
				  <div class="fileUpload btn btn-warning colorbt">
                           <span>Choose File</span>
                           <input type="file"  name="video_gallery" class="upload" id="id203" accept="video/*" />
                        </div>
                        </div>
                      
                
			<div class="col-md-12">
					  
	<?php
			
                        for($j=0;$j<count($video_gallery);$j++){
							
                       ?>
						
								
						
					<div class="col-lg-4 col-md-4 col-xs-6 modelvideo" >
					 <? if($video_gallery[$j]['free']==1){
                        ?><div class="content">                       
                                <div class="corner-text-wrapper premium">
                                   <div class="corner-text tag">
                                      <span><strong>PREMIUM!</strong></span>
                                   </div>
                                </div>
                                </div>
								<?}?>
						<i class="fa fa-window-close closevideo" onclick="delete_vids(this);" data-vids-id="<?php echo $video_gallery[$j]['id']; ?>" data-vids="<?php echo $video_gallery[$j]['Videos']; ?>" aria-hidden="true title="delete"></i>
                          
						<video  width="100%" height="100%" onclick="playmyvideo(this);" id="display_vid">
						<source src="<?php echo base_url('/uploads/video_gallery/'.$video_gallery[$j]['Videos']); ?>" type="video/mp4">
						
						</video>
                     
					</div> 
                  
                     <?php } ?>
                    </div>
                    </div>
					
					 <div id="menu4" class="tab-pane fade">
    
    </div>
	 <div id="menu5" class="tab-pane fade">
    
    </div>
    </div>
  </div>
</div> 
</div> 
	<div class="w3-container">

 

  <div id="id01" class="w3-modal backgroundindex">
    <div class="w3-modal-content animate editimagepopup">
      <header class="w3-container  w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright xclass">&times;</span>

      </header>
      <div class="w3-container">
         <div class="modelpicedit">
	  <img class="img-circle" id="blah" src="<?php echo base_url('/uploads/gallery/'.$user_profile[0]['profile_img']); ?>" width="100%" height="100%">
     
      </div>
	 <form method="post" action="<?php echo base_url('/uploadprofile');?>" enctype="multipart/form-data"></div>
                <div class="fileUpload btn btn-warning modeleditpopup">
                    <span>Browse </span>
                    <input type="file" name="profile" id="imgInp" class="upload" />
                </div>
				<div class="fileUpload btn btn-warning modeleditpopup">
                    <span>Upload</span>
                    <input type="submit" class="upload" />
                </div>
                        
						
            </form>
    </div>
	
  </div>
  
</div>	



<!--------------------------- image upload popup -------------->
 
 	<div class="w3-container">

 

  <div id="id02" class="w3-modal backgroundindex">
    <div class="w3-modal-content animate editimagepopup">
      <header class="w3-container  w3-teal"> 
        <span onclick="document.getElementById('id02').style.display='none'" 
        class="w3-button w3-display-topright xclass">&times;</span>

      </header>
      <div class="w3-container">
	   
<div id="appenddata" class="row"> 
 
	 
		<div id="fixedcolumn" class="column popmodelup">
			<div class="gallarypopup">
				<div class="fileUpload checkingup">
					<div class="addimage disimg1">
						<i class="fa fa-plus addit" aria-hidden="true">
						<input  type="file"  name="profile" id="imgInp22" class="upload" accept="image/x-png,image/gif,image/jpeg"/></i>
					</div>
                </div>
			</div>
		</div>
		
   </div>

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
var total = 0;
var inputLocalFont = document.getElementById("id201");
inputLocalFont.addEventListener("change", previewImages, false);

var inputLocalFont = document.getElementById("imgInp22");
inputLocalFont.addEventListener("change", previewImages, false); //bind the function to the input

function previewImages(input) {


    var input = this;
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        var file = input.files[0];
        var fileType = file["type"];
        var filesize = file["size"];
        var ValidImageTypes = ["image/jpeg", "image/png", "image/jpg"];
        if ($.inArray(fileType, ValidImageTypes) < 0) {

            alert("Please select only jpeg,png image.");
            return false;
        } else if (filesize >= 3145728) {
            alert('Your file size is large.');
            return false;
        } else {

            reader.onload = function(e) {
                if (total < 4) {

                    // for the next line to work, you need something class="preview-area" in your html
                    $('#fixedcolumn').before('<div  class="column"><div class="gallarypopup"><i class="fa fa-window-close closeimage" onclick="remove_div(this);" ></i><div class="fileUpload checkingup"><div class="addimage disimg1"><img class="image122" id="images01' + total + '"src="' + e.target.result + '"  width="100%" height="100%"></div></div></div></div>');
                    total == 3 ? $('#fixedcolumn').css('display', 'none') : '';
                }
                total++;
            };

            reader.readAsDataURL(input.files[0]);
        }



    }
}

// Function For Remove image ......
function remove_div(e) {

    $(e).parent().parent().remove();
    $('#fixedcolumn').css('display', 'block');
    total--;
}

// Function for Save in data base And Upload image on server...............
$(document).ready(function() {
    $('#save_gallery').click(function() {
        var paths = [];
        $('img[id^="images01"]').each(function() {
            var p = $(this).attr('src');
            paths.push(p);
        });
		//$("#loadit").css('display', 'block');
        jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>" + "upload_gallery",
            data: {
                paths: paths
            },
		    processData:true,
    xhr: function(){
        //upload Progress
        var xhr = $.ajaxSettings.xhr();
        if (xhr.upload) {
            xhr.upload.addEventListener('progress', function(event) {
                var percent = 0;
                var position = event.loaded || event.position;
                var total = event.total;
                if (event.lengthComputable) {
                    percent = Math.ceil(position / total * 100);
                }
                //update progressbar
				console.log(percent);
                $("#progress-div").css("width", + percent +"%");
                $("#progress-div").text(percent +"%");
            }, true);
        }
        return xhr;
    },
            success: function(res) {
                res == 1 ? location.reload(true) : '';
            }
        });
    });
});

</script> 
	  
	  
	 <!--form method="post" action="<?php echo base_url('/uploadprofile');?>" enctype="multipart/form-data"></div-->
                <!--div class="fileUpload btn btn-warning modeleditpopup">
                    <span>Browse </span>
                    <input type="file" name="profile" id="imgInp" class="upload" />
                </div-->
				<div class="fileUpload btn btn-warning videobtpop imageitpopup">
                    <span>Post</span>
                    <input id="save_gallery"type="submit" class="upload" />
                </div>
                    <div class="loader" id="loadit"></div>  
					<div id="progress-div"><div id="progress-bar"></div></div>
					<div id="targetLayer"></div>
						
            
    </div>
	
  </div>
  
</div>	
</div>	
<!----------------------------end of popup-------------------------------------->

<!---------------------------video upload popup--------------------------------->

<div class="w3-container">

 

  <div id="id03" class="backgroundindex">
    <div class="w3-modal-content animate editimagepopup">
      <header class="w3-container  w3-teal"> 
        <span onclick="document.getElementById('id03').style.display='none'" 
        class="w3-button w3-display-topright xclass">&times;</span>

      </header>
      <div class="w3-container">
	  <!---<?php echo base_url('/upload_video');?>-->
	  <form method="post" id="uploadForm" action="<?php echo base_url('/upload_video');?>" enctype="multipart/form-data" id="multipart_form">
<div id="video_row" class="row"> 
 
	 
	 <div id="video_column" class="column">
   

			<div class="videoload">
				<div class="fileUpload videoup">
					<div class="addimage disimg1">
						<i class="fa fa-plus addon" aria-hidden="true">
						<input   type="file"  name="video_gallery" id="video22" class="upload" accept="video/*"/></i>
						
					</div>
                </div>
			</div> 
        </div>
		<div id="video_column2" class="column" style="display:none;">
   
 
				<div class="videoload">
				<div class="fileUpload videoup">
				
					<div class="addimage disimg1">
					
						<video id="video" width="375" height="210" autoplay>
							<source id="vid_preview" src="#" type="video/mp4">
						</video>
						<input type="hidden" name="video-img[]" id="video-img" value="">						
					</div>
                </div>
			</div>
        </div> 
		<div id = "videofiles" >
		
		</div>

      </div>

	    <div class="checkboxin">   
            <strong>Userview:</strong> &nbsp;  
			<input type="radio" class="radiotext" name="userview" class="user" value="1" checked> <b>Premium</b>
           &nbsp;&nbsp;  <input type="radio" class="radiotext" name="userview" value="0"> <b>Free</b>
            </div>
				<div class="fileUpload btn btn-warning videobtpop colorbt" id="openload">
                    <span>Post</span>
                    <input id="capture" type="submit" class="upload" />
					
                </div>
				 <div id="progress-div1">
                   <div id="progress-bar1"></div>
               </div>
               <div id="targetLayer"></div>
                  <div class="loader" id="loadit02"></div> 
					<div id="progress-div3" ><div id="progress-bar3"></div></div>				  
					<div id="output"></div>	
					 <!--  -----progress bar --->
					
            </form>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.0/parsley.min.js"></script> 

  
   <script src="https://malsup.github.com/jquery.form.js"></script>	 
	 <script>
	 
(function() {
    "use strict";
 
    var video, $output;
    var scale = 0.25;
 
    var initialize = function() {
        $output = $("#output");
        video = $("#video").get(0);
        $("#capture").click(captureImage);                
    };
 
    var captureImage = function() {
        var canvas = document.createElement("canvas");
        canvas.width = video.videoWidth * scale;
        canvas.height = video.videoHeight * scale;
        canvas.getContext('2d')
              .drawImage(video, 0, 0, canvas.width, canvas.height);
 
        
		var img = document.getElementById("video-img");
        img.value = canvas.toDataURL();
        
    };
 
    $(initialize);            
 
}());
//####################################################################
		
		  $("#uploadForm").submit(function(event) {
				
		   event.preventDefault();
		   
		
           $('#progress-div1').css('display', 'block');
		   
		    jQuery.ajax({
            type: "POST",  
            url: "<?php echo base_url(); ?>" + "upload_video",
            data:new FormData(this),
		    contentType: false,
			processData:false,
    xhr: function(){
        //upload Progress 
        var xhr = $.ajaxSettings.xhr();
        if (xhr.upload) {
            xhr.upload.addEventListener('progress', function(event) {
                var percent = 0;
                var position = event.loaded || event.position;
                var total = event.total;
                if (event.lengthComputable) {
                    percent = Math.ceil(position / total * 100);
                }
                //update progressbar
			
				$("#progress-bar1").width(percent + '%');
                   $("#progress-bar1").html('<div id="progress-status" style="background-color:green;">' + percent + ' %</div>')	
            }, true);
        }
        return xhr;
    },
            success: function(res) {
            alert(res+'asdf');
                res == 1 ? location.reload(true) : '';
            }
        });
       });
	  
		$(document).on("change", "#id203", function(evt) {
		    $("#video_column").css('display', 'none');
		    $("#video_column2").css('display', 'block');
		    var $source = $('#vid_preview');

		    $source[0].src = URL.createObjectURL(this.files[0]);
		    $source.parent()[0].load();
		    var $this = $(this),
		        $clone = $this.clone();
		    $('#videofiles').html('');
		    $('#videofiles').append($clone);
		});

		$(document).on("change", "#video22", function(evt) {
		    $("#video_column").css('display', 'none');
		    $("#video_column2").css('display', 'block');
		    var $source = $('#vid_preview');

		    $source[0].src = URL.createObjectURL(this.files[0]);
		    $source.parent()[0].load();
		    var $this = $(this),
		        $clone = $this.clone();
		    $('#videofiles').html('');
		    $('#videofiles').append($clone);
		});

		function remove_vids(e) {
		    alert('close');
		} 
	 </script>
    </div>
	
  </div>
  
</div>
   
</div>	

 	
<!-----------------------------------------end video popup------------------------------------->



<!--------------------videoplay popup---->
<div class="w3-container">

 

  <div id="videoplay07" class="backgroundindex">
    <div class="w3-modal-content animate editimagepopup">
      <header class="w3-container  w3-teal"> 
        <span onclick="close07();" 
        class="w3-button w3-display-topright xclass">&times;</span>

      </header>
      <div class="w3-container">
<div class="fileUpload videoup2 playvideocls">
				
                </div>

    </div>
	
  </div>
  
</div>
   
</div>


<!---------end of popup---->






<!------------ slider popup---------------------------->

<div id="popupslide01" class="popup">
   <!-- Modal content -->  
   <div class="modal-content animate popup-content">
 
     
      <div class="col-md-12 sliderdiv">
         <i class="fa fa-times closetab" data-toggle="tooltip" title="Close" aria-hidden="true"></i>
		   <i class="fa fa-close popclose" ></i>
         <div class="col-md-8 imageslide">
            <div class="w3-content w3-display-container ">
			<!--Loop Start code-->
			
<?php  
	
	for($j=count($gallery)-1;0<$j;$j--)
	{
		
		?>
			 
			<div class="mySlides modelsimages" item-id="<?php echo $gallery[$j]['id'];?>" style="width:1http:00%; background-image: url(<?php echo "'../uploads/gallery/".$gallery[$j]['Images']."'";?>); background-size: contain;
                  background-repeat: no-repeat;
                  background-position: center; 
                  background-color:white"></div>

				
	<?php	}	?> 
               
				  <!--Loop End-->
               <button class="w3-button w3-black w3-display-left rightarrow" onclick="plusSlides(-1)">&#10094;</button>
               <button class="w3-button w3-black w3-display-right leftarrow" onclick="plusSlides(1)">&#10095;</button>
            </div>
         </div>
         <!---=------------   right slider   -->
                 <div class="col-md-4 slidetabpop01">
            <div class="col-md-12">
               <div class="imagepopup01">
                  <img src="<?php echo base_url('./uploads/gallery/'.$img); ?>" class=" img-responsive img-circle " alt="" style="width:100%;height:100%;">
                  <span class="namepop01">helex</span>
               </div>
               <div class="col-md-12 likebox01">
                  <div class="col-md-6">
                     <i onclick="post_like(this)" id="popup_thumbs" class="fa fa-thumbs-up popcomment1"></i><span class="numberlikes only_like"></span>
                  </div>
                  <div class="col-md-6"> 
                     <i class="fa fa-comment popcomment1" aria-hidden="true"></i><span class="numberlikes1">10 comments</span>
                  </div>
               </div>
            </div>
            <div class="col-md-12 commentit01">
               <div class="commenton01">
                  <pre class="commentis01" id="testDiv01">
			<!--Comment data Append Here-->
			
			</pre>
               </div>
               <div class="inputme01">
                  <input class="textme01" type="text" id="fname" onkeypress="Item_comment(event,this);" placeholder=" Write Comment Here " name="fname">
                  <button class=" commentbt01" ><i class="fa fa-comment btcomment" onclick="Item_comment(event,this);" aria-hidden="true"></i></button>
               </div>
            </div>
         </div>
         <!-------------------right slider close--  -->
      </div>
   </div>
</div>
<!------------------save text popup----------------->



<!-- The Modal -->
<div id="id07" class=" lettermodal">
	<div class=" textletters ">
  
    <div class="heading">
    <h2 class="headingtext">Do You Want to Save </h2></div>
     <div class="letterbutton">
     <button type="button" id="idcancel" class="btn">Cancel</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
   <button type="button" id="idsave" btn-action="save" class="btn btn-primary popup-btn">Save</button>
       </div>
  </div>
  </div>
  
  <!-----------------------end save pop up-------------->

  <div class="alert alert-success global is-hidden abs"></div>
<div class="alert alert-danger global is-hidden abs"></div>

		 <?php include("footer.php");?> 
		
</body>
<!--script src="<?php //echo base_url('js/compile.js'); ?>"></script-->
<script>
function close07(){
	$('#videoplay07').css('display', 'none');
	
	$('.playvideocls').html('');
	
}
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

 
 $("#id022").click(function(){

	$("#popupslide01").css("display","block");	
});
/* $("#display_vid").click(function(){ 
	var a =$(this).children().attr('src');alert(a);
	$("#idvideo").css("display","block");
$('#playvideo').html(a);	
}) */

        
  
	
	
   $('#del').click(function(){
	   //alert('dfgdgd');
	 var arra=[];
	    $('input[name="checks[]"]').each(function() {
			if($(this).is(':checked')){
				arra.push($(this).val());
			}
			 
		 
    }); 
		 $.ajax({
			url : '<?php echo base_url('/delete_videos');?>',
			type : 'post',
			data : {arra : arra},
			success : function (result){
				
				window.location.reload();
				
				console.log(result);
				return false;
			} 
		})
   }); 
   
      $('#buttonThree').click(function(){
      	if($('#buttonThree').is(':checked'))
      	{
      		online = 1; 
      	}
      	else
      	{
      		online = 0;
      	}
      	var uid = '<?php echo $_SESSION['userid'];?>';
      	$.ajax({
      		url: "<?php echo base_url('/switch_online');?>",
      		data : { online:online, uid:uid },
      		type:'post',
      		success: function(data){ 
			//alert(data);return false;
      		if(data=="You are now online")
      		{  
		
      			$('.slider round-input:checked ~ .buttonThree-label').css('background','#00E100 !important');
      			//$('#online_p').html("Off");
      		}  
      		
      			$('.buttonThree-label').css('background','red !important');
      			//$('#online_p').html("On");
      		}
          });
      });
      
     
      setTimeout(function(){ 
      $('#tab_default_1').show();
       }, 100);
       $('.nav-tabs').find('li:eq(0)').click(function(){
      	 $('#tab_default_1').show();
      	 $('#tab_default_2').hide();
      	 $('#tab_default_3').hide();
      	 $('#tab_default_4').hide();
       })
        $('.nav-tabs').find('li:eq(1)').click(function(){
      	 $('#tab_default_1').hide();
      	 $('#tab_default_2').show();
      	 $('#tab_default_3').hide();
      	 $('#tab_default_4').hide();
       })
         $('.nav-tabs').find('li:eq(2)').click(function(){
      	 $('#tab_default_1').hide();
      	 $('#tab_default_2').hide();
      	 $('#tab_default_3').show();
      	 $('#tab_default_4').hide();   
       })
       
        $('.nav-tabs').find('li:eq(3)').click(function(){
      	 $('#tab_default_1').hide();
      	 $('#tab_default_2').hide();
      	 $('#tab_default_3').hide();
      	 $('#tab_default_4').show();
       })
	   /* jquery for show album  */
function openModal(e) {
 
  var id = $(e).attr('data-id');
  $('#album_id').val(id);
		$('.mySlides').remove();
		$('.column').remove();
		
		jQuery.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>" + "show_album",
			data: {id: id},
			success: function(res){ 
			var hm=JSON.parse(res);
			$('.modal-content').prepend(hm[0]);
			$('.modal-content').append(hm[1]);
				 currentSlide(1);
			} 
       });
  $('#myModal').css('display','block');
}


// Function for Delete Image
function delimg(e){
	var id=$(e).attr('data-id');
	var img=$(e).attr('data-img');
	$('.headingtext').text('Do You Want Delete Image');
	$('.popup-btn').text('Delete');
	$('.popup-btn').attr('data-vids-id',id);
	$('.popup-btn').attr('data-vids',img);
	$('.popup-btn').attr('btn-action','del_image');
	$("#id07").css("display", "block");
	
}

function closeModal() {
	
  document.getElementById('myModal').style.display = "none";
}


	   
  
    $(document).ready(function ()
        {
            $('#waterfall').NewWaterfall({
                width: 285,
               // delay: 100,
			
            });
        });

        // 自动加载更多
        function random(min, max)
        {
            return min + Math.floor(Math.random() * (max - min + 1))
        }
        var loading = false;
    
        
		
		jQuery.ajax({
			type: "POST",
			url: "<?php echo base_url('Show_models_media'); ?>",
			data: {},
			success: function(res){ 
				
				 $("#waterfall").append(res);


			} 
       }); 
	   

 
    
function move() {

	 $('#myProgress').css('display','block');
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 100);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}


 


$("#id203").click(function(){

$("#id03").css("display","block");
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});


$(".popclose").click(function () {
    $("#popupslide01").css("display", "none");
});
$(".closeletter").click(function () {
    $("#id07").css("display", "none");
});

 
// Function For Delete Video

function delete_vids(e){

	$('.headingtext').text('Do You Want Delete Video');
	$('.popup-btn').text('Delete');
	 var videoid=$(e).attr('data-vids-id');
	var videos=$(e).attr('data-vids');
	$('.popup-btn').attr('data-vids-id',videoid);
	$('.popup-btn').attr('data-vids',videos);
	$('.popup-btn').attr('btn-action','del_video');
	
	$("#id07").css("display", "block");
	
}
</script>

<!--script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script>
        if(Hls.isSupported()) {
          var video = document.getElementById('video');
          var hls = new Hls();
          hls.loadSource('http://ec2-13-127-173-191.ap-south-1.compute.amazonaws.com:8080/angel/abc.m3u8'); 
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
      </script-->
<script>
/*  var broadcast_timer=0;
  var broad = setInterval(function(){
    broadcast_timer++
    
    if(broadcast_timer>90)
    {
      clearInterval(broad);
      $('.livenow').html('<div class="myheading"><input type="button" onclick="continue_brodcast();" value="start Private chat"><input type="button" value="Buy Credits" onclick="buy_credits();"></div>');

    }
    
  },1000);*/
function buy_credits(){
  window.location.href='<?php echo base_url('Products/buy_credit'); ?>';
}
function continue_brodcast(){
  $('.livenow').html('<iframe  src="<?php echo base_url('hls/demo/basic-usage.html'); ?>" id="myiframe" width="100%" height="100%"scrolling="no"></iframe>');
  setInterval(function(){
    $.ajax({
      url : '<?php echo base_url("deduct_broadcast_credits"); ?>',
      type : 'post',
      data : '',
      success : function(res){
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
  var user_id = '<?php echo $user_id; ?>';
  if(!user_id)
  {
    $('#open_chatpop').trigger('click');
  }
  else
  {

  }
}
</script>
<style>
.livenow{height:auto;width:auto;}
.main_div {
    float: left;
    width: 100%;
    margin: 10px 0px;
    text-align: center;
}
.start_show input , .myheading input {
    background: #5cb85c !important;
    border: none;
    padding: 8px;
    color: #fff;
}
</style>
<!-----------------------script of save -------------------------->


<!----------- end of script--------------->
   
	<script src="<?php echo base_url('js/custom.js'); ?>"></script>
	 <script type="text/javascript" src="<?php echo base_url('js/newWaterfall.js'); ?>"></script>
 