<!DOCTYPE html>

<?php
foreach($id as $idss){
	$username=$idss['username'];
}

?>

<html>

  <head>

     <title>Secret Angels</title>

    

	<style>
	.scorling_section {
    min-height: 826px;
}
</style>

  </head>
<?php include("memberheader.php"); ?>
  <body>

    <div class="main-outer">

	       

	  <!--  header sections end -->	

	 <div class="col-md-12 col-sm-12 banner_sections">	

     <div class="container">
<!--div class="container-fluid header">
   
    <ul class="nav navbar-nav haed">
      <li class="active" style="color:black";><a href="#">Home</a></li>
      <li><a href="#">New Model</a></li>
      <li><a href="#">Age 18</a></li>
      <li><a href="#">Big Tits</a></li>
	  <li><a href="#">Latin Women</a></li>
	  <li><a href="#">Stockings</a></li>
	  <li><a href="#">Asian Girls</a></li>
	  <li><a href="#">Blonde</a></li>
	  <li><a href="#">VIP Show</a></li>
	  <li><a href="#">VibraToy</a></li>
	  <li><a href="#">On Sale</a></li>
	  <li><a href="#">Petite</a></li>
	 
    </ul></div-->
	 <div class="scorling_section">
	
		<!-- first scrolling section -->	

			<!-- center image sections end -->

			<div class="clear" style="clear: both;"></div>

		

			<!-- Center image section end -->

			<div id="Center">
        <ul id="waterfall">
		
		
		
		</ul>
		
		
    </div>
	<div id='guru'>
	</div>

<div class="w3-container">


  <div id="id01" class="w3-modal">
  	  <div id="overlay" class="  show"></div>

    
     
    </div>
  </div>
</div>

           <!--- <div class="clear" style="clear: both;"></div>				

		<div class="show_more"><button type="button" class="btn btn-default" id="btn-default">Show More</button></div>-->

	  
<!---Confirmation popup-->  
	<div id="id07" class=" lettermodal">
	<div class=" textletters ">
  
    <div class="heading">
    <h2 class="headingtext">Do You Want to Remove It </h2></div>
     <div class="letterbutton">
     <button type="button" id="idcancel" onclick="$('#id07').css('display','none');" class="btn">Cancel</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
   <button type="button" id="idsave" btn-action="remove" class="btn btn-primary popup-btn">Remove</button>
       </div>
  </div>
  </div>

	</div><!---container div--> 
<!---footer div-->  	
<? include("footer.php");?>	
	</div>  <!---banner sec div-->    

	

	   

    </div>	<!--  main-outerend -->	
<!--script src="js/compile.js"></script--> 
	<script>
function add_fav(fav_angel_id,user_id,e)
	{
		$('#id07').css('display','block');
		$('#idsave').attr('fav-angel',fav_angel_id);
		$('#idsave').attr('user_id',user_id); 
		
			/* $(e).parent().parent().remove();
			jQuery.ajax({
			type: "POST",
			url: "<?php echo base_url("add_favorite"); ?>",
			data: {'fav_angel_id':fav_angel_id,'user_id':user_id},
			success: function(res){ 
			
			} 
			}); */
			
	}
	
	$('#idsave').click(function(){
		var btn=$('#idsave').attr('btn-action');
		if(btn=='remove'){
		var fav_angel_id=$('#idsave').attr('fav-angel');
		var user_id=$('#idsave').attr('user_id');
		//$('div[data-id='+id+']').closest('li').remove();
		jQuery.ajax({
			type: "POST",
			url: "<?php echo base_url("add_favorite"); ?>",
			data: {'fav_angel_id':fav_angel_id,'user_id':user_id},
			success: function(res){ 
			res==0?$('div[data-id='+fav_angel_id+']').closest('li').remove():'';
			} 
			})
		$("#id07").css("display", "none"); 
	}
	}) 
	
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
	/* 
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
		
	}); */
	
	/* $("#card_number").keydown(function (e) {
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
    }); */
	   $('.content').hover(function() {
        $(this).addClass('transition');
    
    }, function() {
        $(this).removeClass('transition');
    });
	
	
	
	</script>
	<style>
	
}

	</style>
	 <script type="text/javascript">
    $(document).ready(function ()
        {
            $('#waterfall').NewWaterfall({
                width: 350,
               // delay: 100,
			
            });
        });

     
    function random(min, max)
        {
            return min + Math.floor(Math.random() * (max - min + 1))
        }
        var loading = false;
        var dist = 500;
        var num = 1;
		
		jQuery.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>" + "/show_fav_model",
			//dataType: 'json',
			data: {},
			success: function(res){ 
				
				 $("#waterfall").append(res);
                num++;

			} 
       }); 
	   
  setInterval(function(){ 
 		 jQuery.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>" + "/get_online_status",
			dataType: 'json',
			data: {},
			success: function(res){ 
				var obj,curent_status,online='fa fa-circle green online',offline='fa fa-circle gray online';
				
				$.each(res, function(key, value) {
					obj=$('#online'+key);
					//alert( "The key is '" + key + "' and the value is '" + value + "'" );
					 curent_status=obj.attr('data-status');//alert(key);
					 if(curent_status!=value)
					 {
						value == 1 ? obj.attr('class', online) : obj.attr('class', offline);  
					 }
				});	
				//console.log(cls);
			} 
       }); 
  },9000); 
 
    </script>
	<script src="js/custom.js"></script>
	
	 <script type="text/javascript" src="js/newWaterfall.js"></script>

  </body>

</html>

