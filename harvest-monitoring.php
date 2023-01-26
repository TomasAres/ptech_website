<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
                $description="Peterson Technologies specialists and data scientists employ cutting-edge remote sensing technologies for effective harvest monitoring in Brazil’s committed sugarcane areas.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi, remote, harvest, monitoring, remote harvest monitoring";
                $title="Peterson Technologies - Remote harvest monitoring for financial institution";
                include 'components/head.php';
        ?>
	</head>
	<body id="harvest-monitoring" class="case-study-page">
			<?php include 'components/header.php' ;?>
		<main>
			<?php 
                $breadcrumbOne="Case studies";
                $breadcrumbOneLink="/#our-work";
                $serviceName="Remote harvest monitoring for financial institution";
                $heroTitle="Remote harvest monitoring for financial institution";
                $heroBody="Peterson Technologies specialists and data scientists employ cutting-edge remote sensing technologies for effective harvest monitoring in Brazil’s committed sugarcane areas.";
                $mainTitle="Remote harvest monitoring";
                $pOne="A New York based financial institution which aims to transform the global food and agribusiness supply chain contacted us to aid them by remotely monitoring their sugarcane plantations harvest.";
                $pTwo='We successfully assisted them utilizing our remote sensing tools and provided them dashboards with detailed information regarding their production.';
                $extra='<img src="img/remotemonitoring_1.jpeg" alt="Remote monitoring dashboard" class="img-case-study w-100 top-sm">
                <img src="img/remotemonitoring_2.jpeg" alt="Remote monitoring dashboard" class="img-case-study w-100 top-md">';
                $titleOne='Client';
                $contentOne='NDA - Financial institution';
                $titleTwo='Service';
                $contentTwo='Geoservices - Remote monitoring';
                $titleThree='Industry';
                $contentThree='Agricultural';
                $titleFour='Year';
                $contentFour='2021';
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

