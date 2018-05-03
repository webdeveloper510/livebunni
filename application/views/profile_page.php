<style>

*,:after,:before{box-sizing:border-box}
.pull-left{float:left}
.pull-right{float:right}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}

.secreatlogo {
    width: 196px;
    height: 33PX;
    position: absolute;
    top: 12px;
    left: 21px;
}
.accordion-wrap{
	top:21px;
	left:0;
	right:0;
	bottom:0;
	padding:15px;
	position:fixed;
	overflow:scroll;
	
}
.accordion {
    width: 100%;
    margin: auto;
    max-width: 489px;
    overflow: hidden;
    border-radius: 3px;
    background: #B7AFA3;
    box-shadow: 0 0px 45px 0 rgb(193, 193, 193), 0 4px 28px 0 rgba(0, 0, 0, 1);}
.accordion>a {
    color: #ffff;
    padding: 15px;
    display: block;
    text-decoration: none;
    -webkit-transition: all .3s ease-in-out 0s;
    transition: all .3s ease-in-out 0s;
    background-color: #780025;
    font-size: 15px;
}
.accordion>a:not(:last-child){
	border-bottom:0px solid rgba(0,0,0,.2);
}
.accordion>a:hover,
.accordion>a.active{
	background:#a00434;;
}
.accordion>a.active{
	color:#ffff;
}
.accordion>a>.alert-numb,
.accordion>.sub-nav>a>.alert-numb{
	color:#eee;
	right:10px;
	height:22px;
	min-width:40px;
	font-size:12px;
	font-weight:600;
	line-height:22px;
	border-radius:15px;
	text-align:center;
	background:#665e51;
}
.accordion>a.active>.alert-numb,
.accordion>.sub-nav>a.active>.alert-numb{
	background:#ffff;
}
.accordion .sub-nav{
	display:none;
	color:#374046;
	overflow:hidden;
	background:#ecf0f1;
}
.accordion .sub-nav.open{
	display:block;
}
.accordion .sub-nav a{
	display:block;
	color:inherit;
	font-weight:300;
	padding:10px 15px;
	text-decoration:none;
	-webkit-transition:all .2s ease-in-out 0s;
	        transition:all .2s ease-in-out 0s;
}
.accordion .sub-nav a:not(:last-child){
	border-bottom:1px solid rgba(0,0,0,.1);
}
.accordion .sub-nav a:hover{
	background:#c2ced1;
	box-shadow:5px 0 0 #8ca3a8 inset;
}

