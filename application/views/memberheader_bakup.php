<!DOCTYPE html>
<?php
foreach($id as $idss){
	$username=$idss['Username'];
}

?>
<html>

  <head>
 

    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/reset2.0.min.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/star-rating.min.js"></script>
	<script src="js/star-rating.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css"/>
  

	

  </head>
  <style>
  
li.dropdown.dropit {
    margin-top: 10px;
}
 ul.dropdown-menu.dropup {
    background-color: #C6145F;
}
.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
    color: #262626;
    text-decoration: none;
    background-color:#C6145F;
}

	.popuphead{
		background-color:black;
		color:white;
	}
	.form-group {
    margin-top: 22px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.btn-default {
   
  
    border-color: #ccc;
    margin-left: 16px;
	
}
.w3-modal-content {
    margin: auto;
    background-color: #fff;
    position: relative;
    padding: 0;
    outline: 0;
    width: 70%;
    background-color: #d21e60;
    color: white;
    /* z-index: 1143; */
    z-index: 10000;
}
.button {
    background-color: black;
    color: white;
    width: 15%;
    padding: 3px;
	    border-color: #ccc;
}
.textbox {
    display: block;
    width: 89%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

button#dp_button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
button#dp_button {
    background: #d21e60;
    border: none;
    float: right;
    margin-top: 13px;
    color: white;
    width: 136px;
    margin-left: 1px;
    border-radius: 10px;
}

	<style>
	


</style>
	<script src="js/custom.js"></script> 
<script>

	jQuery(window).scroll(function(){

	var scrolltop = jQuery(window).scrollTop();

	if(scrolltop>500 && scrolltop<2230)

	{

	

	jQuery('.second_scrolling').fadeIn(5000);

	console.log("first"+jQuery(window).scrollTop());

	}

	else if(scrolltop>2230)

	{

	

	jQuery('.third_scrolling').fadeIn(1000);

	console.log(jQuery(window).scrollTop());

	}

	

	});

	</script>
	<script>
	jQuery('#login_form').submit(function(){
		var user = jQuery('input[name="login_username"]').val();
		var pass = jQuery('input[name="pwd"]').val();
		//alert(pass);return false; 
		if(user=="")
		{
			jQuery('#erroruser').html('username should be filled'); return false;
		}
		else if(pass=="")
		{
			jQuery('#erroruser').html('');
			jQuery('#errorpass').html('Password should be filled'); return false;
		}
		
	});
	
	jQuery('#signup').submit(function(){
		var user = jQuery('input[name="username"]').val();
		var pass = jQuery('input[name="password"]').val();
		var email_id = jQuery('input[name="email_id"]').val();
		var card_number = jQuery('input[name="card_number"]').val();
		var card_name = jQuery('input[name="card_name"]').val();
		var expireMM = jQuery('select[name="expireMM"]').val();
		var expireYY = jQuery('select[name="expireYY"]').val();
		var captcha_code = jQuery('input[name="captcha_code"]').val();
		var real_code = jQuery('#cap').val();
		
		if(user=="")
		{
			jQuery('#signupuser').html('username should be filled'); 
			jQuery('#signupuser').css('color','#5fe55a'); 
			 return false;
		}
		else if(pass=="")
		{
			jQuery('#signupuser').html('');
			jQuery('#signuppass').html('Password should be filled'); 
			jQuery('#signuppass').css('color','#5fe55a'); 
			return false;
		}
		else if(email_id=="")
		{
			jQuery('#signupuser').html('');
			jQuery('#signuppass').html('');
			jQuery('#signupemail').html('Email should be filled');
			jQuery('#signupemail').css('color','#5fe55a'); 
			return false;
		}
		else if(card_number=="")
		{
			jQuery('#signupuser').html('');
			jQuery('#signupemail').html('');
			jQuery('#signuppass').html('');
			jQuery('#signupcard').html('Card number should be filled');
			jQuery('#signupcard').css('color','#5fe55a'); 
			return false;
		}
		else if(card_number.length!=16)
		{
			jQuery('#signupuser').html('');
			jQuery('#signupemail').html('');
			jQuery('#signuppass').html('');
			jQuery('#signupcard').html('please enter valid card number');
			jQuery('#signupcard').css('color','#5fe55a'); 
			return false;
		}
		else if(card_name=="")
		{
			jQuery('#signupuser').html('');
			jQuery('#signupemail').html('');
			jQuery('#signuppass').html('');
			jQuery('#signupcard').html('');
			jQuery('#signupcard_name').html('Name on card should be filled'); 
			jQuery('#signupcard_name').css('color','#5fe55a'); 
			return false;
		}
		else if(expireMM=="")
		{
			jQuery('#signupuser').html('');
			jQuery('#signupemail').html('');
			jQuery('#signuppass').html('');
			jQuery('#signupcard').html('');
			jQuery('#signupmonth').html('Select expiry month of credit card');
			jQuery('#signupmonth').css('color','#5fe55a'); 
			return false;
		}
		else if(expireYY=="")
		{
			jQuery('#signupuser').html('');
			jQuery('#signupemail').html('');
			jQuery('#signuppass').html('');
			jQuery('#signupcard').html('');
			jQuery('#signupmonth').html('');
			jQuery('#signupyear').html('Select expiry year of credit card');
			jQuery('#signupyear').css('color','#5fe55a'); 
			return false;
		}
		else if(captcha_code=="")
		{
			jQuery('#signupuser').html('');
			jQuery('#signupemail').html('');
			jQuery('#signuppass').html('');
			jQuery('#signupcard').html('');
			jQuery('#signupmonth').html('');
			jQuery('#signupyear').html('');
			jQuery('#signupcode').html('please enter captcha code');
			jQuery('#signupcode').css('color','#5fe55a'); 
			return false;
		}
		else if(captcha_code!=real_code)
		{
			jQuery('#signupuser').html('');
			jQuery('#signupemail').html('');
			jQuery('#signuppass').html('');
			jQuery('#signupcard').html('');
			jQuery('#signupmonth').html('');
			jQuery('#signupyear').html('');
			jQuery('#signupcode').html('Please fill the correct code');
			jQuery('#signupcode').css('color','#5fe55a'); 
			return false;
		}
		
	});
	
	$("#card_number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
	   $('.content').hover(function() {
        $(this).addClass('transition');
    
    }, function() {
        $(this).removeClass('transition');
    });
	
	//ADD TO FAVORITE
$( document ).ready(function() {
 $('div.team-member a i').click(function(){
		var a =$(this);
		
		//var b =a.parent('a').parent().parent().children('a').children('img').attr('src');
		var b =a.parent('a').parent().parent().children('img').attr('src');
		
		var c='<?php echo $idss['id']; ?>';
		
			jQuery.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>" + "add_favorite",
			//dataType: 'json',
			data: {id: c, links: b},
			success: function(res){ 
				alert(res);
			} 
       }); 
 });
});
	
	</script>	

