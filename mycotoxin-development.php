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
		<header>
			<?php include 'components/header.php' ;?>
		</header>
		<main>
			<?php 
                $breadcrumbOne="Case studies";
                $breadcrumbOneLink="/#our-work";
                $serviceName="Mycotoxins risk analysis";
                $heroTitle="Mycotoxins risk analysis";
                $heroBody="Peterson Technologies has successfully collaborated to create a solution for mycotoxin development in crops. This was achieved by developing a proprietary algorithm to undertake the analysis and crossing of data.";
                $mainTitle="Prevent the mycotoxin problem";
                $pOne="Mycotoxins are toxic compounds that are naturally produced by certain types of moulds. They are a quality, health and food safety issue for many companies globally as they cause disease and can contaminate foods.";
                $pTwo=' <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <img src="img/icons/problem_icon.svg" alt="Problem icon" class="service-logo" height="24" />Problem
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <p class="top-sm bottom-md home-text">We were originally approached by Mars, the company behind many globally recognizable brands, with the challenge of helping them to anticipate the probability of different types of mycotoxins occurring in different grain supply locations which caused yield losses, reduced crop value, adverse and toxic effects in animals and both acute and chronic health issues in humans.</p> 
                      <img src="img/mycotoxins_problem.jpeg" alt="Mycotoxin ruined crop" class="img-case-study bottom-md">
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <img src="img/icons/solution_icon.svg" alt="Solution icon" class="service-logo" height="28" />Solution
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">We developed a proprietary algorithm to undertake the analysis and crossing of agricultural, climate, and pedology data which was able to accurately predict the probabilty of mycotoxin development in different areas.</p>
                    <img src="img/mycotoxins_solution.jpeg" alt="Mycotoxin software" class="img-case-study bottom-md">

                    </div>
                  </div>
                </div>


                <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                  
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     <img src="img/icons/results_icon.svg" alt="Result icon" class="service-logo" height="27" />Results
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                  <p class="top-sm bottom-md home-text">In less than a year, the project expanded to three more clients - and has successfully delivered 40 reports in five different countries which include:</p>
                <ul class="home-text">
<li>Agricultural estimates of planted area, production and yield</li>
<li>Risk classification: spatial analysis of risk occurrence</li>
<li>Technical notes with individualized bibliographic review</li>
<li>Regional overview with general production information</li>
<li>Final consolidated table with risk per supplier</li>
</ul>
<p class="top-sm bottom-md home-text">The service is applicable to any location in the world and takes only one day.</p>

                  </div>
                </div>
              </div>

              
        
              </div>';
                $extra='';
                $titleOne='Client';
                $contentOne='Mars';
                $titleTwo='Service';
                $contentTwo='Geoservices';
                $titleThree='Industry';
                $contentThree='Alimentary';
                $titleFour='Year';
                $contentFour='2022';
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