.accordion .html{
	padding:9px;
} 
.accordion .about-me {
    text-align: center;
    position: relative;
      background: linear-gradient(to bottom, #a00434 0%, #010101 100%);
    color: white;
    font-size: 16px;
    font-weight: bold;
}
.accordion .about-me span {
    margin-bottom: 0px;
    /* float: left; */
    text-transform: uppercase;
    font-size: 23px;
}
.accordion .about-me p{
	font-size:14px;
	font-weight:300;
	margin-bottom:0;
}
.accordion .about-me .photo{
	width:95px;
	height:95px;
	margin:auto;
	overflow:hidden;
	border-radius:50%;
	position:relative;
	border:4px solid #fff;
	box-shadow:0 6px 20px 0 rgba(0,0,0,.19),0 8px 17px 0 rgba(0,0,0,.2);
	background:url(https://avatars3.githubusercontent.com/u/16630278?v=3&s=460) no-repeat center;
	background-size: cover;
}
.accordion .about-me .photo .photo-overlay{
	top:0;
	left:0;
	right:0;
	bottom:0;
	opacity:0;
	visibility:hidden;
	position:absolute;
	background:rgba(0,0,0,.4);
}
.accordion .about-me .photo .photo-overlay .plus{
	top:50%;
	left:50%;
	width:30px;
	height:30px;
	color:#1a1a1b;
	cursor:pointer;
	font-size:24px;
	font-weight:100;
	margin-top:-15px;
	margin-left:-15px;
	position:absolute;
	line-height:30px;
	border-radius:50%;
	text-align:center;
	background:#e8d0a9;
	-webkit-transform:scale(0) rotate(0);
	    -ms-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
	-webkit-transition:all .1s ease-in-out 0s;
	        transition:all .1s ease-in-out 0s;
}
.accordion .about-me .photo:hover .photo-overlay{
	opacity:1;
	visibility:visible;
}
.accordion .about-me .photo:hover .photo-overlay .plus{
	-webkit-transform:scale(1) rotate(90deg);
	    -ms-transform:scale(1) rotate(90deg);
	        transform:scale(1) rotate(90deg);
}

.accordion .about-me .social-link{
	top:0;
	left:0;
	right:0;
	bottom:0;
	opacity:0;
	padding-top:48px;
	visibility:hidden;
	position:absolute;
	background:rgba(0,0,0,.3);
	-webkit-transition:opacity .5s ease-in-out 0s;
	        transition:opacity .5s ease-in-out 0s;
}
.accordion .about-me .social-link.active{
	opacity:1;
	visibility:visible;
}
.accordion .about-me .social-link .link{
	width:30px;
	padding:0;
	color:#eee;
	height:30px;
	margin:0 4px;
	line-height:28px;
	border-radius:50%;
	display:inline-block;
	-webkit-transform:translateY(-80px) scale(0);
	    -ms-transform:translateY(-80px) scale(0);
	        transform:translateY(-80px) scale(0);
	border:1px solid rgba(0,0,0,.2);
}
.accordion .about-me .social-link .link-twitter{
	background:#55acce;
}
.accordion .about-me .social-link .link-codepen{
	background:#1a1a1b;
}
.accordion .about-me .social-link .link-facebook{
	background:#3b5998;
}
.accordion .about-me .social-link .link-dribbble{
	background:#ea4c89;
}
.accordion .about-me .social-link .link:hover{
	box-shadow:none;
}
.accordion .about-me .social-link.active .link{
	-webkit-transform:translateY(0) scale(1);
	    -ms-transform:translateY(0) scale(1);
	        transform:translateY(0) scale(1);
}
.accordion .about-me .social-link.active .link:nth-child(1){
	-webkit-transition-duration:.1s;
	        transition-duration:.1s;
}
.accordion .about-me .social-link.active .link:nth-child(2){
	-webkit-transition-duration:.2s;
	        transition-duration:.2s;
}
.accordion .about-me .social-link.active .link:nth-child(3){
	-webkit-transition-duration:.3s;
	        transition-duration:.3s;
}
.accordion .about-me .social-link.active .link:nth-child(4){
	-webkit-transition-duration:.4s;
	        transition-duration:.4s;
}
.accordion .about-me .social-link.active .link:nth-child(5){
	-webkit-transition-duration:5s;
	        transition-duration:5s;
}
.accordion .about-me.blur p,
.accordion .about-me.blur h4,
.accordion .about-me.blur .photo{
	-webkit-filter:blur(2px);
	filter:blur(2px);
}

.accordion .chat .user:not(:last-child){
	margin-bottom:10px;
}
.accordion .chat .user .photo{
	width:40px;
	height:40px;
	font-size:24px;
	line-height:36px;
	text-align:center;
	position:relative;
	border-radius:3px;
	display:inline-block;
	border:1px solid rgba(0,0,0,.2);
}
.accordion .chat .user .photo:before,
.accordion .chat .user .photo:after{
	content:'';
	opacity:0;
	visibility:hidden;
	position:absolute;
	-webkit-transition:opacity .4s ease-in-out 0s;
	        transition:opacity .4s ease-in-out 0s;
}
.accordion .chat .user .photo:before{
	left:50%;
	width:60px;
	bottom:50px;
	padding:4px;
	font-size:12px;
	line-height:14px;
	margin-left:-30px;
	text-align:center;
	background:#333333;
	border-radius:4px;
	word-break:break-all;
	content:attr(data-username);
}
.accordion .chat .user .photo:after{
	left:50%;
	bottom:35px;
	margin-left:-8px;
	border:8px solid transparent;
	border-top:8px solid #333333;
}
.accordion .chat .user .photo:hover:before,
.accordion .chat .user .photo:hover:after{
	opacity:1;
	visibility:visible;
}

.accordion .chat .user.user-dribble .photo{
	color:#fff;
	margin-right:5px;
	background:#f15e95;
}
.accordion .chat .user .text-msg{
	max-width:70%;
	font-size:13px;
	padding:4px 8px;
	background:#fff;
	border-radius:4px;
	display:inline-block;
	
}
.accordion .chat .user.user-khadkamhn .text-msg{
	background:#dce2e4;
}

.accordion .invite{
	text-align:center;
}
.accordion .invite .dribbble{
	display:block;
	color:#c33269;
	margin:10px 0;
	font-size:24px;
	font-family:Pacifico;
}
.accordion .invite .btn{
	color:#eee;
	font-weight:500;
	background:#ccc;
	padding:10px 15px;
	border-radius:2px;
	background:#f15e95;
	display:inline-block;
	text-transform:uppercase;
}
.accordion .invite .btn:hover{
	box-shadow:none;
	background:#cb386f;
}
#special_peculiarity_field {
    background-color: #a00434 !important;
}
.details{
padding:10px;
}
.ref
{
color:black;
text-decoration:none !important;}
a {
    /* color: #337ab7; */
    text-decoration: none!important;
}
.ref:hover{
	color:#ffff;
}
	a {
    color: #ffff !important; 
    text-decoration: none;
}
i.fa.fa-pencil.editallal{
    float:right;
	display:none;
}
</style>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Pacifico'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
</head>
 

<body>

  <div class="accordion-wrap">
  <div>

			
				<a class="navbar-brand" href="<?php echo base_url('main_page');?>"><img class="secreatlogo" src="<?php echo base_url('image/corporate/logo.png');  ?>"></a>

			  </div>
	<div class="accordion">
		<a href="#" class="active" id="showfirst">My Profile</a>
		<div class="sub-nav active" id="profilediv">
			<div class="html about-me">
				<div class="photo">
					<div class="photo-overlay">
						<span class="plus">+</span>
						<input type="file" id="theFileInput" style="display:none;" />
					</div>
				</div>
				<span>marseyboy</span>
				<div class="details">
				
		
				
    <label class="radio-inline">
      Gender
    </label>
    <label class="radio-inline">
      Age
    </label>
    <label class="radio-inline">
      Sexuality
    </label>
</div>
			<!-- 	<div class="social-link">
					<a class="link link-twitter" href="https://twitter.com/__GAUTAMJHA__" target="_blank"><i class="fa fa-twitter"></i></a>
					<a class="link link-codepen" href="#" target="_blank"><i class="fa fa-codepen"></i></a>
					<a class="link link-facebook" href="https://facebook.com/gautamjhaofficial.in" target="_blank"><i class="fa fa-facebook"></i></a>
					<a class="link link-dribbble" href="http://gautamjhaofficial.in" target="_blank"><i class="fa fa-dribbble"></i></a>
				</div> -->
			</div>
		</div>
		<a class="ref" href="#">
 My personal specialty: <i class="fa fa-pencil editallal"   data-toggle="tooltip" title="edit"></i></a>
		<div class="sub-nav">
		<div class="profiletest">
			<textarea id="special_peculiarity_field" name="special_peculiarity" class="textarea  autogrow-special_peculiarity-1518732162568-332" cols="120" maxlength="250" style="display: block; height: 70px;"></textarea>
		</div>
		</div>
		<a class="ref" href="#">
 My turn-ons: <i class="fa fa-pencil editallal"   data-toggle="tooltip" title="edit"></i> </a>
			<div class="sub-nav">
			<textarea id="special_peculiarity_field" name="special_peculiarity" class="textarea  autogrow-special_peculiarity-1518732162568-332" cols="120" maxlength="250" style="display: block; height: 70px;"></textarea>
		</div>
		<a class="ref" href="#">
 My dislikes: <i class="fa fa-pencil editallal"   data-toggle="tooltip" title="edit"></i> </a>
		<div class="sub-nav">
		
<textarea id="special_peculiarity_field" name="special_peculiarity" class="textarea  autogrow-special_peculiarity-1518732162568-332" cols="120" maxlength="250" style="display: block; height: 80px;"></textarea>
			
		</div>
		<a class="ref"href="#">
 What I do for a living:<i class="fa fa-pencil editallal"   data-toggle="tooltip" title="edit"></i> </a>
		<div class="sub-nav">
			<textarea id="special_peculiarity_field" name="special_peculiarity" class="textarea  autogrow-special_peculiarity-1518732162568-332" cols="120" maxlength="250" style="display: block; height: 70px;"></textarea>
		</div>
		<a class="ref" href="#">
 
 What I do for fun: <i class="fa fa-pencil editallal"   data-toggle="tooltip" title="edit"></i> </a>
		<div class="sub-nav">
			<textarea id="special_peculiarity_field" name="special_peculiarity" class="textarea  autogrow-special_peculiarity-1518732162568-332" cols="120" maxlength="250" style="display: block; height: 70px;"></textarea>
		</div>
		
		<a class="ref" href="#">
 

 What makes me feel special:  <i class="fa fa-pencil editallal"   data-toggle="tooltip" title="edit"></i> </a>
		<div class="sub-nav">
			<textarea id="special_peculiarity_field" name="special_peculiarity" class="textarea  autogrow-special_peculiarity-1518732162568-332" cols="120" maxlength="250" style="display: block; height: 70px;"></textarea>
		
	</div>
	</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>

	
	<script>
	$(function(){
	Profile.load();
});

Profile = {
	load:function(){
		this.links();
		this.social();
		this.accordion();
	},
	links:function(){
		$('a[href="#"]').click(function(e){
			e.preventDefault();
		});
	},
	social:function(){
		$('.accordion .about-me .photo .photo-overlay .plus').click(function(){
			$('.social-link').toggleClass('active');
			$('.about-me').toggleClass('blur');
		});
		$('.social-link').click(function(){
			$(this).toggleClass('active');
			$('.about-me').toggleClass('blur');
		});
	},
	accordion:function(){
		var subMenus = $('.accordion .sub-nav').hide();
		$('.accordion > a').each(function(){
			if($(this).hasClass('active')){
				$(this).next().slideDown(100);
			}
		});
		/*$('.accordion > a').click(function(){
			$this = $(this);
			//$('#profilediv').css('display','block').addClass('active');
			$target =  $this.next();
			$this.siblings('a').removeAttr('class');
			$this.addClass('active');
			if(!$target.hasClass('active')){
				subMenus.removeClass('active').slideUp(100);
				$target.addClass('active').slideDown(100);
			}
			return false;
		});*/
	}
}
$( document ).ready(function() {
    $('.accordion > a').click(function(){ 
			$this = $(this);
			$target =  $this.next();
			var clasch = $target.attr('class');
			if(clasch == 'sub-nav active'){
			
			$target.removeClass('active').css('display','none');
			}else
			{
			$('div.sub-nav').removeClass('active').css('display','none');
			
			$target.addClass('active').css('display','block');
			}
			$('#profilediv').addClass('active').css('display','block');
			
		});
});
	</script>
	
	<script>
	$('.plus').click(function() {
    $('#theFileInput').click();
});
    
	</script>
	<script>
	$(document).ready(function(){
	$(".ref").click(function(){ 
        $(".editallal").css("display", "block");
    });
	});
	</script>
