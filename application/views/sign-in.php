<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<head>
<style type="text/css">
#class{


}

</style>
</head>

<!-- Bootstrap Min CSS -->
    
    <!-- Color CSS -->
    <link rel="stylesheet" href="assets/css/color1.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style1.css" />

   <!-- Start of Breadcrumb section
   ============================================= -->
   <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg">
      <span class="background_overlay"></span>
      <span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
      <div class="container">
         <div class="ft-breadcrumb-content headline text-center position-relative">
            <h2>Sign-in</h2>
            <div class="ft-breadcrumb-list ul-li">
               <ul>
                  <li><a href="<?php echo base_url(); ?>Home">Home</a></li>
                  <li>Sign-in</li>
               </ul>
            </div>
         </div>
      </div>
   </section>  
<!-- End of Breadcrumb section
   ============================================= -->

  <!-- SignIn Area Start -->
   <section id="signin_area">
    <div class="container">
     <div class="row">
      <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
       <div class="user_area_weapper">
        <h2 >Sign in to Your Account!</h2>
        <div class="user_arae_form">

         <form action="<?= base_url(); ?>Registration" method="post">

          <div class="row">
           <div class="col-lg-12">
            <div class="form-group">
             <input type="text" class="form-control" placeholder="Username or Email">
            </div>
           </div>

           <div class="col-lg-12">
            <div class="form-group">
             <input type="password" class="form-control" placeholder="Password">
            </div>
           </div>

           <div class="col-lg-12">
            <div class="form-group form-check">
             <input type="checkbox" class="form-check-input" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Remember me</label>
             </div>
           </div>

           <div class="col-lg-12">
            <div class="submit_button">
             <button class="btn btn-theme">Sign In</button>
           </div>
           </div>

           <div class="col-lg-12">
            <div class="not_remamber_area">
             <p>Not a member? <a href="<?php echo base_url(); ?>Sign-Up">Sign Up</a> </p>
            </div>
           </div>
          </div>
         </form>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
  <!-- SignIn Area End -->

 
