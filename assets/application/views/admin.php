<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->    
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Gentelella Alela! | </title>
      <!-- Bootstrap -->    
      <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Font Awesome -->    
      <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
      <!-- NProgress -->    
      <link href="<?php echo base_url(); ?>css/nprogress.css" rel="stylesheet">
      <!-- iCheck -->    
      <link href="<?php echo base_url(); ?>css/green.css" rel="stylesheet">
      <!-- bootstrap-progressbar -->    
      <link href="<?php echo base_url(); ?>css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
      <!-- JQVMap -->    
      <link href="<?php echo base_url(); ?>css/jqvmap.min.css" rel="stylesheet"/>
      <!-- bootstrap-daterangepicker -->    
      <link href="<?php echo base_url(); ?>css/daterangepicker.css" rel="stylesheet">
      <!-- Custom Theme Style -->    
      <link href="<?php echo base_url(); ?>css/custom.min.css" rel="stylesheet">
   </head>
   <body class="nav-md">
      <div class="container body">
         <div class="main_container">
            <div class="col-md-3 left_col">
               <div class="left_col scroll-view">
                  <div class="navbar nav_title" style="border: 0;">              <a href="<?php echo base_url('index.php/secret_controller/admin');?>" class="site_title"><i class="fa fa-paw"></i> <span>Secret Angels</span></a>            </div>
                  <div class="clearfix"></div>
                  <!-- menu profile quick info -->            
                  <div class="profile clearfix">
                     <div class="profile_pic">                <img src="images/img.jpg" alt="..." class="img-circle profile_img">              </div>
                     <div class="profile_info">
                        <span>Welcome,</span>                
                        <h2>Admin</h2>
                     </div>
                  </div>
                  <!-- /menu profile quick info -->            <br />            <!-- sidebar menu -->            
                  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                     <div class="menu_section">
                        <h3>User Managment</h3>
                        <ul class="nav side-menu">
                           <li id="customer">
                              <a><i class="fa fa-home"></i> Customers <span class="fa fa-chevron-down"></span></a>                    
                              
                           </li>
						   <li id="add_model">
                              <a><i class="fa fa-home"></i> Add Models <span class="fa fa-chevron-down"></span></a>                    
                              
                           </li>
						   <li id="model">
                              <a><i class="fa fa-home"></i> Models <span class="fa fa-chevron-down"></span></a>                    
                              
                           </li>
                          
                           
                           
                           
                           
                        </ul>
                     </div>
                     
                  </div>
                  <!-- /sidebar menu -->            <!-- /menu footer buttons -->            
                  <div class="sidebar-footer hidden-small">              <a data-toggle="tooltip" data-placement="top" title="Settings">                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>              </a>              <a data-toggle="tooltip" data-placement="top" title="FullScreen">                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>              </a>              <a data-toggle="tooltip" data-placement="top" title="Lock">                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>              </a>              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('index.php/secret_angels/admin_panel');?>">                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>              </a>            </div>
                  <!-- /menu footer buttons -->          
               </div>
            </div>
            <!-- top navigation -->        
            <div class="top_nav">
               <div class="nav_menu">
                  <nav>
                     <div class="nav toggle">                <a id="menu_toggle"><i class="fa fa-bars"></i></a>              </div>
                     <ul class="nav navbar-nav navbar-right">
                        <li class="">
                           <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">                    <img src="images/img.jpg" alt="">John Doe                    <span class=" fa fa-angle-down"></span>                  </a>                  
                           <ul class="dropdown-menu dropdown-usermenu pull-right">
                              <li><a href="javascript:;"> Profile</a></li>
                              <li>                      <a href="javascript:;">                        <span class="badge bg-red pull-right">50%</span>                        <span>Settings</span>                      </a>                    </li>
                              <li><a href="javascript:;">Help</a></li>
                              <li><a href="<?php echo base_url('index.php/secret_controller/admin_logout');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                           </ul>
                        </li>
                       </ul>
                  </nav>
               </div>
            </div>
            <!-- /top navigation -->        <!-- page content -->        
            <div class="right_col" role="main">
               <!-- top tiles -->          
                
               <div class="row">
                  <div  class="col-md-12 col-sm-12 col-xs-12 customers">
				  <div class="page-title">
				 <div class="title_left">
				   <h3>Customers</h3>
				   	   	  <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   <th>Username</th>
                    <th>Email</th>
                     <th>Card number</th>
                      <th>Action</th>
					</thead>
    <?php
	$i = 0;
	foreach($response as $nres)
	{
		?>
	<tbody>
	
		<td><?php echo $nres['username'];?><input type="hidden" class="userid" value="<?php echo $nres['id'];?>"></td>
		<td><?php echo $nres['email'];?></td>
		<td><?php echo $nres['Card_no'];?></td>
		<td><button type="button" class="btn btn-info btn-xs act" data-toggle="modal" data-target="#myModal<?php echo $i; ?>"><?php if($nres['Active_status']==0){ echo "Activate";} else{ echo "Activated";}?></button>
		<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModaldec<?php echo $i; ?>"><?php if($nres['Active_status']==1){ echo "Deactivate";} else{ echo "Deactivated";}?></button>
    
  <!-- Modal -->
  <div class="modal fade" id="myModal<?php echo $i; ?>" role="dialog"> 
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure.</p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default activate_customer" data-value="<?php echo $nres['Active_status'];?>" data-id="<?php echo $nres['id'];?>" value="Confirm">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>
  <!--- deactivate popup -->
  <div class="modal fade" id="myModaldec<?php echo $i; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure.</p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default deactivate_customer" data-value="<?php echo $nres['Active_status'];?>" data-id="<?php echo $nres['id'];?>" value="Confirm">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>
		
  <!--- deactivate popup ends -->
  
		</td>
	</tbody>
        	<?php 
			$i++;
	}
	?>
