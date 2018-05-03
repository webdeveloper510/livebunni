<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
 <title>Secret Angels</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="<?php echo base_url('css/jquery.emojipicker.css'); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/reset2.0.min.css'); ?>"> 	
	<link rel="stylesheet" href="<?php echo base_url('css/landingpage.css'); ?>"/> 
	<link rel="stylesheet" href="<?php echo base_url('css/main.css'); ?>"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('css/style.css');?>"/>	
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!--script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script-->
		<script type="text/javascript" src="<?php echo base_url('js/jquery.emojipicker.js'); ?>"></script>
		  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/jquery.emojipicker.tw.css'); ?>">
		    <script type="text/javascript" src="<?php echo base_url('js/jquery.emojis.js'); ?>"></script>
	<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script-->


	

    <script type="text/javascript" src="<?php echo base_url('js/jquery.emojipicker.js'); ?>"></script>
   


  </head>	
<body>
<script> var base_url = '<?php echo base_url(); ?>';  </script>
<!--script type="text/javascript">
function googleTranslateElementInit() {
 new google.translate.TranslateElement({pageLanguage: 'en',  layout: google.translate.TranslateElement.InlineLayout.SIMPLE,autoDisplay: false}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script-->
	

	   <img src="/image/corporate/logo2.ico">
	       <div class="w3-top navtop">
		  
  <div class="w3-bar w3-white w3-card" id="myNavbar">

     <a class="navbar-brand frontlogo" href="<?php echo base_url('index');?>"><img src="<?php echo base_url('image/corporate/bunny.png'); ?> " ></a>
    <!-- Right-sided navbar links -->
	 
    <div class="w3-right w3-hide-small respdes ">
	<a href="javascript:void(0)" class="w3-bar-item w3-button btnav country_div"><div id="google_translate_element"></div></a><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,bn,es,hi,pa,pt,ru,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
     <a href="<?php echo base_url('index');?>" class="w3-bar-item w3-button btnav">Home</a>
      <!--a href="<?php echo base_url('livenow');?>"class="w3-bar-item w3-button btnav">Live Now</a-->
	      <a href="<?php echo base_url('events');?>" class="w3-bar-item w3-button btnav">Calender <span class="badge badge-secondary newadd">New</span></a>
      <a href="<?php echo base_url('create');?>" class="w3-bar-item w3-button btnav"> Become A Model</a>
	 <a href="javascript:void(0)" class="w3-bar-item w3-button btnav country_div"> <div id="google_translate_element"></div></a>
      <a href="<?php echo base_url('member_signup');?>" class="w3-bar-item w3-button btnav"> Buy Credits</a> 
       <!--a href="#pricing" class="w3-bar-item w3-button btnav1"> <button type="button" onclick="document.getElementById('id01').style.display='block'" class="btn btn-danger headcolor ">Login</button></a-->
       <a href="<?php echo base_url('secret_controller/login1'); ?>" class="w3-bar-item w3-button btnav1"> <button type="button" onclick="document.getElementById('id01').style.display='block'" class="btn btn-danger headcolor ">Login</button></a>
	 <a href="<?php echo base_url('member_signup');?>" class="w3-bar-item w3-button btnav1">  <button type="button" class="btn btn-danger  headcolor">Sign Up</button></a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="<?php echo base_url('index');?>" class="w3-bar-item w3-button btnav">Home</a>
      <!--a href="#"class="w3-bar-item w3-button btnav">Live Now</a-->
	   <a href="<?php echo base_url('events');?>" class="w3-bar-item w3-button btnav">Calender <span class="badge badge-secondary newadd">New</span></a>
      <a href="<?php echo base_url('create');?>" class="w3-bar-item w3-button btnav"> Become A Model</a>
	  <a href="javascript:void(0)" class="w3-bar-item w3-button btnav country_div"> <div id="google_translate_element"></div></a>
      <a href="<?php echo base_url('create');?>" class="w3-bar-item w3-button btnav"> Buy Credits</a>
       <a href="#pricing" class="w3-bar-item w3-button btnav1"> <button type="button" onclick="document.getElementById('id01').style.display='block'" class="btn btn-danger headcolor ">Login</button></a>
	 <a href="<?php echo base_url('member_signup');?>" class="w3-bar-item w3-button btnav1">  <button type="button" class="btn btn-danger  headcolor">Sign Up</button></a>
</nav>
	<!--div id="id01" class=" loginpopup">
  
  <form class="modal-content animate loginpopit" method="POST" action="<?php //echo base_url()."/login_form"; ?>">
    
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    
<div class="poplogo"></div>
<div class="login-block">
    <h1>Login Form</h1>
	
	
				<div class="update_notsuccesfully_profile_outer">
				<div class="" role="alert">
				<p id="erroruser"></p>
				</div>
				</div>	
				
	 
	
	
    <input type="text" value="" placeholder="Username/Email" name="username" id="username" />
    <input type="password" value="" placeholder="Password" name="password" id="password"  />
	<div class="loginremember">
            <input type="checkbox" id="chbRemember" name="chbRemember" /><label class="check"
                for="chbRemember">Remember me next time</label>
    
    </div></form>
	<button type="button" id="login">Login</button>
	<!--input type="Submit"  name="submit" value="submit" /-->
   <!--div class="loginremember">
            <p><a href="http://codenomad.biz/secret-angels/forgot_pwd" id="reset_password_link">Click here</a> if you forgot your password!</p>
                <p>Don't have an account?&nbsp;<a id="signup_link" href="http://codenomad.biz/secret-angels/create">Join now</a></p>
    
    </div>
</div-->

    </div>

			
<style>
a.w3-bar-item.w3-button.btnav.country_div:hover {
    background: transparent !important;
}
a.w3-bar-item.w3-button.btnav.country_div img {
    display: none;
}
a.goog-te-menu-value span {
    margin-right: 5px;
}
a.w3-bar-item.w3-button.btnav.country_div {
    margin-top: 4px;
}
.frontlogo {
    width: 8%;
    margin-top: -2%;
    margin-left: 2%;
}
/* div#google_translate_element {
    position: absolute;
    margin-left: 17%;
    top: 26%;
} */
a.w3-bar-item.w3-button.btnav {
    margin-top: 7px;
    font-size: 13px;
}
.btnav:hover {
          background-color: #F1A33E !important;
    text-decoration: none;
	color:white!important;
}
.btnav1:hover {
        background-color: white!important;
    text-decoration: none;
}

@media only screen and (max-width: 360px) {
    .respdes {
        width:65%!important;
    }
}
.headcolor {
    color: #fff;
    background-color: #cf1d65;
    border-color: #cf1d65;
}
.headcolor:hover {
    color: #fff;
    background-color: #cf1d65;
    border-color: #cf1d65;
}
.newadd {
    font-size: 10px;
    /* position: relative; */
    color: #ffffff;
    background: #cf1d65;
    text-align: center;
    font: bold 9px Arial;
    border-radius: 3px;
    padding: 1px 2px 0;
    text-transform: uppercase;
    position: absolute;
    top: 5%;
    /*right: 48%;*/
}
.logo {
    width: 100px;
    margin-top: -20px;
}
</style>
			

		<script src="<?php echo base_url('js/custom.js'); ?>" defer></script>
		<script src="<?php echo base_url('js/compile.js'); ?>" defer></script>
			<script>
$("input[name='password']").keydown(function(event){
	 var user = $('input[name="username"]').val(),pass = $('input[name="password"]').val();
   var x = event.which || event.keyCode;
   if(x==13){
			$.ajax({
			url : base_url+"login_form",
			type : 'post',
			data : {'username':user,'password':pass},
			success : function (result){
				if(result=="main_page"){
					window.location.replace(base_url+result);
				}else if(result=="model_profile"){
					window.location.replace(base_url+result);
				}else{
				$('#erroruser').text(result).hide();
				clearTimeout(e);
				$("#erroruser").html('<strong>Sorry!!</strong>'+result).css({'background-color':'red','color':'white'});
				$("#erroruser").show(1000);
				var e = setTimeout(function() {
					$("#erroruser").hide(1000); 
					},5000 );
				}
				
				return false;
			} 
		})
		}
});
$("#login").click(function(){
    var user = $('input[name="username"]').val(),pass = $('input[name="password"]').val();
		 
		if(user=="" || pass=="")
		{
			
			clearTimeout(e);
				$("#erroruser").html('<strong>Sorry!!</strong>All field should be filled').css({'background-color':'red','color':'white'});
				$("#erroruser").show(1000);
				var e = setTimeout(function() {
					$("#erroruser").hide(1000); 
					
					},5000 );
			return false;
		}else{
			$.ajax({
			url : base_url+"login_form",
			type : 'post',
			data : {'username':user,'password':pass},
			success : function (result){
				if(result=="main_page"){
					window.location.replace(base_url+result);
				}else if(result=="model_profile"){
					window.location.replace(base_url+result);
				}
				}else{
				$('#erroruser').text(result).hide();
				clearTimeout(e);
				$("#erroruser").html('<strong>Sorry!!</strong>'+result).css({'background-color':'red','color':'white'});
				$("#erroruser").show(1000);
				var e = setTimeout(function() {
					$("#erroruser").hide(1000); 
					},5000 );
				}
				
				return false;
			} 
		})
		}  
		
		
});

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
	$('#login_form').submit(function(){
		var user = jQuery('input[name="login_username"]').val();
		var pass = jQuery('input[name="pwd"]').val();
		//alert(pass);return false; 
		if(user=="")
		{
			alert("bindu");
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
	</script>
						<script>
	/* When the user clicks on the button, 
	toggle between hiding and showing the dropdown content */
	function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	}

	// Close the dropdown if the user clicks outside of it
	 window.onclick = function(e) {
	  if (!e.target.matches('.dropbtn')) {
		var myDropdown = document.getElementById("myDropdown");
		  if (myDropdown.classList.contains('show')) {
			myDropdown.classList.remove('show');
		  }
	  }
	}
	</script>
	<script>
	var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}</script>
	