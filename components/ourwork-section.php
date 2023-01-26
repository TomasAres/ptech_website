<section id="our-work" class="white-bg container-fluid top-xxl bottom-xxl">
   <div class="container">
      <div class="row">
         <div class="col-md-6 align-self-start">
            <h3 class="semibold bottom-xl">Our work and products</h3>
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
                  $cardTitle="Mycotoxins risk analysis with our geoservices";
                  $cardBody="We created a solution for mycotoxin development in crops.";
                  include 'components/card.php';
               ?>
            </div>
            <div class="swiper-slide">             
               <?php 
                  $cardLink="/pams-platform.php";
                  $cardImg="img/casestudies/pams_header.jpeg";
                  $cardImgAlt="Field inspector using phone app";
                  $cardTitle="PAMS, a digital platform for efficiency and transparency";
                  $cardBody="Centralized management system to collect, manage and visualize project-specific data.";
                  include 'components/card.php';
               ?>
            </div>
            <div class="swiper-slide">             
               <?php 
                  $cardLink="/connected-platform.php";
                  $cardImg="img/casestudies/connected_header.jpeg";
                  $cardImgAlt="Cargo ships";
                  $cardTitle="CONNECTED, a global supply chain traceability service";
                  $cardBody="A platform for brands to access data about the organizations on their supply chain.";
                  include 'components/card.php';
               ?>
            </div>
            <div class="swiper-slide">             
               <?php 
                  $cardLink="/harvest-monitoring.php";
                  $cardImg="img/casestudies/monitoring_header.jpeg";
                  $cardImgAlt="Field aereal view";
                  $cardTitle="Remote harvest monitoring for financial institution";
                  $cardBody="We offered our service in Brazil's commited sugarcane areas.";
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