<style>
img.logo123 {
    width: 105px;
    height: 68px;
    background-color: white;
}
</style>
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
             <img src="<?php echo base_url('uploads/'); ?>" class="logo123">
            </div>

            <div class="clearfix"></div>
			
            <!-- menu profile quick info -->
            <div class="profile clearfix">
             
              <div class="profile_info">
                <span>Welcome,</span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url('index.php/backend/home'); ?>" ><i class="fa fa-home"></i> Home </a></li> 
				
				  
				   <?php  ?>
				  <li><a><i class="fa fa-users"></i>  Admin details <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/backend/createusers'); ?>">Add Admin</a></li>
					  
                      <li><a href="<?php echo base_url('index.php/backend/getadmins'); ?>">Get All Admins</a></li>
                      	 
                    </ul>
                  </li> 
				   <?php  ?>
			<!--
				  // if($logindetail['status'] == 0){ ?>
				  <li><a href="//echo base_url('index.php/backend/admindetails'); ?>"><i class="fa fa-users"></i> Admins details<!--span class="fa fa-chevron-down"></span></a></li-->
				  
				  
				
				 <li><a><i class="fa fa-location-arrow"></i>  Location <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/backend/location'); ?>">Add Location</a></li>
                      <li><a href="<?php echo base_url('index.php/backend/getloactions'); ?>">Get All Locations</a></li>
                      
                    </ul>
                  </li> 
				  <li><a><i class="fa fa-gears"></i>  Category <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!--li><a href="<?php echo base_url('index.php/backend/parentcategory'); ?>">Add Parent Category</a></li--> 
					  <li><a href="<?php echo base_url('index.php/backend/category'); ?>">Add Category</a></li>
                      <li><a href="<?php echo base_url('index.php/backend/getcategory'); ?>">Get All Category</a></li>
                      
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-bar-chart-o"></i> Vendor <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/backend/addvenue'); ?>">Add Vendor</a></li>
                      <li><a href="<?php echo base_url('index.php/backend/getvenue'); ?>">Get Vendor List</a></li>
                      
                    </ul>
                  </li>
				   <li><a><i class="fa fa-newspaper-o"></i>Vendor meta Type <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/backend/addmeta'); ?>"> Add vendor Meta Description</a></li>
                      <li><a href="<?php echo base_url('index.php/backend/getmeta'); ?>">Get vendor Meta Description</a></li>
                    </ul>
                  </li>
				  <li><a><i class="fa fa-bar-chart-o"></i> Vendor meta <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/backend/addvenuemeta'); ?>">Add Vendor Meta</a></li>
                      <li><a href="<?php echo base_url('index.php/backend/getvenuemeta'); ?>">Get Vendor meta List</a></li>
                      
                    </ul>
                  </li>
                   <li><a><i class="fa fa-file-image-o"></i>  Slider Images <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/backend/sliderimages'); ?>">Add  Slider Images</a></li>
                      <li><a href="<?php echo base_url('index.php/backend/getsliderimages'); ?>">Get  Slider Images List</a></li>
                      
                    </ul>
                  </li> 
				  <li><a><i class="fa fa-file-image-o"></i>Filter Record <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('index.php/backend/addfiltervalue'); ?>">Add Filter Value Record</a></li>
					  <li><a href="<?php echo base_url('index.php/backend/filter'); ?>">Add Data for Filter </a></li>
                      <li><a href="<?php echo base_url('index.php/backend/getfilter'); ?>">Get  Filter List</a></li>
					  <li><a href="<?php echo base_url('index.php/backend/getfiltervalue'); ?>">Get  Filter Value Record</a></li>
                      
                    </ul>
                  </li>
                 
				    
                </ul>
              </div>
              <!--div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li-->
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <!--data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a-->
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url('index.php/backend/logout')?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
		<STYLE>	
		.site_title {
    font-weight: 400;
		font-size: 20px; !IMPORTANT;
		}
		</STYLE>