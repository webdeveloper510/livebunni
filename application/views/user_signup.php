<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 
<body>
 <div >

			
				<a class="navbar-brand" href="<?php echo base_url('main_page');?>"><img class="secreatlogo" src="<?php echo base_url('image/corporate/logo.png');  ?>"></a>

			  </div>

<form action="<?php echo base_url('members_signup3'); ?>" method="POST" autocomplete="off" >


<div class="login-block">
    <h1>Join Us </h1> 
	<div id="msg_success" class="login-block alert alert-danger error" > 
</div>
	<?php if($this->session->flashdata('success')) { ?>
				<div class="update_succesfully_profile_outer error">
				<div class="alert alert-success" role="alert">
				<div class="update_succesfully_profile">
				<p><?php echo $this->session->flashdata('success') ?></p>
				</div></div>
				</div>
				<?php }
				else{?>
				<div class="update_notsuccesfully_profile_outer">
				<div class="" role="alert">
				<p><?php echo $this->session->flashdata('failed') ?></p>
				</div>
				</div>	
				<?php	
					
				}?>
	
	 <input type="email" value="" placeholder="Email" name="email" id="email" autocomplete="off" /><i class="fa fa-envelope-o" aria-hidden="true"></i>
    <input type="text" value="" placeholder="Username" name="username" id="username"  autocomplete="off" />
    <input type="password" value="" placeholder="Password" name="password" id="password" autocomplete="off" />

  <input type="checkbox" name="Age_confirm" value="18" required>

	<p class="terms" >I acknowledge that I am 18+ years old and have read, understood and accepted the <a href="#">Terms &amp; Conditions</a>. </p>
	 <button type="submit" class="btn btn-default" >Join</button>
    
</div>

</form>
</body>
<script>
	$(document).ready(function(){
		
//////////////// 	check email already exist or not 	///////////
	$("#email").blur(function(){ 
	var email= $(this).val();
	if(email != '')
	{
	$.ajax({
			type:'POST',
			url:'<?php echo base_url("check_email"); ?>',
			data:{email:email},
			success:function(data){
			 if(data == 1) 
			{   clearTimeout(e);
				$("#msg_success").html('<strong>Sorry!!</strong> Email already exist please try another.').css('background-color','red');
				$("#msg_success").show(1000);
				var e = setTimeout(function() {
					$("#msg_success").hide(1000); 
					$("#email").val('');
					},5000 );
			}else{
					
					return false;
				} 
			}
		}); 
	}else
	{
	return false;
	}
	});
	
	//////////////// 	check username already exist or not 	///////////
	$("#username").blur(function(){ 
	var username= $(this).val();
	if(username != '')
	{
	$.ajax({
			type:'POST',
			url:'<?php echo base_url("check_username"); ?>',
			data:{username:username},
			success:function(data){
			 if(data == 1) 
			{   clearTimeout(e);
				$("#msg_success").html('<strong>Sorry!</strong> Uesrname already exist try another.').css('background-color','red');
				
				$("#msg_success").show(1000);
				var e = setTimeout(function() {
					$("#msg_success").hide(1000); 
					$("#username").val('');
					},5000 );
			}else{
					
					return false;
				} 
			}
		}); 
	}else
	{
	return false;
	}
	})
	
	//////////////// 	check password lenth 	///////////
	$("#password").blur(function(){ 
	var password= $(this).val();
	if(password != '')
	{
		if(password.length<6){
			clearTimeout(e);
				$("#msg_success").html('<strong>Sorry!</strong> Your password too Sort.').css('background-color','red');
				
				$("#msg_success").show(1000);
				var e = setTimeout(function() {
					$("#msg_success").hide(1000); 
					$("#password").val('');
					},5000 );
		}else{
			return false;
		}
	
	}
		});
		
		
	
});
	 
	

	
</script>
<style>
   body {
	       
    background: url('http://codenomad.biz/secret-angels/image/login_bg.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.error{
	display: none;
    color: #f4f4f4;
    background-color:red;
}
.terms {
    clear: both;
    width: 286px;
    text-align: justify;
    text-align-last: center;
    font: normal 11px Arial !important;
    margin: 0 0 0 197px;
    float: right;
    padding: 6px;
}


.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
    position: relative;
    top: 60px;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}
.loginremember {
    width: 83%;
}
input#chbRemember {
    width: 20%;
    height: 15px;
    margin-left: -13px;
}
i.fa.fa-envelope-o {
    position: absolute;
    /* top: 76px; */
    left: 44px;
    opacity: 0.5;
    /* color: red; */
    margin-top: 12px;
}
.secreatlogo {
    width: 196px;
    height: 33PX;
    position: absolute;
    top: 12px;
    left: 21px;
}

element.style {
}

input[type="checkbox"] {
    width: 13px;
    position: absolute;
    left: 25px;
  
    top: 69%;
}
</style>