</table>
				 </div>

			   </div>
			
                   </div>
				   <div style="display:none;" class="col-md-12 col-sm-12 col-xs-12 add_model">
				  <div class="page-title">
				 <div class="title_left">
				<div class="add_model_outer">   
			<form action="add_model" method="post" accept-charset="utf-8" class="form" role="form">   <legend>Model Sign Up</legend>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <input type="text" name="username" value="" class="form-control input-lg" placeholder="First Name"  /><br>
							</div>
                    </div>
                    <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  /><br>
					<input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  /><br>
					
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
						 <label>Select age :</label>
                            <select name="age" class = "form-control input-lg">
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							</select>
						</div>
					<div class="col-xs-6 col-md-6">
					 <label>Select Country :</label>
                            <select name="country" class = "form-control input-lg">
							<option value="" >(please select a country)
							</option><option value="AF">Afghanistan 
							</option><option value="AL">Albania 
							</option><option value="DZ">Algeria 
							</option><option value="AS">American Samoa
							</option><option value="AD">Andorra 
							</option><option value="AO">Angola
							</option><option value="AI">Anguilla
							</option><option value="AQ">Antarctica
							</option><option value="AG">Antigua and Barbuda 
							</option><option value="AR">Argentina 
							</option><option value="AM">Armenia 
							</option><option value="AW">Aruba 
							</option><option value="AU">Australia 
							</option><option value="AT">Austria 
							</option><option value="AZ">Azerbaijan
							</option><option value="BS">Bahamas 
							</option><option value="BH">Bahrain 
							</option><option value="BD">Bangladesh
							</option><option value="BB">Barbados
							</option><option value="BY">Belarus 
							</option><option value="BE">Belgium 
							</option><option value="BZ">Belize
							</option><option value="BJ">Benin 
							</option><option value="BM">Bermuda 
							</option><option value="BT">Bhutan
							</option><option value="BO">Bolivia 
							</option><option value="BA">Bosnia and Herzegowina
							</option><option value="BW">Botswana
							</option><option value="BV">Bouvet Island 
							</option><option value="BR">Brazil
							</option><option value="IO">British Indian Ocean Territory
							</option><option value="BN">Brunei Darussalam 
							</option><option value="BG">Bulgaria
							</option><option value="BF">Burkina Faso
							</option><option value="BI">Burundi 
							</option><option value="KH">Cambodia
							</option><option value="CM">Cameroon
							</option><option value="CA">Canada
							</option><option value="CV">Cape Verde
							</option><option value="KY">Cayman Islands
							</option><option value="CF">Central African Republic
							</option><option value="TD">Chad
							</option><option value="CL">Chile 
							</option><option value="CN">China 
							</option><option value="CX">Christmas Island
							</option><option value="CC">Cocos (Keeling) Islands 
							</option><option value="CO">Colombia
							</option><option value="KM">Comoros 
							</option><option value="CG">Congo 
							</option><option value="CD">Congo, the Democratic Republic of the 
							</option><option value="CK">Cook Islands
							</option><option value="CR">Costa Rica
							</option><option value="CI">Cote d'Ivoire 
							</option><option value="HR">Croatia (Hrvatska)
							</option><option value="CU">Cuba
							</option><option value="CY">Cyprus
							</option><option value="CZ">Czech Republic
							</option><option value="DK">Denmark 
							</option><option value="DJ">Djibouti
							</option><option value="DM">Dominica
							</option><option value="DO">Dominican Republic
							</option><option value="TP">East Timor
							</option><option value="EC">Ecuador 
							</option><option value="EG">Egypt 
							</option><option value="SV">El Salvador 
							</option><option value="GQ">Equatorial Guinea 
							</option><option value="ER">Eritrea 
							</option><option value="EE">Estonia 
							</option><option value="ET">Ethiopia
							</option><option value="FK">Falkland Islands (Malvinas) 
							</option><option value="FO">Faroe Islands 
							</option><option value="FJ">Fiji
							</option><option value="FI">Finland 
							</option><option value="FR">France
							</option><option value="FX">France, Metropolitan
							</option><option value="GF">French Guiana 
							</option><option value="PF">French Polynesia
							</option><option value="TF">French Southern Territories 
							</option><option value="GA">Gabon 
							</option><option value="GM">Gambia
							</option><option value="GE">Georgia 
							</option><option value="DE">Germany 
							</option><option value="GH">Ghana 
							</option><option value="GI">Gibraltar 
							</option><option value="GR">Greece
							</option><option value="GL">Greenland 
							</option><option value="GD">Grenada 
							</option><option value="GP">Guadeloupe
							</option><option value="GU">Guam
							</option><option value="GT">Guatemala 
							</option><option value="GN">Guinea
							</option><option value="GW">Guinea-Bissau 
							</option><option value="GY">Guyana
							</option><option value="HT">Haiti 
							</option><option value="HM">Heard and Mc Donald Islands 
							</option><option value="VA">Holy See (Vatican City State) 
							</option><option value="HN">Honduras
							</option><option value="HK">Hong Kong 
							</option><option value="HU">Hungary 
							</option><option value="IS">Iceland 
							</option><option value="IN">India 
							</option><option value="ID">Indonesia 
							</option><option value="IR">Iran (Islamic Republic of)
							</option><option value="IQ">Iraq
							</option><option value="IE">Ireland 
							</option><option value="IL">Israel
							</option><option value="IT">Italy 
							</option><option value="JM">Jamaica 
							</option><option value="JP">Japan 
							</option><option value="JO">Jordan
							</option><option value="KZ">Kazakhstan
							</option><option value="KE">Kenya 
							</option><option value="KI">Kiribati
							</option><option value="KP">Korea, Democratic People's Republic of
							</option><option value="KR">Korea, Republic of
							</option><option value="KW">Kuwait
							</option><option value="KG">Kyrgyzstan
							</option><option value="LA">Lao People's Democratic Republic
							</option><option value="LV">Latvia
							</option><option value="LB">Lebanon 
							</option><option value="LS">Lesotho 
							</option><option value="LR">Liberia 
							</option><option value="LY">Libyan Arab Jamahiriya
							</option><option value="LI">Liechtenstein 
							</option><option value="LT">Lithuania 
							</option><option value="LU">Luxembourg
							</option><option value="MO">Macau 
							</option><option value="MK">Macedonia, The Former Yugoslav Republic of
							</option><option value="MG">Madagascar
							</option><option value="MW">Malawi
							</option><option value="MY">Malaysia
							</option><option value="MV">Maldives
							</option><option value="ML">Mali
							</option><option value="MT">Malta 
							</option><option value="MH">Marshall Islands
							</option><option value="MQ">Martinique
							</option><option value="MR">Mauritania
							</option><option value="MU">Mauritius 
							</option><option value="YT">Mayotte 
							</option><option value="MX">Mexico
							</option><option value="FM">Micronesia, Federated States of 
							</option><option value="MD">Moldova, Republic of
							</option><option value="MC">Monaco
							</option><option value="MN">Mongolia
							</option><option value="MS">Montserrat
							</option><option value="MA">Morocco 
							</option><option value="MZ">Mozambique
							</option><option value="MM">Myanmar 
							</option><option value="NA">Namibia 
							</option><option value="NR">Nauru 
							</option><option value="NP">Nepal 
							</option><option value="NL">Netherlands 
							</option><option value="AN">Netherlands Antilles
							</option><option value="NC">New Caledonia 
							</option><option value="NZ">New Zealand 
							</option><option value="NI">Nicaragua 
							</option><option value="NE">Niger 
							</option><option value="NG">Nigeria 
							</option><option value="NU">Niue
							</option><option value="NF">Norfolk Island
							</option><option value="MP">Northern Mariana Islands
							</option><option value="NO">Norway
							</option><option value="OM">Oman
							</option><option value="PK">Pakistan
							</option><option value="PW">Palau 
							</option><option value="PA">Panama
							</option><option value="PG">Papua New Guinea
							</option><option value="PY">Paraguay
							</option><option value="PE">Peru
							</option><option value="PH">Philippines 
							</option><option value="PN">Pitcairn
							</option><option value="PL">Poland
							</option><option value="PT">Portugal
							</option><option value="PR">Puerto Rico 
							</option><option value="QA">Qatar 
							</option><option value="RE">Reunion 
							</option><option value="RO">Romania 
							</option><option value="RU">Russian Federation
							</option><option value="RW">Rwanda
							</option><option value="KN">Saint Kitts and Nevis 
							</option><option value="LC">Saint LUCIA 
							</option><option value="VC">Saint Vincent and the Grenadines
							</option><option value="WS">Samoa 
							</option><option value="SM">San Marino
							</option><option value="ST">Sao Tome and Principe 
							</option><option value="SA">Saudi Arabia
							</option><option value="SN">Senegal 
							</option><option value="SC">Seychelles
							</option><option value="SL">Sierra Leone
							</option><option value="SG">Singapore 
							</option><option value="SK">Slovakia (Slovak Republic)
							</option><option value="SI">Slovenia
							</option><option value="SB">Solomon Islands 
							</option><option value="SO">Somalia 
							</option><option value="ZA">South Africa
							</option><option value="GS">South Georgia and the South Sandwich Islands
							</option><option value="ES">Spain 
							</option><option value="LK">Sri Lanka 
							</option><option value="SH">St. Helena
							</option><option value="PM">St. Pierre and Miquelon 
							</option><option value="SD">Sudan 
							</option><option value="SR">Suriname
							</option><option value="SJ">Svalbard and Jan Mayen Islands
							</option><option value="SZ">Swaziland 
							</option><option value="SE">Sweden
							</option><option value="CH">Switzerland 
							</option><option value="SY">Syrian Arab Republic
							</option><option value="TW">Taiwan, Province of China 
							</option><option value="TJ">Tajikistan
							</option><option value="TZ">Tanzania, United Republic of
							</option><option value="TH">Thailand
							</option><option value="TG">Togo
							</option><option value="TK">Tokelau 
							</option><option value="TO">Tonga 
							</option><option value="TT">Trinidad and Tobago 
							</option><option value="TN">Tunisia 
							</option><option value="TR">Turkey
							</option><option value="TM">Turkmenistan
							</option><option value="TC">Turks and Caicos Islands
							</option><option value="TV">Tuvalu
							</option><option value="UG">Uganda
							</option><option value="UA">Ukraine 
							</option><option value="AE">United Arab Emirates
							</option><option value="GB">United Kingdom
							</option><option value="US">United States 
							</option><option value="UM">United States Minor Outlying Islands
							</option><option value="UY">Uruguay 
							</option><option value="UZ">Uzbekistan
							</option><option value="VU">Vanuatu 
							</option><option value="VE">Venezuela 
							</option><option value="VN">Viet Nam
							</option><option value="VG">Virgin Islands (British)
							</option><option value="VI">Virgin Islands (U.S.) 
							</option><option value="WF">Wallis and Futuna Islands 
							</option><option value="EH">Western Sahara
							</option><option value="YE">Yemen 
							</option><option value="YU">Yugoslavia
							</option><option value="ZM">Zambia
							</option><option value="ZW">Zimbabwe
							</select>
					   </div>
                    </div>
                    <div class="row gender-out" style="margin-top: 13px;padding-left: 11px; margin-bottom: 15px;">
					 <label>Gender : </label> 
					 <label class="radio-inline">
                        <input type="radio" name="gender" value="Male" id="male" />                        Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="Female" id="female" />                        Female
                    </label>
                    <br />
					</div>
                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                        Add Model</button>
            </form>
			</div>
				 </div>
           </div>
			   </div>
				  
                   </div>
				   <div style="display:none;" class="col-md-12 col-sm-12 col-xs-12 models">
				  <div class="page-title">
				 <div class="title_left">
				   <h3>Models</h3>
			<table id="mytable1" class="table table-bordred table-striped">
                   
                   <thead>
                   <th>Username</th>
                    <th>Email</th>
                     <th>Age</th>
                      <th>Country</th>
					</thead>
    <?php
	$j = 0;
	foreach($models as $nmodels)
	{
		?>
	<tbody>
		<td><?php echo $nmodels['Username'];?><input type="hidden" value="<?php echo $nres['id'];?>"</td>
		<td><?php echo $nmodels['Email'];?></td>
		<td><?php echo $nmodels['Age'];?></td>
		<td><?php echo $nmodels['Country'];?></td>
		<td><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal100<?php echo $j; ?>"><?php if($nmodels['Active_status']==1){ echo "Activated"; }else { echo "Activate"; } ?></button> 
		<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal31<?php echo $j; ?>"><?php if($nmodels['Active_status']==0){ echo "Deactivated"; }else { echo "Deactivate"; } ?></button>
 
  <!-- Modal -->
  <div class="modal fade" id="myModal100<?php echo $j; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure.</p>
        </div>
        <div class="modal-footer">  
          <input type="button" class="btn btn-default activate_model" data-value="<?php echo $nmodels['Active_status']; ?>" data-id="<?php echo $nmodels['id']; ?>" value="Confirm">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 


  <!-- Modal -->
  <div class="modal fade" id="myModal31<?php echo $j; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure.</p>
        </div>
        <div class="modal-footer">  
          <input type="button" class="btn btn-default deactivate_model" data-value="<?php echo $nmodels['Active_status']; ?>" data-id="<?php echo $nmodels['id']; ?>" value="Confirm">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>

		</td>
	</tbody>
        	<?php
			$j++;
	}
	?>
