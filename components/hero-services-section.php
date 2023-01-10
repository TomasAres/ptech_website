<section class="container-fluid hero-bg top-xxl bottom-xxl" id="hero">
   <div class="hero d-flex flex-column justify-content-center ">
   <div class="container">
      <div class="row">
         <div class="col-md-6 align-self-start">
            <div class="breadcrumbs-wrapper">
               <ul class="breadcrumbs">
                  <li><a href="./#services">Services</a></li>
                  <li><span>></span></li>
                  <li><?php echo $serviceName;?></li>
               </ul>
            </div>
            <h3 class="white semibold float-left top-sm"><?php echo $heroTitle;?></h3>
         </div>
         <div class="w-100"></div>
         <div class="col-md-6">
            <div class="p-container top-lg">
               <p class="home-text">
               <?php echo $heroBody;?>
               </p>
             
            </div>
         </div>
      </div>
   </div>
   </div>
</section>