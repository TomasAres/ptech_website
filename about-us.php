<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
                $description="Discover a more efficient data-based decision-making solution that reduces costs and work times and presents results like you have never seen before. Make decisions based on reliable data. Build effective management models based on KPI and KSI.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi";
                $title="Peterson Technologies - About Us";
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/head.php');
        ?>
	</head>
	<body id="aboutus" class="service-page">
			<?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/header.php');?>
		<main>
			<?php     
                $breadcrumbOne="{{home}}";
                $breadcrumbOneLink="../";
                $serviceName="{{about}}";
                $heroTitle="{{about_hero_title}}";
                $heroBody="{{about_hero_p}} ";
                $img="../img/aboutus_img.jpg";
                $imgAlt="About Us Image";
                $mainTitle="Our team";
              
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/hero-services-section.php');
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/numbers-section-home.php');
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/our-team.php');
        ?>
        <section id="operations" class="container-fluid top-xxl bg-white">
         <div class="container">
           <div class="row">
              <div class="col-md-6 align-self-start">
                 <h3 class="semibold">Our operations take place worlwide</h3>
             </div>
             <div class="col-md-12 top-xl">
              <img src="../img/operations_map.png" alt="Operations maps">
             </div>
           </div>
</section>
           

<?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/ourwork-section.php');?>
		</main>
		<footer>
			<?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/footer.php');?>
		</footer>
	</body>
</html>


