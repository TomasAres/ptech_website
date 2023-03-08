<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
                $description="Knowledge is power, and traceability provides information that can reduce risks and improve efficiency for operations. Connected is a market driven and responsive web service, with a multi-stakeholder collaborative management that offers different solutions for any supply chain.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi, traceability, connected, platform, supply, chain, supply chain";
                $title="Peterson Technologies - Connected, a global supply chain traceability service";
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/head.php');
        ?>
	</head>
	<body id="connected-platform" class="case-study-page has-video">
		<?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/header.php');?>
		<main>
			<?php 
                $breadcrumbOne="{{services}}";
                $breadcrumbOneLink="/#services";
                $serviceName="{{ourwork_connected_title}}";
                $heroTitle="{{ourwork_connected_title}}";
                $heroBody="{{connected_hero_p}}";
                $mainTitle="{{connected_first_title}}";
                $pOne="{{connected_first_p}}";
                $img="../img/connected_img.jpg";
                $imgAlt="Connected Platform Image";
                $imgSection="../img/connected_section_img.jpg";
                $imgSectionAlt="Connected Platform";
                $pTwo='<div id="accordion" class="bottom-lg">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     {{the_problem}}
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <ul class="home-text top-sm">
    <li>{{connected_problem_li_1}}</li>
    <li>{{connected_problem_li_2}}</li>
    <li>{{connected_problem_li_3}}</li>
    <li>{{connected_problem_li_4}}</li>
    <li>{{connected_problem_li_5}}</li>
    <li>{{connected_problem_li_6}}</li>
    <li>{{connected_problem_li_7}}</li>
    <li>{{connected_problem_li_8}}</li>


</ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      {{the_solution}}
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">{{connected_solution_p}}</p>
                    <ul class="home-text top-sm">
    <li>{{connected_solution_li_1}}</li>
    <li>{{connected_solution_li_2}}</li>
    <li>{{connected_solution_li_3}}</li>
    <li>{{connected_solution_li_4}}</li>
    <li>{{connected_solution_li_5}}</li>
    <li>{{connected_solution_li_6}}</li>
    <li>{{connected_solution_li_7}}</li>
    <li>{{connected_solution_li_8}}</li>
    <li>{{connected_solution_li_9}}</li>
    <li>{{connected_solution_li_10}}</li>



</ul>
                    </div>
                  </div>
                </div>
                
              
        
              </div>';
              $extra='<img src="../img/connected_section_img.jpg" alt="Connected Platform" class="services-main-section-img bottom-xxl">';
              $video='https://www.youtube.com/embed/OJm1tzOOljY';
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/hero-services-section.php');
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/services-main-section.php');
        ?>
        <?php
               $mainTitle="{{connected_features}}";
               $pOne='<div id="accordionTwo">
               <div class="card">
                 <div class="card-header" id="headingFive">
                   <h5 class="mb-0">
                     <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    {{transaction_certificate_service}}
                     </button>
                   </h5>
                 </div>
             
                 <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionTwo">
                   <div class="card-body">
                     <p class="top-sm bottom-md home-text">                    {{transaction_certificate_service_desc}}
 
                     </p> 
                   </div>
                 </div>
               </div>
               <div class="card">
                 <div class="card-header" id="headingSix">
                   <h5 class="mb-0">
                     <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                     {{certified_traceability_service}}
                     </button>
                   </h5>
                 </div>
                 <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionTwo">
                   <div class="card-body">
                   <p class="top-sm home-text">{{certified_traceability_service_desc1}}
                   </p>
                   <p class="home-text">{{certified_traceability_service_desc2}}
                    </p>
                    <p class="home-text">{{certified_traceability_service_desc3}}
                    </p>
                    <p class="home-text">{{certified_traceability_service_desc4}}
                    </p>
                    <p class="home-text">{{certified_traceability_service_desc5}}
                    </p>
                    <p class="home-text bottom-md">{{certified_traceability_service_desc6}}
                    </p>
                   </div>
                 </div>
               </div>
               <div class="card">
                 <div class="card-header" id="headingSeven">
                   <h5 class="mb-0">
                     <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                     {{supplier_engagement_service}}
                     </button>
                   </h5>
                 </div>
                 <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionTwo">
                   <div class="card-body">
                   <p class="top-sm bottom-md home-text">{{supplier_engagement_service_desc1}}</p>
                   </div>
                 </div>
               </div>
               <div class="card">
                 <div class="card-header" id="headingEight">
                   <h5 class="mb-0">
                     <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                     {{supplier_analysis}}
                     </button>
                   </h5>
                 </div>
                 <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionTwo">
                   <div class="card-body">
                   <p class="top-sm bottom-md home-text">
                   {{supplier_analysis_desc1}}
                   </p>
                   </div>
                 </div>
               </div>

               <div class="card">
                 <div class="card-header" id="headingNine">
                   <h5 class="mb-0">
                     <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                     {{erp_plm_order_service}}
                     </button>
                   </h5>
                 </div>
                 <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionTwo">
                   <div class="card-body">
                   <p class="top-sm bottom-md home-text">
                   {{erp_plm_order_service_desc1}}
                   </p>
                   </div>
                 </div>
               </div>


               <div class="card">
                 <div class="card-header" id="headingTen">
                   <h5 class="mb-0">
                     <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                     Customizability and integration services
                     </button>
                   </h5>
                 </div>
                 <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionTwo">
                   <div class="card-body">
                   <p class="top-sm bottom-md home-text">
                   CONNECTED offers a wide range of integration services, allowing you to easily connect your existing systems and data to our platform.
                   </p>
                   <p class="home-text">
                      In adition, our platform is highly customizable to meet the unique needs of each client. Our team can work with you to tailor the system to your exact requirements.
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

