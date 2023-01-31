<section id="our-work" class="white-bg container-fluid top-xxl bottom-xxl">
   <div class="container">
      <div class="row">
         <div class="col-md-6 align-self-start">
            <h3 class="semibold bottom-xl">{{ourwork_title}}</h3>
         </div>
         <div class="w-100"></div>
      </div>
   </div>
   <!-- Swiper Desktop -->
   <div class="container">
      <div class="swiper mySwiperCases">
         <div class="swiper-wrapper bottom-xl">
            <div class="swiper-slide">             
               <?php 
                  $cardLink="/mycotoxin-development.php";
                  $cardImg="img/casestudies/mycotoxins_header.jpeg";
                  $cardImgAlt="Mycotoxins infested crop";
                  $cardTitle="{{ourwork_mycotoxins_title}}";
                  $cardBody="{{ourwork_mycotoxins_description}}";
                  include 'components/card.php';
               ?>
            </div>
            <div class="swiper-slide">             
               <?php 
                  $cardLink="/pams-platform.php";
                  $cardImg="img/casestudies/pams_header.jpeg";
                  $cardImgAlt="Field inspector using phone app";
                  $cardTitle="{{ourwork_pams_title}}";
                  $cardBody="{{ourwork_pams_description}}";
                  include 'components/card.php';
               ?>
            </div>
            <div class="swiper-slide">             
               <?php 
                  $cardLink="/connected-platform.php";
                  $cardImg="img/casestudies/connected_header.jpeg";
                  $cardImgAlt="Cargo ships";
                  $cardTitle="{{ourwork_connected_title}}";
                  $cardBody="{{ourwork_connected_description}}";
                  include 'components/card.php';
               ?>
            </div>
            <div class="swiper-slide">             
               <?php 
                  $cardLink="/harvest-monitoring.php";
                  $cardImg="img/casestudies/monitoring_header.jpeg";
                  $cardImgAlt="Field aereal view";
                  $cardTitle="{{ourwork_harvest_title}}";
                  $cardBody="{{ourwork_harvest_description}}";
                  include 'components/card.php';
               ?>
            </div>
         </div>
         <div class="swiper-pagination"></div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
      </div>
   </div>
  
</section>