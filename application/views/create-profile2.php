<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Complete_profile</title>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

      <link rel="stylesheet" href="<?php echo base_url('css/style2.css')?>">
	 
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		   <script src="<?php echo base_url('js/countries.js'); ?>" type="text/javascript"></script>
		   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
		   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
		   

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
<!--Link For Recaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<style>
.bootstrap-select>.dropdown-toggle.bs-placeholder, .bootstrap-select>.dropdown-toggle.bs-placeholder:active, .bootstrap-select>.dropdown-toggle.bs-placeholder:focus, .bootstrap-select>.dropdown-toggle.bs-placeholder:hover {
    color: white;
    background: transparent;
	margin-left:15px;
}
.dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-bottom: 2px;
    margin-left: 16px;
}
.g-recaptcha {
    position: unset;
    margin-left: 28%;
}

#parent {
    border: 1px solid black;
  border: 1px solid black;
}

</style>
</head>
  <div >

			
				<a class="navbar-brand" href="<?php echo base_url('main_page');?>"><img class="secreatlogo" src="<?php echo base_url('image/corporate/logo.png');  ?>"></a>

			  </div>


<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
		<div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p>Step 4</p>
        </div>
    </div> 
</div>
<?php
if ($this->session->flashdata('failed') != ''): 
    echo $this->session->flashdata('failed'); 
endif;?>
<form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('modelsignupp');?>" >
<!--------------------------------------------personallllllllll detailsss---------------------------------------------------->
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h2 class="fs-title" style="text-align: center;">Personal Details</h2>
				<div class="form-group">
                    <div class="col-sm-12">
                        <label for="firstname" class="col-sm-3 control-label">Real First Name :</label>
                        <div class="col-sm-9">
                            <input type="text" name="firstname" class="form-control" id="firstname" required="required" placeholder="First Name"> </div>
                    </div>
                </div></br></br></br>
				
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="lastname" class="col-sm-3 control-label">Real Last Name:</label>
                        <div class="col-sm-9">
                            <input type="text" name="lastname" class="form-control" id="lastname" required="required" placeholder="Last Name"> </div>
                    </div>
                </div></br></br>
				 
				<!--div class="form-group">
                    <div class="col-sm-12">
                        <label for="nickname" class="col-sm-3 control-label">Age :</label>
                        <div class="col-sm-9">
                            <input type="text" name="age" class="form-control" id="age1" placeholder="Age"required="required"> </div>
                    </div></br></br>
                </div-->
                 <div class="form-group" style="    float: left; width: 100%;">
                        <label for="" class="col-sm-3 control-label">Gender:</label>
                        <div class="col-sm-9" style="text-align:left !important; color: #fff;">
                            <input type="radio" style="width: 10% !important;" name="gender" value="Male" checked> Male
                            <br>
                            <input type="radio" style="width: 10% !important;" name="gender" value="Female"> Female
                            <br>
                            <input type="radio" style="width: 10% !important;" name="gender" value="Transgender"> Transgender
                            <br> </div>
                </div></br></br>
				
				<div class="clear" style="clear: both;"></div>
                <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Address:</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" class="form-control" id="Phone" placeholder="Address" required="required"> </div>
                </div></br></br>
				
                <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Zip Code:</label>
                        <div class="col-sm-9">
                            <input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="Zip Code" required="required"> </div>
                </div></br></br>
				
                <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label" required="required">Country:</label>
                        <div class="col-sm-9">
						 <select class="form-control" onchange="print_state('state',this.selectedIndex);" id="country" style="width: 100%; float: left;" name ="country" required="required"></select>
						
                            <!--input type="text" name="country" class="form-control" id="Town" placeholder="Country" required="required"--> </div>
                 </div></br></br>

                 <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label" required="required">State:</label>
                        <div class="col-sm-9">
                           
							<select class="state" name ="state" id ="state" style="width: 100%; float: left;"></select>
		<script language="javascript">print_country("country");</script>	
                        </div>
                </div></br></br>
				
               
				
                 <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Choose categories :</label>
                       <dl class="dropdown"> 
							<select class="selectpicker" multiple data-max-options="2">
  <option>Mustard</option>
  <option>Ketchup</option>
  <option>Relish</option>
