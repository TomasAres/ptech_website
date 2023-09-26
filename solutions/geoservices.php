<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
                $description="Our geoprocessing service offering makes analyzing and managing geographic data easier. Real world applications include crop and stock monitoring, property appraisal, ﬁre detection, mycotoxins detection and more.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi";
                $title="Peterson Technologies - Geoservices";
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/head.php');
        ?>
    </head>

    <body id="geoservice" class="service-page has-video">
            <?php 
                   include( $_SERVER['DOCUMENT_ROOT'] .  '/components/header.php');
            ?>
        <main>

        <?php 
                $breadcrumbOne="{{services}}";
                $breadcrumbOneLink="/#services";
                $serviceName="{{geoservices}}";
                $heroTitle="{{geoservices_hero_title}}";
                $heroBody="{{geoservices_hero_p}}";
                $mainTitle="{{geoservices_first_title}}";
                $pOne="{{geoservices_first_p}}";
                $img="../img/geoservices_img.jpg";
                $imgAlt="Geo Image";
                $pTwo=' <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <img src="../img/icons/geodb_icon.svg" alt="Software development icon" class="service-logo" height="20" />{{geographical_databases}}
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <p class="top-sm bottom-md home-text">{{geographical_databases_p}}</p> 
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <img src="../img/icons/monitoring_icon.svg" alt="Monitoring icon" class="service-logo" height="20" />{{monitoring}}
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">{{monitoring_p}}</p>
                    <p class="home-text">{{applications}}</p>
                    <ul class="home-text">
    <li>{{monitoring_applications_li_1}}</li>
    <li>{{monitoring_applications_li_2}}</li>
    <li>{{monitoring_applications_li_3}}</li>
    <li>{{monitoring_applications_li_4}}</li>
    <li>{{monitoring_applications_li_5}}</li>
</ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <img src="../img/icons/temporalanalysis_icon.svg" alt="Temporal analysis icon" class="service-logo" height="20" />{{temporal_analysis}}
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">{{temporal_analysis_p}}</p>
                    <p class="home-text">{{applications}}</p>
                    <ul class="home-text">
    <li>{{temporal_analysis_applications_li_1}}</li>
    <li>{{temporal_analysis_applications_li_2}}</li>
    <li>{{temporal_analysis_applications_li_3}}</li>
    <li>{{temporal_analysis_applications_li_4}}</li>

</ul>
                    </div>
                  </div>
                </div>
              
              <div class="card bottom-xxl">
                  <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <img src="../img/icons/spatialanalysis_icon.svg" alt="Spatial analysis icon" class="service-logo" height="22" />{{spatial_analysis}}
                      </button>
                    </h5>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">{{spatial_analysis_p}}   
              </p>
              <p class="home-text">{{applications}}</p>
              <ul class="home-text">
<li>{{spatial_analysis_applications_li_1}}</li>
<li>{{spatial_analysis_applications_li_2}}</li>
<li>{{spatial_analysis_applications_li_3}}</li>
<li>{{spatial_analysis_applications_li_4}}</li>

</ul>
                    </div>
                  </div>
                </div>
              </div>';

                $extra='';
                $video='https://www.youtube.com/embed/-XnzCbfuDig';
                  include( $_SERVER['DOCUMENT_ROOT'] .  '/components/hero-services-section.php');
                  include( $_SERVER['DOCUMENT_ROOT'] .  '/components/services-main-section.php');
        ?>
         <?php
               $mainTitle="{{geoplatforms}}";
               $pOne='<div id="accordionTwo">
               <div class="card">
                 <div class="card-header" id="headingFive">
                   <h5 class="mb-0">
                     <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                     {{pisa}}
                     </button>
                   </h5>
                 </div>
             
                 <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionTwo">
                   <div class="card-body">
                     <p class="top-sm bottom-md home-text">                    
                     {{pisa_description}}
                     <a href="https://pisa.onepeterson.com/app" target="_blank" class="service-link top-sm d-block">{{go_to_platform}}</a>

                     </p> 
                   </div>
                 </div>
               </div>
               <div class="card">
                 <div class="card-header" id="headingSix">
                   <h5 class="mb-0">
                     <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                     {{pachs}}
                     </button>
                   </h5>
                 </div>
                 <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionTwo">
                   <div class="card-body">
                   <p class="top-sm home-text bottom-md">  {{pachs_description}}
                   <a href="https://experience.arcgis.com/experience/e239d7a0440e44cb9d8af7fb265fa62d/?draft=true" target="_blank" class="service-link top-sm d-block">{{go_to_platform}}</a>
                   </p>
                   
                   </div>
                 </div>
               </div>
               <div class="card">
                 <div class="card-header" id="headingSeven">
                   <h5 class="mb-0">
                     <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                     {{pogm}}
                     </button>
                   </h5>
                 </div>
                 <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionTwo">
                   <div class="card-body">
                   <p class="top-sm bottom-md home-text">  {{pogm_description}}
                   <a href="https://experience.arcgis.com/experience/f8f79fc4d02f4634806aa9d5c0052bbf" target="_blank" class="service-link top-sm d-block">{{go_to_platform}}</a>
                   </p>
                   </div>
                 </div>
               </div>
               
               

               
               
             
       
             </div>';
               $pTwo='
               ';
               $extra='';
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/services-main-section-dark.php');
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/ourwork-section.php');
        ?>
           
        </main>
        <footer>
            <?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/footer.php');?>
        </footer>
    </body>
</html> 
