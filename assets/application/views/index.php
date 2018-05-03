<!DOCTYPE html>

<html>

  <head>

     <title>Secret Angels</title>

    <meta charset="utf-8"> 

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/style.css"/>

	<link rel="stylesheet" href="css/bootstrap.min.css"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="js/jquery.min.js"></script>

	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	

  </head>

  <body>

    <div class="main-outer">

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

				<a class="navbar-brand" href="#"><img src="image/corporate/logo.png"></a>

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

				<ul class="nav navbar-nav">

				  <li class="dropdown">

					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></a>

					<ul class="dropdown-menu">

					  <li><a href="#">Action</a></li>

					  <li><a href="#">Another action</a></li>

					  <li><a href="#">Something else here</a></li>

					  <li class="divider"></li>

					  <li><a href="#">Separated link</a></li>

					</ul>

				  </li>

				</ul>

				<ul class="nav navbar-nav navbar-right">

				  <li><a href="#">Live Cams</a></li>

				  <li><a href="#">Awards</a></li>

				  <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>

				  <li><a href="#"><i class="fa fa-heart-o"></i></a></li>

				  <li><a href="gallery.html">Get Credits</a></li>

				  <li class="Login" data-toggle="modal" data-target="#myModal"><a href="#">Login</a></li>

				  <!-- Modal -->

						  <div class="modal fade" id="myModal" role="dialog">

							<div class="modal-dialog">

							

							  <!-- Modal content-->

							  <div class="modal-content">

								<div class="modal-header">

								  <h2>Login</h2>   <span class="lock_icon">&nbsp;</span>   <a id="support_btn" class="second_button small" href="#">Contact Support</a>   <a href="#" class="close_button"><span>&nbsp;</span></a> 

								</div>

								<div class="modal-body">

								  	<div class="main-login main-center">

					                  <form class="form-horizontal" method="post" id="login_form" action="index.php/secret_controller/login">

									        <h3 class="Welcome" style="text-align: center;">Welcome to Secret-Angels</h3>

											<div class="form-group">

											  <label class="control-label col-sm-2" for="email">Username:</label>

											  <div class="col-sm-10">

												<input type="text" class="form-control" id="email" placeholder="Enter username" name="login_username">
												<span id="erroruser"></span>
											  </div>

											</div>

											<div class="form-group">

											  <label class="control-label col-sm-2" for="pwd">Password:</label>

											  <div class="col-sm-10">          

												<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
												<span id="errorpass"></span>
											  </div>

											</div>
											

											<div class="form-group">        

											  <div class="col-sm-offset-2 col-sm-10">

												<button type="submit" class="btn btn-default">Submit</button>

											  </div>

											</div>

											<p><a href="#" id="reset_password_link">Click here</a> if you forgot your password!</p>

										  </form>

									  </form>

								   </div>   

								</div>

								<div class="modal-footer">

								  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

								</div>

							  </div>

							  

							</div>

						  </div>

				  <!-- Modal end-->					 

				  <li class="Sign_Up" data-toggle="modal" data-target="#product_view"><a href="#"> Sign Up</a></li>

				   <!-- Modal -->

						<div class="modal fade product_view" id="product_view">

							<div class="modal-dialog">

								<div class="modal-content">

									<div class="modal-header">

										<a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>

										<h3 class="modal-title">Support</h3>

									</div>

									<div class="modal-body">

										<div class="row">

											

											<div class="col-md-6 product_content">

											    <h3 class="Join_now">Join now for Free!</h3>

												<form id="signup" action="<?php echo base_url('index.php/secret_controller/add_member'); ?>" method="post"> 

												  <div class="form-group">

													<label for="Username">User Name</label>

													<input type="text" name="username" class="form-control" id="reg_username">
													<span id="signupuser"></span>

												  </div>

												  <div class="form-group">

													<label for="pwd">Password:</label>

													<input type="password" name="password"  class="form-control" id="reg_pwd">
													<span id="signuppass"></span>			
												  </div>

												  <div class="form-group">

												  <label for="email">Email address:</label>

													<input type="email" name="email_id" class="form-control" id="reg_email">
													<span id="signupemail"></span>
												  </div>
												  <div class="form-group">

												  <label for="credit_card">Enter Credit card number:</label>

													<input type="text" name="card_number" class="form-control" id="card_number">
													<span id="signupcard"></span>				
												  </div>
												  <div class="form-group">

												  <label for="credit_card">Enter name on Credit card:</label>

													<input type="text" name="card_name" class="form-control" id="card_name">
													<span id="signupcard_name"></span>
												  </div>
												  
												  <div class="form-group">

												  <label for="credit_card">Select expiry date on Credit card:</label><br>

												Expiry Month : <select class="form-control" name='expireMM' id='expireMM'>
													<option value=''>Month</option>
													<option value='01'>January</option>
													<option value='02'>February</option>
													<option value='03'>March</option>
													<option value='04'>April</option>
													<option value='05'>May</option>
													<option value='06'>June</option>
													<option value='07'>July</option>
													<option value='08'>August</option>
													<option value='09'>September</option>
													<option value='10'>October</option>
													<option value='11'>November</option>
													<option value='12'>December</option>
												</select> 
												<span id="signupmonth"></span><br>
												Expiry Year :	<select name='expireYY' class="form-control" id='expireYY' >
													<option value=''>Year</option>
													<option value='15'>2015</option>
													<option value='16'>2016</option>
													<option value='17'>2017</option>
													<option value='18'>2018</option>
													<option value='19'>2019</option>
													<option value='20'>2020</option>
													<option value='21'>2021</option>
													<option value='22'>2022</option>
													<option value='23'>2023</option>
													<option value='24'>2024</option>
													<option value='25'>2025</option>
													<option value='26'>2026</option>
													<option value='27'>2027</option>
													<option value='28'>2028</option>
													<option value='29'>2029</option>
													<option value='30'>2030</option>
													<option value='31'>2031</option>
													<option value='32'>2032</option>
													<option value='33'>2033</option>
													<option value='34'>2034</option>
													<option value='35'>2035</option>
													<option value='36'>2036</option>
													<option value='37'>2037</option>
													<option value='38'>2038</option>
													<option value='39'>2039</option>
													<option value='40'>2040</option>
													<option value='41'>2041</option>
												</select>
												<span id="signupyear"></span>
												  </div>
												  <div class="form-group captcha">
												  <?php echo $captcha['image'];?>
												  
												 </div>
												   <div class="form-group">

												  <label for="credit_card">Enter captcha code:</label>

													<input type="text" name="captcha_code" class="form-control" id="captcha_code">
													<span id="signupcode"></span>			
												  </div>
												 <input type="hidden" name="captcha" id="cap" value="<?php echo $captcha['word'];?>"

												  <p class="terms">     By clicking on Join now, I acknowledge that I am 18+ years old and have read, understood and accepted the <a href="/en/terms-and-conditions" id="terms_link" target="_blank">Terms &amp; Conditions</a>.   </p>

												  <div class="submit_block">     

												  <input  class="first_button" type="submit" value="Take me in" name="submit_button">     <div class="first_button loader_button" style="width: 131px; padding: 0px;"><span class="loader">&nbsp;</span></div>    </div>

												  <p class="login_link"><a id="login_link" href="">Login</a></p>

												</form>

												

													<!-- end col -->

											</div>

											<div class="col-md-6 product_img">

												<div id="optimize-2178-right-side">

												<h3 id="optimize-2178-right-side-title">Members get <br>more fun:</h3>											

												</div>

												<div class="hellooo">

												  <ul class="bonus">

													  <li><a href=""><i class="fa fa-database" aria-hidden="true"></i>10 bonus minutes</a></li>

													  <li><a href=""><i class="fa fa-eye" aria-hidden="true"></i>HD live shows</a></li>

													  <li><a href=""><i class="fa fa-lock" aria-hidden="true"></i>100% privacy</a></li>

													  <li><a href=""><i class="fa fa-star" aria-hidden="true"></i>Unique experience</a></li>

												 </ul>

												</div>

											</div>

										</div>

										</div>

									</div>

								</div>

						</div>				  

				</ul>
				
