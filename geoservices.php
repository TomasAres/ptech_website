<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
                $description="Peterson Technologies, we detect, optimize, and enhance innovative ideas and solutions, transforming them into services.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi";
                $title="Peterson Technologies - Geoservices";
                include 'components/head.php';
        ?>
    </head>

    <body id="geoservice" class="service-page">
        <header>
            <?php 
                  include 'components/header.php';
            ?>
        </header>
        <main>

        <section class="container-fluid hero-bg top-xxl bottom-xxl" id="hero">
   <div class="hero d-flex flex-column justify-content-center ">
   <div class="container">
      <div class="row">
         <div class="col-md-6 align-self-start">
            <div class="breadcrumbs-wrapper">
               <ul class="breadcrumbs">
                  <li><a href="./#services">Services</a></li>
                  <li><span>></span></li>
                  <li><a href="">Geoservices</a></li>
               </ul>
            </div>
            <h3 class="white semibold float-left top-sm">Business applied geographical data</h3>
         </div>
         <div class="w-100"></div>
         <div class="col-md-6">
            <div class="p-container top-lg">
               <p class="home-text">
               Our geoprocessing service offering makes analyzing and managing geographic data easier. Real world applications include crop and stock monitoring, property appraisal, ﬁre detection, mycotoxins detection and more. 
               </p>
             
            </div>
         </div>
      </div>
   </div>
   </div>
</section>


<?php 
                  include 'components/services-geo-section.php';
                  include 'components/ourwork-section.php';
            ?>
           
        </main>
        <footer>
            <?php include 'components/footer.php';?>
        </footer>
    </body>
</html> 
