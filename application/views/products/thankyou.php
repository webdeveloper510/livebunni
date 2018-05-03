<!DOCTYPE html>
<html lang="en">
<head>
  <title>thanks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
  body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #000;
    background-color: #000;
	padding-top: 50px;
}
.outer_main {
    width: 100%;
    float: left;
    padding: 0px;
    margin: 0;
}
  .top {
    padding: 13px;
    background: #fff;
}
.second {
    height: 100px;
    background: #cd2f2e;
    position: relative;
	    margin-top: 20px;
}
.popup {
    width: 45%;
    background: #fff;
    height: 350px;
    border-radius: 20px;
    left: 26%;
    position: absolute;
    top: 20%;
    border: 2px solid #cd2f2e6e;
    z-index: 9999;
    -webkit-box-shadow: 5px 5px 15px 5px #bfa2a2;
    box-shadow: 5px 5px 15px 5px #bfa2a2;
}
.popup h2{
    color: #000;
    text-align: center;
    font-weight: bold;
    font-family: cursive;
    font-size: 40px;
    color: #27ce4c;
}
span.glyphicon.glyphicon-ok {
    color: #27ce4c;
    font-size: 25px;
}
.third {
    background: #E3E3E3;
    height: 370px;
    position: relative;
    width: 100%;
}
.forht {
    height: 30px;
    background: #fff;
}
.cont
{
    font-family: 'Lato', sans-serif;
    font-weight: 400;
    font-size: 2rem;
    text-align: center;
    margin: auto;
    color: #b71c54;
    letter-spacing: .10rem;
    padding-bottom: 2rem;
}
.button {
    width: 12rem;
    border: 3px solid #FCA671;
    margin: auto;
    text-align: center;
    padding: 0.5rem;
    color: #FCA671;
    margin-top: 15px;
}
h3 {
    font-family: 'Lato', sans-serif;
    font-weight: 900;
    font-size: 1.8rem;
    text-align: center;
    margin: auto;
    letter-spacing: .10rem;
    margin-top: 3px;
    margin-bottom: 2px
}
  </style>
</head>
<body>
  <div class="outer_main">
    <div class="container">
       <div class="top"></div>
	   <div class="second"></div>
	     <div class="popup">
		   <h2>Thank you for purchasing ticket</h2>
		   <p style="text-align: center;"><span class="glyphicon glyphicon-ok"></p>
		    <p class="cont" style="padding: 4px 50px;">
			<label>Title : </label><span><?php echo $details['title']; ?></span>
			<label>Message : </label><span><?php echo $details['message']; ?></span>
			<label>Time : </label><span><?php echo $details['time']; ?></span>
			<label>Duration : </label><span><?php echo $details['duration']; ?></span>
			<label>Price : </label><span><?php echo $details['price']; ?></span-->
			<?php 
			
			?></p>
			<div id="home" class="button"> 
			  <a href="<?php echo base_url(); ?>"><h3> HOME </h3></a>
			</div>
		 </div>
	    <div class="third"></div>
	   <div class="forht"></div>
	</div>   
  </div>
</body>
</html>