</select>

   
                  </div>
				   <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Show Type :</label>
                       <dl class="dropdown"> 
							<select class="selectpicker" name="showtype" required="required">
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
							<select class="selectpicker" name="ethnicity" required="required">
							<option value="">Select</option>
							<option value="1">Asian</option>
							<option value="2">Ebony</option>
							<option value="3">Latin</option>
							<option value="4">White</option>
							
							</select>
   
                  </div>
				   <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Appearance :</label>
                       <dl class="dropdown"> 
							<select class="selectpicker" name="appearance[]" multiple data-max-options="3" required="required">
							<option value="">Select</option>
							<option value="1">BBW</option>
							<option value="2">Big Tits</option>
							<option value="3">Hairy Pussy</option>
							<option value="4">Petite</option>
							<option value="5">Piercing</option>
							<option value="6">Shaved</option>
							<option value="7">Stockings</option>
							<option value="8">Tattoo</option>
							<option value="9">Tiny Tits</option>
							
							</select>
   
                  </div>
				   <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Hair :</label>
                       <dl class="dropdown"> 
							<select class="selectpicker" name="hair" required="required">
							<option value="">Select</option>
							<option value="1">Black hair</option>
							<option value="2">Blonde</option>
							<option value="3">Brunette</option>
							<option value="4">Redhead</option>
							<option value="5">Long</option>
							<option value="6">Short</option>
							
							</select>
   
                  </div>
				   <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Willingness :</label>
                       <dl class="dropdown"> 
							<select class="selectpicker" name="Willingness[]" multiple data-max-options="3" required="required">
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
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    </div>
	
	<!--------------------------------------------step2jhgfjhdgfgshjfghasdg---------------------------------------------------->

	
				<div class="row setup-content" id="step-2">
					<div class="col-xs-12">
						<div class="col-md-12">
							<h2 class="fs-title">Personal Details</h2>
							<div class="form-group">
								<label for="dob" class="col-sm-3 control-label">DOB:</label>
								<div class="col-sm-9">
									<input type="date" name="dob" class="form-control datepicker"  id="dob"  placeholder=" Date of Birth"  data-toggle="tooltip" title="Model above 18+ years old can signup on this website" required="required"></div>
							</div></br></br> 
							


							
							<div class="clear" style="clear: both;"></div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">Sexuality:</label>
								<div class="col-sm-9" >
									
									<div class="col-md-6 col-sm-6">
									<table id="tbl">
								<tbody>
									<tr>
										<td style="width: 80px;">
											<input name="sexuality[]"  value="Bi-curious" type="checkbox" class="chcktbl" > </td>
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
			<div class="enjoy-outer">
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
										<td style="width: 80px;">
											<input name="level[]" value="A Levels" type="checkbox" class="chcktbl" > </td>
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
											<input name="level[]" value='BDSM' type="checkbox" class="chcktbl" > </td>
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
							</div>
							<br>
							<div class="form-group with">
								<label for="" class="col-sm-3 control-label">With:</label>
								<div class="col-sm-9" style="text-align:left !important; color: #fff;">
									<input type="checkbox" style="width: 10% !important;" name="gender5" value="Men">Men
							
									<input type="checkbox" style="width: 10% !important;" name="gender5" value="Women"> Women
							
									<input type="checkbox" style="width: 10% !important;" name="gender5" value="Couples MF">Couples MF
								
									<input type="checkbox" style="width: 10% !important;" name="gender5" value="Couples MM"> Couples MM
								
									<input type="checkbox" style="width: 10% !important;" name="gender5" value="Couples ff"> Couples ff
									 </div>
							</div>
							<div class="clear" style="clear: both;"></div>
							<div class="form-group with">
								<div class="form-group">
									<label for="firstName" class="col-sm-3 control-label">About Me:</label>
									<div class="col-sm-9">
									<textarea onkeyup="countChar(this)" class="form-control" name="summary" rows="8" id="comment"></textarea>
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

							<div class="clear" style="clear: both;"></div>
						
							<button class="btn btn-primary pretBtn btn-lg pull-left" id="pretBtn6" type="button" >Previous</button>
							<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
						</div>
					</div>
				</div>
	<!--------------------------------------------step3detailsss---------------------------------------------------->

    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h2 class="fs-title">Profile Picture</h2>
                <input type="file" name="profilepic" id="file" >
               		
					
						
						<div class="clear " style="clear: both; "></div>
						<div class="clear" style="clear: both;"></div>
						
						<button class="btn btn-primary pretBtn btn-lg pull-left" id="pretBtn2" type="button" >Previous</button>
						<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
					</div>

                
            </div>
        </div>
    
