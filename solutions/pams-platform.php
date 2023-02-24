<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
                $description="Transparency improves efficiency by identifying bottlenecks, minimizing wastefulness, and maximizing the impact of spent resources. PAMS brings more transparency to your projects by providing a safe digital environment to share critical information.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi, pams, digital, platform, digital platform, efficiency, transparency";
                $title="Peterson Technologies - PAMS, a digital platform for efficiency and transparency";
                include 'components/head.php';
        ?>
	</head>
	<body id="pams-platform" class="case-study-page">
			<?php include 'components/header.php' ;?>
		<main>
			<?php 
                $breadcrumbOne="{{case_studies}}";
                $breadcrumbOneLink="/#our-work";
                $serviceName="{{ourwork_pams_title}}";
                $heroTitle="{{ourwork_pams_title}}";
                $heroBody="{{pams_hero_p}}";
                $mainTitle="{{pams_first_title}}";
                $pOne="{{pams_first_p}}";
                $pTwo='{{pams_second_p}}';
                $extra='<div id="accordion" class="bottom-xxl">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     {{advanced_mapping_tools}}
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <p class="top-sm bottom-md home-text">{{advanced_mapping_tools_p}}</p> 
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      {{onsite_data_capture}}
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">{{onsite_data_capture_p}}</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      {{drones_satellite}}
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">{{drones_satellite_p}}</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      {{maps_sensor}}
                      </button>
                    </h5>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">
                    {{maps_sensor_p}}</p>
                    </div>
                  </div>
                </div>
              
        
              </div>';
                $titleOne='{{clients}}';
                $contentOne='{{pams_clients}}';
                $titleTwo='{{service}}';
                $contentTwo='{{geoservices}}';
                $titleThree='{{industry}}';
                $contentThree='{{saas}}';
                $titleFour='{{year}}';
                $contentFour='{{2020}}';
                include 'components/hero-services-section.php';
                include 'components/numbers-section.php';
                include 'components/services-main-section.php';
        ?>
        <?php
               $mainTitle="{{pams_use_cases}}";
               $pOne='<div id="accordionTwo">
               <div class="card">
                 <div class="card-header" id="headingFive">
                   <h5 class="mb-0">
                     <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                   {{farm_management}}
                     </button>
                   </h5>
                 </div>
             
                 <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionTwo">
                   <div class="card-body">
                     <p class="top-sm bottom-md home-text">{{farm_management_p}}
                     </p> 
                   </div>
                 </div>
               </div>
               <div class="card">
                 <div class="card-header" id="headingSix">
                   <h5 class="mb-0">
                     <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                     {{inspections_audits_p}}
                     </button>
                   </h5>
                 </div>
                 <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionTwo">
                   <div class="card-body">
                   <p class="top-sm bottom-md home-text">{{inspection_audits_p}}
                   </p>
                   </div>
                 </div>
               </div>
               <div class="card">
                 <div class="card-header" id="headingSeven">
                   <h5 class="mb-0">
                     <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                     {{sustainability_csr}}
                     </button>
                   </h5>
                 </div>
                 <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionTwo">
                   <div class="card-body">
                   <p class="top-sm bottom-md home-text">{{sustainability_csr_p}}</p>
                   </div>
                 </div>
               </div>
               <div class="card">
                 <div class="card-header" id="headingEight">
                   <h5 class="mb-0">
                     <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                     {{pest_management}}
                     </button>
                   </h5>
                 </div>
                 <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionTwo">
                   <div class="card-body">
                   <p class="top-sm bottom-md home-text">
                   {{pest_management_p}}</p>
                   </div>
                 </div>
               </div>

               <div class="card">
                 <div class="card-header" id="headingNine">
                   <h5 class="mb-0">
                     <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                     {{obp}}
                     </button>
                   </h5>
                 </div>
                 <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionTwo">
                   <div class="card-body">
                   <p class="top-sm bottom-md home-text">
                   {{obp_p}}</p>
                   </div>
                 </div>
               </div>

               <div class="card">
               <div class="card-header" id="headingTen">
                 <h5 class="mb-0">
                   <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                   {{traceability}}
                   </button>
                 </h5>
               </div>
               <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionTwo">
                 <div class="card-body">
                 <p class="top-sm bottom-md home-text">
                 {{traceability_p}} </p>
                 </div>
               </div>
             </div>
             
       
             </div>';
               $pTwo='';
               $extra='';
                include 'components/services-main-section-dark.php';
                include 'components/ourwork-section.php';
        ?>
		</main>
		<footer>
			<?php include 'components/footer.php';?>
		</footer>
	</body>
</html>

