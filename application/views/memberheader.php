<!DOCTYPE html>
<?php
foreach($id as $idss){
    $username=$idss['Username'];
    
}
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
?>
<html>

  <head>
 
      <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <meta name="apple-mobile-web-app-capable" content="yes">

    
    <link rel="stylesheet" href="<?php echo base_url('css/landingpage.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('css/style3.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>"/>
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="<?php echo base_url('css/style3.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/reset2.0.min.css');?>"> 
    <link rel="stylesheet" href="<?php echo base_url('css/star-rating.css'); ?>" media="all" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    
      
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    <script src="<?php echo base_url('js/star-rating.js'); ?>" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/jquery.emojipicker.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('js/jquery.emojipicker.js'); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/jquery.emojipicker.tw.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('js/jquery.emojis.js'); ?>"></script>
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
 /*  background-color: #4CAF50; */
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
     background-color: #f1A333;
    color: #fff;
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
    width: 112%;
    text-align: left;
    border-radius: 0px 9px 9px 2px;
  }
}
.logo {
    width: 100px;
    margin-top: -20px;
}
a.hover:hover {
    background-color: #F1A33E !important;
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
  .w3-modal-content
  {
          background-color: #a11835 !important;
  }
  
li.dropdown.dropit {
    margin-top: 10px;
}
 ul.dropdown-menu.dropup {
    background-color: #C6145F;
}
.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
    color: #262626;
    text-decoration: none;
    background-color:#C6145F;
}

    .popuphead{
        background-color:black;
        color:white;
    }
    .form-group {
    margin-top: 22px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.btn-default {
   
  
    border-color: #ccc;
    margin-left: 16px;
    
}
.w3-modal-content {
    margin: auto;
    background-color: #fff;
    position: relative;
    padding: 0;
    outline: 0;
    width: 70%;
    background-color: #d21e60;
    color: white;
    /* z-index: 1143; */
    z-index: 10000;
    min-height:87%;
}
.button {
    background-color: black;
    color: white;
    width: 15%;
    padding: 3px;
        border-color: #ccc;
}
.errormess3{
    text-align:center;
}
.textbox {
    display: block;
    width: 89%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

button#dp_button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
button#dp_button {
    background: #d21e60;
    border: none;
    float: right;
    margin-top: 13px;
    color: white;
    width: 136px;
    margin-left: 1px;
    border-radius: 10px;
}

/* #editpass,#editpass1,#editpass2{
    display:block;
} */
.button {
    padding: 9px 55px 4px 18px;
    font-size: 14px;
    text-align: center;
    cursor: pointer;
    outline: none;
    color: #fff;
     background-color: #F1A33E; 
    border: none;
    border-radius: 5px;
    box-shadow: 0 2px white;
    text-align: center;
}



.button:active {
 
  box-shadow: 0 2px #666;
  transform: translateY(4px);
}
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
.newadd2 {
      font-size: 10px !important;
    /* position: relative; */
    color: #ffffff !important;
    background: #cf1d65 !important;
    text-align: center !important;
    font: bold 9px Arial !important;
    border-radius: 3px !important;
    padding: 1px 2px 0 !important;
    text-transform: uppercase;
    position: absolute !important;
    top: 1% !important
}   
/* Css For error and success msg */

.alert.abs {
position: fixed;
top: 110px;
margin: 0 15px;
z-index: 9999;
right: 0;
}
.alert-success {
background-color: #dff0d8;
border-color: #d0e9c6;
color: #3c763d;
}
.alert {
padding: 15px;
margin-bottom: .5rem;
border: 1px solid transparent;
border-radius: .4285714286em;
}
.dropdown-toggle::after, .is-hidden {
display: none;
}
.alert-success {
background-color: #dff0d8;
border-color: #d0e9c6;
color: #3c763d;
}


div#google_translate_element {
position: absolute;
left: 70%; 
top: 13px;
}


.event {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 3; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
        box-shadow: 6px 6px 15px 7px grey;
}

/* Modal Content */
.event-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 60%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.event-place {
    padding: 2px 16px;
    background-color: #d21e60;
    color: #000000;
    text-align: center;
    text-shadow: 0px 0px 0px #000000, 0 0px 0px #000000, 0 0 1px #000000;
}
.event-check {padding: 2px 16px;}

