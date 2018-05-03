
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Update_profile</title>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

      <link rel="stylesheet" href="http://codenomad.biz/secret-angels/css/style1.css">
	  <script src="http://codenomad.biz/secret-angels/js/country_select.js" type="text/javascript"></script>
</head>

<body>
  <!-- MultiStep Form -->
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <form id="msform" enctype="multipart/form-data" action="http://codenomad.biz/secret-angels/index.php/secret_controller/update_info" method="post">
		
            <!-- progressbar -->
            <!--ul id="progressbar">
                <li class="active">General</li>
                <li>Personal Details</li>
                <li>Pictures</li>
				
            </ul-->
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
				<div class="form-group">
   			       <label for="firstName" class="col-sm-3 control-label">First Name:</label>
					<div class="col-sm-9">
					  <input type="text" name="first_Name" value="<?php echo $data[0]['First_name'];?>"class="form-control" id="firstName" placeholder="First Name">
					</div>
                </div>
				<div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Last Name:</label>
					<div class="col-sm-9">
					  <input type="text" name="last_Name" value="<?php echo $data[0]['First_name']; ?>" class="form-control" id="lastName" placeholder="Last Name">
					</div>
                </div>
				
			<div class="clear" style="clear: both;"></div>		
			<!--div class="locations" style="margin-top: 30px;"><h3 style="border-bottom: 1px solid #9e3a3b;width: 23%;margin-bottom: 30px;color: #ee0979;">Location Details</h3></div-->
			<h2 class="fs-title">Location Details</h2>
			    <div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Town:</label>
					<div class="col-sm-9">
					  <input type="text" name="Town" value="<?php echo $data[0]['Town']; ?>" class="form-control" id="Town" placeholder="Town">
					</div>
                </div>
				
				<div class="clear" style="clear: both;"></div>	
			    <div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Country / Area:</label>
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
				<div class="clear" style="clear: both;"></div>	</br>
				<div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Region / State:</label>
					<div class="col-sm-9">
					  <select name="state" class="form-control selectpicker" id="state">
					  <?php if($data[0]['State']!="")
					  {	
						echo "<option value='".$data[0]['State']."'>".$data[0]['State']."</option>"; 
					  }	?>
					  </select>
					</div>
                </div>
				<div class="clear" style="clear: both;"></div>	
				</br>
			    <div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Zip/Postal Code:</label>
					<div class="col-sm-9">
					  <input type="text" name="Zip" value="<?php echo $data[0]['Zipcode']; ?>" class="form-control" id="Phone" placeholder="Zip/Postal Code">
					</div>
                </div>
				<div class="clear" style="clear: both;"></div>	
				
				<div class="clear" style="clear: both;"></div>		
			     <!--div class="locations" style="margin-top: 30px;"><h3 style="border-bottom: 1px solid #9e3a3b;width: 23%;margin-bottom: 30px;color: #ee0979;">Other Settings</h3></div-->
				 <h2 class="fs-title">Other Settings</h2>
				 
				
				<div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Availability Diary	</label>
					<div class="col-sm-9" style="text-align: left;">
					   <input type="checkbox" style="width: 10% !important;" name="vehicle" <?php if($data[0]['Availability_dairy']=="Bike"){ echo "checked"; }?> value="Bike"> Show a link to my Availability Diary	<br>
					</div>	
                </div>
				
				</hr>
				<div class="form-group">
   			     <label for="lastName" class="col-sm-3 control-label">Credits:</label>
					<div class="col-sm-9" style="text-align: left;">
					   <input type="checkbox" style="width: 10% !important;" <?php if($data[0]['Credits']=="Bike"){ echo "checked"; }?> name="credits" value="Bike">Do not allow quick purchasing<br>
					</div>	
                </div>
				<button type='submit' id="p_submit">Submit</button>
				
            </fieldset>
</div>
</div>			
<style>
button#p_submit {
    width: 100px;
    background: linear-gradient(to bottom, #fc0, #F98706);
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}
</style>
