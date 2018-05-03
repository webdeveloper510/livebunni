<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Model Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('css/style3.css')?>" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<div class="container-fluid">
  <div class="row"> 
    <div class="fb-profile">
        <div class="bg-outer"><img align="left" class="fb-image-lg" src="<?php echo base_url('image/model-bg.jpg')?>" alt="Profile image example"/></div>
	    
     
<div class=" col-md-12 cstm">
   <div class=" col-md-4 fb-profile-text"> 
   <div class=" col-md-6 custm_image">
   <img align="left" class="fb-image-profile thumbnail" src="<?php echo base_url('uploads/').$data[0]['profile_img']?>" alt="Profile image example"/>
   </div>
      <div class=" col-md-6 custm_heading">
            <h1><?php echo $data[0]['First_name']." ".$data[0]['Last_name']; ?></h1>
            
        </div> 
		</div>
<div class=" col-md-6 slider_nav">
		<ul>
		<li class="mycrdit" id="main_list"><a href="#">My Credits</a>

       <ul class="sub_menu" id="submenu">
		<li><a href="#">Transection</a></li>
		<li><a href="#">Statics</a></li>
		<li><a href="#">Withdrawal money</a></li>
		</ul>
		</li>
		<li class="setting_menu"><a href="#">Setting</a>
		<ul class="sub_menu2" id="submenu1">
		<li><a href="<?php echo base_url('index.php/secret_controller/change_password')?>">Change password</a></li>
		<li><a href="<?php echo base_url('index.php/secret_controller/update_personalinfo')?>">personal Information</a></li>
		</ul>
		</li>
		
		<li><a href="<?php echo  base_url('index.php/secret_controller/logout')?>">Logout</a></li>
		</ul>
</div>
<div class=" col-md-2 cstm1">
<label class="switch"> 
<input class="switch-input" type='checkbox' id="my57" name='checkbox' <?php  if($data[0]['Online']==1){ echo "checked=checked"; }else{ echo $data[0]['Online'];}  ?>>
</label>
</div>
		</div>
		
    </div>
	
  </div>
</div> <!-- /container fluid-->  
<div class="container">
  <div class="col-sm-3">
   <div class="panel panel-default">
    
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                 <div class="form-group">
                     <label for="firstname">First Name:</label>
                      <p><?php echo $data[0]['First_name'];?></p>
                 </div>
				  <div class="form-group">
                      <label for="lastname">Last Name:</label>
                      <p> <?php echo $data[0]['Last_name'];?></p>
                  </div>
				 <div class="form-group">
                      <label for="gender">Gender:</label>
                      <p> <?php echo $data[0]['Gender'];?></p>
                  </div>
                  <div class="form-group">
                      <label for="age">Age:</label>
                      <p> <?php echo $_SESSION['userdata']['Age'];?></p>
                  </div>
				   <div class="form-group">
				  <label for="interest">Interested in:</label>
				  <ul>
				  <?php  $data12 = explode('|',$data[0]['Enjoy']);
				  for($k=0;$k<count($data12);$k++)
				  {
				  ?>
                      <li> <?php echo $data12[$k]; ?></li>
				  <?php } ?>
				  </ul>
                  </div>
				  <div class="form-group">
				  <label for="per_min_cos">Rate Per Minute:</label>
                      <p> <?php echo $data[0]['Rate_per_minute'];?></p>
                  </div>
				<!-- 	<div class="out-button">
				<p data-placement="top" data-toggle="tooltip" title="" data-original-title="Save"><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#delete" onclick="return save_header();"><span class="glyphicon glyphicon-ok"></span></button></p>
				<p data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit"><button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit" onclick="return edit_header();"><span class="glyphicon glyphicon-pencil"></span></button></p>
		       </div> -->
					
            </div>
        </div>
    </div>
