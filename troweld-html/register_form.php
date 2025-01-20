<?php 
$pageName = "Registeration";
include("includes/_header.php")?>
<div class="container mb-5">
    <div class="row justify-content-center">
    <div class="col-md-9 col-sm-12">
        <div class="card card-primary mt-5">
        <form class="form " method="post">    
         <div class="card-header text-center">
                <div class="mb-2 hd_background w-100 text-light">
                    <h3 class="p-2 h3">CORPORATE MANDATE FORM</h3>
                </div>
               <!--  <img src="images/logo.png" class="p-3 text-center">
                <h2 class="h4">Registeration</h2>
                <h2 class="h4">MINISTRY OF LANDS AND SURVEY</h2>
                <P>EBONYI LANDS INFORMATION MANAGEMENT SYSTEM</P> -->
            </div>
            <div class="card-body card-primary">
                <div class="mb-3">
                    <label class="form-label mr-3">Upload Passport</label>
                    <input type="file" name="corp_passport_upload" >
                </div>

                <div class="mb-3">
                    <label for="comp_name" class="form-label">
                        Company Name
                    </label>
                    <input type="text" class="form-control" name="comp_name" id="comp_name" placeholder="Enter your Company Name" >
                </div>

                <div class="mb-3">
                    <label for="RC_num" class="form-label">
                       RC NO
                    </label>
                    <input type="text" class="form-control" name="RC_num" id="RC_num" placeholder="Enter your RC Number" >
                </div>

                <div class="mb-3">
                    <label for="incorporation_date" class="form-label">
                       RC NO
                    </label>
                    <input type="date" class="form-control" name="incorporation_date" id="incorporation_date"  >
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">
                       ADDRESS
                    </label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter your Address" >
                </div>

                <div class="mb-3">
                    <label for="postal_address" class="form-label">
                       POSTAL ADDRESS
                    </label>
                    <input type="text" class="form-control" name="postal_address" id="postal_address" placeholder="Enter your Postal Address" >
                </div>

                <div class="mb-3">
                    <label for="office_phone_number" class="form-label">
                     OFFICE PHONE NUMBER
                    </label>
                    <input type="text" class="form-control" name="postal_address" id="postal_address"  placeholder="Enter your  Office Phone Number" >
                </div>

                <div class="mb-3">
                    <label for="tin" class="form-label">
                    TIN
                    </label>
                    <input type="text" class="form-control" name="tin" id="tin"  placeholder="Enter your TIN" >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">
                     EMAIL
                    </label>
                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" >
                </div>

               <!--  <div class="mt-3 text-center">
                    <hr class="w-100 mt-3 mb-3 border p-1 bg-secondary">
                    <h4 class="h6"><strong>OFFICIAL USE ONLY</strong></h4>
                    <h4 class="h5 p-2"><strong>COMPANY DIRECTORS & SECRETARY</strong></h4>
                </div>
 -->
                <!-- directors -->
              <!--   <div class="mb-3">
                    <div class="row">
                        <div class="passport border col-md-4 col-sm-12">
                            <p class="border p-5 m-3">
                                <b>Director1: <br></b>
                                Passport with white
                            </p>
                        </div> 
                        
                    <div class="col-md-8 col-sm-12">
                        <p class="mb-3">
                                <label for="director_A_name" class="form-label">
                                Name
                                </label>
                                <input type="text" class="form-control" name="official_A_name" id="director_A_name"  placeholder="Enter your Name">
                         </p>

                         <p class="mb-3 form-group">
                                <label for="director_A_phone" class="form-label">
                                   Phone Number
                                </label>
                                <input type="text" class="form-control" name="official_A_phone" id="director_A_phone"  placeholder="Enter your Phone Number">
                         </p>

                         <p class="mb-3">
                                <label for="director_A_email" class="form-label">
                                   Email
                                </label>
                                <input type="text" class="form-control" name="official_A_email" id="director_A_email"  placeholder="Enter your Email">
                         </p>

                          <p class="mb-3">
                                <label for="director_A_sign" class="form-label">
                                   Signature
                                </label>
                                <input type="text" class="form-control" name="official_A_sign" id="director_A_sign"  placeholder="Enter your Email">
                         </p>
                        </div>
                    </div>
                   
                </div> -->
                <!-- director A end -->

                <!-- director b -->
                  <!--   <div class="mb-3">
                    <div class="row">
                        <div class="passport col-md-4 col-sm-12">
                            <p class="p-5 m-3">
                                <b>Director2: <br></b>
                                Passport with white
                            </p>
                        </div> 
                        
                    <div class="col-md-8 col-sm-12">
                        <p class="mb-3">
                                <label for="director_B_name" class="form-label">
                                Name
                                </label>
                                <input type="text" class="form-control" name="official_B_name" id="director_B_name"  placeholder="Enter your Name">
                         </p>

                         <p class="mb-3 form-group">
                                <label for="director_B_phone" class="form-label">
                                   Phone Number
                                </label>
                                <input type="text" class="form-control" name="official_B_phone" id="director_B_phone"  placeholder="Enter your Phone Number">
                         </p>

                         <p class="mb-3">
                                <label for="director_B_email" class="form-label">
                                   Email
                                </label>
                                <input type="text" class="form-control" name="official_B_email" id="director_B_email"  placeholder="Enter your Email">
                         </p>

                          <p class="mb-3">
                                <label for="director_B_sign" class="form-label">
                                   Signature
                                </label>
                                <input type="text" class="form-control" name="official_B_sign" id="director_B_sign"  placeholder="Enter your Email">
                         </p>
                        </div>
                    </div>
                   
                </div -->
                <!-- director B ends here -->

                <!-- director C start -->
               <!--  <div class="mb-3">
                    <div class="row">
                        <div class="passport border col-md-4 col-sm-12">
                            <p class="border p-5 m-3">
                                <b>Director3: <br></b>
                                Passport with white
                            </p>
                        </div> 
                        
                    <div class="col-md-8 col-sm-12">
                        <p class="mb-3">
                                <label for="director_C_name" class="form-label">
                                Name
                                </label>
                                <input type="text" class="form-control" name="officialCA_name" id="director_C_name"  placeholder="Enter your Name">
                         </p>

                         <p class="mb-3 form-group">
                                <label for="director_C_phone" class="form-label">
                                   Phone Number
                                </label>
                                <input type="text" class="form-control" name="official_C_phone" id="director_C_phone"  placeholder="Enter your Phone Number">
                         </p>

                         <p class="mb-3">
                                <label for="director_C_email" class="form-label">
                                   Email
                                </label>
                                <input type="text" class="form-control" name="official_C_email" id="director_C_email"  placeholder="Enter your Email">
                         </p>

                          <p class="mb-3">
                                <label for="director_C_sign" class="form-label">
                                   Signature
                                </label>
                                <input type="text" class="form-control" name="official_C_sign" id="director_C_sign"  placeholder="Enter your Email">
                         </p>
                        </div>
                    </div>
                   
                </div> -->
                <!-- director C -->

                <div class="form-btn text-right">
                    <button type="submit" class="btn btn-secondary w-25"  name="Save">Save and Continue</button>
                    <button type="submit" class="btn btn-secondary  w-25" name="Submit">Submit</button>
                </div>
            </div>
     </form>
     </div>
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