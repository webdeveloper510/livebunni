

<style>

body {
    background: grey;
    background-repeat: no-repeat;
    background-size: cover;
}
.login_wrapper {
    max-width: 40%;
    position: absolute;
    left: 0;
    right: 0;
    margin: 0 auto;
    top: 20%;
}
.login_form {
    background: aliceblue;
    padding: 0px 0px 21px;
	border-top-right-radius: 38px;
	border-bottom-left-radius: 38px;
}
section.login_content h1 {
    text-align: center;
    background-color: background: #fe7206; /* Old browsers */
background: -moz-linear-gradient(top, #fe7206 1%, #fd2f1b 100%, #fd2f1b 100%, #fd2f1b 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, #fe7206 1%,#fd2f1b 100%,#fd2f1b 100%,#fd2f1b 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, #fe7206 1%,#fd2f1b 100%,#fd2f1b 100%,#fd2f1b 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fe7206', endColorstr='#fd2f1b',GradientType=0 ); /* IE6-9 */
    padding: 10px;
	border-top-right-radius: 38px;
	border-bottom-left-radius: 38px;
}
.login_content h1 {
    color: #fff;
    font-family: sans-serif;
}
#username {
    background-position: 10px 10px !important;
    height: 41px;
    padding: 5px;
    background-color: #fff !important;
    border-radius: 6px;
}
#password {
    background-position: 10px -53px !important;
    padding: 5px;
	height: 41px;
	border-radius: 6px;
    background-color: #fff !important;
}
.login_content form input[type="submit"], #content form .submit {
    float: left;
    margin-left: 0px;
    background: #fe7206 ;
    border: none;
    padding: 10px 30px;
    color: #fff;
    font-size: 15px;
    font-weight: 700;
    cursor: pointer;
    border-radius: 6px;
}
span#checklogin {
    color: #D4202B;
    text-shadow: none;
    font-size: 17px;
}
.submit-div {
    text-align: center;
    margin-top: 26px;
}
.submit-div input {
    float: inherit !important;
}
p.privacy-div {
    color: #666;
    text-shadow: none;
    font-size: 15px;
    text-align: center;
}
.each-div input {
    width: 100%;
    border: 1px solid #efefef;
}
.login-form {
    padding: 0px 32px;
    width: 60%;
    margin: 0 auto;
}
.each-div {
    margin: 10px 0px;
}
.login-form {
    padding: 0px 32px;
}
</style>
<title>Secret angels |  Login </title>

<div class="login_wrapper">
	<div class="animate form login_form">
	<section class="login_content">
	 <form action="<?php echo base_url('admin/index.php/backend/login')?>" method="post">
	     <h1>Login Form</h1>
			<div class="login-form">
			<div class="each-div">
			
			<input type="text" class="form-control" placeholder="Username" id="username" name="username" required="" />
			</div>
			<div class="each-div">
			<input type="password" class="form-control" placeholder="Password" id="password" name="password" required="" />
			</div>
			<div class="submit-div">
			<input type="submit" class="btn btn-default submit" name="submit" id="loginbackend" value="Log In"/>
			<!--a class="reset_pass" href="#">Lost your password?</a-->
			</div>
			<!--------------------inserted  popup------------------>
			  <?php if($this->session->flashdata('failed')) { ?>
			  <div class="success" id="truee" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                   <h4>   <?php echo $this->session->flashdata('failed'); ?></h4>
					</div>
                </div>
			  <?php } else { } ?>
		  <span id="checklogin"></span>
		<div class="clearfix"></div>

		<div class="separator">
			<!--p class="change_link">New to site?
			<a href="#signup" class="to_register"> Create Account </a>
			</p-->
			<div class="clearfix"></div>
			<br />
			
		</div>
		</div>
	</form>
	</section>
</div>
