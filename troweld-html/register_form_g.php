<?php 
$pageName = "Registeration";
include("includes/_header.php")?>
<div class="container mb-5">
    <div class="row justify-content-center">
    <div class="col-md-10 col-sm-12">
        <div class="card card-primary mt-5 mb-5">
        <!-- <form class="form" class="frm_register_c">     -->
        <div class="card-header text-center">
               <div class="img_holder">
               <img src="images/logo.png" class="p-3 text-center">
               </div>

               <div class="title_holder">
               <div class="header_left_holder text-center">
                <small>
                    <h2 class="title_h5"><strong>MINISTRY OF LANDS AND SURVEY</strong>
                    </h2>
                    <h5 class="subTitle">EBONYI LANDS INFORMATION MANAGEMENT SYSTEM</h5>
                </small>
               
              </div>
              <!-- <div class="header_right_holder">
                  <p class="border p-2">
                    Passport <br>
                    Size <br>
                    Photograph
                  </p>
                </div> -->
               </div>

                
        </div>
          <!-- card header ends  -->
        <div class="body p-5">
          <form>
              <div class="sub_head">
                 <div class="img_box_holder col-lg-3 col-sm-12">
                    <div class="">
                         PassPort with <br> White <br>
                         Background
                    </div>
                 </div>

                 <div class="sub_head_holder col-lg-9 col-sm-12">
                     <div class="">
                      <div class="mb-3">
                        <label for="app_title" class="form-label">Title</label>
                        <input type="text" name="app_title" id="app_title"  class="form-control w-100" placeholder="Title">
                    </div>

                     <div class="mb-3">
                        <label for="app_first_name" class="form-label">First name</label>
                        <input type="text" name="app_first_name" id="app_first_name"  class="form-control col-lg-12" placeholder="First name">
                    </div>

                     <div class="mb-3">
                        <label for="app_middle_name" class="form-label">Middle name</label>
                        <input type="text" name="app_middle_name" id="app_middle_name"  class="form-control w-100" placeholder="Middle name">
                    </div>

                     <div class="mb-3">
                        <label for="app_surname" class="form-label">Surname</label>
                        <input type="text" name="app_surname" id="app_surname"  class="form-control w-100" placeholder="Surname">
                    </div>

                     <div class="mb-3 form-row">
                       <div class="mb-3 col-md-6 col-sm-12">
                        <label for="app_DOB" class="form-label">Date of Birth</label>
                        <input type="date" name="app_DOB" id="app_DOB"  class="form-control w-100" placeholder="DOB">
                    </div>

                    <div class="mb-3 col-md-6 col-sm-12">
                        <label for="app_gender" class="form-label">Gender</label>
                        <select type="" name="app_gender" id="app_gender"  class="form-control w-100" placeholder="Gender">
                            <option value="none">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                     </div>

                    </div>
                 </div>
              </div>
