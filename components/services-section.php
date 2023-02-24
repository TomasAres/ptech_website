<!-- Service Offering -->
<!-- Service Offering Desktop -->
<section class="container-fluid top-xxl bottom-xxl" id="services">
   <div class="container d-none d-md-block">
      <div class="row">
         <div class="col-md-6">
            <h3 class="white semibold">{{services_title}}</h3>
         </div>
         <div class="col-md-6 column-services">
            
            <div class="service">
               <div class="service-header d-inline d-flex align-items-center">
                  <img src="../img/icons/data_icon.svg" alt="Software development icon" class="service-logo" height="22" />
                  <h5 class="service-title bold white pt-2">{{data_analytics}}</h5>
               </div>
               <div class="service-body top-md">
                  <p class="home-text">
                     {{data_analytics_description}}
                  </p>
                  <a href="../solutions/data-analytics.php" class="service-link top-sm d-block">{{data_analytics_link}}</a>
               </div>
            </div>
            <div class="service top-xl">
               <div class="service-header d-inline d-flex align-items-center">
                  <img src="../img/icons/geo_icon.svg" alt="Software development icon" class="service-logo" height="24" />
                  <h5 class="service-title bold white pt-2">{{geoservices}}</h5>
               </div>
               <div class="service-body top-md">
                  <p class="home-text">
                  {{geoservices_description}}
                  </p>
                  <a href="../solutions/geoservices.php" class="service-link top-sm d-block">{{geoservices_link}}</a>
               </div>
            </div>
            <div class="service top-xl">
               <div class="service-header d-inline d-flex align-items-center">
                  <img src="../img/icons/elearning_icon.svg" alt="Software development icon" class="service-logo" height="24" />
                  <h5 class="service-title bold white pt-2">{{elearning}}</h5>
               </div>
               <div class="service-body top-md">
                  <p class="home-text">
                  {{elearning_description}}
                  </p>
                  <a href="../solutions/elearning.php" class="service-link top-sm d-block">{{elearning_link}}</a>
               </div>
            </div>
            <div class="service top-xl">
               <div class="service-header d-inline d-flex align-items-center">
                  <img src="../img/icons/supplychain_icon.svg" alt="Software development icon" class="service-logo" height="29" />
                  <h5 class="service-title bold white pt-2">{{supplychain_traceability}}</h5>
               </div>
               <div class="service-body top-md">
                  <p class="home-text">
                  {{supplychain_traceability_description}}
                  </p>
                  <a href="../solutions/connected-platform.php" class="service-link top-sm d-block">{{supplychain_traceability_link}}</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="img-wrapper w-75 w-lg-100 m-auto"><img src="..//img/bg_services.png" alt="" class="bg-services" /></div>
   <!-- Service Offering Mobile -->
   <!-- Swiper -->
   <div class="container d-md-none">
      <h3 class="white semibold bottom-lg">{{services_title}}</h3>
      <div class="swiper mySwiperServices">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="service">
                  <div class="service-header d-inline d-flex align-items-center">
                     <img src="../img/icons/data_icon.svg" alt="Data analytics icon" class="service-logo" />
                     <h5 class="service-title bold pt-2">{{data_analytics}}</h5>
                  </div>
                  <div class="service-body top-md">
                     <p class="home-text">
                     {{data_analytics_description}}
                     </p>
                     <a href="../solutions/data-analytics.php" class="service-link top-sm d-block">{{data_analytics_link}}</a>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="service">
                  <div class="service-header d-inline d-flex align-items-center">
                     <img src="../img/icons/geo_icon.svg" alt="Geoservices icon" class="service-logo" />
                     <h5 class="service-title bold pt-2">{{geoservices}}</h5>
                  </div>
                  <div class="service-body top-md">
                     <p class="home-text">
                     {{geoservices_description}}
                     </p>
                     <a href="../solutions/geoservices.php" class="service-link top-sm d-block">{{geoservices_link}}</a>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="service">
                  <div class="service-header d-inline d-flex align-items-center">
                     <img src="../img/icons/elearning_icon.svg" alt="Elearning icon" class="service-logo" />
                     <h5 class="service-title bold pt-2">{{elearning}}</h5>
                  </div>
                  <div class="service-body top-md">
                     <p class="home-text">
                     {{elearning_description}}
                     </p>
                     <a href="../solutions/elearning.php" class="service-link top-sm d-block">{{elearning_link}}</a>
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="service">
                  <div class="service-header d-inline d-flex align-items-center">
                     <img src="../img/icons/supplychain_icon.svg" alt="Supply Chain Traecaiblity icon" class="service-logo" />
                     <h5 class="service-title bold pt-2">{{supplychain_traceability}}</h5>
                  </div>
                  <div class="service-body top-md">
                     <p class="home-text">
                     {{supplychain_traceability_description}}
                     </p>
                     <a href="" class="service-link top-sm d-block">{{supplychain_traceability_link}}</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="swiper-services-pagination"></div>
   </div>
</section>