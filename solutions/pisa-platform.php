<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
                $description="Introducing a web platform where, with just two clicks, users can perform georeferenced data cross-analysis. Detect deforestation, vegetation loss, and more in just 3 clicks.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi, pisa, geoservices, deforestation detection, deforestation, vegetation loss,";
                $title="Peterson Technologies - PISA, Peterson Inmediate Spatial Analysis";
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/head.php');
        ?>
	</head>
	<body id="pams-platform" class="case-study-page">
			<?php                 include( $_SERVER['DOCUMENT_ROOT'] .  '/components/header.php');
?>
		<main>
			<?php 
                $breadcrumbOne="{{case_studies}}";
                $imgSection="../img/platforms/pisa_img.jpeg";
                $imgSectionAlt="PISA Plaform Image";
                $breadcrumbOneLink="/#our-work";
                $serviceName="{{ourwork_pisa_title}}";
                $heroTitle="{{ourwork_pisa_title}}";
                $heroBody="{{pisa_hero_p}}";
                $mainTitle="{{pisa_first_title}}";
                $pOne="{{pisa_first_p}}";
                $pTwo='{{pisa_second_p}}';
                $img="../img/pisa_img.jpeg";
                $imgAlt="PISA Plaform Image";
                $extra='<div id="accordion" class="bottom-xxl">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     {{pisa_layers}}
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <p class="top-sm bottom-sm home-text">{{pisa_layers_description}}</p> 
                      <p class="top-sm bottom-md home-text">{{pisa_layers_description2}}</p> 
                    </div>
                  </div>
                </div>
              
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                     {{pisa_use_cases}}
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      <p class="top-sm bottom-md home-text">{{pisa_usecases_description}}</p> 
                    </div>
                  </div>
                </div>
            
              
        
              </div>';
             
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/hero-services-section.php');
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/services-main-section-img.php');
        ?>
		</main>
		<footer>
			<?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/footer.php');
?>
		</footer>
	</body>
</html>

