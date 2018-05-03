
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Complete_profile</title>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

      <link rel="stylesheet" href="<?php echo base_url('css/style1.css')?>">
	  <script src="<?php echo base_url('js/country_select.js'); ?>" type="text/javascript"></script>
</head>

<body>
  <!-- MultiStep Form -->
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <form id="msform" enctype="multipart/form-data" action="<?php echo base_url('index.php/secret_controller/complete_profile');?>" method="post">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">General</li>
                <li>Personal Details</li>
                <li>Pictures</li>
				
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
				<div class="form-group">
   			       <label for="firstName" class="col-sm-3 control-label">First Name:</label>
					<div class="col-sm-9">
					  <input type="text" name="first_Name" class="form-control" id="firstName" placeholder="First Name">
					</div>
                </div>
				<div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Last Name:</label>
					<div class="col-sm-9">
					  <input type="text" name="last_Name" class="form-control" id="lastName" placeholder="Last Name">
					</div>
                </div>
				
			<div class="clear" style="clear: both;"></div>		
			<!--div class="locations" style="margin-top: 30px;"><h3 style="border-bottom: 1px solid #9e3a3b;width: 23%;margin-bottom: 30px;color: #ee0979;">Location Details</h3></div-->
			<h2 class="fs-title">Location Details</h2>
			    <div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Town:</label>
					<div class="col-sm-9">
					  <input type="text" name="Town" class="form-control" id="Town" placeholder="Town">
					</div>
                </div>
				
				<div class="clear" style="clear: both;"></div>	
			    <div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">County / Area:</label>
					<div class="col-sm-9">
					  <!--select class="selectpicker" name="Country" style="width: 30%; float: left;">
					  <option>Mustard</option>
					  <option>Ketchup</option>
					  <option>Relish</option>
					</select-->
					<select id="country" class="form-control selectpicker" name="country"></select>
					<script language="javascript">
						populateCountries("country", "state");
					</script>
					</div>
                </div>
				<div class="clear" style="clear: both;"></div>	
				<div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Region / State:</label>
					<div class="col-sm-9">
					  <select name="state" class="form-control selectpicker" id="state"></select>
					</div>
                </div>
				<div class="clear" style="clear: both;"></div>	
			    <div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Zip/Postal Code:</label>
					<div class="col-sm-9">
					  <input type="text" name="Zip" class="form-control" id="Phone" placeholder="Zip/Postal Code">
					</div>
                </div>
				<div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Rate Per Minute:</label>
					<div class="col-sm-9">
					  <input type="text" name="rate_per_minute" class="form-control" id="rate_per_minute" placeholder="Rate per minute">
					</div>
                </div>
				
				<div class="clear" style="clear: both;"></div>		
			     <!--div class="locations" style="margin-top: 30px;"><h3 style="border-bottom: 1px solid #9e3a3b;width: 23%;margin-bottom: 30px;color: #ee0979;">Other Settings</h3></div-->
				 <h2 class="fs-title">Other Settings</h2>
				 
				
				<div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Availability Diary	</label>
					<div class="col-sm-9" style="text-align: left;">
					   <input type="checkbox" style="width: 10% !important;" name="vehicle" value="Bike"> Show a link to my Availability Diary	<br>
					</div>	
                </div>
				
				</hr>
				<div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Credits:</label>
					<div class="col-sm-9" style="text-align: left;">
					   <input type="checkbox" style="width: 10% !important;" name="credits" value="Bike">Do not allow quick purchasing<br>
					</div>	
                </div>
				<input type="button" name="next" class="next action-button" value="Next"/>
				
            </fieldset>
			<fieldset>
                <h2 class="fs-title">Personal Details</h2>
               <div class="form-group">
				<label for="dob" class="col-sm-3 control-label">DOB:</label>
					<div class="col-sm-9">
					  <input type="text" name="dob" class="form-control datepicker" id="dob" placeholder=" Date of Birth">
					</div>
			   </div>
			   
			    <div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Gender</label>
					<div class="col-sm-9">
					  <select class="selectpicker" name="gender" style="width: 30%; float: left;">
					  
					  <option>Female</option>
					  <option>Bi-curious</option>
					  <option>Bi-sexual</option>
					</select>
					</div>
                </div>
				<div class="clear" style="clear: both;"></div>
				
			 <div class="enjoy-outer">
			   <div class="col-sm-3"><div class="Padded" align="right" nowrap="">I <b>enjoy</b> the following:</td></div></div>
			   <div class="col-sm-9">
			   <div class="enjoy">
			      
				  <div class="col-md-12 col-sm-12">
				      <table id="tbl">
						<tbody>
						<tr>
						<td style="width: 80px;">
						<input type="checkbox" value="A Levels" name="enjoy[]" class = "chcktbl" />
						</td>
						<td>"A" Levels</td>
						 </tr>
						<tr>
						<td style="width: 80px;">
						<input type="checkbox" value="A Levels at discretion" name="enjoy[]" class = "chcktbl" />
						</td>
						<td>"A" Levels (at discretion)</td>
						</tr>
						<tr>
						<td style="width: 80px;">
						<input type="checkbox" value="15 Mins quickie" name="enjoy[]" class = "chcktbl" />
						</td>
						<td>15 Mins "quickie"</td>
						</tr>
						<tr>
						<td style="width: 80px;">
						<input type="checkbox" value="Adult Baby Minding" name="enjoy[]" class = "chcktbl" />
						</td>
						<td>Adult Baby Minding</td>
						</tr>
						<tr>
						<td style="width: 80px;">
						<input type="checkbox" name="enjoy[]" value="Anal Play" class = "chcktbl" />
						</td>
						<td>Anal Play</td>
						</tr>
						<tr>
						<td style="width: 80px;">
						<input type="checkbox" value="Bareback" name="enjoy[]" class = "chcktbl" />
						</td>
						<td>Bareback</td>
						</tr>
						<tr>
						<td style="width: 80px;">
						<input type="checkbox" value="BDSM" name="enjoy[]" class = "chcktbl" />
						</td>
						<td>BDSM</td>
						</tr>
						<tr>
						<td style="width: 80px;">
						<input type="checkbox" value="BDSM-giving" name="enjoy[]" class = "chcktbl" />
						</td>
						<td>BDSM (giving)</td>
						</tr>
						<tr>
						<td style="width: 80px;">
						<input type="checkbox" name="enjoy[]" value="BDSM-receiving" class = "chcktbl" />
						</td>
						<td>BDSM (receiving)</td>
						</tr>
						<tr>
						<td style="width: 80px;">
						<input type="checkbox" name="enjoy[]" value="Being Filmed" class = "chcktbl" />
						</td>
						<td>Being Filmed</td>
						</tr>
						</tbody>
					</table>
				  </div>
			   </div>
			   </div>
			</div>
			<br>
			<div class="clear" style="clear: both;"></div>	
			<div class="form-group with">
			 <div class="form-group">
   			       <label for="firstName" class="col-sm-3 control-label">Summary:</label>
					<div class="col-sm-9">
					  <input type="text" name="summary"  class="form-control" id="firstName" placeholder="First Name">
					</div>
             </div>
			  <div class="form-group">
   			       <label for="firstName" class="col-sm-3 control-label">Details:</label>
					<div class="col-sm-9">
					  <textarea class="form-control" name="details" rows="8" id="comment"></textarea>
					</div>
                </div>	
			</div>
			<div class="form-group with">
			<div class="Padded">
                <b>DO NOT</b> enter email addresses, links, URLs, telephone numbers or Twitter usernames in your Summary or Details section.<br>
                Switch to the <a href="javascript:void(0)" onclick="switchTab('General')">General Tab</a> and use the 'Show' tick boxes by the Email, Mobile and Phone Chat Number fields to display your email address or telephone number, or enter your website or Twitter address via the 'Manage Links' button.
                <p><b>DO NOT</b> enter the wording 'Available Today' or anything like it (including references to days, dates or times) in your Summary.<br>
                Visit 'Your Availability' on the <a href="" target="_blank" title="Opens in new window">My Details Page</a> if you wish to state when you are going to be available.</p>
                
			</div>
			</div>
            <div class="clear" style="clear: both;"></div>				
                 <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
			<div class="clear" style="clear: both;"></div>	
        			
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Profile Pictures</h2>
                      <input type="file" name="profile_pic" accept="image/*">	  
			    
				<h2 class="Adult_hed"> Adult Content Certification</h2>
				 <div class="pt5">Members are strongly encouraged to ensure their AdultWork.com&nbsp;Profile is compliant with the 
				 <span class="HelpLink" te()">laws in their country</span>. &nbsp;For more information of what's expected please visit <a href="AgeVerificationInfo.asp" title="Opens in new window" target="_blank">this page</a>
				 </div>
				 <div class="form-group">
   			     <label for="lastName" class="col-sm-1 control-label"><input type="checkbox" name="verify" class = "chcktbl" /></label>
					<div class="col-sm-11" style="text-align: left;">
					   <label class="cbxAVSelfCert">I certify that I have reviewed all of the <em>free to view</em> 
					   content on my Profile and it's <span class="HelpLink" onmouseover="EnterContent('ToolTip','Adult Content Certification','<ul> 
					   <li>Profile Page - 3 main pictures</li> <li>Free Gallery - all pictures</li> <li>Erotica - any pictures</li> 
					   <li>Humour - any pictures</li><li>Sale Items - all pictures</li><li>Blog - any images</li> </ul> '); 
					   Activate();" onmouseout="deActivate()">associated pages</span> and have removed any images that are unsuitable 
					   for minors. &nbsp;Furthermore, any images I upload to these areas in future will also conform to these standards.</label>
					</div>	
                </div>
					<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
				<input type="submit" class="action-button" id="model_create" name="submit_profile" value="Submit">
					<div class="clear" style="clear: both;"></div>
				</div>
                
            </fieldset>
			
        </form>
        <!-- link to designify.me code snippets -->
        <div class="dme_link">
           <!--  <p><a href="http://designify.me/code-snippets-js/" target="_blank">More Code Snippets</a></p> -->
        </div>
        <!-- /.link to designify.me code snippets -->
    </div>
</div>
<script>
$('#msform').submit(function(){
if(!$('input[name="verify"]').is(":checked")))
{
alert("Please check the box"); return false;
}
});
</script>
<!-- /.MultiStep Form -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script  src="<?php echo base_url('js/index12.js'); ?>"></script>

</body>
</html>