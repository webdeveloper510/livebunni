<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Secret-angels</title>
  
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
	 
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		   <script src="<?php echo base_url('js/countries.js'); ?>" type="text/javascript"></script>
		   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
		   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
		   
		 
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


  
</head>
<script>
$('document').ready(function(){ 

   $(".datepicker" ).datepicker();
 });
 </script>

<style>
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
    background-image: url(http://codenomad.org/secret-angels/image/corporate/reg_back.jpg) !important;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
.formsign .panel {
    margin-bottom: 20px;
    background-color: #ffffff96 !important;
    }
 .formsign {
    border: 1px solid #ffffff03 !important;
}   
.error {
    color: red;
    margin-left: 190px;
}
.formsign {
    position: relative;
    margin-left: 17%;
    width: 59%;
	   /*  box-shadow: 2px 6px 26px grey; */
	   border:1px solid;
}
/*  */
@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 220px;
    margin-left: 14px;
}
.g-recaptcha {
    position: unset;
    margin-left: 28%;
}

#parent {
    border: 1px solid black;
  border: 1px solid black;
}

.logocomp {
    width: 7%;
    margin-left: 3%;
    margin-top: 1%;
}
.panel{border:0px solid;}


p.parsley-success {
  color: #468847;
  background-color: #DFF0D8;
  border: 1px solid #D6E9C6;
}
p.parsley-error {
  color: #B94A48;
  background-color: #F2DEDE;
  border: 1px solid #EED3D7;
}
input.parsley-success,
select.parsley-success,
textarea.parsley-success {
  color: #468847;
  background-color: #DFF0D8;
  border: 1px solid #D6E9C6;
}

input.parsley-error,
select.parsley-error,
textarea.parsley-error {
  color: #B94A48;
  background-color: #F2DEDE;
  border: 1px solid #EED3D7;
}

.parsley-errors-list {
  margin: 2px 0 3px;
  padding: 0;
  list-style-type: none;
  font-size: 0.9em;
  line-height: 0.9em;
  opacity: 0;

  transition: all .3s ease-in;
  -o-transition: all .3s ease-in;
  -moz-transition: all .3s ease-in;
  -webkit-transition: all .3s ease-in;
}

.parsley-errors-list.filled {
  opacity: 1;
}
.parsley-required,parsley-type{
	color:red;
}

