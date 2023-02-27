<section class="container-fluid hero-bg" id="hero">
   <div class="hero d-flex  flex-column justify-content-center ">
   <div class="container">
      <div class="row align-items-center">
             <div class="col-md-5">
            <div class="img-wrapper top-xl bottom-xl">
            <img src="<?php echo $img;?>" class="hero-services-img" alt="<?php echo $imgAlt;?>" height="500px">
            </div>
         </div>
         <div class="col-md-7">
            <div class="breadcrumbs-wrapper w-100">
               <ul class="breadcrumbs bottom-md">
                  <li><a href="<?php echo $breadcrumbOneLink;?>"><?php echo $breadcrumbOne;?></a></li>
                  <li><span>></span></li>
                  <li><?php echo $serviceName;?></li>
               </ul>
            </div>
            <h3 class="white semibold"><?php echo $heroTitle;?></h3>
            <p class="home-text top-lg">
            <?php echo $heroBody;?>
            </p>
             
            
         </div>
     
      </div>
   </div>
   </div>
</section>