<?php 
$pageName = "Property";
include("includes/_header.php")?>
  <div class="hero_area">
    <!-- header section strats -->
   
     
    <!-- end header section -->
  </div>

  <!-- about section -->
    <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-8">
          <div class="detail-box">
            <div class="heading_container">
              <h2>How to use the online  <span>Property Search</span></h2>
            </div>
            <div class="p-5">
             <p>
                 Welcome to the online property search of the Enugu Ministry of Lands and Housing. The following steps are neccessary to be able to search for properties online.
             </p>
           
               <ol>
                  <li>
                      Obtain your scratch-off card from the Ministry of Lands Office or designated banks
                  </li>
                   <li>
                      Gently scratch-off the silver coating to reveal the 13 digits security number
                  </li>
                   <li>
                      Enter the security number and serial number found under the card in the form by the right side of this page
                  </li>
                  <li>
                    If the security number and serial is correct you will be granted access do perform a property search. Note that the access is granted for 15 minutes and you have just three re-trials before the access expires
                  </li>
                  <li>
                  You can search with any of the following parameters - file number of the property, reigistration number of the property, beacon number and description of the property.
                </li>
               </ol>
            </div>
           <!--  <a href="">
              Read More
            </a> -->
          </div>
        </div>
        <div class="col-md-4 ">
          <!-- <div class="img-box">
            <img src="images/about-img.png" alt="" />
          </div> -->
           <p>
              <form class="form p-5 border frmProperty" method="post">
                 <p>Please enter the card 13 digit Number and serial number below</p>
                 <div class="form-group">
                   <label>Security Number</label>
                    <input type="text" class="form-control" placeholder="Enter Your Security Number">
                 </div>

                 <div class="form-group">
                   <label>Serial Number</label>
                    <input type="text" class="form-control" placeholder="Enter Your Serial Number">
                 </div>

                 <div class="btn-group">
                     <input type="submit" name="btnSubmit" class="btn btn-lg text-light text-lg btn-secondary">
                 </div>
              </form>
            </p>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
<?php include("includes/footer.php")?>