#loadingDiv {
    background: #fff;
    margin-left: -50px;
    margin-top: -75px;
    display: none;
    z-index: 9003;
}
#galleryOverlay, #loadingOverlay, #siteOverlay {
    background: #000;
    position: fixed;
    left: 0;
    top: 0;
    display: none;
    z-index: 1020;
    opacity: .3;
    width: 100%;
    height: 100%;
}
.Choosecate1,.hair1,.willingness1,.Apperence1{
	display:none;
}
div#google_translate_element {
    float: right;
    position: relative;
    margin-top: 12px;
}
.input-group.input-append.date {
    width: 220px;
    background-color: #e6e6e6;
    border-color: #adadad;
    padding: 0px;
}
input#dob {
    background-color: #fff;
    border-color: #ccc;
    width: 100%;
    border: 1px solid #ccc;
    width: 220px;
    border-radius: 5px;
}
input#dob:hover {
    background-color: #d4d4d4;
    border-color: #8c8c8c;
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
<body>
<div class="logoallin">

			 <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
				<a href="<?php echo base_url('main_page');?>"><img class="logocomp" src="<?php echo base_url('image/corporate/bunny.png');  ?>"></a>

			 
			  </div>
  <div class="container">
	<div class="row">
		<section>
		

        <div class="wizard">
       

            <form role="form"  method="post" enctype="multipart/form-data" action="<?php echo base_url('modelsignupp');?>" id="demo-form" data-parsley-validate="">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="container">
	<div class="row">
        
        <!-- panel preview -->
        <div class="col-sm-5 formsign">
            
            <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
				  <div class="form-section">

                    <h2 class="fs-title" style="text-align: center;">Personal Details</h2>
				<div class="form-group">
                    <div class="col-sm-12">
                        <label for="firstname" class="col-sm-3 control-label"> First Name :</label>
                        <div class="col-sm-9">
                            <input type="text" name="firstname" class="form-control" Placeholder="First Name" id="firstname" required="required" data-parsley-trigger="change"> </div>
                    </div>
                </div>
                     <div class="form-group">
                    <div class="col-sm-12">
                        <label for="lastname" class="col-sm-3 control-label">Last Name:</label>
                        <div class="col-sm-9">
                            <input type="text" name="lastname" class="form-control" id="lastname" required="required" placeholder="Last Name" data-parsley-trigger="change"> </div>
                    </div>
                </div>
  <div class="form-group" style="    float: left; width: 100%;">
                        <label for="" class="col-sm-3 control-label">Gender:</label>
                        <div class="col-sm-9" style="text-align:left !important; color: #black;">
                            <input type="radio" style="width: 10% !important;" name="gender" value="Male" > Male
                            <br>
                            <input type="radio" style="width: 10% !important;" name="gender" value="Female" checked> Female
                            <br>
                            <input type="radio" style="width: 10% !important;" name="gender" value="Transgender"> Transgender
                            <br> </div>
                </div>	
 <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Address:</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" class="form-control" id="Phone" placeholder="Address" required="required"> </div>
                </div>
 <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Zip Code:</label>
                        <div class="col-sm-9">
                            <input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="Zip Code" required="required"> </div>
                </div>
				
                   <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label" required="required">Country:</label>
                        <div class="col-sm-9">
						 <select class="form-control" onchange="print_state('state',this.selectedIndex);" id="country" style="width: 100%; float: left;" name ="country" required="required"></select>
						
                            <!--input type="text" name="country" class="form-control" id="Town" placeholder="Country" required="required"--> </div>
                 </div>
                     <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label" >State:</label>
                        <div class="col-sm-9">
                           
							<select class="state" name ="state" id ="state" required="required" style="width: 100%; float: left;" ></select>
		<script language="javascript">print_country("country");</script>	
                        </div>
                </div>
                     <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Choose categories :</label>
						
						<div class="Choosecate">	
							<dl class="dropdown" id="choose"> 
							<select class="selectpicker" name="category[]" multiple="multiple" data-max-options="0"  id="">  
							<?php foreach($categories as $value){ 
							if($value['cat_name']!="girl" ){
							?>
							
							<option  value="<?php echo $value['cat_id']; ?>"><?php echo $value['cat_name']; ?></option>
							<?php } }?>
							</select>
							
							</div>
							
							
						<div class="Choosecate1">	
							<dl class="dropdown" id="choose"> 
							<select class="selectpicker" name="category[]" multiple="multiple" data-max-options="0" >  
							
							
							<option  value="3">Amateur</option>
							<option  value="4">Newbie</option>
							<option  value="9">couples</option>
							<option  value="10">Porn star</option>
							<option  value="12">Gay</option>
							<option  value="13">Straight</option>
							<option  value="14">Trans boy</option>							
							</select>
							</div>
					</div>
					<div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Apperence :</label>
						
						<div class="Apperence">	
							<dl class="dropdown" id="choose"> 
							<select class="selectpicker" name="Apperence[]" multiple="multiple" data-max-options="0" >  
							
							
							<option  value="1">BBW </option>
							<option  value="2"> Big Tits</option>
							<option  value="3">Hairy pussy</option>
							<option  value="4">Petite</option>
							<option  value="5">Piercing </option>
							<option  value="6">Shaved</option>
							<option  value="7">Stockings</option>							
							<option  value="8">Tattoo</option>							
							<option  value="9">Tiny tits</option>							
							</select>
							</div>
							
						<div class="Apperence1">	
							<dl class="dropdown" id="choose"> 
							<select class="selectpicker" name="Apperence[]" multiple="multiple" data-max-options="0" >  
							
							
							<option  value="10">Muscular</option>
							<option  value="11">Skinny</option>
							<option  value="7">Stockings</option>
							<option  value="8">Tattoo</option>
							
							</select>
							</div>
					</div>
                  </div>
  <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Show Type :</label>
                       <dl class="dropdown"> 
							<select class="selectpicker" name="showtype[]" id="showtype"multiple data-max-options="0">
							<option value="">Select</option>
							<option value="1">Free Chat</option>
							<option value="2">Private Chat</option>
							<option value="3">VIP Chat</option>
							<option value="4">Vibra Chat</option>
							<option value="5">Two Way Audio</option>
							</select>
							
							
   
                  </div>
   <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Ethnicity :</label>
                       <dl class="dropdown"> 
							<select class="selectpicker" name="ethnicity[]" id="ethnicity" multiple data-max-options="0" >
							<option value="">Select</option>
							<option value="1">Asian</option>
							<option value="2">Ebony</option>
							<option value="3">Latin</option>
							<option value="4">White</option>
							
							</select>
							
   
                  </div>
 <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Hair :</label>
						<div class="hair">	
							<dl class="dropdown" id="choose"> 
                       <dl class="dropdown"> 
							<select class="selectpicker" name="hair[]"  multiple data-max-options="0" >
							<option value="">Select</option>
							<option value="1">Black </option>
							<option value="2">Blonde</option>
							<option value="3">Brunette</option>
							<option value="4">Redhead</option>
							<option value="5">Long</option>
							<option value="6">Short</option>
							
							</select>
							</div>
							<div class="hair1">	
							<dl class="dropdown" id="choose"> 
							<select class="selectpicker" name="hair[]"  multiple data-max-options="0">
							<option value="">Select</option>
							
							<option value="2">Blonde</option>
							<option value="7">Brown</option>
							<option value="4">Redhead</option>
							<option value="5">Long</option>
							<option value="6">Short</option>
							
							</select>
							</div>
                  </div>
   <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Willingness :</label>
						<div class="willingness">	
							<dl class="dropdown" id="choose"> 
                       <dl class="dropdown"> 
							<select class="selectpicker" name="Willingness[]"  multiple data-max-options="0" >
							<option value="">Select</option>
							<option value="1">Anal Sex</option>
							<option value="2">Close-up</option>
							<option value="3">Dominant</option>
							<option value="4">Fingering</option>
							<option value="5">Live orgasm</option>
							<option value="6">Sex toys</option>
							<option value="7">Smoking</option>
							<option value="8">Striptease</option>
							<option value="9">Submissive</option>
							
							</select>
							</div>
							<div class="willingness1">	
							<dl class="dropdown" id="choose"> 
							<select class="selectpicker" name="Willingness[]" id="willingness1"multiple data-max-options="0" >
							<option value="">Select</option>
							<option value="1">Anal Sex</option>
							<option value="2">Close-up</option>											
							<option value="6">Sex toys</option>
							<option value="7">Smoking</option>
							<option value="8">Striptease</option>
							
							
							</select>
							</div>
                  </div>	
 				  
                    <!--<ul class="list-inline pull-right">
                           
                            <li><button type="button"  class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
							
                        </ul> -->
                </div>
				
                </div>
            </div>  
			</form>         
        </div> <!-- / panel preview -->
     
	</div>
