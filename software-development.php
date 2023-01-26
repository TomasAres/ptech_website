<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
                $description="We help in the end-to-end custom software development process adjusted exclusively to your business needs, challenges, and objectives. We understand your requirements and turn your ideas into deliverables with maximum business proficiency.";
                $mainTitle="Unique and modern tech services";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi";
                $title="Peterson Technologies - Software Development";
                include 'components/head.php';
        ?>
	</head>
	<body id="software-development" class="service-page">
			<?php include 'components/header.php' ;?>
		<main>
			<?php 
                $breadcrumbOne="Services";
                $breadcrumbOneLink="/#services";
                $serviceName="Software development";
                $heroTitle="Custom software development";
                $heroBody="We help in the end-to-end custom software development process adjusted exclusively to your business needs, challenges, and objectives. We understand your requirements and turn your ideas into deliverables with maximum business proficiency.";
                $mainTitle="Unique and modern tech services";
                $pOne="We offer tech services to address any of your specific business needs. With vast experience, Peterson Technologies offers diverse custom software development services to develop and deliver the right software for your company. Our service includes:";
                $pTwo='
                <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Web development
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <p class="top-sm bottom-md home-text">We provide both back-end and front-end development. Our team builds web applications powered by efficient and mantainable code, with stunning user interfaces.</p> 
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Mobile applications
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">Smartphones, tablets or wearables. Follow your users where they are with carefully crafted mobile apps. </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Cloud development
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">Migrate from legacy systems through cloud transformation by deploying on selected cloud platforms.</p>
                    </div>
                  </div>
                </div>
              
              <div class="card">
                  <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      UX/UI design
                      </button>
                    </h5>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">Great code deserves an equally stunning visual representation. Our Product Design team combines beautiful interfaces with captivating user experience.
              
              </p>
                    </div>
                  </div>
                </div>
              </div>';
                $extra=" ";
                include 'components/hero-services-section.php';
                include 'components/services-main-section.php';
                include 'components/ourwork-section.php';
        ?>
		</main>
		<footer>
			<?php include 'components/footer.php';?>
		</footer>
	</body>
</html>
