<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Secret-angel_credit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 </head>
 <body>
<form action="<?php #echo base_url('/credit'); ?>" method="POST">
  <div class="credit">
     <div class="out_cred">
	    <div class="quick_by">
		  <div class="col-md-3 col-sm-2 col-xs-2 quick"><h4><a href="<?php echo base_url().'main_page'; ?>"><img src="http://codenomad.biz/secret-angels/image/corporate/logo.png"></a></h4></div>
		  <div class="col-md-9 col-sm-12 col-xs-12 quick_right">
		    <ul>
			   <li a href="">You have <span style="color: yellow;">10 private teaser(s)</span></li>
               <li a href="">and <span style="color: yellow;"><?php echo ($credit['credit_left']==""? 0:$credit['credit_left']);?> credit(s) left</span><li>			   
			</ul>
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Contact Support
               <span class="caret"></span></button>
		   </div>
		</div>
		 </div>	

		<div class="four_col">
			<div class="quick_head">
			  <h1> Congratulation!!!!!!!</h1>
			</div>
			
		          
  <table style="width:50%">
  <tr>
 
       <th>Your Credit</th>
        <th>Buy Credit</th>
        <th>Free Credit</th>
        
        <th>Total Credit</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
      
        <td><?php echo ($old_credit['credit_left']==""? 0:$old_credit['credit_left']);?></td>
        <td><?php echo $products['credit']; ?></td>
        <td><?php echo $products['Free']; ?></td>
        <td><?php echo ($credit['credit_left']==""? 0:$credit['credit_left']);?></td>
        
      </tr>
    </tbody>
  </table>
  <div class="body_Credits">
  <a href="<?php echo base_url().'main_page'; ?>">
	<button type="button"  ><strong>Go Back</strong></button>
	</a>
</div>
  </div>
</div>
		
		</div>

  </div>

 </body>
 <script>
 $(document).ready(function(){
      setTimeout(function() {
       window.location.href = "<?php echo base_url().'main_page'; ?>";
      }, 5000);
    });
 </script>
 <style>
 strong{
	 font-size:19px;
 }
.body_Credits button {
    background: #FDB802;
    color: #333;
    border: navajowhite;
    padding: 8px 21px;
    border-radius: 12px;
	margin-top:30px;
}
 table {
    margin-left: 25%;
    margin-top: 20px;
}

table, th, td {
    text-align: center;
    font-size: 19px;
    line-height: 31px;
}

 body {
    background: #a60000d6;
}
.col-md-10.col-sm-12.col-xs-12.quick_right {
    text-align: right;
}
.quick_right ul {
    list-style: none;
    width: 83%;
    float: left;
    padding-top: 10px;
	text-align: right;
}
.quick_right ul li {
    display: inline-block;
    padding-left: 12px;
}
.credit {
    background: #A60000;
    float: left;
    width: 100%;
    color: #fff;
}
.out_cred {
    width: 100%;
    margin: 0 auto;
    background: #9d0909 !important;
    float: left;
    padding: 11px 50px;
}
.quick_by {
    float: left;
    width: 100%;
}
.four_col {
    width: 76%;
    margin-top: 6%;
    text-align: center;
    float: left;
    margin-left: 12%;
    background: #B40000;
    position: absolute;
    height: 67%;
    margin-top: 136px;
}
.quick_right button.btn.btn-primary.dropdown-toggle {
    background: #a60000;
    border: none;
	color: yellow;
}
.quick_head {
    padding: 20px;
    background: #B40000;
}

.quick_head h1 {
    font-size: 70px;
    font-family: 'PoppinsBold';
    margin-top: 71px;
}
.same {
    padding: 6px;
    background: #9d0909 !important;
}
.head_Credits {
    padding: 10px 0px;
}
.head_Credits h1 {
    font-weight: 700;
}
.body_Credits h1 {
    font-weight: 700;
    color: yellow;
    margin-bottom: 0px;
}
.body_Credits {
    padding: 15px 0px;
}
.body_Credits h3 {
    margin-top: 10px;
    color: #fff;
    font-size: 20px;
}
.body_Credits button {
    background: #FDB802;
    color: #333;
    border: navajowhite;
    padding: 8px 21px;
    border-radius: 8px;
}
.body_Credits h5 {
    margin-top: 13px;
    font-weight: 700;
}
.all {
    margin-top: 18px;
    float: left;
    width: 100%;
}
ul.dropdown-menu {
    background: #000;
    color: #fff;
}
.quick img {
    width: 77%;
}
 </style>
</html>