<!--------------------------------------------step4  detailsss---------------------------------------------------->

	    <div class="row setup-content" id="step-4">
				<div class="col-xs-12">
					<div class="col-md-12">
						<h2 class="fs-title">Profile Pictures</h2>
						    <fieldset>
								<h3 class="fs-subtitle " style="color: #fff; font-size: 25px;     margin-bottom: 30px;">Fill in your credentials</h3>
								<div class="form-group">
									<div class="col-sm-12">
										<label for="nickname" class="col-sm-3 control-label">User Name :</label>
										<div class="col-sm-9">
										<input type="text" name="nickname" class="form-control" id="nickname2" placeholder="User Name "required="required"> </div>
									</div></br></br>
								</div>
								  <div class="form-group">
										<div class="col-sm-12">
											<label for="lastName" class="col-sm-3 control-label">Email:</label>
											<div class="col-sm-9">
												<input type="text" name="email" class="form-control" id="Email" required="required" placeholder="email"> </div>
										</div>
								</div></br></br>
								<div class="form-group">
										<div class="col-sm-12">
											<label for="lastName" class="col-sm-3 control-label">Password:</label>
											<div class="col-sm-9">
												<input type="password" name="password" class="form-control" id="pass" required="required" placeholder="password"> </div>
										</div>
								</div></br></br>
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
								
										<div class="g-recaptcha" data-sitekey="6LeX30YUAAAAALmXdCQFFoc7BeLppy2X7hbjDnuH"></div>	
				
										
								
											
								<!--div class="form-group">
										<div class="col-sm-12">
											<label for="lastName" class="col-sm-3 control-label"></label>
											<div class="col-sm-9">
												<input type="submit" name="submit"  class="submit action-button" id="sbt" value="Submit " > 
											</div>
										</div>
								</div-->							
								
							</fieldset>
							
							<button class="btn btn-primary pretBtn btn-lg pull-left" id="pretBtn1" type="button" >Previous</button>
							
						<button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
					</div>
				
				</div>
        </div>	
				
</form>
</div>


<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
$('.pretBtn').click(function(){
	$(this).prev().closest('.setup-content').prev().css('display','block');
	$(this).prev().closest('.setup-content').css('display','none');
	var ab = $(this).prev().closest('.setup-content').prev().attr('id');
	var cd = '#'+ab;	
	$('.setup-panel a').each(function(i)
    {
		var aarr = $(this).attr('href');
		if (cd==aarr){
			
			$(this).addClass('btn-primary');
		}
		else
		{
			$(this).removeClass('btn-primary');
		}
		
    });
});
$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='checkbox'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
	///////////////////    Only for Numeric keys age ////////////////////
	$("#age1").keydown(function (e) {
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
	
});
// Functin for set max date for datepicker 
$(function () {
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

</body>
</html>