.eventbt {
    padding: 7px 21px;
    /* background-color: #5cb85c; */
    color: white;
    position: relative;
    margin-left: 41%;
}
.inputall{
width: 92%!important;
    margin-left: 23px;
}
button.eventleft {
    background-color: #d21e60;
    border-radius: 10px 11px 10px 12px;
    width: 30%;
    height: 28px;
    border-color: #d21e60;
    box-shadow: 0px 1px 9px 2px grey;
}
label.eventtext {
    /* text-align: center; */
    margin-left: 26px;
}

.alert.abs {
position: fixed;
top: 110px;
margin: 0 15px;
z-index: 9999;
right: 0;
}
.alert-success {
background-color: #dff0d8;
border-color: #d0e9c6;
color: #3c763d;
}
.alert {
padding: 15px;
margin-bottom: .5rem;
border: 1px solid transparent;
border-radius: .4285714286em;
}
.dropdown-toggle::after, .is-hidden {
display: none;
}
.alert-success {
background-color: #dff0d8;
border-color: #d0e9c6;
color: #3c763d;
}
.active2 {
    background-color: #F1A33E !important;
}
div#myModal01 {
    z-index: 9999;
}
  </style>    
  <body>
        <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,bn,es,hi,pa,pt,ru,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>  
    <div class="topnav checkmr" id="myTopnav">
    <div class="checkall">
     <a class="logo1"  href="<?php echo ($user_profile [0]['Role'] != 'model'? base_url('main_page'):base_url('model_profile'));?>"><img class="logo" src="<?php echo base_url('image/corporate/bunny.png'); ?>"></a></div>
    <div class="container">

   
    <?php if($user_profile[0]['Role']!='model'){?>
        <!--a class="hover" href="<?php echo base_url('main_page');?>">Home</a-->
        <a class="hover3" href="<?php echo base_url('main_page');?>">Model</a>
        <!--a class="hover" href="<?php echo base_url('chatmember');?>">Chat</a-->
        <a href="<?php echo base_url('newshow');?>" class= "hover3 w3-bar-item w3-button btnav">Calender <span class="badge badge-secondary newadd2">New</span></a>
    <?php }else{?>
        
        <!--a href="<?php echo base_url('calender');?>" class="w3-bar-item w3-button btnav">Calender <span class="badge badge-secondary newadd2">New</span></a-->
        <a class="hover" href="<?php echo base_url('Listingevents');?>">Listing Events</a>
            <a class="hover" href="<?php echo base_url('livenow');?>">Live Now</a>
    <?php }?>
 
 
   <div class="dropdown">
    <button class="dropbtn"><?php echo ($user_profile[0]['Role']!='model'?$id[0]['username']:$user_profile[0]['First_name']); ?> 
      <i class="fa fa-caret-down"></i>
    </button>
    <?php if($user_profile[0]['Role']!='model'){?>
    <div class="dropdown-content">
      <a href="<?php echo base_url()."profile_page"; ?>"><i class="fa fa-user">&nbsp;&nbsp;Profile</i> </a>
     <a href="<?php echo base_url()."favourite"; ?>"><i class="fa fa-heart">&nbsp;&nbsp;Favourite</i></a></li>
     <a href="#" onclick="settingpop(this)"><i class="fa fa-cog">&nbsp;&nbsp;Setting</i></a></li>
     <a href="<?php echo base_url()."Products/buy_credit"; ?>"><i class="fa fa-usd">&nbsp;&nbsp;&nbsp;Buy Credit</i></a>
     <a href="<?php echo base_url(); ?>"><i class="fa fa-google-wallet">&nbsp;&nbsp;&nbsp;My credits (<span id="mycredits">0</span>)</i></a>
     <a href="<?php echo base_url()."logout"; ?>"><i class="fa fa-power-off">&nbsp;&nbsp;Logout</i></a>
    </div>
    <?}else{?>
    <div class="dropdown-content"> 
     <a data-toggle="modal" data-target="#myModal01"><i class="fa fa-calendar">&nbsp;&nbsp;Add Event</i></a>
     <a href="<?php echo base_url()."logout"; ?>"><i class="fa fa-power-off">&nbsp;&nbsp;Logout</i></a>
    </div>

    <?}?>
  </div>   
   
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
 </div> 
