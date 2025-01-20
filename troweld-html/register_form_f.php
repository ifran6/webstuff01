<?php 
$pageName = "Registeration";
include("includes/_header.php")?>
<div class="container mb-5">
    <div class="row justify-content-center">
    <div class="col-md-9 col-sm-12">
        <div class="card card-primary mt-5 mb-5">
        <!-- <form class="form" class="frm_register_c">     -->
        <div class="card-header text-center">
               <div class="img_holder">
               <img src="images/logo.png" class="p-3 text-center">
               </div>

               <div class="title_holder">
               <div class="header_left_holder text-center">
                <small>
                <h2 class="h5"><strong>Continuation Form A</strong>
                                              
                 <!--  <span class="cash_sign">N</span>
                  136,100+Ground Rent(Determined by)
                  <small>the size of Land(N5/M<superscript>2</superscript>) </small> -->
                </h2>
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
            <div class="mb-3">
                <label class="form-label">
                     Company Tax Clearance Certificate No
                </label>
                <span>
                <input type="text" name="tax_clearance_cert_nos" id="tax_clearance_cert_nos" class="form-control" placeholder="Tax Clearance Certificate">
                 <small>or three years Tax receipts</small>
              </span>
            </div>

            <div class="mb-3">
                <label class="form-label">
                     Purpose for which Land is required
                </label>
                <span>
                <input type="text" name="land_purpose" id="land_purpose" class="form-control" placeholder="Purpose for which Land is required">
                 <small>(Commercial, Individual or Residential)</small>
              </span>
            </div>

             <div class="mb-3">
                <label class="form-label">
                    Town and Layout applied for
                </label>
                <input type="text" name="_town_and_layout" id="_town_and_layout" class="form-control" placeholder="Town and Layout applied for">
            </div>

            <div class="mt-3 section mb-3">
                <div class="text-center m-3">
                   <h2 class="h5">SECTION C- GENERAL</h2>
                </div>

              <div class="mb-3">
                <label class="form-label">
                    Have youvor your spouse been allocated any plot(s) by the Ebonyi State Government?
                </label>
                <span>
                <input type="text" name="alocation_question" id="alocation_question" class="form-control" 
                placeholder="Enter your answer">
                 <small>If Yes, state particuar</small>
              </span>
            </div>

             <div class="mb-3">
                <label class="form-label">
                    Estimate cost of Development
                </label>
                <textarea name="cost_development" id="cost_development" class="form-control" placeholder="Estimate cost of Development"></textarea>
            </div>

            <div class="sign_date_box_holder">
                <div class="mb-4">
                     <input type="text" name="signature" id="signature" class="form-control w-50" placeholder="Signature Or Your Fullname">
                    <label class="form-label">
                        Signature
                    </label>
                </div>


                <div class="mb-3">
                    <input type="date" name="date_signed" id="date_signed" class="form-control w-50">
                  <label class="form-label">
                      Date
                </label>      
              </div>     
          </div>

             <div class="mb-3 note">
               <p><strong>Note:</strong></p>

               <p class="text-center">
                  <ol>
                    <li>
                        The prescribed non-refundable Application Fee is <strong><span class="cash_sign">N</span>
                      100,000</strong>
                      (One Hundred Thousand Naira) for reciept.
                    </li>

                    <li>
                        Two copies of completed Application Forms together with the prescribed fee to be forward to the Ministry of Lands, Survey and Housing.
                    </li>

                    <li>
                        Only applications accompanied by the prescribed fee payable to Ebonyi State Government Account (pay direct) to UBA, UBN, FIRST BANK, ZENITH BANK, DIAMOND BANK will be acknowledged.
                    </li>
                  </ol>
               </p>
             </div>
          </div>

          </form>
           
          
        </div>
        <!-- card body end      -->
     <!-- </form> -->
        <div class="car-footer p-3">
             <div class="mb-3"> 
              <button class="btn btn-secondary text-light pull-right w-25">
                 <a href="" class="text-light p-3">
                    Next <i class="fa fa-arrow-right"></i>
                 </a>
              </button>
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