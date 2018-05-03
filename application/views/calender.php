<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php  require_once("memberheader.php");?>


      <style>
	
 .exa{
	 color:red;
 }
table.calender {
    font-family: Arial;
    font-size: 12px;
}
 table.calender{
	 
	 margin:auto;
	 border-collapse:collapse;
 }
 .days td{
	 width:80px;
	 height:80px;
	 padding:4px;
	 border:1px solid #999;
	 vertical-align:top;
	 background-color:#DEF;
	 
	 
 }
 .days td:hover{
	 background-color:white;
	 cursor:pointer;
 }
 .calender .highlight{
	 font-weight:bold;
	 color:red;
	 
 }
 .content{
     height: 0px;
    line-height: 11px;
    position: relative;
	font-weight:bold;
 }
 body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.event {
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
width: 92%;
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
 </style>

<div  style ="margin-top:6%"> 
<? echo $cal;?>
</div>





</head>
<body>



<!-- The Modal -->

<style>

</style>



<div class="alert alert-success global is-hidden abs"></div>
<div class="alert alert-danger global is-hidden abs"></div>
</body>
</html>

<script>
// Get the modal

var modal = document.getElementById('myModal');

$(document).ready(function(){
	//Function For Create Event by Ajax###########
	$('#create007').click(function(){
		var error=0;
		var dat,title,msg,time,duration,price;
		dat=$('#date01').val();
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
	
	$('.calender .day').click(function(){
		var date=$(this).find('.day_num').attr('data-time');
		var curent_date=$(this).find('.day_num').attr('data-dat');
		if(date){
			
			//alert('curent'+curent_date+'selected'+date);
		if(new Date(curent_date) <= new Date(date))
		{
			$('#date01').val(date);
			modal.style.display = "block";
			
		}else{
			error_alert('Selected date should be ','greater than current date');
			
		}
			
		}
	});
});




// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
/* btn.onclick = function() {
    modal.style.display = "block";
} */

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
/*  window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} */
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
</script>