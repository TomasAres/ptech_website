<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
                $description="Peterson Technologies specialists and data scientists employ cutting-edge remote sensing technologies for effective harvest monitoring in Brazil’s committed sugarcane areas.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi, remote, harvest, monitoring, remote harvest monitoring";
                $title="Peterson Technologies - Remote harvest monitoring for financial institution";
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/head.php');
        ?>
	</head>
	<body id="harvest-monitoring" class="case-study-page">
			<?php                 include( $_SERVER['DOCUMENT_ROOT'] .  '/components/header.php');
?>
		<main>
			<?php 
                $breadcrumbOne="{{case_studies}}";
                $breadcrumbOneLink="/#our-work";
                $serviceName="{{ourwork_harvest_title}}";
                $heroTitle="{{ourwork_harvest_title}}";
                $heroBody="{{harvest_hero_p}}";
                $mainTitle="{{harvest_first_title}}";
                $pOne='{{harves_first_p}}';
                $pTwo='{{harvest_second_p}}';
                $extra='<img src="../img/remotemonitoring_1.jpeg" alt="Remote monitoring dashboard" class="img-case-study w-100 top-sm">
                <img src="../img/remotemonitoring_2.jpeg" alt="Remote monitoring dashboard" class="img-case-study w-100 top-md">';
                $titleOne='{{client}}';
                $contentOne='{{nda_financial_institution}}';
                $titleTwo='{{service}}';
                $contentTwo='{{geoservice_remote_monitoring}}';
                $titleThree='{{industry}}';
                $contentThree='{{agricultural}}';
                $titleFour='{{year}}';
                $contentFour='{{2021}}';
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/hero-services-section.php');
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/numbers-section.php');
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/services-main-section.php');
                include( $_SERVER['DOCUMENT_ROOT'] .  '/components/ourwork-section.php');
        ?>
		</main>
		<footer>
			<?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/footer.php');?>
		</footer>
	</body>
</html>