</div>

<!--------------------------------------------------------------------------------------->
<div class="w3-container">


  <div id="id04" class="w3-modal">
      <div id="overlay" class="  show"></div>

    <div class="w3-modal-content animate w3-card-4" >
      <header class="w3-container  popuphead"> 
     
        <span onclick="hidepope(this)" 
        class="w3-button w3-display-topright">&times;</span>
        
        <h2>Settings</h2>
      </header>
      <div class="w3-container">
       <form class="form-horizontal" action="">
       <div class="form-group">
    <label class="control-label col-sm-2" for="username">Username:</label>
    <div class="col-sm-10 ">
      <input type="text" class=" textbox" id="username1" value="<?php echo $id[0]['username'];?>" placeholder="Enter username" disabled >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10 ">
      <input type="email" class=" textbox" id="pwdemail"value="<?php echo $id[0]['email'];?>" placeholder="Enter email" disabled>
    </div>
  </div>
  
    <div class="form-group showinput" id="editpass">
    <label class="control-label col-sm-2" for="currentpass">Current Password:</label>
    <div class="col-sm-10 ">
      <input type="password" class="textbox" id="currentpass1" value="" placeholder="Enter Current Password" >
      <div class="errormess"></div>
    </div>
  </div>
  
   <div class="form-group showinput" id="editpass1" >
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-10 ">
      <input type="password" class=" textbox" id="password1" placeholder="Enter Password">
      <div class="errormess1"></div>
    </div>
  </div>
  <div class="form-group showinput" id="editpass2">
    <label class="control-label col-sm-2" for="confirmpass">Confirm Password:</label>
    <div class="col-sm-10 "> 
      <input type="password" class=" textbox" value="" id="confirmpass1" placeholder="Enter Confirm Password">
      <div class="errormess2"></div>
    </div>
  </div>
    

  <div class="form-group"> 
  <div class="errormess3"></div>
    <div class="col-sm-offset-2 col-sm-10">
    <div class="col-sm-offset-3 col-md-3">
     <!--button type="button" id="change_pass"class=" btn btn-danger">Edit</button--> &nbsp;
     <button class="button"id="change_pass">Edit</button>
    </div>
    <div class="col-md-3">
      <!--button type="button" id="update_pass" class=" btn btn-danger">Submit</button--->
      <button class="button"id="update_pass">Submit</button>
      </div>
    </div>
  </div>
</form>
      </div>
     
    </div>
  </div>
             </div>
   
   
   <!------------create event------------------->
   <div id="myModal01" class="event">

  <!-- Modal content -->
  <div class="event-content">
    <div class="event-place">
      <span class="close">&times;</span>
      <h2>Create Event</h2>
    </div>
    <div class="alert alert-danger global is-hidden abs"></div>
    <div class="eventcheck">
     <div class="w3-row w3-section">
  <label class="eventtext">Title:</label><div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border inputall" name="title" type="text" placeholder="Title">
    </div>
</div>
 <div class="w3-row w3-section">
  <label class="eventtext">Message:</label><div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input  class="w3-input w3-border inputall" name="message" type="text" placeholder="Message">
    </div>
