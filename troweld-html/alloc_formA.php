<?php 
$pageName = "Registeration";
include("includes/_header.php")?>
<div class="container mb-5">
    <div class="row justify-content-center">
    <div class="col-md-9 col-sm-12">
        <div class="panel panel-primary mt-5 mb-5">
        <form class="form" class="frm_register_b"> 

        <div class="panel-heading text-center">

               <div class="img_holder">
               <img src="images/logo.png" class="p-3 text-center">
               </div>

               <div class="title_holder">
               <div class="header_left_holder text-center">
                <small>
                <h2 class="h5"><strong>GOVERNMENT OF EBONYI STATE OF NIGERIA</strong></h2>
                <h4><small>Land Use (Grant of Right of Occupancy) Regulation, 1979</small></h4>
                <h3 class="h5"><strong>LAND ALLOCATION/APPLICATION <br>FOR STATUTORY RIGHT OF OCCUPANCY</strong></h3>
                </small>
              </div>
              
              <div class="header_right_holder">
                  <p class="border p-2">
                    Passport <br>
                    Size <br>
                    Photograph
                  </p>
                </div>
               </div>

                <p class="mb-2">   (Regulation 7)1 </p>
                <p class="mb">
                    OCHO UDO CITY LAYOUT ABAKALIKI
                </p>
                

                
        </div>

        <div class="body p-5">
            <p class="p-2 text-center">SECTION A-PERSONAL</p>

           <div class="mb-3">
              <label for="applicant_name" class="form-label">
                Apllicant's Name (in Full)
              </label>
              <input type="text" name="applicant_name" id="applicant_name" class="form-control" placeholder="Enter your Full Name">
           </div>

           <div class="mb-3">
              <label for="applicant_age" class="form-label">
                Apllicant's Age and DOB (in Full)
              </label>
                <div class="form-row">
                <input type="text" name="applicant_age" id="applicant_age" class="form-control w-50" placeholder="Enter your Age">
                <input type="date" name="applicant_DOB" id="applicant_DOB" class="form-control w-50">
                </div>
           </div>

           <div class="mb-3">
              <label for="applicant_nationality" class="form-label">
                Nationality
              </label>
              <select name="applicant_nationality" id="applicant_nationality" class="form-control w-100">
                <option value="none">Select your Nationality</option>
                <option value="Nigerian">Nigerian</option>
                <option value="Others">Others</option>
              </select>
           </div>
            <br>
           <div class="mb-3 mt-3">
              <label for="applicant_residential_address" class="form-label">
                Residential Address
              </label>
                
                <input type="text" name="applicant_residential_address" id="applicant_residential_address" class="form-control" placeholder="Enter your Address">
              
           </div>

           <div class="mb-3">
              <label for="applicant_postal_address" class="form-label">
                Postal Address
              </label>
                
                <input type="text" name="applicant_postal_address" id="applicant_postal_address" class="form-control" placeholder="Enter your Postal Address">
              
           </div>

           <div class="mb-3">
              <label for="applicant_LGA_origin" class="form-label">
                Postal Address
              </label>
                
              <select name="applicant_LGA_origin" id="applicant_LGA_origin" class="w-100 form-control">
                <option value="none">Select LGA of Origin</option>
                <option value="LGA1">LGA1</option>
                <option value="LGA2">LGA2</option>
              </select>
           </div>
            <br> <br>
           <div class="mb-3">
              <label for="applicant_auto_community" class="form-label">
                Autonomous Community
              </label>
                <input type="text" name="applicant_auto_community" id="applicant_auto_community" class="form-control" placeholder="Enter your Autonomous Community">
           </div>

           <div class="mb-3">
              <label for="applicant_occupation" class="form-label">
                Occupation
              </label>
                <br>
                <span><small>Length of service(if employed)</small>
                <input type="text" name="applicant_occupation" id="applicant_occupation" class="form-control" placeholder="Enter your Occupation">
                </span>

                <br>
                <span><small>Salary Level(if employed)</small>
                <input type="text" name="applicant_occupation" id="applicant_occupation" class="form-control" placeholder="Enter your Occupation">
                </span>
              </div>
              
            <div class="mb-3">
              <label for="applicant_annual_income" class="form-label">
                Annual Income
              </label>
                <input type="text" name="applicant_annual_income" id="applicant_annual_income" class="form-control" placeholder="Enter your Anuual Income">
           </div>

           <div class="mb-3">
              <label for="applicant_public_office_held" class="form-label">
                Public Office Held
              </label>
                <input type="text" name="applicant_public_office_held" id="applicant_public_office_held" class="form-control" placeholder="Public office Held">
           </div>

           <div class="mb-3">
              <label for="national_honour" class="form-label">
                National Honours
              </label>
                <input type="text" name="national_honour" id="national_honour" class="form-control" placeholder="National Honour">
           </div>

           <div class="mb-3">
              <label for="tax_clearance_cert_nos" class="form-label">
                Tax Clearance Certificate Nos
              </label>
                <input type="text" name="tax_clearance_cert_nos" id="tax_clearance_cert_nos" class="form-control" placeholder="Tax Clearance Certificate Nos">
                <span><small>Or three years tax reciepts (attach Photocopies)</small></span>
           </div>
          
           <div class="mb-3">
              <label for="Town and Layout applied for" class="form-label">
              Town and Layout apllied for
              </label>
                <input type="text" name="Town and Layout applied for" id="Town and Layout applied for" class="form-control" placeholder="Town and Layout apllied for">
           </div>

           <div class="mb-3">
              <label for="land_purpose" class="form-label">
               Purpose for which the Land is required
              </label>
                <input type="text" name="land_purpose" id="land_purpose" class="form-control" placeholder="Tax Clearance Certificate Nos">
                <span><small>(Residential, Industrial, Residential/Commercial)</small></span>
           </div>
            <!-- SECTION B-SARTS -->
           <div class="mt-5">
               <small><h4 class="text-center mb-3"><strong>SECTION B - FOR COMPANIES AND ORGANISATION</strong></h4></small>

               <div class="mb-3">
                <label for="name_of_company" class="form-label">
                Name of Company or Organisation
                </label>
                  <input type="text" name="name_of_company" id="name_of_company" class="form-control" placeholder=" Name of Company or Organisation">
              </div>

              <div class="mb-3">
                <label for="incorporation_registeration_no" class="form-label">
                Incorporation/Registeration No of Company or Organisation (attach Photocopy of Certificates)
                </label>
                  <input type="text" name="incorporation_registeration_no" id="incorporation_registeration_no" class="form-control" placeholder="  Incorporation/Registeration No of Company ">
              </div>

              <div class="mb-3">
                <label for="registered_head_office" class="form-label">
                Regisered Head Office
                </label>
                  <input type="text" name="registered_head_office" id="registered_head_office" class="form-control" placeholder="Regisered Head Office">
              </div>
           </div>
           <!-- SECTION B-ENDS` -->

           <div class="mb-3">
                   <div class="form-btn-group text-right">
                    <button type="submit" class="btn btn-secondary w-25 mr-3">Save and Continue</button>
                    <button type="submit" class="btn btn-secondary w-25 ">Submit</button>
                </div>
           </div>
        </div>
        <!-- card body end      -->
     </form>
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