<div class="twitter-redesign sidebar-collapse">
	
 <div class="wrapper">
    <div class="page-header page-header-small" style="background-image: url('assets/image/nss/header2.png ')  " ;  >
      <div class="filter"></div>
    </div>
    <div class="profile-content section-white-gray">
      <div class="container">
        <div class="row owner">
          <div class="col-md-6 col-sm-6 col-6 ml-auto mr-auto text-center">
            <div class="avatar">
			<img src="assets/image/nss/logo.jpeg" width="250" height="250" alt="Circle Image" class="img-circle img-responsive">
             
            </div>
            <div >

              <h4><strong>  ENROLLMENT FORM </strong>
              
              </h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto text-center">
            <p><a href="#"><strong>National Service Scheme Enrollment Form</strong>></a></p>
            <div class="description-details">
              <ul class="list-unstyled">
                <li><i class="fas fa-table"></i> <strong>APPLICATION FOR ENROLLMENT</strong> </li>
               
              </ul>
            </div>
          </div>
        </div>

<?php
// Check if the user is already logged in, if yes then redirect him to MYPROFILE page
//if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
   


                                      $sql_prepare = 'SELECT status,cdate FROM enrollment WHERE cid = ?';
                                            $stmt = $con->prepare($sql_prepare); 
                                            $stmt->bind_param('i',$_SESSION["cid"]);
                                            $stmt->execute();
                                            $stmt->bind_result($status,$cdate);
                                            $stmt->store_result();
                                            $numberofrows = $stmt->num_rows;
                                            $stmt->fetch();

                                          $json = array();
                                                      
                                            $json = array('status'=>$status,'cdate'=>$cdate); 
                                            

