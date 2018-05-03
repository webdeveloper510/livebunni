<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="out_personal">
        <form id="" enctype="" action="#" method="post">            
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
		</form>
	</div>
<style>
.fs-title {
    font-size: 18px;
    text-transform: uppercase;
    color: rgba(249, 250, 251, 0.76);
    margin-bottom: 20px;
    letter-spacing: 2px;
}
.out_personal {
    width: 55%;
    margin: 0 auto;
}
</style>