<!--------------------error  popup---------------------->
 <?php if($this->session->flashdata('signup_check')) { ?>
<script>
alert("Email id already exists");
</script>
 <?php }  ?>
  <?php if($this->session->flashdata('login_check')) { ?>
<script>
alert("Incorrect login details Please try again!!");
</script>
 <?php }  ?>
			  </div><!-- /.navbar-collapse -->

			 </div><!---container div-->

			</nav>

	  <!--  header sections end -->	

	 <div class="col-md-12 col-sm-12 banner_sections">	

     <div class="container">

	 <div class="scorling_section">
		<?php //print_r($profiles); die;?> 
      	 <div class="col-md-6 col-sm-6 left-sec">
			<?php 
				for($j=0;$j<count($profiles);$j++)
				{
			?>
		     <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">
				
			    <div class="out_comman comn_padd">

                    <div class="team-member">

                        <a href="profile.html" target="_blank"><img src="<?php echo base_url('uploads/'.$profiles[$j][0]['profile_img']);?>" class="img-responsive" alt=""></a>

						 <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						<a href="http://google.com" class="cornerLink"><?php if($profiles[$j][0]['Online']==1){ ?><i class="fa fa-circle green"></i><?php } else { ?><i class="fa fa-circle gray"></i><?php } echo $profiles[$j][0]['First_name']." ".$profiles[$j][0]['Last_name']?> </a>

                    </div>

				</div>	

			 </div>
				<?php } ?>
			  <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

 			    <div class="out_comman comn_padd">

                    <div class="team-member">

                        <img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						<a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

                    </div>

				</div>	

			 </div>

			  <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

			    <div class="out_comman comn_padd"> 

                    <div class="team-member">

                        <img src="image/corporate/corporate36.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						<a href="http://google.com" class="cornerLink"><!--i class="fa fa-circle green"></i--><i class="fa fa-circle gray"></i>John Doe </a>

                    </div>

				</div>	

			 </div>

			  <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

			    <div class="out_comman comn_padd"> 

                    <div class="team-member">

                        <img src="image/corporate/corporate33.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						<a href="http://google.com" class="cornerLink"><!--i class="fa fa-circle green"></i--><i class="fa fa-circle gray"></i>John Doe </a>

                    </div>

				</div>	

			 </div>

		 </div>

         <div class="col-md-6 col-sm-6 right-sec" data-wow-duration="2s" data-wow-delay="300ms">

		         <div class="out_comman">

                     <div class="team-member">

                        <img src="image/corporate11.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						<a href="http://google.com" class="cornerLink"><!--i class="fa fa-circle green"></i--><i class="fa fa-circle gray"></i>John Doe </a>

                    </div>

				</div>	

		 </div>	

         <div class="clear" style="clear: both;"></div>		 

	     <div class="row row11">

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">

                   <div class="out_comman">				

                    <div class="team-member">

                        <img src="image/corporate/corporate33.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						<a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

                    </div>

				   </div>

					

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate34.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						<a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						<a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1200ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate36.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						<a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

		 </div> <!--  ist section end -->

         <div class="clear" style="clear: both;"></div>	

		        <div class="row row11">

                  <div class="col-md-6 col-sm-6 right-sec" data-wow-duration="2s" data-wow-delay="300ms">

						 <div class="out_comman">

							 <div class="team-member">

								<img src="image/corporate11.jpg" class="img-responsive" alt="">

								<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						        <a href="http://google.com" class="cornerLink"><!--i class="fa fa-circle green"></i--><i class="fa fa-circle gray"></i>John Doe </a>

							</div>

						</div>	

		          </div>

				  <div class="col-md-6 col-sm-6 left-sec">

						 <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd">

								<div class="team-member">

									<img src="image/corporate/corporate34.jpg" class="img-responsive" alt="">

									<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						             <a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

								</div>

							</div>	

						 </div>

						  <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd">

								<div class="team-member">

									<img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

									<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						            <a href="http://google.com" class="cornerLink"><!--i class="fa fa-circle green"></i--><i class="fa fa-circle gray"></i>John Doe </a>

								</div>

							</div>	

						 </div>

						  <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd"> 

								<div class="team-member">

									<img src="image/corporate/corporate36.jpg" class="img-responsive" alt="">

									<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						             <a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

								</div>

							</div>	

						 </div>

						  <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd"> 

								<div class="team-member">

									<img src="image/corporate/corporate33.jpg" class="img-responsive" alt="">

									 <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						               <a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

								</div>

							</div>	

						 </div>

		           </div>

				  

			   </div>	<!--  end dupe sections end -->	

             <div class="row row11">

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">

                   <div class="out_comman">				

                    <div class="team-member">

                        <img src="image/corporate/corporate33.jpg" class="img-responsive" alt="">

                         <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						<a href="http://google.com" class="cornerLink"><!--i class="fa fa-circle green"></i--><i class="fa fa-circle gray"></i>John Doe </a>

                    </div>

				   </div>

					

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate34.jpg" class="img-responsive" alt="">

                         <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						<a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

                         <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink"><!--i class="fa fa-circle green"></i--><i class="fa fa-circle gray"></i>John Doe </a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1200ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate36.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						<a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

		    </div> <!--  ist section end -->			 

	        <div class="clear" style="clear: both;"></div>	

			<div class="row row11">

                  <div class="col-md-3 col-sm-3 right-sec1" data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd">

								<div class="team-member">

									<img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

									<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						             <a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

								</div>

							</div>

				  <div class="col-md-12 col-sm-12 right-sec1" data-wow-duration="2s" data-wow-delay="300ms">

						 <div class="out_comman">

							 <div class="team-member">

								<img src="image/corporate11.jpg" class="img-responsive" alt="">

								<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						       <a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

							</div>

						</div>	

		          </div>		

		          </div>

				  <div class="col-md-6 col-sm-6 center-sec">

						 <div class="col-md-12 col-sm-12 data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd">

								<div class="team-member team-member12">

									<img src="image/corporate/center.jpg" class="img-responsive" alt="">

									<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						              <a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

								</div>

							</div>	

						</div>	

				  </div>

				  <div class="col-md-3 col-sm-3 right-sec1" data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd">

								<div class="team-member">

									<img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

									<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						             <a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

								</div>

							</div>	

		          <div class="col-md-12 col-sm-12 right-sec1" data-wow-duration="2s" data-wow-delay="300ms">

						 <div class="out_comman">

							 <div class="team-member">

								<img src="image/corporate11.jpg" class="img-responsive" alt="">

								 <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						          <a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

							</div>

						</div>	

		          </div>						

				 </div>

			</div>	

		</div>	<!-- first scrolling section -->	

			<!-- center image sections end -->

			<div class="clear" style="clear: both;"></div>

		<div class="second_scrolling">		

			 <div class="row row11">

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">

                   <div class="out_comman">				

                    <div class="team-member">

                        <img src="image/corporate/corporate33.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink"><!--i class="fa fa-circle green"></i--><i class="fa fa-circle gray"></i>John Doe </a>

                    </div>

				   </div>

					

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate34.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						  <a href="http://google.com" class="cornerLink"><!--i class="fa fa-circle green"></i--><i class="fa fa-circle gray"></i>John Doe </a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						  <a href="http://google.com" class="cornerLink"><!--i class="fa fa-circle green"></i--><i class="fa fa-circle gray"></i>John Doe </a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1200ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate36.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						  <a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

		    </div> <!--  ist section end -->

			

            <div class="clear" style="clear: both;"></div>

			<div class="row row11">

            <div class="col-md-6 col-sm-6 left-sec">

		     <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

			    <div class="out_comman comn_padd">

                    <div class="team-member">

                        <img src="image/corporate/corporate34.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink"><!--i class="fa fa-circle green"></i--><i class="fa fa-circle gray"></i>John Doe </a>

                    </div>

				</div>	

			 </div>

			  <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

			    <div class="out_comman comn_padd">

                    <div class="team-member">

                        <img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink"><i class="fa fa-circle green"></i><!--i class="fa fa-circle gray"></i-->John Doe </a>

                    </div>

				</div>	

			 </div>

			  <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

			    <div class="out_comman comn_padd"> 

                    <div class="team-member">

                        <img src="image/corporate/corporate36.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				</div>	

			 </div>

			  <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

			    <div class="out_comman comn_padd"> 

                    <div class="team-member">

                        <img src="image/corporate/corporate33.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				</div>	

			 </div>

		 </div>

         <div class="col-md-6 col-sm-6 right-sec" data-wow-duration="2s" data-wow-delay="300ms">

		         <div class="out_comman">

                     <div class="team-member">

                        <img src="image/corporate11.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				</div>	

		 </div>	

		 </div>

         <div class="clear" style="clear: both;"></div>		 

	     <div class="row row11">

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">

                   <div class="out_comman">				

                    <div class="team-member">

                        <img src="image/corporate/corporate33.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				   </div>

					

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate34.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1200ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate36.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

		 </div> <!--  ist section end -->

         <div class="clear" style="clear: both;"></div>	

		        <div class="row row11">

                  <div class="col-md-6 col-sm-6 right-sec" data-wow-duration="2s" data-wow-delay="300ms">

						 <div class="out_comman">

							 <div class="team-member">

								<img src="image/corporate11.jpg" class="img-responsive" alt="">

								<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						         <a href="http://google.com" class="cornerLink">John Doe</a>

							</div>

						</div>	

		          </div>

				  <div class="col-md-6 col-sm-6 left-sec">

						 <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd">

								<div class="team-member">

									<img src="image/corporate/corporate34.jpg" class="img-responsive" alt="">

									<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						               <a href="http://google.com" class="cornerLink">John Doe</a>

								</div>

							</div>	

						 </div>

						  <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd">

								<div class="team-member">

									<img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

									<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						             <a href="http://google.com" class="cornerLink">John Doe</a>

								</div>

							</div>	

						 </div>

						  <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd"> 

								<div class="team-member">

									<img src="image/corporate/corporate36.jpg" class="img-responsive" alt="">

									<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						              <a href="http://google.com" class="cornerLink">John Doe</a>

								</div>

							</div>	

						 </div>

						  <div class="col-md-6 col-sm-6 data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd"> 

								<div class="team-member">

									<img src="image/corporate/corporate33.jpg" class="img-responsive" alt="">

									<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						              <a href="http://google.com" class="cornerLink">John Doe</a>

								</div>

							</div>	

						 </div>

		           </div>

				  

			   </div>	<!--  end dupe sections end -->	

             <div class="row row11">

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">

                   <div class="out_comman">				

                    <div class="team-member">

                        <img src="image/corporate/corporate33.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				   </div>

					

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate34.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						  <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1200ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate36.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						  <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

		    </div> <!--  ist section end -->			 

	        <div class="clear" style="clear: both;"></div>	

			<div class="row row11">

                  <div class="col-md-3 col-sm-3 right-sec1" data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd">

								<div class="team-member">

									<img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

									<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						              <a href="http://google.com" class="cornerLink">John Doe</a>

								</div>

							</div>

				  <div class="col-md-12 col-sm-12 right-sec1" data-wow-duration="2s" data-wow-delay="300ms">

						 <div class="out_comman">

							 <div class="team-member">

								<img src="image/corporate11.jpg" class="img-responsive" alt="">

								 <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						              <a href="http://google.com" class="cornerLink">John Doe</a>

							</div>

						</div>	

		          </div>		

		          </div>

				  <div class="col-md-6 col-sm-6 center-sec">

						 <div class="col-md-12 col-sm-12 data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd">

								<div class="team-member team-member12">

									<img src="image/corporate/center.jpg" class="img-responsive" alt="">

									 <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						              <a href="http://google.com" class="cornerLink">John Doe</a>

								</div>

							</div>	

						</div>	

				  </div>

				  <div class="col-md-3 col-sm-3 right-sec1" data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd">

								<div class="team-member">

									<img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

									 <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						              <a href="http://google.com" class="cornerLink">John Doe</a>

								</div>

							</div>	

		          <div class="col-md-12 col-sm-12 right-sec1" data-wow-duration="2s" data-wow-delay="300ms">

						 <div class="out_comman">

							 <div class="team-member">

								<img src="image/corporate11.jpg" class="img-responsive" alt="">

								<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						              <a href="http://google.com" class="cornerLink">John Doe</a>

							</div>

						</div>	

		          </div>						

				 </div>

			</div>	 

		</div>

			<!-- Center image section end -->

			

		<div class="third_scrolling">	

			<div class="row row11">

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">

                   <div class="out_comman">				

                    <div class="team-member">

                        <img src="image/corporate/corporate33.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				   </div>

					

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="600ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate34.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="900ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

                        <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						 <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

                <div class="col-md-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1200ms">

				  <div class="out_comman">

                    <div class="team-member">

                        <img src="image/corporate/corporate36.jpg" class="img-responsive" alt="">

                         <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						  <a href="http://google.com" class="cornerLink">John Doe</a>

                    </div>

				  </div>	

                </div><!-- /.col-md-3 -->

		    </div> <!--  ist section end -->

			<div class="row row11">

                  <div class="col-md-3 col-sm-3 right-sec1" data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd">

								<div class="team-member">

									<img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

									  <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						              <a href="http://google.com" class="cornerLink">John Doe</a>

								</div>

							</div>

				  <div class="col-md-12 col-sm-12 right-sec1" data-wow-duration="2s" data-wow-delay="300ms">

						 <div class="out_comman">

							 <div class="team-member">

								<img src="image/corporate11.jpg" class="img-responsive" alt="">

								 <div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						              <a href="http://google.com" class="cornerLink">John Doe</a>

							</div>

						</div>	

		          </div>		

		          </div>

				  <div class="col-md-6 col-sm-6 center-sec">

						 <div class="col-md-12 col-sm-12 data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd">

								<div class="team-member team-member12">

									<img src="image/corporate/center.jpg" class="img-responsive" alt="">

									<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						              <a href="http://google.com" class="cornerLink">John Doe</a>

								</div>

							</div>	

						</div>	

				  </div>

				  <div class="col-md-3 col-sm-3 right-sec1" data-wow-duration="2s" data-wow-delay="300ms">

							<div class="out_comman comn_padd">

								<div class="team-member">

									<img src="image/corporate/corporate35.jpg" class="img-responsive" alt="">

									<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						              <a href="http://google.com" class="cornerLink">John Doe</a>

								</div>

							</div>	

		          <div class="col-md-12 col-sm-12 right-sec1" data-wow-duration="2s" data-wow-delay="300ms">

						 <div class="out_comman">

							 <div class="team-member">

								<img src="image/corporate11.jpg" class="img-responsive" alt="">

								<div class="edit"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>

						              <a href="http://google.com" class="cornerLink">John Doe</a>

							</div>

						</div>	

		          </div>						

				 </div>

			</div>	 

		</div>

            <div class="clear" style="clear: both;"></div>				

		<div class="show_more"><button type="button" class="btn btn-default" id="btn-default">Show More</button></div>

	 <!---footer div-->   

	 <div class="col-md-12 col-sm-12 footer-top">

		<div id="footer" class="">

			<div class="footer_top">

				<ul>

					<li><a class="footer_link" href="" target="_blank" rel="nofollow">Model Login</a></li>

					<li><a class="footer_link" href="" target="_blank" rel="nofollow">Adult Affiliate Program</a></li>

					<li><a class="footer_link" href="" target="_blank" rel="nofollow">Models Wanted</a></li>

					<li><a class="footer_link track" href="">Events and Media</a></li>

					<li><a class="footer_link track" href="">Careers</a></li>

					<li><a id="contactus_link" class="footer_link track" href="">Contact Us</a></li>

					<li><li><a href="#"><i class="fi-social-facebook"></i></a></li></li>

					<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>

					<li><a href="#"><i class="fa fa-instagram"></i></a></li>

					<li><a id="faq_link" class="footer_link track" href="">F.A.Q.</a></li>

					<li><a id="dmca_link" class="footer_link track" href="">DMCA Complaint</a></li>

					<li><a id="support_online_link" class="footer_link track" href="">Support</a></li>

				</ul>

			</div>

	    </div>	 

	 </div>	

	

	</div><!---container div-->     		  

	</div>  <!---banner sec div-->    

	

	   

    </div>	<!--  main-outerend -->	

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
	
	</script>
	<script src="js/custom.js"></script>

  </body>

</html>