<!--</div>
                    </div>
					
                    <div class="tab-pane" role="tabpanel" id="step2">
					<div class="container">
	<div class="row">-->
        
        <!-- panel preview -->
        <div class="col-sm-5 formsign">
                         <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
						<div class="form-group">
								<label for="dob" class="col-sm-3 control-label ">DOB:</label>
								<div class="col-sm-9">
									<!--input type="date" name="dob" class="form-control datepicker"  id="dob"  placeholder=" Date of Birth"  data-toggle="tooltip" title="Model above 18+ years old can signup on this website" -->
									  <div class="input-group input-append date">
   <input type="date"  name="dob" class="datepicker" placeholder="Date of Birth" id="dob"  placeholder=" Date of Birth"  data-toggle="tooltip"  data-placement="top" title="Model above 18+ years old can signup on this website">
           </div>
									</div>
							</div>
							
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">Sexuality:</label>
								<div class="col-sm-9" >
									
									<div class="col-md-6 col-sm-6">
									<table id="tbl">
								<tbody>
									<tr>
										<td style="width: 80px;">
											<input name="sexuality[]"  value="Bi-curious" type="checkbox" class="chcktbl"
											checked="checked" data-parsley-mincheck="1"> </td>
										<td> Bi-curious</td>
									</tr>
								
									<tr>
										<td style="width: 80px;">
											<input name="sexuality[]"  value="Bi-sexual" type="checkbox" class="chcktbl" > </td>
										<td>Bi-sexual</td>
									</tr>
									<tr>
										<td style="width: 80px;">
											<input name="sexuality[]" value="Gay"  type="checkbox" class="chcktbl" > </td>
										<td> Gay</td>
									</tr>
								
										</tbody>
							</table> 
							</div>
							<div class="col-md-6 col-sm-6">
							<table id="tbl">
								<tbody>
									<tr>
										<td style="width: 80px;">
											<input name="sexuality[]" value="Straight" type="checkbox" class="chcktbl" > </td>
										<td> Straight</td>
									</tr>
								
									<tr>
										<td style="width: 80px;">
											<input name="sexuality[]" value="Lesbian" type="checkbox" class="chcktbl" > </td>
										<td>Lesbian</td>
									</tr>
									
								
										</tbody>
							</table>
							
							
							
							</div>
							</div>
							</div>
							
								<!--div class="enjoy-outer">
				<div class="col-sm-3">
					<div class="Padded" align="right" nowrap="">I <b>enjoy</b> the following:</td>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="enjoy">
						<div class="col-md-6 col-sm-6">
							<table id="tbl">
								<tbody>
									<tr>
										<td style="width: 40px;">
											<input name="level[]" value="A Levels" type="checkbox" class="chcktbl" checked="checked" required="required" data-parsley-mincheck="1"> </td>  
										<td>"A" Levels</td>
									</tr>
								
									<tr>
										<td style="width: 80px;">
											<input name="level[]" value='15 Mins "quickie"' type="checkbox" class="chcktbl" > </td>
										<td>15 Mins "quickie"</td>
									</tr>
									<tr>
										<td style="width: 80px;">
											<input name="level[]" value='Adult Baby Minding'  type="checkbox" class="chcktbl" > </td>
										<td>Adult Baby Minding</td>
									</tr>
									<tr>
										<td style="width: 80px;">
											<input name="level[]" type="checkbox" class="chcktbl"  value='Anal Play' > </td>
										<td>Anal Play</td>
									</tr>
									<tr>
										<td style="width: 80px;">
											<input name="level[]" type="checkbox" class="chcktbl" value='Bareback' > </td>
										<td>Bareback</td>
									</tr>
										</tbody>
							</table>
						</div>
						<div class="col-md-6 col-sm-6">
							<table id="tbl">
								<tbody>
									<tr>
										<td style="width: 80px;">
											<input name="level[]" value='BDSM' type="checkbox" class="chcktbl"  > </td>
										<td>BDSM</td>
									</tr>
									<tr>
										<td style="width: 80px;">
											<input name="level[]" value='BDSM (giving)' type="checkbox" class="chcktbl" > </td>
										<td>BDSM (giving)</td>
									</tr>
									<tr>
										<td style="width: 80px;">
											<input name="level[]" value='BDSM (receiving)' type="checkbox" class="chcktbl" > </td>
										<td>BDSM (receiving)</td>
									</tr>
									<tr>
										<td style="width: 80px;">
											<input name="level[]" value='Being Filmed' type="checkbox" class="chcktbl" > </td>
										<td>Being Filmed</td>
									</tr>
								</tbody>
							</table>
						</div>
			
					</div>
				</div>
							</div-->
							<br>
							<div class="form-group with">
								<label for="" class="col-sm-3 control-label">With:</label>
								<div class="col-sm-9" style="text-align:left !important; color: #black;">
									<input type="checkbox" style="width: 10% !important;" name="gender5" value="Men" checked="checked" required="required" data-parsley-mincheck="1">Men
							
									<input type="checkbox" style="width: 10% !important;" name="gender5" value="Women"> Women
							
									<input type="checkbox" style="width: 10% !important;" name="gender5" value="Couples MF">Couples MF
								
									<input type="checkbox" style="width: 10% !important;" name="gender5" value="Couples MM"> Couples MM
								
									<input type="checkbox" style="width: 10% !important;" name="gender5" value="Couples ff"> Couples ff
									 </div>
							</div>
							
								<div class="form-group with">
								<div class="form-group">
									<label for="firstName" class="col-sm-3 control-label">About Me:</label>
									<div class="col-sm-9">
									<textarea onkeyup="countChar(this)" class="form-control" name="summary" rows="8" id="comment" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="350" data-parsley-minlength-message="Come on! You need to enter at least a 20 character About me" data-parsley-validation-threshold="10"required="required"></textarea>
									<div id="charNum" class="letters">Remaining Words : 350 </div>
								<script>
									
									
									function countChar(val) {
										var len = val.value.length;
										if (len > 350) {
										val.value = val.value.substring(0,350 );
										} else {
											len=350-len;
										$('#charNum').text("Remaining Words : "+len);
										}
									};
									
									
							</script>
										 </div>
								</div></br></br>
								
							</div>
                        <!--<ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>-->
                    </div>
                    </div>
                    </div>
                    <!--</div>
                    </div>-->
                  <!--  </div>
                    <div class="tab-pane" role="tabpanel" id="step3">-->
                      <!-- <div class="container">
	<div class="row">-->
        
        <!-- panel preview -->
        <div class="col-sm-5 formsign">
                         <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
				<div class="form-group">
				<label for="" class="col-sm-3 control-label">Choose File:</label>
                <input type="file" name="profilepic" id="file" required="required" accept="image/*" >
                      <!--  <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                        </ul>-->
                    </div>
                    </div>
                    </div>
                    </div>
                    <!--</div>
                    </div>-->
                    <!--</div>
                    <div class="tab-pane" role="tabpanel" id="complete">-->
                                            <!-- <div class="container">
	<div class="row">-->
        
        <!-- panel preview -->
        <div class="col-sm-5 formsign">
                         <div class="panel panel-default">
                <div class="panel-body form-horizontal payment-form">
				
                <fieldset>
								<h3 class="fs-subtitle " style="color: black; font-size: 25px;     text-align: center;    margin-bottom: 30px;">Fill in your credentials</h3>
								<div class="form-group">
									<div class="col-sm-12">
										<label for="nickname" class="col-sm-3 control-label">User Name :</label>
										<div class="col-sm-9">
										<input type="text" name="nickname" class="form-control" id="nickname2" placeholder="User Name" required="required"> </div>
									</div><span class="category_error error"></span></br></br>
								</div>
								  <div class="form-group">
										<div class="col-sm-12">
											<label for="lastName" class="col-sm-3 control-label">Email:</label>
											<div class="col-sm-9">
												<input type="email" name="email" class="form-control" id="email" required="required" data-parsley-trigger="change" placeholder="email"> </div>
										</div><span class="email_error error"></span>
								</div></br></br>
								<div class="form-group">
										<div class="col-sm-12">
											<label for="lastName" class="col-sm-3 control-label">Password:</label>
											<div class="col-sm-9">
												<input type="password" name="password" class="form-control" id="pass" required="required" placeholder="password"> </div>
										</div><span class="password_error error"></span>
								</div></br></br>
									<div class="g-recaptcha" data-sitekey="6LcaMFUUAAAAAJwhq9UZMKyyrTx2qjzcnujfOCsP"></div>	
				
										
								
				<div class="form-group ">
						<label for="lastName " class="col-sm-1 control-label ">
						<input type="checkbox" name="verifyy" required='required' class="chcktbl">
							
						</label>
						<div class="col-sm-11 " style="text-align: left; ">
							<label class="cbxAVSelfCert ">
								I certify that I have reviewed all of the <em>free to view</em> content on my Profile and it's associated page
								<!--span class="HelpLink " onmouseover="EnterContent( 'ToolTip', 'Adult Content Certification', '<ul> <li>Profile Page - 3 main pictures</li> <li>Free Gallery - all pictures</li> <li>Erotica - any pictures</li> <li>Humour - any pictures</li><li>Sale Items - all pictures</li><li>Blog - any images</li> </ul> '); Activate(); " onmouseout="deActivate() ">associated pages</span--> and have removed any images that are unsuitable for minors. &nbsp;Furthermore, any images I upload to these areas in future will also conform to these standards.</label>
						</div>
					</div>								
								<!--div class="form-group">
										<div class="col-sm-12">
											<label for="lastName" class="col-sm-3 control-label"></label>
											<div class="col-sm-9">
												<input type="submit" name="submit"  class="submit action-button" id="sbt" value="Submit " > 
											</div>
										</div>
								</div-->							
								
							</fieldset>
                        <ul class="list-inline pull-right">
                           <!-- <li><button type="button" class="btn btn-default prev-step">Previous</button></li>-->
                          
                            <li><button type="submit" class="btn btn-primary btn-info-full next-step">Save</button></li>
                        </ul>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
