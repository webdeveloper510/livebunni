<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js"></script>
  <style>
  html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    background: #3a6186;
    background: linear-gradient(to left, #3a6186 , #89253e);
}
/*Contact sectiom*/
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  width: 100vw;
  background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
.contact-section {
    padding-top: 40px;
    padding-bottom: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit {
    font-size: 1.1em;
    float: right;
    width: 150px;
    background-color: transparent !important;
    color: #fff;
    border: 1px solid;
}
.submit:hover {
     background-color: #F1A33E !important;
    color: white!important;
    border: none;
}
button#send {
    float: right;
    margin-top: 10px;
    border: 1px solid;
    color: #fff;
}
  </style>
</head>
<?php include 'header.php';?>
<section id="contact">
			<div class="section-content">
				<h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
				<h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form >
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Your name</label>
					    	<input type="text" class="form-control" id="name" placeholder=" Enter Name">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email Address</label>
					    	<input type="email" class="form-control" id="email" placeholder=" Enter Email id">
					  	</div>	
              <div class="form-group">
                <label for="telephone">Mobile No.</label>           
              <input type="text" class="form-control input-medium bfh-phone" data-format="+1 (ddd) ddd-dddd" placeholder=" Enter 10-digit mobile no.">
              </div>
			  		</div>
            	<div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputUsername">Subject</label>
                <input type="text" class="form-control" id="subject" placeholder=" Enter Name">
              </div>
			  			<div class="form-group">
			  				<label for ="description"> Message</label>
			  			 	<textarea  class="form-control" id="message" placeholder="Enter Your Message"></textarea>
			  			</div>
			  			<div>

			  				<button type="button" class="btn btn-default submit" id="send"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                <div class="msg"></div>
			  			</div>
			  			
					</div>
				</form>
        <script>
          $('.submit').click(function(){
            var name = $('#name').val();
            var email = $('#email').val();
            var contact = $('#contact').val();
            var subject = $('#subject').val();
            var message = $('#message').val();
            $.ajax({
              url : '<?php echo base_url('contact_us_mail'); ?>',
              type : 'post',
              data : {name:name,email : email, contact : contact,subject : subject, message : message},
              success : function(val){
                alert(val);
                if(val=="email sent successfully")
                {
                  $('.msg').html('<h4>'+val+'</h4>');
                }
              }
            });
          });
        </script>
			</div>
		</section>
    <?php include 'footer.php';?>