</table>
				 </div>

			   </div>
				  
                   </div>
               </div>
               <br />          
              </div>
            <!-- /page content -->        <!-- footer content -->        
            <footer>
               <div class="pull-right">             Admin  <a href="#">Admin</a>          </div>
               <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->      
         </div>
      </div>
      <!-- jQuery -->    <script src="<?php echo base_url();?>js/jquery.min.js"></script> 
	  <!-- Bootstrap -->    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	  <!-- FastClick -->    <script src="<?php echo base_url();?>js/fastclick.js"></script>
	  <!-- NProgress -->    <script src="<?php echo base_url();?>js/nprogress.js"></script>  
	  <!-- Chart.js -->    <script src="<?php echo base_url();?>js/Chart.min.js"></script> 
	  <!-- gauge.js -->    <script src="<?php echo base_url();?>js/gauge.min.js"></script> 
	  <!-- bootstrap-progressbar --> 
	  <script src="<?php echo base_url();?>js/bootstrap-progressbar.min.js"></script>   
	  <!-- iCheck -->  
	  <script src="<?php echo base_url();?>js/icheck.min.js"></script> 
	  <!-- Skycons --> 
	  <script src="<?php echo base_url();?>js/skycons.js"></script>  
	  <!-- Flot -->  
	  <script src="<?php echo base_url();?>js/jquery.flot.js"></script> 
	  <script src="<?php echo base_url();?>js/jquery.flot.pie.js"></script> 
	  <script src="<?php echo base_url();?>js/jquery.flot.time.js"></script>  
	  <script src="<?php echo base_url();?>js/jquery.flot.stack.js"></script>  
	  <script src="<?php echo base_url();?>js/jquery.flot.resize.js"></script> 
	  <!-- Flot plugins --> 
	  <script src="<?php echo base_url();?>/js/jquery.flot.orderBars.js"></script> 
	  <script src="<?php echo base_url();?>js/jquery.flot.spline.min.js"></script> 
	  <script src="<?php echo base_url();?>js/curvedLines.js"></script>  
	  <!-- DateJS -->    <script src="<?php echo base_url();?>js/date.js"></script> 
	  <!-- JQVMap -->    <script src="<?php echo base_url();?>js/jquery.vmap.js"></script> 
	  <script src="<?php echo base_url();?>js/jquery.vmap.world.js"></script> 
	  <script src="<?php echo base_url();?>js/jquery.vmap.sampledata.js"></script> 
	  <!-- bootstrap-daterangepicker -->  
	  <script src="<?php echo base_url();?>js/moment.min.js"></script> 
	  <script src="<?php echo base_url();?>js/daterangepicker.js"></script>  
	  <!-- Custom Theme Scripts --> 
	  <script src="<?php echo base_url();?>js/custom.min.js"></script>	
