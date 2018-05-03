<?php if($this->session->flashdata('success')) { ?>
<div class="update_succesfully_profile_outer">
<div class="alert alert-success" role="alert">
<div class="update_succesfully_profile">
<span>X</span>
<p><?php echo $this->session->flashdata('success') ?></p>
</div></div>
</div>
<?php }
else{?>
<div class="update_succesfully_profile_outer">
<div class="update_succesfully_profile">
<span>X</span>
<p><?php echo $this->session->flashdata('failed') ?></p>
</div>
</div>	
<?php	
	
}?>


<body>
<form action="<?php echo base_url()."/index.php/secret_controller/update_reset_pw"; ?>" method="POST">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
    <h1>Create New Password</h1>
    <input type="password" value="" placeholder="Password" name="password" id="password" />
    <input type="password" value="" placeholder="Confirm_Password" name="Confirm_password" id="Confirm_password" />
    <input type="hidden" value="<?php echo $emailid;?>" name="email"  />
	
	<button>Submit</button>
   <div class="loginremember">
            
                  
    </div>
</div>
</form>
</body>
<style>
   body {
    background: url('http://codenomad.biz/secret-angels/image/login_bg.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}
p{
    font: normal 12px/11px Arial;
    padding: 0 0 0 61px;
    clear: both;
    color: #e15960;
}
a {
       color: #00daff;
	   text-decoration: none;
}

.logo {
    width: 213px;
    height: 36px;
    background: url('http://codenomad.biz/secret-angels/image/fd8Lcso.png') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
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
    background: #fff url('http://codenomad.biz/secret-angels/image/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://codenomad.biz/secret-angels/image/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://codenomad.biz/secret-angels/image/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://codenomad.biz/secret-angels/image/Qf83FTt.png') 20px bottom no-repeat;
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
</style>
