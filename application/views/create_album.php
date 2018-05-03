<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Theme Made By www.w3schools.com - No Copyright -->
      <title>Create Album</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   </head>
   <?php include("memberheader.php"); ?>
   <body>
      <div class="credit">
   
         <div class="four_col">
		 <form method="post" action="<?php echo base_url('/create_album');?>" enctype="multipart/form-data">
            <h1 class="head"> Create New Album</h1>
            <br>
            <strong>Title:</strong>  <input type="text" class="title" name="title" value="">
            <br>
            <br>
            <strong>Userview:</strong> &nbsp;  <input type="radio" name="userview" class="user" value="1" checked> Premium 
            <input type="radio" name="userview" value="0"> Free
            <br><br>
            
              
               <div class="container">
                  
                     <div class=" col-md-offset-4 createalubum1 ">
                        <div class="thumbnail">
                           <img id="preview" src="#" class="img_gallery" alt="Lights" style=" width:100%;height:100%">
                           </a>
                        </div>
                       <div class="fileUpload btn btn-warning">
                  <span>Upload</span>
                  <input type="submit" class="upload" />
               </div>
			   <div class="fileUpload btn btn-warning ">
                  <span>Choose File</span>
                  <input type="file" name="album" id="imgInp" class="upload" />
               </div>
                  </div>
               </div>
             
			   
            </form>
			</div>
	
            <!--div class="body_Credits button_gallery"> <a href="<?php echo base_url().'main_page'; ?>">
               <button type="button"  ><strong>Save</strong></button>
               </a>
            </div-->
            
        
 
		 
		
 
	  

	  
   </body>
      <? include("footer.php");?></div>
   <script>
      /* $(document).ready(function(){
           setTimeout(function() {
            window.location.href = "<?php #echo base_url().'main_page'; ?>";
           }, 5000);
         }); */
      function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
      
        reader.onload = function(e) {
            $('#preview').attr('src', e.target.result);
        }
      
        reader.readAsDataURL(input.files[0]);
      }
      }
      
      $("#imgInp").change(function() {
      readURL(this);
      });
      
   </script>
   <style>
   div#hb {
    position: relative;
    left: 24%;
    margin-top: -2%;
}
   body {
    background: #d01e66!important;
}
      .img_part {
      margin-top: 21px;
      margin-left: 32px;
      }
      .button_gallery button {
      background: #FDB802;
      color: #333;
      border: navajowhite;
      padding: 8px 21px;
      border-radius: 8px;
      margin-top: -1%;
      margin-top: 7px!important;
      }
      .gallery {
      margin-top: 12px;
      /* position: absolute; */
      margin-left: -30px;
      transform: rotate(1deg);
      /* float: left; */
      }
      .fileUpload {
      position: relative;
      overflow: hidden;
      }
      .fileUpload input.upload {
      position: absolute;
      top: 0;
      right: 0;
      margin: 0;
      padding: 0;
      font-size: 20px;
      cursor: pointer;
      opacity: 0;
      filter: alpha(opacity=0);
      }
      .btn {
      display: inline-block;
      padding: 1px 7px;
      margin-bottom: 0;
      font-size: 14px;
      font-weight: 400;
      line-height: 1.42857143;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-image: none;
      border: 1px solid transparent;
      border-radius: 4px;
      }
      .btn-warning {
      color:#333333;
      background-color: #FDB802;
      }
      input.title {
      color: black;
      margin-top: 0px;
      }
      h1.head {
      margin-top: 44px;
      }
      .col-sm-5 {
      margin-left: -62px;
      }
      button.btn.btn-default {
      margin-top: 193px;
      }
      .form-group {
      margin-top: 41px;
      }
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
    width: 68%;
    margin-top: 6%;
    text-align: center;
    float: left;
    margin-left: 12%;
    background: #d7256d;
    position: absolute;
    height: 75%;
    margin-top: 136px;
    box-shadow: 44px;
    box-shadow: -2px -2px 5px 0px #333;
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
      .thumbnail {
      display: block;
      padding: 4px;
      /* margin-bottom: 20px; */
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      -webkit-transition: border .2s ease-in-out;
      -o-transition: border .2s ease-in-out;
      transition: border .2s ease-in-out;
      width: 300px;
      height: 200px;
      }
	  .col-md-offset-4.createalubum1 {
    margin-left: 300px;
}
   </style>
</html>