  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <?php include('header.php');?>
<body>
<form action="<?php echo base_url()."/login_form"; ?>" method="POST">
<div class="logo"></div>
<div class="login-block">
    <h1>Login Form</h1>
	
	<?php if($this->session->flashdata('success')) { ?>
				<div class="update_succesfully_profile_outer">
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
	
	
	
    <input type="text" value="" placeholder="Username" name="username" id="username" />
    <input type="password" value="" placeholder="Password" name="password" id="password" />
	<div class="loginremember">
            <input type="checkbox" id="chbRemember" name="chbRemember" /><label class="check"
                for="chbRemember">Remember me next time</label>
    
    </div>
	<button>Submit</button>
   <div class="loginremember">
            <p><a href="http://codenomad.biz/secret-angels/forgot_pwd" id="reset_password_link">Click here</a> if you forgot your password!</p>
                <p>Don't have an account?&nbsp;<a id="signup_link" href="http://codenomad.biz/secret-angels/create">Join now</a></p>
    
    </div>
</div>
</form>
</body>
<style>
   body {
    background: url('http://codenomad.biz/secret-angels/uploads/girl5.jpg') no-repeat fixed center center;
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
    margin-bottom: 10px;
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

.update_succesfully_profile_outer {
    background: transparent;
    color: green;
    font-weight: bold;
    text-align: center;
    padding-top: 10px;
    font-size: 20px;
}
.update_notsuccesfully_profile_outer
{
	background: transparent;
    color: red;
    font-weight: bold;
    text-align: center;
    padding-top: 10px;
    font-size: 20px !important;
}
.update_notsuccesfully_profile_outer p {
    padding: 0px;
    font-size: 17px;
    margin-top: -10px;
}
.loginremember p {
    margin-top: 9px;
    text-align: left;
    padding-left: 0px;
}
</style>
