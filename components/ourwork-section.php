<section id="our-work" class="white-bg container-fluid top-xxl bottom-xxl">
   <div class="container">
      <div class="row">
         <div class="col-md-6 align-self-start">
            <h3 class="semibold bottom-xl">Case studies</h3>
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
                  $cardImg="img/mycotoxins_solution.jpeg";
                  $cardImgAlt="Mycotoxins infested crop";
                  $cardTitle="Mycotoxins risk analysis with our geoservices";
                  $cardBody="We created a solution for mycotoxin development in crops.";
                  include 'components/card.php';
               ?>
            </div>
            <div class="swiper-slide">             
               <?php 
                  $cardLink="/pams-platform.php";
                  $cardImg="img/mycotoxins_problem.jpeg";
                  $cardImgAlt="";
                  $cardTitle="PAMS, a digital platform for efficiency and transparency";
                  $cardBody="Centralized management system to collect, manage and visualize project-specific data.";
                  include 'components/card.php';
               ?>
            </div>
            <div class="swiper-slide">             
               <?php 
                  $cardLink="/connected-platform.php";
                  $cardImg="img/mycotoxins_problem.jpeg";
                  $cardImgAlt="";
                  $cardTitle="CONNECTED, a global supply chain traceability service";
                  $cardBody="We created a solution for mycotoxin development in crops";
                  include 'components/card.php';
               ?>
            </div>
            <div class="swiper-slide">             
               <?php 
                  $cardLink="/mycotoxin-development.php";
                  $cardImg="img/mycotoxins_problem.jpeg";
                  $cardImgAlt="";
                  $cardTitle="Remote harvest monitoring for financial institutions";
                  $cardBody="We created a solution for mycotoxin development in crops";
                  include 'components/card.php';
               ?>
            </div>
         </div>
         <div class="swiper-pagination"></div>
      </div>
   </div>
  
</section>