</div>
  </div>
    <div class="col-sm-9">
      <div data-spy="scroll" class="tabbable-panel">
        <div class="tabbable-line">
          <ul class="nav nav-tabs ">
            <li class="active">
              <a href="#tab_default_1" id="timeline" data-toggle="tab">
              Timeline </a>
            </li>
            <li>
              <a href="#tab_default_2" data-toggle="tab">
             About</a>
            </li>
            <li>
              <a href="#tab_default_3" data-toggle="tab">
             Gallery</a>
            </li>
            
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_default_1" >
             <div class="panel panel-default">
          <div class="panel-body">
            <div class="status-upload nopaddingbtm">
              <form method="post" action="<?php echo base_url('index.php/secret_controller/share_post');?>">
                <textarea class="form-control" name="post" placeholder="What are you doing right now?"></textarea>
                <br>
                <ul class="nav nav-pills pull-left ">
                  <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="glyphicon glyphicon-bullhorn"></i></a></li>
                  <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class=" glyphicon glyphicon-facetime-video"></i></a></li>
                  <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="glyphicon glyphicon-picture"></i></a></li>
                </ul>
                <button type="submit" class="btn btn-success pull-right"> Share</button>
              </form>
            </div>
            <!-- Status Upload  --> 
          </div>
        </div>
		<?php   
		for($i=0;$i<count($post);$i++)
		{
		?>
          <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
					 
                        <a href="#">
                            <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                        </a>
                    </div>      
                    <h4><a href="#" style="text-decoration:none;"><strong><?php echo $_SESSION['userdata']['Username']?></strong></a> – <small><small><a href="#" style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 
					<?php 
					$date1 = $post[$i]['Submitted_date'];
					$date2 = date("Y-m-d H:i:s");

					$diff = abs(strtotime($date2) - strtotime($date1));
					$minutes = date("i",$diff);
					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

					if($days>0){echo $days." days";}
					if($months>0){echo $months." months"; }
					if($years){ echo $years." years"; }
					if($minutes>0){ echo $minutes." minutes";
					}  
					
					?> ago</i></a></small></small></h4>   
                    <span>
                        <div class="navbar-right">
                            <div class="dropdown">
                                <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dd1" style="float: right;">
                                    <li><a href="#"><i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> Report</a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-ban" aria-hidden="true"></i> Ignore</a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-bell" aria-hidden="true"></i> Enable notifications for this post</a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-eye-slash" aria-hidden="true"></i> Hide</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="fa fa-fw fa-trash" aria-hidden="true"></i> Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </span>
                    <hr>
                    <div class="post-content">
                        <p><?php echo $post[$i]['Post_data'];?></p>       
                    </div>
                    <hr>
                    <div>
                        
                        <br>
                    </div>
                    <hr>
                    <div class="media">
                        <div class="pull-left">
                            <a href="#">
                                <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <textarea class="form-control" rows="1" placeholder="Comment"></textarea>
                        </div>
                    </div>
                </div>
            </div>    
			  <?php }?>
			 
            </div>
			
			
			
            <div class="tab-pane" id="tab_default_2">
              <p>
                Education& Career
              </p>
              <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                     <label for="email">First Name:</label>
                      <p><?php echo $data[0]['First_name']; ?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Last Name:</label>
                      <p> <?php echo $data[0]['First_name']; ?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Email Address:</label>
                      <p><?php echo $_SESSION['useremail']; ?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Details:</label>
                      <p><?php echo $data[0]['Details']?> </p>
                 </div>
              </div>
              <div class="col-sm-6">
                 <div class="form-group">
                     <label for="email">Town:</label>
                      <p><?php echo $data[0]['Town']; ?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Region / State:</label>
                      <p> <?php echo $data[0]['State']; ?></p>
                 </div>
                  <div class="form-group">
                     <label for="email">Zip/Postal Code:</label>
                      <p> <?php echo $data[0]['Zipcode']; ?></p>
                 </div>

               </div>
              </div>

             
           
            </div>
            <div class="tab-pane" id="tab_default_3">
              <div class="row text-center text-lg-left">
		<form method="post" action="<?php echo base_url('index.php/secret_controller/upload_gallery');?>" enctype="multipart/form-data">
		<input type="file" name="gallery" >
		<input type="submit" name="upload" value="upload">
		</form>
		<?php  
		for($j=0;$j<count($gallery);$j++)
		{
		?>
        <div class="col-lg-4 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo base_url('/uploads/gallery/'.$gallery[$j]['Images']); ?>" alt="">
          </a>
        </div>
		<?php } ?>
      </div>
            </div>
             <div class="tab-pane" id="tab_default_4">
              <p>
               Video
              </p>
  
               
              </div>
            </div>
          </div>
        </div>
      </div>
  
  </div>
</div-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$('#tab_default_1').css('display','block !important');
});
	var online ='';
$(".switch-input").change(function(){
	if($("#my57").is(':checked'))
    online = 1;
else{
    
	online = 0;
}
	var uid = '<?php echo $_SESSION['userdata']['id']?>';
	
   $.ajax({
	   url: "<?php echo base_url('index.php/secret_controller/switch_online_offline'); ?>",
	   data : {uid:uid , online:online},
	   type:'post',
	   success: function(data){
		alert(data);
	}});
});

</script>