</div>

 <div class="w3-row w3-section">
  <label class="eventtext">Time:</label><div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <select class="w3-input w3-border inputall" id="time" name="time" >
                             <option value="12:00 AM">12:00 AM</option>
                             <option value="12:30 AM">12:30 AM</option>
                             <option value="01:00 AM">01:00 AM</option>
                             <option value="01:30 AM">01:30 AM</option>
                             <option value="02:00 AM">02:00 AM</option>
                             <option value="02:30 AM">02:30 AM</option>
                             <option value="03:00 AM">03:00 AM</option>
                             <option value="03:30 AM">03:30 AM</option>
                             <option value="04:00 AM">04:00 AM</option>
                             <option value="04:30 AM">04:30 AM</option>
                             <option value="05:00 AM">05:00 AM</option>
                             <option value="05:30 AM">05:30 AM</option>
                             <option value="06:00 AM">06:00 AM</option>
                             <option value="06:30 AM">06:30 AM</option>
                             <option value="07:00 AM">07:00 AM</option>
                             <option value="07:30 AM">07:30 AM</option>
                             <option value="08:00 AM">08:00 AM</option>
                             <option value="08:30 AM">08:30 AM</option>
                             <option value="09:00 AM">09:00 AM</option>
                             <option value="09:30 AM">09:30 AM</option>
                             <option value="10:00 AM">10:00 AM</option>
                             <option value="10:30 AM">10:30 AM</option>
                             <option value="11:00 AM">11:00 AM</option>
                             <option value="11:30 AM">11:30 AM</option> 
                             <option value="12:00 PM">12:00 PM</option>
                             <option value="12:30 PM">12:30 PM</option>
                             <option value="01:00 PM">01:00 PM</option>
                             <option value="01:30 PM">01:30 PM</option>
                             <option value="02:00 PM">02:00 PM</option>
                             <option value="02:30 PM">02:30 PM</option>
                             <option value="03:00 PM">03:00 PM</option>
                             <option value="03:30 PM">03:30 PM</option>
                             <option value="04:00 PM">04:00 PM</option>
                             <option value="04:30 PM">04:30 PM</option>
                             <option value="05:00 PM">05:00 PM</option>
                             <option value="05:30 PM">05:30 PM</option>
                             <option value="06:00 PM">06:00 PM</option>
                             <option value="06:30 PM">06:30 PM</option>
                             <option value="07:00 PM">07:00 PM</option>
                             <option value="07:30 PM">07:30 PM</option>
                             <option value="08:00 PM">08:00 PM</option>
                             <option value="08:30 PM">08:30 PM</option>
                             <option value="09:00 PM">09:00 PM</option>
                             <option value="09:30 PM">09:30 PM</option>
                             <option value="10:00 PM">10:00 PM</option>
                             <option value="10:30 PM">10:30 PM</option>
                             <option value="11:00 PM">11:00 PM</option>
                             <option value="11:30 PM">11:30 PM</option> 
                           </select>
    </div>
</div>
<div class="w3-row w3-section">
  <label class="eventtext">Date:</label><div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input type="date" id="eventdate" class="w3-input w3-border inputall" name="date" type="text">
    </div>
</div>
 <div class="w3-row w3-section">
  <label class="eventtext">Duration:</label><div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input type="time" class="w3-input w3-border inputall" name="duration" type="text"  step="2">
    </div>
</div>
 <div class="w3-row w3-section">
  <label class="eventtext">Price:</label><div class="w3-col" style="width:50px"></div>
    <div class="w3-rest">
      <input class="w3-input w3-border inputall" name="price" type="text" placeholder="Price">
    </div>
</div>

    </div>
    <div class="eventbt">
    
    <button class="eventleft" id="create007">Create</button>
    </div>
  </div>

</div>
<!------------------------end-------------------->
  
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
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("eventdate").setAttribute("min", today);
</script>
            
<script>
function settingpop(e){
    //$('#id04').show(1000);
    $('#id04').css('display' , 'block');
    $('ul.dropdown-menu').css('display' , 'none');
}
function hidepope(e)
    {
        $('#id04').css('display','none');
        $('#editpass ,#editpass1 ,#editpass2').css('display','block');
    }
$( document ).ready(function() {
    $('button#change_pass').click(function(){
         $('#editpass ,#editpass1 ,#editpass2').css('display','block');
    })
    $('button#update_pass').click(function (){
        
         var
        email=$('input#pwdemail').val(),
        a=$('input#currentpass1').val(),
        b=$('input#password1').val(),
        c=$('input#confirmpass1').val();
        
        error=0;
        if(a == '')
        { 
            error=1;
            $('.errormess').html("Please Fill confirm password");return false;
            setInterval(function(){  $('.errormess').html(""); }, 3000);
        }else{
            $('.errormess').html("");
            error=0;
        }
        if(b == '')
        { 
            error=1;
            $('.errormess1').html("Please Fill  password");return false;
            setInterval(function(){  $('.errormess1').html(""); }, 3000);
        }else{
            $('.errormess1').html("");
            error=0;
        }
        if(c == '')
        { 
            error=1;
            $('.errormess2').html("Please Fill Confirm password");return false;
            setInterval(function(){  $('.errormess2').html(""); }, 3000);
        }else{
            $('.errormess2').html("");
            error=0;
        }  
        if(b != c)
        {
            error=1;
            $('.errormess2').html("Confirm Password not match");return false;
            setInterval(function(){  $('.errormess2').html(""); }, 3000);
        }else{
            error=0;
        }
        
        if(error==0)
        {
            $.ajax({
                url: "http://codenomad.biz/secret-angels/change_pwd",
                type : 'POST',
                data: {email : email, currentpwd : a, newpwd : b},
                success : function (result){
                    $('.errormess3').html(result);return false;
                    setInterval(function(){  $('.errormess3').html(""); }, 3000);
                } 
            })
        }
    });
    
    /*  function hidepop(e)
    {
        $('#id01').css('display','none');
        $('#editpass ,#editpass1 ,#editpass2').css('display','none');
    } */
});

