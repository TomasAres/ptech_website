<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
                $description="E-learning enables students to learn anytime and anywhere through a structured course. It enables the development of perfect learning content through the application of instructional design principles to perfectly analyze the basic requirements of learning as well as learning objectives.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi";
                $title="Peterson Technologies - E-Learning";
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/head.php');
        ?>
	</head>
	<body id="elearning" class="service-page has-video">
			<?php  include( $_SERVER['DOCUMENT_ROOT'] .  '/components/header.php');?>
		<main>
			<?php 
                $breadcrumbOne="{{services}}";
                $breadcrumbOneLink="/#services";
                $serviceName="{{elearning}}";
                $heroTitle="{{elearning_hero_title}}";
                $heroBody="{{elearning_hero_p}}";
                $mainTitle="{{elearning_first_title}}";
                $pOne="{{elearning_first_p}}";
                $img="../img/elearning_img.jpg";
                $imgAlt="Elearning Platform Image";
                $pTwo='
                <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     {{analysis}}
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <p class="top-sm bottom-md home-text">{{analysis_p}}</p> 
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      {{storyboard_design}}
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">{{storyboard_p}}</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      {{look_feel_ui}}
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">{{look_feel_ui_p}}</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    {{delivery-feedback}}
                    </button>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                  <p class="top-sm bottom-md home-text">{{delivery_feedback_p}}
            </p>
                  </div>
                </div>
              </div>
              <div class="card">
              <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  {{platform_upload}}
                  </button>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                <div class="card-body">
                <p class="top-sm bottom-md home-text">{{platform_upload_p}}
          </p>
                </div>
              </div>
            </div>
              
        
              </div>';
                $extra='';
                $video='https://www.youtube.com/embed/zKjfpI4LrlQ';
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/hero-services-section.php');
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/services-main-section.php');
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/ourwork-section.php');                
        ?>
		</main>
		<footer>
			<?php  include( $_SERVER['DOCUMENT_ROOT'] .  '/components/footer.php');?>
		</footer>
	</body>
</html>
