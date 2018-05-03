<title>Secret Angel| Get Model Details </title>
 <!-- page content -->
	 <div class="right_col" role="main" >
	  <!--------------------inserted  popup---------------------->
			  <?php if($this->session->flashdata('added')) { ?>
			  <div class="success1" id="truee" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                   <h4>   <?php echo $this->session->flashdata('added'); ?></h4>
					</div>
                </div>
			  <?php } else { } ?>
	  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>View Model Detail</h3>
				<div class="success"></div>
              </div>

               </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" method="post" action="#" enctype="multipart/form-data" class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">First Name
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<b><?php echo $viewmodeldetails[0]['First_name'];?>
							</b>
                          </div>
                      </div>
                      
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pincode">Last Name
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <b><?php echo $viewmodeldetails[0]['Last_name'];?>
							</b>
                        </div>
                      </div> 
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pincode">Username
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <b><?php echo $viewmodeldetails[0]['Username'];?>
							</b>
                        </div>
                      </div>
					   <?php 
					  if($viewmodeldetails[0]['address']){
					  ?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pincode">Address 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <b><?php echo $viewmodeldetails[0]['address'];?>
							</b>
                        </div>
                      </div> <?php } ?>
					  <?php 
					  if($viewmodeldetails[0]['Zipcode']){
					  ?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="distt">Zipcode 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<b>
						<?php echo $viewmodeldetails[0]['Zipcode'];?>
							</b>
                          
                        </div>
                      </div> 
					  <?php } ?>
					    <?php 
					  if($viewmodeldetails[0]['Dob']){
					  ?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="distt">Date of birth
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<b class="ab"><?php  echo $viewmodeldetails[0]['Dob'];?>
							</b>
                         
                        </div>
                      </div>
					  <?php } ?>
					  	<?php  $profileimage = $viewmodeldetails[0]['profile_img']; 
						if($profileimage){
						?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="distt">Profile Pic
                        </label>
				
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						<img style= "height: 140px;" src="<?php echo base_url('/uploads/gallery/').$profileimage ;?>">
                         
                        </div>
                      </div>
						<?php } ?>
						<?php 
					  if($viewmodeldetails[0]['Country']){
					  ?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="distt">Country
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<b class="ab"><?php  echo $viewmodeldetails[0]['Country'];?>
							</b>
                         
                        </div>
                      </div>
					  	<?php } ?>
							<?php 
					  if($viewmodeldetails[0]['State']){
					  ?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="distt">State
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<b class="ab"><?php  echo $viewmodeldetails[0]['State'];?>
							</b>
                         
                        </div>
                      </div> 
					  	<?php } ?>
							<?php 
					  if($viewmodeldetails[0]['Summary']){
					  ?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="distt">Summary
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<b class="ab"><?php  echo $viewmodeldetails[0]['Summary'];?>
							</b>
                         
                        </div>
                      </div> 
					  <?php } ?>
					  
					  <?php 
					  if($viewmodeldetails[0]['gender2']){
					  ?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="distt">Sexuality
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<b class="ab"><?php  echo $viewmodeldetails[0]['gender2'];?>
							</b>
                         
                        </div>
                      </div>
					  <?php } ?>
					  <?php 
					  if($viewmodeldetails[0]['levels']){
					  ?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="distt">Levels
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<b class="ab"><?php  echo $viewmodeldetails[0]['levels'];?>
							</b>
                         
                        </div>
                      </div>
					   <?php } ?>
					   <?php 
					  if($viewmodeldetails[0]['levelwith']){
					  ?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="distt">Levelwith
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<b class="ab"><?php  echo $viewmodeldetails[0]['levelwith'];?>
							</b>
                         
                        </div>
                      </div>
					   <?php } ?>
					 <?php  $doc1pic = $viewmodeldetails[0]['doc1pic']; 
						if($doc1pic){
						?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="distt">Document pic
                        </label>
				
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						<img style= "height: 140px;" src="<?php echo base_url('/uploads/gallery/').$doc1pic ;?>">
                         
                        </div>
                      </div>
						<?php } ?>
						<?php  $doc2pic = $viewmodeldetails[0]['doc2pic']; 
						if($doc2pic){
						?>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="distt">Document Pic
                        </label>
				
                        <div class="col-md-6 col-sm-6 col-xs-12">
						
						<img style= "height: 140px;" src="<?php echo base_url('/uploads/gallery/').$doc2pic ;?>">
                         
                        </div>
                      </div>
						<?php } ?>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <!--button class="btn btn-primary" type="button">Cancel</button-->
						  <!--button class="btn btn-primary" type="reset">Reset</button-->
                          <a href="<?php echo base_url('admin/index.php/backend/modeldetails') ?>" class="btn btn-success">Back</a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
			<script>
		 setTimeout(function() {
					$(".success1").hide()
				}, 1000);
				
		 </script>