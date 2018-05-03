<style>
img.logo123 {
    width: 228px;
    height: 69px;
    background-color: white;
}
</style>
<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
             <img src="<?php echo base_url('image/corporate/bunny.png'); ?>" class="logo123">
            
            </div>

            <div class="clearfix"></div>
			
            <!-- menu profile quick info -->
            <div class="profile clearfix">
             
              <div class="profile_info">
                <span>Welcome,</span>
                <h2> <?php echo $admindetail[0]['username']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url('admin/index.php/backend/welcome'); ?>" ><i class="fa fa-home"></i> Home </a></li> 
				 </ul>
              </div>
			 <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-users"></i> Member Details<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('admin/index.php/backend/members'); ?>">Get Members Details</a></li>
                     
                      </ul>
                   </li>
			    </ul>
				<ul class="nav side-menu">
                  <li><a><i class="fa fa-users"></i> Model Details<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('admin/index.php/backend/newmodelrequest'); ?>">New Model Requests</a></li>
                      <li><a href="<?php echo base_url('admin/index.php/backend/modeldetails'); ?>">Get all Model Details</a></li>
                      <li><a href="<?php echo base_url('admin/index.php/backend/deactivemodel'); ?>">Deactivate Models</a></li>
                     
                    </ul>
                   </li>
				</ul>
			</div>
            
               

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons 
            <div class="sidebar-footer hidden-small">
             
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>-->
            <!-- /menu footer buttons -->
          </div>
        </div>
		<STYLE>	
		.site_title {
    font-weight: 400;
		font-size: 20px; !IMPORTANT;
		}
		</STYLE>