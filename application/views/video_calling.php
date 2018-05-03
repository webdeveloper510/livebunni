<!doctype html>

<html>

	<head>

	<meta charset="utf-8">

	<title>PushFyi Video Chat</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo base_url('video_call1/css/custom.css'); ?>" type="text/css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

	<!--style>.video-chat{width:100%;background:rgba(0,0,0,.6);height:60vh;margin-bottom:28px;position:relative}
	
	</style-->
	<style>.video-chat{width:100%;background:rgba(0,0,0,.6);height:94vh;margin-bottom:28px;margin-top:0px; position:relative}
	.self-user-wrapper {width: 185px;left: 15px;top: 1px;}
	#selfvideo{ width:184px !important; height:200px;}
	.menu-list {display: none;}
	.nav-side-menu {height: 40vh;}
	</style>

	</head>



	<body>
<div class="col-md-3 col-sm-3">

      <div class="nav-side-menu">

    <!--div class="brand"><img src="<?php echo base_url('video_call1/images/logo-big.png'); ?>" height="40"><label id="username">Username</label><a href="#" class="logout-btn" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a></div-->

    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">
      <ul id="menu-content" class="menu-content collapse out">
        <input type="hidden" id="calleee_id" role="<?php echo $Model_profile[0]['Role']; ?>" value="<?php echo $model_id; ?>">
      	<input type="hidden" id="my_id"  value="<?php echo $current_user; ?>">
          <input type="text" id="callee" data-id="<?php echo $model_id; ?>"><input type="button" value="Call Number" id="call-btn">

        <!--

        <li> <a href="#"> <i class="fa fa-user fa-lg"></i> Rahul Dey </a> <a href="#" class="pull-right"><i class="fa fa-phone" aria-hidden="true"></i></a></li>

        <li> <a href="#"> <i class="fa fa-user fa-lg"></i> Nikhil Nainta <a href="#" class="pull-right"><i class="fa fa-phone" aria-hidden="true"></i></a></a> </li>

        -->

      </ul>
        </div>
		<div class="self-user-wrapper"> 
          <video id="selfvideo" autoplay muted width="200px" height="200px"></video>
        </div>

  </div>

    </div>

<div class="col-md-9 col-sm-9">

      <div class="row" id="videoCalls">

        <div class="col-md-12 col-sm-12">

          <div class="video-chat" id="remotevideo">

            <div class="video-control">

              <img src="<?php echo base_url('video_call1/images/FullScreen.png'); ?>" class="fullscreen" width="30" class="" height="30" alt=""/> 

              <img src="<?php echo base_url('video_call1/images/Call-down.png'); ?>" class="hangup" width="30" height="30" class="" alt=""/> 

            </div> 

          </div>

        </div>

      </div>

      <div class="row">

    <div class="col-md-12">

         <div class="msg-wrapper" style="display:none;">         

        </div>

  </div>

    </div>

  

<!-- Modal -->

<div class="modal fade" id="intro" role="dialog">

      <div class="modal-dialog modal-sm"> 

    

    <!-- Modal content-->

    <div class="modal-content">

          <div class="modal-header">

        

        <h4 class="modal-title" align="center">Welcome</h4>

      </div>

          <div class="modal-body">

        <p>

              <input type="text" class="form-control" id="myName" placeholder="Enter Your Name">

            </p>

      </div>

          <div class="modal-footer">

        <button type="button" class="btn btn-warning" id="myBtn">Connect</button>

      </div>

        </div>

  </div>

    </div>

<!-- Modal -->

<script type="text/javascript" src="<?php echo base_url('video_call1/js/jquery.min.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('video_call1/js/bootstrap.min.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('video_call1/js/lightwsd1.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('video_call1/js/lightwsd.webrtc.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('video_call1/js/lightwsd.webrtc.demo.js'); ?>"></script>



<script>
  $(document).ready(function(){
    var demo=new LightWSDRTCDemo();demo.init();
    /*if($('#calleee_id').attr('role')=="model")
    {
      alert('hlo'); 
    }
    else
      {
       $('#call-btn').trigger('click');
      }*/
  });
</script>

</body>

</html>