<body>
<nav class="navbar" role="navigation">

		   	   <div class="container container11">

			  <!-- Brand and toggle get grouped for better mobile display -->

			  <div class="navbar-header">

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

				  <span class="sr-only">Toggle navigation</span>

				  <span class="icon-bar"></span>

				  <span class="icon-bar"></span>

				  <span class="icon-bar"></span>

				</button>

				<a class="navbar-brand" href="<?php echo base_url('main_page');?>"><img src="<?php echo base_url('image/corporate/logo.png'); ?>"></a>

			  </div>


			  <!-- Collect the nav links, forms, and other content for toggling -->

			  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<div class="col-sm-3 col-md-3">

					<form class="navbar-form" role="search">

					<div class="input-group input_group">

						<input type="text" class="form-control" placeholder="Search" name="q">

					</div>

					</form>

				</div>
<?php if($user_profile [0]['Role'] != 'model'){?>
				<ul class="nav navbar-nav">

				  <li class="dropdown  ">

					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></a>

					<ul class="dropdown-menu dropup">

					  <li><a href="#">Action</a></li>

					  <li><a href="#">Another action</a></li>

					  <li><a href="#">Something else here</a></li>

					  <li class="divider"></li>

					  <li><a href="#">Separated link</a></li>

					</ul>

				  </li>

				</ul>			
			<ul class="nav navbar-nav">

				  <li><a href="#">Home</a></li>
				  <li><a href="#">Model</a></li>
				  <li><a href="#">Live Now</a></li>
				  <li><a href="<?php echo base_url('create');?>">Become A Model</a></li>
				  
				</ul>	
<?php } ?>
			<div class="dropdown dropleft">  
					  <button class="btn btn-primary dropdown-toggle" id="dp_button" type="button" data-toggle="dropdown"><?php echo $user_profile [0]['Username']; ?>
					  <span class="caret"></span></button>
					  <ul class="dropdown-menu test_drop">
					  <?php if($user_profile [0]['Role'] != 'model'){?>
				<li><a href="<?php echo base_url()."profile_page"; ?>"><i class="fa fa-user">&nbsp;&nbsp;Profile</i> </a>
				
				<ul class="fvrt">
				
				<li><a href="<?php echo base_url()."favourite"; ?>"><i class="fa fa-heart">&nbsp;&nbsp;Favourite</i></a></li>
				</ul>
				
				</li>
				
						<!--<li><a href="<?php echo base_url()."setting"; ?>"><i class="fa fa-cog">&nbsp;&nbsp;Setting</i></a></li>-->
						<li onclick="openpoup()"><a href="#"onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-cog">&nbsp;&nbsp;Setting</i></a></li>
						
						<li><a href="<?php echo base_url()."Products/buy_credit"; ?>"><i class="fa fa-usd">&nbsp;&nbsp;&nbsp;Credit</i></a></li>
						<li><a href="<?php echo base_url()."logouts"; ?>"><i class="fa fa-power-off">&nbsp;&nbsp;Logout</i></a></li>
					  <?php }?>
					  <li><a href="<?php echo base_url()."logouts"; ?>"><i class="fa fa-power-off">&nbsp;&nbsp;Logout</i></a></li>
					  </ul>
					</div>
 
			  </div><!-- /.navbar-collapse -->
<div class="w3-container">


  <div id="id01" class="w3-modal">
  	  <div id="overlay" class="  show"></div>

    <div class="w3-modal-content w3-card-4">
      <header class="w3-container popuphead"> 
	 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
		
        <h2>Settings</h2>
      </header>
      <div class="w3-container">
       <form class="form-horizontal" action="/action_page.php">
	   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Username:</label>
    <div class="col-sm-10 ">
      <input type="email" class=" textbox" id="username" placeholder="Enter username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10 ">
      <input type="email" class=" textbox" id="email" placeholder="Enter email">
    </div>
  </div>
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Verification:</label>
    <div class="col-sm-10 ">
      <input type="email" class=" textbox" id="verification" placeholder="verification">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10 "> 
      <input type="password" class=" textbox" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
	 <button type="submit" class=" button">Edit</button> &nbsp;
	
	  
      <button type="submit" class=" button">Submit</button>
	  </div>
    </div>
  </div>
</form>
      </div>
     
    </div>
  </div>
			 </div><!---container div-->

			</nav>
			</body>
			</html>