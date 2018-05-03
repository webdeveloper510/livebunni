<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    margin-bottom: 15px;
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
    width: 100%;
}
input#chbRemember {
    width: auto;
    height: 15px;
    margin-right: 10px;
    margin-top: 2px;
    float: left;
    cursor:pointer;
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
    height: 50px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
}
.loginerror p {
    color: red;
    text-transform: uppercase;
}

</style>

<div>

			
				<a class="navbar-brand" href="<?php echo base_url('main_page'); ?>"><img class="secreatlogo" src="<?php echo base_url('image/corporate/bunny.png'); ?>"></a>

			  </div>
<div id="id01" class=" loginpopup">
  
  <form class="modal-content animate loginpopit" method="POST" action="<?php echo base_url('secret_controller/login_form'); ?>">
    
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
    
    </div>
    <div class="loginerror" style="display: none;">
    </div>
	<button type="submit" id="login" onclick="check_login(event);">Login</button>
	<!--input type="Submit"  name="submit" value="submit" /-->
   <div class="loginremember">
            <p><a href="http://codenomad.biz/secret-angels/forgot_pwd" id="reset_password_link">Click here</a> if you forgot your password!</p>
                <p>Don't have an account?&nbsp;<a id="signup_link" href="http://codenomad.biz/secret-angels/create">Join now</a></p>
    
    </div>
</form>
<script >
    function check_login(e){
        e.preventDefault();
        var username = $('#username').val();
        var password = $('#password').val();
        $.ajax({
            type :'post',
            url : '<?php echo base_url('login_form'); ?>',
            data : {'username':username,'password':password},
            success : function(response){
                if(response=="invalid login details")
                {
                    //alert(response);
                    $('.loginerror').html('<p>'+response+'</p>'); 
                   $('.loginerror').show(); return false;
                }
                else
                {
                    window.location.href=response;
                }
            }
        });
         return false;
    }
</script>
</div>