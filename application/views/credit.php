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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.css'>
  <style>
  .mycurrdiv select {
    color: #000;
}
</style>
 </head>
 <?php include('memberheader.php');?>
 <body>
<form action="<?php #echo base_url('/credit'); ?>" method="POST">
  <div class="credit">
  
	  <div class="skip"><a href="<?php echo base_url().'main_page'; ?>"><h4>Skip<i class="fa fa-angle-double-right skipbt" ></h4></i></a></div>
	 
  
   
    
		<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
 
<div id="wrapper">
    <div class="container">
        <div class="row1">
		<?for($i=0;$i<count($products);$i++){
			if($i==0){$divclass='blue'; $planame='Basic Plan';$circlecls='c1';}else if($i==1){$divclass='yellow';$planame='Starter Plan';$circlecls='c2';}else if($i==2){$divclass='green';$planame='Premier Plan';$circlecls='c3';}else if($i==3){$divclass='red';$planame='Deluxe Plan';$circlecls='c4';}
			?>
              <div class="col-md-3">
                  <div class="circle <?echo $circlecls;?> img-circle">
                      <h4 class="<?echo $divclass;?>"><?echo $planame;?></h4>
                      <span class="icon <?echo $divclass;?>"><i class="fa fa-gbp"></i></span>
                      <span class="price-large <?echo $divclass;?>"><?echo $products[$i]['price'];?>,</span>
                      <span class="price-small"><?php echo $products[$i]['credit']; ?></span><span class="free-credits"> + <?php echo $products[$i]['Free']; ?></span>
                      <p>Great for small Business</p>
                      <div class="mycurrdiv">
                        <select class="mycurrency" onchange="change_currency(this);">
                        <option value="EUR">Euro</option>
                        <option value="USD">USD</option>
                      </select>
                    </div>
                    
                  <input type="hidden" class="product_id" value="<?php echo $products[$i]['id']; ?>">
					  <a href="<?php echo base_url().'products/buy/'.$products[$i]['id'].'/'.$userid; ?>/EUR/<?php echo $products[$i]['price'];?>">
                      <button type="button" class="btn btn-info">Choose</button></a>
                  </div>
              </div>
                    <script>
                      function change_currency(e){
                        var cur = $(e).val();
                        var eur = $(e).parent().parent().find('.price-large').html().replace(",", "");
                        var product_id = $(e).parent().parent().find('.product_id').val();
                        if(cur=="USD")
                        {
                          $.ajax({
                            url:'http://data.fixer.io/api/latest?access_key=782d6ac12cea9dbf5463a554fde9addf&format=1',
                            type:'post',
                            data:{},
                            success:function(val){
                              var changed_usd = val.rates['USD']*parseInt(eur);
                              var usd_price = changed_usd.toFixed(2);
                              $(e).parent().parent().find('.price-large').html(usd_price);
                              $(e).parent().parent().find('.price-small').html(usd_price);
                              $(e).parent().parent().find('i').removeClass("fa-gbp");
                              $(e).parent().parent().find('i').addClass("fa-usd");
                              var href = $(e).parent().parent().find('a').attr("href");
                              var newhref = href+'/'+cur+'/'+usd_price
                              $(e).parent().parent().find('a').attr("href",newhref);
                            }
                          });
                         }
                         else
                         {
                          $.ajax({
                          url:'<?php echo base_url("getproduct_price"); ?>',
                          type:'post',
                          data:{product_id:product_id},
                          success:function(val){
                            var json = JSON.parse(val);
                            $(e).parent().parent().find('.price-large').html(json.price);
                            $(e).parent().parent().find('.price-small').html(json.price);
                            $(e).parent().parent().find('i').addClass("fa-gbp");
                            $(e).parent().parent().find('i').removeClass("fa-usd");
                            var href = $(e).parent().parent().find('a').attr("href");
                              var newhref = href+'/'+cur+'/'+json.price
                              $(e).parent().parent().find('a').attr("href",newhref);
                            /*var changed_usd = val.rates['USD']*parseInt(eur);
                            var usd_price = changed_usd.toFixed(2);
                            $(e).parent().parent().find('.price-large').html(usd_price);
                            $(e).parent().parent().find('.price-small').html(usd_price);
                            $(e).parent().parent().find('i').removeClass("fa-gbp");
                            $(e).parent().parent().find('i').addClass("fa-usd");
                            var href = $(e).parent().parent().find('a').attr("href");
                            var newhref = href+'/'+cur+'/'+usd_price
                            $(e).parent().parent().find('a').attr("href",newhref);*/
                          }
                        });
                         }
                      }
                    </script>
              <!-- .Col-md-3 ends here -->
		<?}?>
              <!--div class="col-md-3">
                  <div class="circle c2 img-circle">
                      <h4 class="yellow">Starter Plan</h4>
                      <span class="icon yellow"><i class="fa fa-eur"></i></span>
                      <span class="price-large yellow">24,</span>
                      <span class="price-small">90</span>
                      <p>Great for small Business</p>
                      <button type="button" class="btn btn-warning">Choose</button>
                  </div>
              </div>
          
          <div class="col-md-3">
                  <div class="circle c3 img-circle">
                      <h4 class="green">Premier Plan</h4>
                      <span class="icon green"><i class="fa fa-eur"></i></span>
                      <span class="price-large green">54,</span>
                      <span class="price-small">90</span>
                      <p>Great for small Business</p>
                      <button type="button" class="btn btn-success">Choose</button>
                  </div>
              </div>
          
          <div class="col-md-3">
                  <div class="circle c4 img-circle">
                      <h4 class="red">Deluxe Plan</h4>
                      <span class="icon red"><i class="fa fa-eur"></i></span>
                      <span class="price-large red">8,</span>
                      <span class="price-small">90</span>
                      <p>Great for small Business</p>
                      <button type="button" class="btn btn-danger">Choose</button>
                  </div>
              </div><!-- .Col-md-3 ends here -->
        </div><!-- .Container ends here -->
    </div><!-- .Row ends here -->
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

		

  </div>

  </form>
    		
 </body>

 <style>