</div>


  
<div class="alert alert-danger global is-hidden abs"></div>
 <div class="alert alert-success global is-hidden abs"></div>
<div id="loadingDiv"><img src="http://topxseller.com/assets/images/profileSnapshotLoading.gif" alt="loading"/></div>
<div id="loadingOverlay"></div>	
    
<script>
	$('document').ready(function(){
		
//////////////// 	check email already exist or not 	///////////
	$("#email").blur(function(){
	var obj=$(this);
	var email= obj.val();
	
	if(email != '')
	{
	$.ajax({
			type:'POST',
			url:'<?php echo base_url("check_email"); ?>',
			data:{email:email},
			success:function(data){
				
			 if(data == 1) 
			{  
				//error_alert('Sorry!!','Email already exist please try another');
				$('.email_error').html("Sorry!!','Email already exist please try another");
				//obj.css('background-color','#B94A48');
				//obj.val('');
				obj.focus();
				
			}else{
					$('.email_error').html("");
					//obj.css('background-color','#B94A48');
					return false;
				} 
			}
		}); 
	}else
	{
	return false;
	}
	});
	
	//////////////// 	check username already exist or not 	///////////
	$("#nickname2").blur(function(){
		var obj=$(this);
	var username= obj.val();
	if(username != '')
	{
	$.ajax({
			type:'POST',
			url:'<?php echo base_url("check_username"); ?>',
			data:{username:username},
			success:function(data){
			 if(data == 1) 
			{
				$('.category_error').html("Sorry!!','User Name already exist please try another");
				//error_alert('Sorry!!','User Name already exist please try another');
				//obj.val('');
				obj.focus();
				
			}else{
				$('.category_error').html('');
					return false;
				} 
			}
		}); 
	}else
	{
	return false;
	}
	})
	
	//////////////// 	check password lenth 	///////////
	$("#pass").blur(function(){ 
	var obj=$(this);
	var password= obj.val();
	if(password != '')
	{
		if(password.length<6){
			//error_alert('Sorry!!','Your password too Sort.');
			$('.password_error').html("Sorry!!','Minimum password length should 6 characters.");
			//obj.val('');
			obj.focus();
			
		}else{
			$('.password_error').html("");
			return false;
		}
	
	}
		});
		
		
	
});
	 
