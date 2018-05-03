
<html>
  <head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('css/landingpage.css'); ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('css/style3.css'); ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('css/star-rating.css'); ?>"/>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  </head>
  <style>
 body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #ffff;
  border-bottom:1px solid #d21c61;
    box-shadow: 9px 3px 17px grey;
}
.dropdown, .dropup {
    position: static;
}
.topnav a {
    float: left;
    display: block;
    color: #050505;
    text-align: center;
    padding: 14px 28px;
    text-decoration: none;
    font-size: 15px;
    /* font-family: -webkit-pictograph; */
    font-weight: bold;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
    float: right;
    overflow: hidden;
	margin-top: 4px;
}

.dropdown .dropbtn {
    font-size: 17px;
    border: none;
    outline: none;
    color: white;
    padding: 7px 14px;
    border-radius: 7px;
    background-color: #d21c61;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #d21c61;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    float: right;
    border-radius: 7px;
}

.dropdown-content a {
    float: none;
    color: #ffffff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown-content a:hover {
    background-color: black;
}




.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative; float:left;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 40%;
    text-align: left;
  }
}
.logo {
    width: 200px;
    margin-top: -5px;
}
a.hover:hover {
    background-color: #c91e68;
	color:#ffffff;
}

.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
   .colimg{
	   -ms-flex: 25%;
    flex: 25%;
    padding: 1px 4px;
    max-height: 26%;
    margin-left: 23px;
   }

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}

  </style>    
  <body>

	<div class="topnav checkmr" id="myTopnav">
	<div class="container">
    <a  href="<?php echo base_url('main_page');?>"><img class="logo" src="<?php echo base_url('image/corporate/logo.png'); ?>"></a>
  <a class="hover" href="#news">Home</a>
  <a class="hover" href="#contact">Model</a>
 
 
   <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="<?php echo base_url()."profile_page"; ?>"><i class="fa fa-user">&nbsp;&nbsp;Profile</i> </a>
     <a href="<?php echo base_url()."favourite"; ?>"><i class="fa fa-heart">&nbsp;&nbsp;Favourite</i></a></li>
     <a href="#" onclick="settingpop(this)"><i class="fa fa-cog">&nbsp;&nbsp;Setting</i></a></li>
	 <a href="<?php echo base_url()."Products/buy_credit"; ?>"><i class="fa fa-usd">&nbsp;&nbsp;&nbsp;Credit</i></a>
	 <a href="<?php echo base_url()."logouts"; ?>"><i class="fa fa-power-off">&nbsp;&nbsp;Logout</i></a>
    </div>
  </div>   
   
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
 </div> 
</div>

<!--------------------------------------------------------------------------------------->

   
   
   
<div class="container-fluid">
			<div class="col-md-12 col-sm-6 video_on">	
	 
	   
	      <div class="col-md-9 col-sm-9 video_live">
		      <iframe  width="100%" height="100%"src="https://www.youtube.com/embed/XGSy3_Czz8k">
              </iframe> 
		
  

		  </div>
		  		  <div class="col-md-3 col-sm-3 video_righ">
		     
			     <div class="row sideimg"> 
  <div class="column colimg">
     			       <img src="<?php echo base_url() ?>image/corporate/left-image.jpg" class="img-responsive" alt="" style="width:100%; height:100%;">
    </div>
    </div>
    
	 <div class="row sideimg"> 
	  <div class="column colimg">
   			       <img src="<?php echo base_url() ?>image/corporate/left-image.jpg" class="img-responsive" alt="" style="width:100%; height:100%;">
  </div>
  
  </div>
  <div class="row sideimg"> 
	  <div class="column colimg">
   			       <img src="<?php echo base_url() ?>image/corporate/left-image.jpg" class="img-responsive" alt=""style="width:100%; height:100%;">
  </div>
  
  </div>
   <div class="row sideimg"> 
	 <div class="column colimg">
   			        <div class="col-md-3 col-sm-3"><button type="button" class=" btred3">Check my wall</button></div>
  </div>
  
 </div>
 
 
		  </div>	
		  </div>
		  </div>
		
	  
	 
	   
	   
	 <!--------------------------------------------------------------->

	   <section>
 
<div class="col-md-12 checkit">

  <ul class="nav nav-tabs ">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

					<div class="row row11">
						 <div class="col-md-4 col-sm-4">
								  <!--div class="col-md-6 col-sm-6 dp_profile">
								     <img src="image/corporate/img_avatar3.png" alt="Avatar" class="img-responsive img-circle" style="width:85px">
								  </div-->	
                                  <div class="col-md-12 col-sm-12 dp_right">
								  <div class="team-member">
			       <img src="<?php echo base_url('/uploads/gallery/'.$Model_profile[0]['profile_img']); ?>" class=" img-responsive img-circle" alt="" style="width:100%;
    height:100%;">
				  </div> 
								    
        
        <input type="text" class="rating rating-loading starcode" value="0" data-size="sm" title="">
        <br>
      

        
       
        <br>
        <input type="text" class="kv-gly-star rating-loading " value="0" dir="rtl" data-size="sm" title="">
        <div class="clearfix"></div>
        
   
									  <h2 style="color: #fff; text-align: center;    margin-top: -10%;"><?php echo $Model_profile[0]['First_name'].$Model_profile[0]['Last_name'];?></h2>
								  </div>								  
								  <div class="col-md-12 col-sm-12 dp_text">
								    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec augue vitae ex luctus pellentesque. Duis aliquet gravida enim ac dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis nec nisl volutpat, porta risus sed, tristique elit.</p>
								  </div>
							<div class="col-md-4 col-sm-4 Name"><h4 style="color: #fff";>Age</h4><h5 style="color: yellow";><?php echo $Model_profile [0]['Age'] ?></h5></div>
							<div class="col-md-4 col-sm-4 big"><h4 style="color: #fff";>Big</h4><h5 style="color: yellow";>36</h5></div>
							<div class="col-md-4 col-sm-4 gender"><h4 style="color: #fff";>Gender</h4><h5 style="color: yellow";><?php echo $Model_profile[0]['Gender']?></h5></div>
							
						  </div>
						

</div>
<div class="columns">
  <ul class="price">
    <li class="header">Basic</li>
    <li class="grey">$ 9.99 / year</li>
    <li>10GB Storage</li>
    <li>10 Emails</li>
    <li>10 Domains</li>
    <li>1GB Bandwidth</li>
    <li class="grey"><a href="#" class="button">Sign Up</a></li>
  </ul>
</div>
</div>

    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</section>

</div>	   
	   
	   
	   
	   
	   
	   
	   
	  

	   
	  
   
	
  
  
</body>
</html>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