@charset "utf-8";
	
	* {
	padding:0; 
	margin:0; 
	border:0;
}
body {

	font-family:trebuchet MS;
	color:#6B6B6B;
   border: 0 none;
   margin: 0;
	font-size:13px;
   padding: 0;
}
#wrapper{
  padding: 123px 0px;
}
.container{}
.row{}
.circle{
  background: #ffffff;
  padding: 35px;
  text-align: center;
  height: 250px;
  width: 250px;
  border: 6px solid #a40034;;
        cursor: pointer;
    transition: all 0.5s;
  -moz-transition: all 0.5s; /* Firefox 4 */
  -webkit-transition: all 0.5s; /* Safari and Chrome */
  -o-transition: all 0.5s; /* Opera */
 
}
.circle h4{
  margin: 0;
  padding: 0;
}
.circle p{}
.circle span{}
.circle span.icon{
}
.circle span.icon i{
  font-size: 48px;
}
.circle span.price-large{
  font-size: 40px
}
.price-small,.free-credits{
  font-size: 24px 
}

.c1:hover{
  background: #39b3d7;
  color: #ffffff;
}
.c1 .blue{
  color: #39b3d7;
}
.c1:hover .blue{
  color: #ffffff;
}

.c2:hover{
  background: #ed9c28;
  color: #ffffff;
}
.c2 .yellow{
  color: #ed9c28;
}
.c2:hover .yellow{
  color: #ffffff;
}

.c3:hover{
  background: #47a447;
  color: #ffffff;
}
.c3 .green{
  color: #47a447;
}
.c3:hover .green{
  color: #ffffff;
}

.c4:hover{
  background: #d2322d;
  color: #ffffff;
}
.c4 .red{
  color: #d2322d;
}
.c4:hover .red{
  color: #ffffff;
}
.skip h4 {
    float: right;
    font-size: 32px;
    color: red;
}
 </style>
 
 
</html>
