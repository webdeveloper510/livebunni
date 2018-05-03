
  <title>Secret Angel| Get Model Details </title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 <div class="right_col" role="main">
  <!--------------------inserted  popup---------------------->
			  <?php if($this->session->flashdata('active')) { ?>
			  <div class="success1" id="truee" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                   <h4>   <?php echo $this->session->flashdata('active'); ?></h4>
					</div>
                </div>
			  <?php } else { } ?>
			  
			  <!--------------------success popup---------------------->
			  <?php if($this->session->flashdata('inactive')) { ?>
			  <div class="success1" id="truee" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <?php echo $this->session->flashdata('inactive'); ?>
					</div>
                </div>
			  <?php } else { } ?>
			  
		<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Model Details </h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
			<?php //print_r($newmodelrequest); die;?>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
               
                  <div class="x_content">
                    
                    <table id="datatable1" class="table table-striped table-bordered">
                      <thead>
                        <tr>
							<th>Sr.No.<i class="fa fa-sort" aria-hidden="true"></i></th>
							  <th>Firstname<i class="fa fa-sort" aria-hidden="true"></i></th>
                             <th>Lastname <i class="fa fa-sort" aria-hidden="true"></i></th>
                             <th>Email <i class="fa fa-sort" aria-hidden="true"></i></th>
                             <th>Address <i class="fa fa-sort" aria-hidden="true"></i></th>
                             <th>Country <i class="fa fa-sort" aria-hidden="true"></i></th>
                             <th>State <i class="fa fa-sort" aria-hidden="true"></i></th>
                             <th>Zipcode <i class="fa fa-sort" aria-hidden="true"></i></th>
                             <!--th>View </th-->
                             <th>Status </th>
                             
                             <!--th>Action</th-->
                           
                            
                        </tr>
                      </thead>
					  <tbody>
					 
					<?php  
					
					$i=1;
					foreach($deactivemodel as $memberinfo)
					{
					  
					  // $username =$memberinfo['username'];
					   $fname =$memberinfo['First_name'];
					   $lname =$memberinfo['Last_name'];
					   $emailid =$memberinfo['Email'];
					   $address =$memberinfo['address']; 
					   $country =$memberinfo['Country']; 
					   $state =$memberinfo['State']; 
					   
					   $zipcode =$memberinfo['Zipcode']; 
					   $status =$memberinfo['Active_status']; 
					  ?>
							<tr>
							<td>
							<?php echo $i++ ?>
							</td>
							
							
							<td><?php echo $fname; ?></td>
							<td><?php echo $lname; ?></td>
							<td><?php echo $emailid; ?></td>
							<td><?php echo $address; ?></td>
							
							
							<td><?php echo $country; ?></td>
							<td><?php echo $state; ?></td>
							
							<td><?php echo $zipcode; ?></td> 
							<!--td><a href="<?php echo base_url('admin/index.php/backend/viewmodeldetails/'.$memberinfo['User_id']) ?>" class="update">View</a></td-->
							<td><?php if($status==2){ ?>
							<a href="<?php echo base_url('admin/index.php/backend/activemodelfromdeactivate/'.$memberinfo['User_id']) ?>" class="update">Active a Model</a>
								<?php
							}?></td>
							
							<!--td><button type="button" class="iddd deleteuser" data-id="<?php echo $memberinfo['id']; ?>">Delete</button></td-->
							
							</tr>
							<?php } ?>
					
				  
                      </tbody>
                    </table>
					  </div>
					  
                </div>
              </div>
              </div>
              </div>
              </div>
			  <!--------------------delete popup---------------------->
			  <div class="confirm_popup modal bs-example-modal-sm" id="deletee" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="popup_close close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Delete a user</h4>
                        </div>
                        <div class="modal-body">
						<input type="hidden" value=""  id ="userid" name="userid">
					
                          <p style="text-align: center;">Are you sure to delete a admin.</p>
                        </div>
                        <div class="modal-footer">
						<form action="<?php echo base_url('index.php/backend/deleteadmin') ?>" method="post">
						<div class="col-md-12" style="text-align: center;">
						<input type="hidden" id="user_id" name="id">
						<input type="submit" class="yes btn btn-primary" value="Yes">
						</form>
                          <button type="button" class="popup_close btn btn-default" data-dismiss="modal">No</button>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
				  
			  <script>
			  $(".iddd").click( function () {
				  var user_id = $(this).attr('data-id');
				  $('#user_id').val(user_id);
				  $('.confirm_popup').show();
				  
			  });
			  $(".popup_close").click( function () {
				  $('.confirm_popup').hide();
				  
			  });
			   setTimeout(function() {
					$(".success").hide()
				}, 2000);
				setTimeout(function() {
					$(".success1").hide()
				}, 2000);
			  </script>
				