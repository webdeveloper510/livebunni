
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Change Password</title>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

      <link rel="stylesheet" href="http://codenomad.biz/secret-angels/css/style1.css">
	  <script src="http://codenomad.biz/secret-angels/js/country_select.js" type="text/javascript"></script>
</head>

<body>
  <!-- MultiStep Form -->

<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <form id="msform" enctype="multipart/form-data" action="http://codenomad.biz/secret-angels/index.php/secret_controller/complete_profile" method="post">
            <!-- progressbar -->
            <!--ul id="progressbar">
                <li class="active">General</li>
                <li>Personal Details</li>
                <li>Pictures</li>
				
            </ul-->
            <!-- fieldsets -->
            <fieldset style="margin: 10% 10%;">
                <h2 class="fs-title">Change Password</h2>
				<div class="form-group">
   			       <label for="firstName" class="col-sm-3 control-label">New Password:</label>
					<div class="col-sm-9">
					  <input type="Password" name="pass" class="form-control" id="pass" placeholder="New Password">
					</div>
                </div>		
                <div class="form-group">
   			       <label for="firstName" class="col-sm-3 control-label">Retype Password:</label>
					<div class="col-sm-9">
					  <input type="Password" name="pass1" class="form-control" id="pass1" placeholder="Retype Rassword">
					</div>
                </div>					
				
				<button type='button' class="pass_sub" id="update_pass">Update Password</button>
				
            </fieldset>
</div>
</div>
<script>			
$('#update_pass').click(function(){
	var  pass =$('#pass').val();
	var  cpass =$('#pass1').val();
	if($('#pass').val()=="")
	{
		$('#pass').css('border','1px solid pink');
		$('#pass1').css('border','none');
	}
	else if($('#pass1').val()=="")
	{
		$('#pass').css('border','none');
		$('#pass1').css('border','1px solid pink');
	}
	else if($('#pass').val()!=$('#pass1').val())
	{
		$('#pass1').append('<p>Password and confirm password should match</p>');
	}
	else
	{
		
		
		$.ajax({
		url:'<?php echo base_url('index.php/secret_controller/update_password'); ?>',
		data:{ pass:pass },
		type:'post',
		success:function(value){
			if(value=="success")
			{
			alert('password updated successfully');
			}
			else{
			alert(value);
			}
		}
		});
	}
});
</script>			
<style>
.pass_sub {
    width: 180px;
    background: linear-gradient(to bottom, #fc0, #F98706);
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 13px 25px;
    margin: 10px 5px;
}
</style>