function error_alert(a, b) {
   clearTimeout(e);
   var c = $(".alert.alert-danger.global"),
       d = "is-hidden";
   c.html("<strong>" + a + "</strong> " + b).fadeIn(1000).removeClass(d);
   var e = setTimeout(function() {
       c.fadeOut(function(a) {
           c.removeClass(d).empty()
       })
   }, 4500)
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
   }, 4500)
}	

	
</script>

<script type="text/javascript">
$(function () {
  $('#demo-form').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function(e) {
	  $('#loadingDiv , #loadingOverlay').css('display','block'); 
    
	
		/* 
		 e.preventDefault();
		$.ajax({  
			url: "http://codenomad.biz/secret-angels/",
			type: "POST",
			data:new FormData(this),
			beforeSend: function(){jQuery("#body-overlay").show();},
			contentType: false,
			processData:false,
			success: function(data)
			{ 
				alert(data);
					 $('#email_error').html(data);
					$("#email_error").show();
				setTimeout(function() { $("#email_error").hide(); }, 5000); 
			},
 	      
	    }); */ 
	     	
	
  });
});
</script>

<script src='https://www.google.com/recaptcha/api.js'></script>
<script src='http://parsleyjs.org/dist/parsley.js'></script>
<!--<script  src="http://parsleyjs.org/dist/parsley.min.js"></script>-->

