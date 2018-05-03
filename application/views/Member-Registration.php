
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Member Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/style4.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://www.clubdesign.at/floatlabels.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 </head>
 <style>
 body{
  /* Safari 4-5, Chrome 1-9 */
        background-image: url(https://static.pexels.com/photos/3686/person-woman-girl-model.jpg);
    background-repeat: no-repeat;
    background-size: cover;
        font-family: montserrat;
}

.centered-form{
  margin-top: 20px;
}

.centered-form .panel{
  background: rgba(255, 255, 255, 0.47);
  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}

label.label-floatlabel {
      display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 100 !important;

}
label {
    font-weight: 100 !important;
    margin-bottom: 3px;
}
.input-sm {
    height: 35px;
    padding: 5px 10px;
    font-size: 13px;
    line-height: 1.5;
    border-radius: 3px;
}
h3.panel-title {
    font-family: montserrat;
    font-size: 20pt;
    font-style: normal;
    font-weight: 400;
    color: #ee0979;
    text-align: center;
}
input#reg {
    color: #fff;
    background-color: #ee0979;
    border-color: #ee0979;
}
select#country_details {
    width: 100%;
    height: 35px;
    display: block;
    width: 100%;
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
select#old_state
{
	width: 100%;
    height: 35px;
    display: block;
    width: 100%;
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
select#old_city
{
		width: 100%;
    height: 35px;
    display: block;
    width: 100%;
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
.update_succesfully_profile_outer {
    background: transparent;
    color: green;
    font-weight: bold;
    text-align: center;
    padding-top: 10px;
    font-size: 20px;
}
.update_notsuccesfully_profile_outer
{
	background: transparent;
    color: red;
    font-weight: bold;
    text-align: center;
    padding-top: 10px;
    font-size: 20px;
}
</style>
 <body>
   <div class="first_out">
    <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Member sign up<small></small></h3>
            </div>
				<?php if($this->session->flashdata('success')) { ?>
				<div class="update_succesfully_profile_outer">
				<div class="alert alert-success" role="alert">
				<div class="update_succesfully_profile">
				<p><?php echo $this->session->flashdata('success') ?></p>
				</div></div>
				</div>
				<?php }
				else{?>
				<div class="update_notsuccesfully_profile_outer">
				<div class="" role="alert">
				<p><?php echo $this->session->flashdata('failed') ?></p>
				</div>
				</div>	
				<?php	
					
				}?>
			
			
			
			
            <div class="panel-body">
              <form role="form" action="<?php echo base_url('members_signup3'); ?>" method="POST">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">                   
                    <div class="form-group">
                      <label for="sel1">First Name</label>
                      <input type="text" name="first_name" id="first_name" class="form-control input-sm floatlabel" placeholder="First Name" >
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                     <label for="sel1">Last Name</label> 
                      <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                    </div>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="u_name">User Name</label>
                  <input type="text" name="full_name" id="full_name" class="form-control input-sm" placeholder="User Name">
                </div>

                <div class="form-group">
                  <label for="E_add">Email Address</label>
                  <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="Password">Password</label>
                      <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="Confirm">Confirm Password</label>
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                    </div>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="Confirm">Address</label>
                  <input type="text" name="address" id="address" class="form-control input-sm" placeholder="Address">
                </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="sel1">Countary</label>
							<select name="country_details" id="country_details" onChange="getstatedetails(this.value)">
								  <option value="" selected="selected" >Select Country</option>
								   <?php foreach($country as $count): ?>
									<option value="<?php echo $count->id; ?>"><?php echo $count->name; ?></option>
									 <?php endforeach; ?> 
							</select>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <!--input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password"-->
                      <label for="sel1">State</label>
                         <select name="select_state" id="old_state" onChange="getcitydetails(this.value)">
							   <option selected="selected">Select State</option>
						</select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <!--input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password"-->
                      <label for="sel1">City</label>
                         <select name="selectcity" id="old_city">
							<option selected="selected">Select City</option>
						  </select>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <!--input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password"-->
                      <label for="sel1">Zip Code</label>
                          <input type="number" name="zipcode" id="zipcode" class="form-control input-sm floatlabel" placeholder="Zip Code">
                    </div>
                  </div>
                </div>
                
                <input type="submit" value="Register" id="reg" class="btn btn-info btn-block">
              
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
 </body>
 <script>
 $(function() {
  $('input').floatlabel({labelEndTop:0});
});
 $("input[name='zipcode']").change(function(){
       if($("input[name='zipcode']").val()>599999 || $("input[name='zipcode']").val()<0)
       {
       $("input[name='zipcode']").val('');
       }
	  
});

$("input[name='zipcode']").keyup(function(){
       if($("input[name='zipcode']").val()>599999 || $("input[name='zipcode']").val()<0)
       {
       $("input[name='zipcode']").val('');
       }
	  
});




 </script>
  <script>
            function getstatedetails(id)
            {
                //alert('this id value :'+id);
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url('/index.php/Secret_controller/ajax_state_list').'/';?>'+id,
                    data: id='cat_id',
                    dataType: 'json',
                    success: function(data){
						console.log(data);
                        //alert(data);
						var html='';
						$.each(data, function(i, member) {
           html +='<option value="'+data[i].id+'">'+data[i].name+'</option>';
        });
                        $('#old_state').html(html);
                }
});
            }
            </script>
            <script>
            function getcitydetails(id)
            {
               
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url('/index.php/Secret_controller/ajax_city_list').'/';?>'+id,
                    data: id='st_id',
					 dataType: 'json',
                    success: function(data){
						
						console.log(data);
                        //alert(data);
						var html='';
						$.each(data, function(i, member) {
           html +='<option value="'+data[i].id+'">'+data[i].name+'</option>';
        });
						
                       
                        $('#old_city').html(html);
                },
});
            }
                </script>
 </html>
