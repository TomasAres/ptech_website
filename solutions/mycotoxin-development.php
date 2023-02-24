<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
                $description="Peterson Technologies, we detect, optimize, and enhance innovative ideas and solutions, transforming them into services.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi, mycotoxins, crops, risk, analysis, mycotoxins analysis";
                $title="Peterson Technologies - Mycotoxins risk analysis";
                include 'components/head.php';
        ?>
	</head>
	<body id="mycotoxin-development" class="case-study-page">
			<?php include 'components/header.php' ;?>
		<main>
			<?php 
                $breadcrumbOne="{{case_studies}}";
                $breadcrumbOneLink="/#our-work";
                $serviceName="{{ourwork_mycotoxins_title}}";
                $heroTitle="{{ourwork_mycotoxins_title}}";
                $heroBody="{{mycotoxins_hero_p}}";
                $mainTitle="{{mycotoxins_first_title}}";
                $pOne="{{mycotoxins_first_p}}";
                $pTwo=' <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <img src="img/icons/problem_icon.svg" alt="Problem icon" class="service-logo" height="24" />{{the_problem}}
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <p class="top-sm bottom-md home-text">{{mycotoxins_problem_p}}</p> 
                      <img src="img/mycotoxins_problem.jpeg" alt="Mycotoxin ruined crop" class="img-case-study bottom-md">
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <img src="img/icons/solution_icon.svg" alt="Solution icon" class="service-logo" height="28" />{{the_solution}}
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">{{mycotoxins_solution_p}}</p>
                    <img src="img/mycotoxins_solution.jpeg" alt="Mycotoxin software" class="img-case-study bottom-md">

                    </div>
                  </div>
                </div>


                <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                  
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     <img src="img/icons/results_icon.svg" alt="Result icon" class="service-logo" height="27" />{{results}}
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                  <p class="top-sm bottom-md home-text">{{mycotoxins_results_p}}</p>
                <ul class="home-text">
<li>{{mycotoxins_result_li_1}}</li>
<li>{{mycotoxins_result_li_2}}</li>
<li>{{mycotoxins_result_li_3}}</li>
<li>{{mycotoxins_result_li_4}}</li>
<li>{{mycotoxins_result_li_5}}</li>
</ul>
<p class="top-sm bottom-md home-text">{{mycotoxins_solution_p_2}}</p>

                  </div>
                </div>
              </div>

              
        
              </div>';
                $extra='';
                $titleOne='{{client}}';
                $contentOne='{{mars}}';
                $titleTwo='{{service}}';
                $contentTwo='{{geoservices}}';
                $titleThree='{{industry}}';
                $contentThree='{{alimentary}}';
                $titleFour='{{year}}';
                $contentFour='{{2022}}';
                include 'components/hero-services-section.php';
                include 'components/numbers-section.php';
                include 'components/services-main-section.php';
                include 'components/ourwork-section.php';
        ?>
		</main>
		<footer>
			<?php include 'components/footer.php';?>
		</footer>
	</body>
</html>

