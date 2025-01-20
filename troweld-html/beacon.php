<?php 
$pageName = "Beacon-Lookup";
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
              <h2>How to use the online <span>Beacon Lookup</span></h2>
            </div>
            <div class="p-5">
               <p>
                   Welcome to the online coordinate register of the Ministry of Lands and Housing Ebonyi. The coordinate register is a register of all the coordinates of property beacon approved by the Survey Department of the Ministry. You can search for more than 45,000 beacon numbers already registered by the Ministry.
               </p>

               <p>
                   For you to be able to use this online service, you must be a fully registered surveyor and must have registered as a user with the survey department. To register and get access, please goto the Department of Survey, Ebonyi State Ministry of Lands and Survey.
               </p>

                <p>
                   To proceed, login with your username and passord in the form at your right.
                </p>
            </div>
           <!--  <a href="">
              Read More
            </a> -->
          </div>
        </div>
        <div class="col-md-4">
          <!-- <div class="img-box">
            <img src="images/about-img.png" alt="" />
          </div> -->
           <p>
              <form class="form p-5 border frmBeacon" method="post">
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
              </form>
            </p>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
<?php include("includes/footer.php")?>