$("#dp_button").click(function(){
    $(".test_drop").toggle();
});
</script>   



<script>
// Get the modal

var modal = document.getElementById('myModal01');

$(document).ready(function(){
    //Function For Create Event by Ajax###########
    $('#create007').click(function(){
        alert('asdf');
        var error=0;
        var dat,title,msg,time,duration,price;
        dat=$('#eventdate').val();
        title=$("input[name=title]").val();
        msg=$("input[name=message]").val();
        time=$('select[name="time"]').val();
        duration=$("input[name=duration]").val();
        price=$("input[name=price]").val();
        
        
        if(title==''){
            error=1; 
            $("input[name=title]").focus();
        }else if(msg==''){
            error=1;
            $("input[name=message]").focus();
        }else if(time==''){
            error=1;
            $('select[name="time"]').focus();
        }else if(duration==''){
            error=1;
            $("input[name=duration]").focus();
        }else if(price==''){
            error=1;
            $("input[name=price]").focus();
        } 
            
        if(error==0){
            
             jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>"+"/create_event",
            data: {date:dat,title:title,message:msg,time:time,duration:duration,price:price},
            success: function(res){
                if(res){            
                modal.style.display = "none";
                success_alert('Event created','Successfully');
                location.reload();
                }
            } 
       });  
        
        }else{
            error_alert('Please Fill','All Fields');
        }
    })
    
    $('.fa-calendar').click(function(){
        
        //var date=$(this).find('.day_num').attr('data-time');
        //var curent_date=$(this).find('.day_num').attr('data-dat');
        //if(date){
            
            //alert('curent'+curent_date+'selected'+date);
        //if(new Date(curent_date) <= new Date(date))
        //{
            //$('#date01').val(date);
            modal.style.display = "block";
            
        //}else{
            //error_alert('Selected date should be ','greater than current date');
            
        //}
            
        //}
    });
});






// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
function gritter(a, b, c) {
   $.gritter.add({
       title: b,
       text: a,
       sticky: !1,
       before_open: function() {
           if ($(".gritter-item-wrapper").length == c && "" !== c) return !1
       }
   })
}

function error_alert(a, b) {
   clearTimeout(e);
   var c = $(".alert.alert-danger.global"),
       d = "is-hidden";
   c.html("<strong>" + a + "</strong> " + b).fadeIn(1000).removeClass(d);
   var e = setTimeout(function() {
       c.fadeOut(function(a) {
           c.removeClass(d).empty()
       })
   }, 3500)
}
function success_alert(a, b) {
   clearTimeout(e);
   var c = $(".alert.alert-success.global"),
       d = "is-hidden";
   c.html("<strong>" + a + "</strong> " + b).fadeIn(1000).removeClass(d);
   var e = setTimeout(function() {
       c.fadeOut(function(a) {
           c.removeClass(d).empty()
       })
   }, 3500)
}
$(document).ready(function(){
    var user_id = '<?php echo $this->session->userdata('userid');?>';
    
    $.ajax({
        'url':'<?php echo base_url("get_credits");?>',
        'data':{user_id : user_id},
        'type':'POST',
        success:function(response){
            $('#mycredits').html(response);
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
    if(window.location.href.indexOf("main_page") > -1) {
       $(".hover3").eq(0).addClass("active2");
       $(".hover3").eq(1).removeClass("active2");
    }
    else{
         $(".hover3").eq(0).removeClass("active2"); 
         $(".hover3").eq(1).addClass("active2");
    }
});
</script> 
        