<script>	  
$('#customer').click(function(){
	$('.customers').toggle(1000);
	$('.models').hide(1000);
	$('.add_model').hide();
});
$('#model').click(function(){
	$('.models').toggle(1000); 
	$('.customers').hide(1000); 
	$('.add_model').hide();
});
$('#add_model').click(function(){
	$('.models').hide(1000); 
	$('.customers').hide(1000); 
	$('.add_model').toggle(1000); 
});
$('.activate_customer').click(function(){     
var user_id = $(this).attr('data-id');
var active = $(this).attr('data-value');;
 $.ajax({
 url: "<?php echo base_url('index.php/secret_controller/update_customer');?>",
 data : { user_id : user_id , active : active  },   
 type : 'post',
 success: function(result){
            alert(result);
			window.location.reload();
        }});
});
$('.deactivate_customer').click(function(){    
var user_id = $(this).attr('data-id');
var active = $(this).attr('data-value');;
 $.ajax({ 
 url: "<?php echo base_url('index.php/secret_controller/update_customer');?>",
 data : { user_id : user_id , active : active  },   
 type : 'post',
 success: function(result){
            alert(result);
			window.location.reload();
        }});
});
$('.activate_model').click(function(){    
var user_id = $(this).attr('data-id');
var active = $(this).attr('data-value');;
 $.ajax({ 
 url: "<?php echo base_url('index.php/secret_controller/update_model');?>", 
 data : { user_id : user_id , active : active  },   
 type : 'post',
 success: function(result){
            alert(result);
			window.location.reload();
        }});
});
$('.deactivate_model').click(function(){    
var user_id = $(this).attr('data-id');
var active = $(this).attr('data-value');;
 $.ajax({ 
 url: "<?php echo base_url('index.php/secret_controller/update_model');?>",
 data : { user_id : user_id , active : active  },   
 type : 'post', 
 success: function(result){
            alert(result);
			window.location.reload();
        }});
});

</script>
	  
   </body>  
</html>