<!-- end of sub head -->
          
             <div class="mb-3 form-row">
                        <div class="mb-3 col-lg-6 col-sm-12">
                        <label for="app_state_of_Origin" class="form-label">State of Origin</label>
                       <select type="" name="app_state_of_Origin" id="app_state_of_Origin"  class="form-control w-100">
                            <option value="none">Select State of Origin</option>
                            <option value="State1">State1</option>
                            <option value="State2">State2</option>
                        </select>
                    </div>

                    <div class="mb-3 col-lg-6 col-sm-12">
                        <label for="app_gender" class="form-label">Local Govt A</label>
                        <select type="" name="app_gender" id="app_gender"  class="form-control w-100" placeholder="Gender">
                            <option value="none">Select LGA</option>
                            <option value="LGA1">LGA1</option>
                            <option value="LGA2">LGA2</option>
                        </select>
                    </div>
                  </div>

                  <!-- address -->
                    <div class="mb-3 form-row">
                        <label for="contact_address" class="form-label">Address</label>
                        <input type="text" name="contact_address" id="contact_address"  class="form-control w-65" placeholder="Address">
                    </div>

                    <div class="mb-3 form-row">
                        <label for="postal_address" class="form-label">Address</label>
                        <input type="text" name="postal_address" id="postal_address"  class="form-control w-65" placeholder="Postal Address">
                    </div>
                  <!-- address -->

                  <!-- city country -->

                    <div class="mb-3 form-row">
                       <div class="mb-3 col-md-6 col-sm-12">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" id="city"  class="form-control w-100" placeholder="City">
                    </div>

                    <div class="mb-3 col-md-6 col-sm-12">
                        <label for="country" class="form-label">Country</label>
                        <select type="" name="country" id="country"  class="form-control w-100" placeholder="Country">
                            <option value="none">Select Country</option>
                            <option value="country1">Country1</option>
                            <option value="country2">Country2</option>
                        </select>
                    </div>
                     </div>
                   <!-- city country -->

                   <!-- tax ID -->
                   <div class="mb-3 form-row">
                       <div class="mb-3 col-md-6 col-sm-12">
                        <label for="tax_id" class="form-label">Tax ID</label>
                        <input type="text" name="tax_id" id="tax_id"  class="form-control w-100" placeholder="Text-ID">
                    </div>

                    <div class="mb-3 col-md-6 col-sm-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email"  class="form-control w-100" placeholder="Email-ID">
                    </div>
                     </div>
                   <!-- tax ID -->

                   <!-- phone 1&2 -->
                    <div class="mb-3 form-row">
                       <div class="mb-3 col-md-6 col-sm-12">
                        <label for="phone_1" class="form-label">Phone 1</label>
                        <input type="text" name="phone_1" id="phone_1"  class="form-control w-100" placeholder="Phone 1">
                    </div>

                    <div class="mb-3 col-md-6 col-sm-12">
                        <label for="phone_2" class="form-label">Phone 1</label>
                        <input type="text" name="phone_2" id="phone_2"  class="form-control w-100" placeholder="Phone 2">

                    </div>
                     </div>
                    <!-- phone 1&2 -->

                    <div class="section2_box">
                       <h3>Mandate Signature Specimen</h3>
                    </div>

                     <div class="official_box">
                       <h3>Mandate Signature Specimen</h3>
                    </div>


                     <div class="form-row">
                        <div class="mb-3 col-md-12 col-sm-12 mt-3">
                          <label for="officer_name" class="form-label">Officer's Name</label>
                          <input type="text" name="officer_name" id="officer_name"  class="form-control w-100" placeholder="Officer's Name">
                          </div>

                          <div class="mb-3 col-md-12 col-sm-12 mt-3">
                          <label for="app_date" class="form-label">Date</label>
                          <input type="date" name="app_date" id="app_date"  class="form-control w-100" placeholder="Date">
                          </div>
                     </div>

                     <div class="mb-3 form-row">
                       <div class="mb-3 col-md-6 col-sm-12">
                        <label for="ebl_rc" class="form-label">EBL RC</label>
                        <input type="text" name="ebl_rc" id="ebl_rc"  class="form-control w-100" placeholder="EBL RC">
                    </div>

                    <div class="mb-3 col-md-6 col-sm-12">
                        <label for="app_sign" class="form-label">Signature</label>
                        <input type="text" name="app_sign" id="app_sign"  class="form-control w-100" placeholder="Signature">

                    </div>
                     </div>


                    <div class="mb-3">
                       <button type="submit" name="Save" class="btn btn-secondary text-light pull-right w-25">Save and Continue</button>
                       <button type="submit" name="submit" class="btn btn-secondary text-light pull-right w-25">
                         Save
                       </button>
                    </div>

          </form>
           
          
        </div>
        <!-- card body end      -->
     <!-- </form> -->
        <div class="car-footer p-3">
             <div class="mb-3"> 
             <!--  <button class="btn btn-secondary text-light pull-right w-25">
                 <a href="" class="text-light p-3">
                    Next <i class="fa fa-arrow-right"></i>
                 </a>
              </button> -->
           </div>
        </div>
     </div>
     <!-- card -->
    </div>
    
    <div class="col-md-0 ">
          <!-- <div class="img-box">
            <img src="images/about-img.png" alt="" />
          </div> -->
           <p>
              <!-- <form class="form p-5 border frmBeacon" method="post">
                 <p>How to use the online Beacon Lookup</p>
                 <div class="form-group">
                   <label>Username</label>
                    <input type="text" class="form-control" placeholder="Enter Your Username">
                 </div>

                 <div class="form-group">
                   <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter Your Password">
                 </div>

                 <div class="btn-group">
                     <input type="submit" name="btnSubmit" class="btn btn-lg text-light text-lg btn-secondary">
                 </div>
              </form> -->
            </p>
        </div>
    </div>
</div>
    
  <!-- end about section -->
<?php include("includes/footer.php")?>