?>
										  <h3 class="visit text-center">
														             <p id="response" ></p>
														            </h3>
 <?php 
            if($numberofrows <= 0 || $json['status'] == 2 && $json['status'] !=='')
            {
                
  ?>


  							 
				           



        <div class="profile-tabs">
									<style type="text/css">
										.tab_alignment{
																	display: block;
																    padding: .5rem 1rem;
																    border-top-left-radius: .25rem;
																    border-top-right-radius: .25rem;
																    padding-bottom: 20px;
										}
										.form-control
										{
											margin-bottom: 20px;
										}
										</style>
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
              <ul id="tabs" class="nav nav-tabs" role="tablist">
                <li class="nav-item active">
                  <a  class="tab_alignment" href="#personal" data-toggle="tab" role="tab"><strong>Personal Details</strong> </a>
                </li>
                <li class="nav-item">
                  <a class="tab_alignment" href="#address" data-toggle="tab" role="tab"> <strong>Address</strong></a>
                </li>
                <li class="nav-item">
                  <a class="tab_alignment" href="#education" data-toggle="tab" role="tab"> <strong>Education Qualification</strong></a>
                </li>
                 <li class="nav-item">
                  <a class="tab_alignment" href="#extra" data-toggle="tab" role="tab"> <strong>Other Details</strong></a>
                </li>
                 <li class="nav-item">
                  <a class="tab_alignment" href="#upload" data-toggle="tab" role="tab"> <strong>Upload Documents</strong></a>
                </li>
              </ul>
            </div>
          </div>

          <div id="my-tab-content" class="tab-content">

            <div class="tab-pane active" id="personal" role="tabpanel">
              <div class="row">
                <div class="col-md-12">
                 <h5 class="card-title text-left">Step 1 &middot;
                        <small>
                          <a href="#" class="link-default">Personal Details</a>
                        </small>
                      </h5>
                      <div class="contact-page sidebar-collapse">
	                   <div class="row">
				          <div class="col-md-6 ml-auto mr-auto text-center">
				            <h3 class="title">
				              <small>Enter your personal details</small>
				            </h3>
				           
				            <form id="enroll_form" method="post" enctype="multipart/form-data" >

				              <div class="row">
				                <div class="col-md-6">
				                  <input type="text" class="form-control" placeholder="Mother's Name" id="mname" name="mname" style="background:white !important;" required>
				                </div>
				                <div class="col-md-6">
				                  <input type="text" class="form-control" placeholder="Father/parent/guardian’s Name" id="guardian" name="guardian" style="background:white !important;" required>
				                </div>
				              </div>
				              <div class="row">
				                <div class="col-md-6">
				                  <input type="text" class="form-control" placeholder="What's your Post Office?" id="post" name="post" style="background:white !important;" required>
				                </div>
				                <div class="col-md-6">
				                  <input type="text" class="form-control" placeholder="Nearest Railway Station"  id="rail" name="rail" style="background:white !important; " required >
					
				
				                </div>
				              </div>

				               <div class="row">
				                <div class="col-md-12">
				                 
 								  <select  class="form-control" id="dspmu" name="dspmu" style="background:white !important;"required>
										<option disabled selected>--Are you studying in St Joseph's University--</option>
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>

				                </div>

				              </div>

				              <div class="row">
				                <div class="col-md-12">
				                 
 								<select  class="form-control" id="depart" name="depart" style="background:white !important;">
											<option disabled selected >...Department...</option>
									
											
											<option value="3">B.A. (Hons) English</option>
											
											<option value="1064">B.A. (Hons) Mathematics</option>
											
											<option value="1036">B.A. (Hons) Philosophy</option>
											<option value="11">B.A. (Hons) Pol. Science</option>
											<option value="12">B.A. (Hons) Psychology</option>
											
											<option value="18">B.Sc (Hons) Mathematics</option>
											<option value="19">B.Sc (Hons) Physics</option>
											
											<option value="1028">B.Sc. Computer Application</option>
											
											<option value="1123">Bachelor Programme in Film Making</option>
											<option value="1124">Bachelor Programme in Journalism and Mass Communication</option>
											<option value="1026">BBA</option>
											
											
											<option value="1069">M.A-English</option>
										
											
										
											<option value="1065">M.A-Mathematics</option>
											
											<option value="1070">M.A-Philosophy</option>
											<option value="1051">M.A-Pol. Science</option>
											<option value="1056">M.A-Psychology</option>
											<option value="1119">M.A-Public Administration</option>
											>
											<option value="1043">M.Sc-Mathematics</option>
											<option value="1044">M.Sc-Physics</option>
											
											<option value="1022">MBA</option>
											<option value="22">MCA</option>
											<option value="1023">MSc. Computer Science</option>

											<option value="1107">Ph.D in Computer Science</option>
											<option value="1099">Ph.D in Economics</option>
											<option value="1087">Ph.D in English</option>
											<option value="1105">Ph.D in Environmental Science</option>
											
											<option value="1095">Ph.D in Mathematics</option>
											
											

										</select>

				                </div>

				              </div>
				          
							  <div class="row">
				                <div class="col-md-6">
				                  <input type="text" class="form-control" placeholder="Class Roll" id="roll" name="roll" style="background:white !important;">
				                </div>
				                <div class="col-md-6">
				                  <input type="text" class="form-control" placeholder="Registration No"  id="reg" name="reg" style="background:white !important;">
				                </div>
				              </div>

				              <div class="row">
				                <div class="col-md-6">
				                  <input type="text" class="form-control" placeholder="Honour's" id="honour" name="honour" style="background:white !important;">
				                </div>
				                <div class="col-md-6">
				                  <select  class="form-control" id="sem" name="sem" style="background:white !important;">
										<option selected="selected"  disabled >--Semester--</option>
											<option value="Semester 1">Semester 1</option>
											<option value="Semester 2">Semester 2</option>
											<option value="Semester 3">Semester 3</option>
											<option value="Semester 4">Semester 4</option>
											<option value="Semester 5">Semester 5</option>
											<option value="Semester 6">Semester 6</option>

									</select>
				                </div>
				              </div>



   						<div class="row">
				                <div class="col-md-12">
				                 
									<select class="form-control" id="session" name="session" style="background:white !important;">
										<option selected="selected" disabled>...Session...</option>
										<option value="2020-2022">2022-2024-(02 Years)</option>
										<option value="2020-2022">2021-2023-(02 Years)</option>
										<option value="2020-2022">2020-2022-(02 Years)</option>
										<option value="2020-2023">2022-2025-(03 Years)</option>
										<option value="2020-2023">2021-2024-(03 Years)</option>
										<option value="2020-2023">2020-2023-(03 Years)</option>
										<option value="2019-2021">2019-2021-(02 Years)</option>
										<option value="2019-2022">2019-2022-(03 Years)</option>
										<option value="2018-2020">2018-2020-(02 Years)</option>
										<option value="2018-2021">2018-2021-(03 Years)</option>
										<option value="2017-2019">2017-2019-(02 Years)</option>
										<option value="2017-2020">2017-2020-(03 Years)</option>
										<option value="2016-2018">2016-2018-(02 Years)</option>
										<option value="2016-2019">2016-2019-(03 Years)</option>
										<option value="2015-2017">2015-2017-(02 Years)</option>
										<option value="2015-2018">2015-2018-(03 Years)</option>
										<option value="2014-2016">2014-2016-(02 Years)</option>
										<option value="2014-2017">2014-2017-(03 Years)</option>
										<option value="2013-2015">2013-2015-(02 Years)</option>
										<option value="2013-2016">2013-2016-(03 Years)</option>
										<option value="2012-2014">2012-2014-(02 Years)</option>
										<option value="2012-2015">2012-2015-(03 Years)</option>
										<option value="2011-2013">2011-2013-(02 Years)</option>
										<option value="2011-2014">2011-2014-(03 Years)</option>
										<option value="2010-2012">2010-2012-(02 Years)</option>
										<option value="2010-2013">2010-2013-(03 Years)</option>
										
										

								</select>

				                </div>

				        </div>

				              <div class="row">
				                <div class="col-md-6 ml-auto mr-auto">
				                     <a class="btn btn-primary btn-block btn-round" href="#address" data-toggle="tab" role="tab" style="background: rgb(36, 91, 93) !important;" required>Next</a>
				                 
				                </div>
				              </div>
				           
				          </div>
	       			 </div>   	
				</div>

                </div>


              </div>
            </div>


            <div class="tab-pane text-center" id="address" role="tabpanel">
            	 <div class="contact-page sidebar-collapse">
	                   <div class="row">
			 <div class="col-md-12">
                 <h5 class="card-title text-left">Step 2 &middot;
                        <small>
                          <a href="#" class="link-default">Address Details</a>
                        </small>
                      </h5>
                      <div class="contact-page sidebar-collapse">
	                   <div class="row">
				          <div class="col-md-6 ml-auto mr-auto text-center">
				            <h3 class="title">
				              <small>Enter your Address details</small>
				            </h3>
				         

							<textarea class="form-control" placeholder="Address..." rows="7" id="address" name="address" style="background:white !important;" spellcheck="false"></textarea>

				              <div class="row">
				                <div class="col-md-6">
				                 
				                  <select  class="form-control" id="country" name="country" style="background:white !important;" required>
									<option disabled="" selected>...Country...</option>
									<option value="1">India</option>
									<option value="2">Other</option>
								</select>

				                </div>

				                <div class="col-md-6">
				                
				                  <select class="form-control" id="state" name="state" style="background:white !important;" required>
									<option selected="selected" disabled="" >...State...</option>
									<option value="1">Andhra Pradesh</option>
									<option value="2">Arunachal Pradesh</option>
									<option value="3">Assam</option>
									<option value="4">Bihar</option>
									<option value="5">Chandigarh</option>
									<option value="6">Chhattisgarh</option>
									<option value="7">Dadra and Nagar Haveli</option>
									<option value="8">Daman and Diu</option>
									<option value="9">Delhi</option>
									<option value="10">Goa</option>
									<option value="11">Gujarat</option>
									<option value="12">Haryana</option>
									<option value="13">Himachal Pradesh</option>
									<option value="14">Jammu and Kashmir</option>
									<option value="15">Jharkhand</option>
									<option value="16">Karnataka</option>
									<option value="17">Kerala</option>
									<option value="18">Lakshadweep</option>
									<option value="19">Madhya Pradesh</option>
									<option value="20">Maharashtra</option>
									<option value="21">Manipur</option>
									<option value="22">Meghalaya</option>
									<option value="23">Mizoram</option>
									<option value="24">Nagaland</option>
									<option value="25">Odisha</option>
									<option value="26">Pondicherry</option>
									<option value="27">Punjab</option>
									<option value="28">Rajasthan</option>
									<option value="29">Sikkim</option>
									<option value="30">Tamil Nadu</option>
									<option value="31">Telangana</option>
									<option value="32">Tripura</option>
									<option value="33">Uttar Pradesh</option>
									<option value="34">Uttarakhand</option>
									<option value="35">West Bengal</option>

								</select>
				                </div>
				              </div>


				              <div class="row">
				                <div class="col-md-6">
				                  <input type="text" class="form-control" id="city" name="city" placeholder="City" style="background:white !important;">
				                </div>
				                <div class="col-md-6">
				                  <input type="text" class="form-control" placeholder="PIN Code" id="pin" name="pin" style="background:white !important;">
				                </div>
				              </div>

				              
				          
			

				              <div class="row">
				                <div class="col-md-6 ml-auto mr-auto">
 									 <a class="btn btn-primary btn-block btn-round" href="#personal" data-toggle="tab" role="tab" style="background: rgb(36, 91, 93) !important;">Previous</a>
 								</div></br>
				                   <div class="col-md-6 ml-auto mr-auto">
 									 <a class="btn btn-primary btn-block btn-round" href="#education" data-toggle="tab" role="tab" style="background: rgb(36, 91, 93) !important;">Next</a>
 								</div>
				               
				              </div>
				            
				        
				          </div>
	       			 </div>   	
				</div>

                </div>
				      
	       			 </div>   	
				</div>
			</div>



            <div class="tab-pane" id="education" role="tabpanel">
            	 <div class="contact-page sidebar-collapse">
	                   <div class="row">
	              <div class="col-md-12">
                	 <h5 class="card-title text-left">Step 3 &middot;
                        <small>
                          <a href="#" class="link-default">Education Qualification</a>
                        </small>
                      </h5>
				          <div class="col-md-12 ml-auto mr-auto text-center">
				            <h3 class="title">
				              <small>Enter your Education Qualification</small>
				            </h3>
				          

										<div class="table-responsive">
											<table class="table">
											  <thead class="thead-dark">
											    <tr>
											      <th scope="col">Course</th>
											      <th scope="col">School/College</th>
											      <th scope="col">Board/University</th>
											      <th scope="col">Percentage(%)</th>
											      <th scope="col">Year</th>
											    </tr>
											  </thead>
											  <tbody>
											    <tr>
											      <th scope="row">
											      	Matric
											      </th>
											      <td> <input type="text" class="form-control" id="m_s_c" name="m_s_c" style="background:white !important;"></td>
											      <td> <input type="text" class="form-control" id="m_b_u" name="m_b_u"  style="background:white !important;"></td>
											      <td> <input type="text" class="form-control" id="m_p" name="m_p"  style="background:white !important;"></td>
											      <td> 
														<select  class="form-control" id="m_y" name="m_y" style="background:white !important;">
															<option selected="selected" disabled="">Year...</option>
															<option value="2022">2022</option>
															<option value="2021">2021</option>
															<option value="2020">2020</option>
															<option value="2019">2019</option>
															<option value="2018">2018</option>
															<option value="2017">2017</option>
															<option value="2016">2016</option>
															<option value="2015">2015</option>
															<option value="2014">2014</option>
															<option value="2013">2013</option>
															<option value="2012">2012</option>
															<option value="2011">2011</option>
															<option value="2010">2010</option>
															<option value="2009">2009</option>
															<option value="2008">2008</option>
															<option value="2007">2007</option>
															<option value="2006">2006</option>
															<option value="2005">2005</option>
															<option value="2004">2004</option>
															<option value="2003">2003</option>
															<option value="2002">2002</option>
															<option value="2001">2001</option>
															<option value="2000">2000</option>
															<option value="1999">1999</option>
															<option value="1998">1998</option>
															<option value="1997">1997</option>
															<option value="1996">1996</option>
															<option value="1995">1995</option>
															<option value="1994">1994</option>
															<option value="1993">1993</option>
															<option value="1992">1992</option>
															<option value="1991">1991</option>
															<option value="1990">1990</option>
													
														</select>

											      </td>
											    </tr>
											    <tr>
											      <th scope="row">Intermediate</th>
											      <td> <input type="text" class="form-control" id="i_s_c" name="i_s_c" style="background:white !important;"></td>
											      <td> <input type="text" class="form-control"  id="i_b_u" name="i_b_u" style="background:white !important;"></td>
											      <td> <input type="text" class="form-control"  id="i_p" name="i_p" style="background:white !important;"></td>
											      <td> 
													<select  class="form-control" id="i_y" name="i_y" style="background:white !important;">
															<option selected="selected" disabled="">Year...</option>
															<option value="2022">2022</option>
															<option value="2021">2021</option>
															<option value="2020">2020</option>
															<option value="2019">2019</option>
															<option value="2018">2018</option>
															<option value="2017">2017</option>
															<option value="2016">2016</option>
															<option value="2015">2015</option>
															<option value="2014">2014</option>
															<option value="2013">2013</option>
															<option value="2012">2012</option>
															<option value="2011">2011</option>
															<option value="2010">2010</option>
															<option value="2009">2009</option>
															<option value="2008">2008</option>
															<option value="2007">2007</option>
															<option value="2006">2006</option>
															<option value="2005">2005</option>
															<option value="2004">2004</option>
															<option value="2003">2003</option>
															<option value="2002">2002</option>
															<option value="2001">2001</option>
															<option value="2000">2000</option>
														

														</select>
											      </td>
											    </tr>
											    <tr>
											      <th scope="row">Others</th>
											      <td> <input type="text" class="form-control" id="o_s_c" name="o_s_c" style="background:white !important;"></td>
											      <td> <input type="text" class="form-control" id="o_b_u" name="o_b_u" style="background:white !important;"></td>
											      <td> <input type="text" class="form-control" id="o_p" name="o_p" style="background:white !important;"></td>
											      <td> 
													<select  class="form-control" id="o_y" name="o_y" style="background:white !important;">
															<option selected="selected" disabled="">...Year...</option>
															<option value="2022">2022</option>
															<option value="2021">2021</option>
															<option value="2020">2020</option>
															<option value="2019">2019</option>
															<option value="2018">2018</option>
															<option value="2017">2017</option>
															<option value="2016">2016</option>
															<option value="2015">2015</option>
															<option value="2014">2014</option>
															<option value="2013">2013</option>
															<option value="2012">2012</option>
															<option value="2011">2011</option>
															<option value="2010">2010</option>
															<option value="2009">2009</option>
															<option value="2008">2008</option>
															<option value="2007">2007</option>
															<option value="2006">2006</option>
															<option value="2005">2005</option>
															<option value="2004">2004</option>
															<option value="2003">2003</option>
															<option value="2002">2002</option>
															<option value="2001">2001</option>
															<option value="2000">2000</option>
															
														</select>
											      </td>
											    </tr>
											  </tbody>
											</table>
										</div>

				

				                <div class="row">
					                <div class="col-md-3 ml-auto mr-auto">
	 									 <a class="btn btn-primary btn-block btn-round" href="#address" data-toggle="tab" role="tab" style="background: rgb(36, 91, 93) !important;">Previous</a>
 									</div> </br>
				                   <div class="col-md-3 ml-auto mr-auto">
 									 <a class="btn btn-primary btn-block btn-round" href="#extra" data-toggle="tab" role="tab" style="background: rgb(36, 91, 93) !important;">Next</a>
 									</div>
				               
				              </div>

				            


				          </div>
	       			 </div>   	
				</div>
            </div>
        </div>




            <div class="tab-pane" id="extra" role="tabpanel">
            	 <div class="contact-page sidebar-collapse">
	                   <div class="row">
 				<div class="col-md-12">
                	 <h5 class="card-title text-left">Step 4 &middot;
                        <small>
                          <a href="#" class="link-default">Other Details</a>
                        </small>
                      </h5>


				          <div class="col-md-7 ml-auto mr-auto text-center" style="float: none">
				            <h3 class="title">
				              <small><b>Enter your Other Details</b></small>
				            </h3>
				           

							<div class="faq">
					          <h4><b>Frequently Asked Questions</b></h4>
					          <br>
					          <div id="acordeon">
					            <div id="accordion" role="tablist" aria-multiselectable="true">
					              <div class="card no-transition">
					                <div class="card-header card-collapse" role="tab" id="headingOne">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					                     Have you ever been convicted by a criminal court and if so in which circumstances and what was the sentence ?
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
					                  <div class="card-body">

					                   <div class="row">
							                <div class="col-md-12">
							               <select  class="form-control" id="q_1" name="q_1" style="background:white !important;">
															<option selected="selected" disabled="">...Select...</option>
															<option value="No">No</option>
															<option value="Yes">Yes</option>
											</select>
							                </div>
							               
							              </div>


					                  </div>
					                </div>
					                <div class="card-header card-collapse" role="tab" id="headingTwo">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					                    Are you willing to be enrolled under National Service Scheme ?
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
					                  <div class="card-body">

					                    <div class="row">
							                <div class="col-md-12">
							               <select  class="form-control" id="q_2" name="q_2" style="background:white !important;">
															<option selected="selected" disabled="">...Select...</option>
															<option value="No">No</option>
															<option value="Yes">Yes</option>
											</select>
							                </div>
							               
							              </div>

					                  </div>
					                </div>
					                <div class="card-header card-collapse" role="tab" id="headingThree">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					                    In which unit do you desire to be enrolled ?
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
					                  <div class="card-body">

					                    <div class="row">
							                <div class="col-md-12">
							              <input type="text" class="form-control" value="Unit-1/Unit-2/Unit-3/Unit-4" disabled style="background:white !important;">
							                </div>
							               
							              </div>


					                  </div>
					                </div>

    						 <div class="card-header card-collapse" role="tab" id="headingfour">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
					                   Are you willing to undergo service training as specified in the Act and the rules made there under?
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour">
					                  <div class="card-body">
					                  	
					                    <div class="row">
							                <div class="col-md-12">
							               <select  class="form-control" id="q_3" name="q_3" style="background:white !important;">
															<option selected="selected" disabled="">...Select...</option>
															<option value="No">No</option>
															<option value="Yes">Yes</option>
											</select>
											
							                </div>
							               
							              </div>


					                  </div>
					                </div>

							 <div class="card-header card-collapse" role="tab" id="headingfive">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
					                Are you willing to serve in the National Service Scheme ?
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapsefive" class="collapse" role="tabpanel" aria-labelledby="headingfive">
					                  <div class="card-body">
					                  	
					                    <div class="row">
							                <div class="col-md-12">
							               <select  class="form-control" id="q_4" name="q_4" style="background:white !important;">
															<option selected="selected" disabled="">...Select...</option>
															<option value="No">No</option>
															<option value="Yes">Yes</option>
											</select>
											
							                </div>
							               
							              </div>


					                  </div>
					                </div>


							 <div class="card-header card-collapse" role="tab" id="headingsix">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
					                Have you ever previously applied for appointment?
							
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapsesix" class="collapse" role="tabpanel" aria-labelledby="headingsix">
					                  <div class="card-body">
					                  	
					                    <div class="row">
							                <div class="col-md-12">
							               <select  class="form-control" id="q_5" name="q_5" style="background:white !important;">
															<option selected="selected" disabled="">...Select...</option>
															<option value="No">No</option>
															<option value="Yes">Yes</option>
											</select>
											
							                </div>
							               
							              </div>


					                  </div>
					                </div>

								<div class="card-header card-collapse" role="tab" id="headingseven">
					                  <h5 class="mb-0 panel-title">
					                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
					               Have you ever been dismissed from the National Service Scheme?
					                      <i class="nc-icon nc-minimal-down"></i>
					                    </a>
					                  </h5>
					                </div>
					                <div id="collapseseven" class="collapse" role="tabpanel" aria-labelledby="headingseven">
					                  <div class="card-body">
					                  	
					                    <div class="row">
							                <div class="col-md-12">
							               <select  class="form-control" id="q_6" name="q_6" style="background:white !important;">
															<option selected="selected" disabled="">...Select...</option>
															<option value="No">No</option>
															<option value="Yes">Yes</option>
											</select>
											
							                </div>
							               
							              </div>


					                  </div>
					                </div>

					              </div>
					            </div>
					            <!--  end acordeon -->
					          </div>
					        </div>


				              <div class="row">
				                <div class="col-md-6">
				                  <input type="text" class="form-control" placeholder="Bank Account number" id="bank_acc" name="bank_acc" style="background:white !important;">
				                </div>
				                <div class="col-md-6">
				                  <input type="text" class="form-control" placeholder="Name of the bank" id="bank_name" name="bank_name" style="background:white !important;">
				                </div>
				              </div>
				              <div class="row">
				                <div class="col-md-6">
				                  <input type="text" class="form-control" placeholder="branch name" id="b_name" name="b_name" style="background:white !important;">
				                </div>
				                <div class="col-md-6">
				                  <input type="text" class="form-control" placeholder="Bank IFSC code" id="ifsc" name="ifsc" style="background:white !important;">
				                </div>
				              </div>

				                <div class="row">
				                <div class="col-md-12">
				                  <input type="text" class="form-control" placeholder="UID NO(AADHAR No)" id="aadhar" name="aadhar" style="background:white !important;">
				                </div>
				              </div>

				               <div class="row">
				                <div class="col-md-6">
				                	<label >Next of Kin's Name (as applicable)</label>
				                  <input type="text" class="form-control" placeholder="" id="kin_name" name="kin_name" style="background:white !important;">
				                </div>
				                <div class="col-md-6">
				                <label >Next Kin's Address (as applicable)</label>
				                  <input type="text" class="form-control" placeholder="" id="kin_address" name="kin_address" style="background:white !important;">
				                </div>
				              </div>


				               <div class="row">
				                <div class="col-md-6">
				                	<label >Relationship with Kin</label>
				                  <input type="text" class="form-control" placeholder="" id="kin_rel" name="kin_rel" style="background:white !important;">
				                </div>
				                <div class="col-md-6">
				                <label > mobile no.</label>
				                  <input type="text" class="form-control" placeholder="" id="k_no" name="k_no" style="background:white !important;">
				                </div>
				              </div>


				        
				               <div class="row">
					                <div class="col-md-6 ml-auto mr-auto">
	 									 <a class="btn btn-primary btn-block btn-round" href="#education" data-toggle="tab" role="tab" style="background: rgb(36, 91, 93) !important;">Previous</a>
 									</div> <br/>
				                   <div class="col-md-6 ml-auto mr-auto">
 									 <a class="btn btn-primary btn-block btn-round" href="#upload" data-toggle="tab" role="tab" style="background: rgb(36, 91, 93) !important;">Next</a>
 									</div>
				               
				              </div>

				          
				           
				          </div>
	       			 </div>   	
				</div>
			</div>
            </div>


     <div class="tab-pane text-center" id="upload" role="tabpanel">
            	 <div class="contact-page sidebar-collapse">
	                   <div class="row">

			 <div class="col-md-12">
                	 <h5 class="card-title text-left">Step 5 &middot;
                        <small>
                          <a href="#" class="link-default">Upload Document</a>
                        </small>
                      </h5>

                      <div class="contact-page sidebar-collapse">
	                   <div class="row">
				          <div class="col-md-6 ml-auto mr-auto text-center">
				            <h3 class="title">
				              <small>Upload your Document</small>
				            </h3>
				            <form class="contact">



				              

				              <table class="table table-striped">
								  <thead>
								    <tr>
								      <th scope="col">Upload Your image upto 40kb</th>
								      <th scope="col">Upload 10th Marksheet(Date Of Birth Proof) upto 100kb</th>
								    
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th scope="row"> <input type="file" class="form-control" id="pic" name="pic"></th>
								      <td><input type="file" class="form-control" id="marksheet" name="marksheet" ></td>
								    
								    </tr>
								  
								  </tbody>
								</table>

				              

				              <div class="row">
				                <div class="col-md-6 ml-auto mr-auto">
 									 <a class="btn btn-primary btn-block btn-round" href="#extra" data-toggle="tab" role="tab" style="background: rgb(36, 91, 93) !important;">Previous</a>
 								</div></br>
				                   <div class="col-md-6 ml-auto mr-auto">
 									 <button class="btn btn-success btn-block btn-round" type="submit"  id="submit_form" >Submit</button>
 								</div>
				               
				              </div>
				            </form>
				        
				          </div>
	       			 </div>   	
				</div>

                </div>
				      
	       			 </div>   	
				</div>
			</div>
<?php 
}
else if($json['status'] == 0 && $json['status'] !==''){?> 


	<div class="col-md-10 ml-auto mr-auto text-center">
                             
                              <br>
                              <div class="card card-plain card-blog">
                                <div class="row">
                                
                                  <div class="col-md-12">
                                    <div class="card-body">
                                      <h3 class="card-title text-warning">
                                         <i class="fas fa-clock "></i> <a href="#">Application under review</a>
                                      </h3>
                                      <p class="card-description">
                                        Your application is successfully submitted and now under review. Once cleared you are ready to enroll. 
                                        
                                      </p>
                                      <p class="author">
                                        Applied on
                                       , <?php
                   
                                         echo  $newDate = date("F d Y", strtotime($json['cdate']));

                                        ?>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                  </div>

<?php
}else{

?>
<div class="col-md-10 ml-auto mr-auto text-center">
                             
                              <br>
                              <div class="card card-plain card-blog">
                                <div class="row">
                                
                                  <div class="col-md-12">
                                    <div class="card-body">
                                      <h3 class="card-title text-success">
                                         <i class="fas fa-check "></i> <a href="#">Application Approved</a>
                                      </h3>
                                      <p class="card-description">
                                        Your application is successfully Approved and now you can enroll in events. 
                                        
                                      </p>
                                      <p class="author">
                                        Applied on
                                       , <?php
                   
                                         echo  $newDate = date("F d Y", strtotime($json['cdate']));

                                        ?>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                  </div>
<?php
}?>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>