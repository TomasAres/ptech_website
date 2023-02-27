<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
                $description="Discover a more efficient data-based decision-making solution that reduces costs and work times and presents results like you have never seen before. Make decisions based on reliable data. Build effective management models based on KPI and KSI.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi";
                $title="Peterson Technologies - Data Analytics";
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/head.php');
        ?>
	</head>
	<body id="data-analytics" class="service-page">
			<?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/header.php');?>
		<main>
			<?php     
                $breadcrumbOne="{{services}}";
                $breadcrumbOneLink="/#services";
                $serviceName="{{data_analytics}}";
                $heroTitle="{{data_analytics_hero_title}}";
                $heroBody="{{data_analytics_hero_p}} ";
                $mainTitle="{{data_analytics_first_title}}";
                $pOne="{{data_analytics_first_p}}";
                $img="../img/da_img.jpg";
                $imgAlt="Data Analytics Image";
                $pTwo='
                <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     {{assessment}}
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <p class="top-sm bottom-md home-text">{{assessment_p}}.</p> 
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      {{proposal}}
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">{{proposal_p}}</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      {{outcome}}
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">{{outcome_p}}</p>
                    </div>
                  </div>
                </div>
              
        
              </div>';
                $extra='<div class="video-wrapper top-lg"><iframe width="100%" height="315" src="https://www.youtube.com/embed/L-08qD-tGNA?controls=0?showinfo=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>';
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/hero-services-section.php');
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/services-main-section.php');
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/ourwork-section.php');
        ?>
		</main>
		<footer>
			<?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/footer.php');?>
		</footer>
	</body>
</html>