<script>
$('document').ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

	
	
	///////////////////    Only for Numeric keys ZipCode ////////////////////
	$("#zipcode").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl/cmd+A
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+C
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: Ctrl/cmd+X
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
	
//});
</script>
<script>
// Functin for set max date for datepicker 
$('document').ready(function(){
	
      var start = new Date();
    start.setFullYear(start.getFullYear() - 70);
    var end = new Date();
    end.setFullYear(end.getFullYear() - 18);
	var month = end.getMonth()+1;
	var day = end.getDate();
	var output = end.getFullYear()+'-'+(month<10 ? '0' : '')+month+'-'+(day<10 ? '0' : '')+day;

	$("#dob").attr("max",output);  
	
    
});

</script>
<script>
$('document').ready(function () {
    //Initialize tooltips

    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
</script>
<script>
/* $('input["type=radio"]').click(function(){
	alert("ss");
}) */
$("input[type=radio]").change(function(){ 
	var a = $(this).val();
	if(a == "Male")
	{
		$('.Choosecate , .hair , .willingness , .Apperence').css('display','none');// , #hair , #willingness
		$('.Choosecate1 , .hair1 , .willingness1 , .Apperence1').css('display','block');// , #hair1 , #willingness1
	}else if(a == 'Female' || a == 'Transgender'){
	
		$('.Choosecate , .hair , .willingness , .Apperence').css('display','block');// , #hair , #willingness
		$('.Choosecate1 , .hair1 , .willingness1, .Apperence1').css('display','none');// , #hair1 , #willingness1
	}
	
    	
});
 function ajaxcall(a,b){
	
	$.ajax({ 
			url : "http://codenomad.biz/secret-angels/",
			type: "POST",
			data:{usertype : a},
			success(data)
			{  //console.log(data);
			
			}
		});
}
</script>
<script>
$('document').ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>

</html>
 <!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->