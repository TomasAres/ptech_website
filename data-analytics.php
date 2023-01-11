<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
                $description="Peterson Technologies, we detect, optimize, and enhance innovative ideas and solutions, transforming them into services.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi";
                $title="Peterson Technologies - Data Analytics";
                include 'components/head.php';
        ?>
	</head>
	<body id="data-analytics" class="service-page">
		<header>
			<?php include 'components/header.php' ;?>
		</header>
		<main>
			<?php 
                $serviceName="Data analytics";
                $heroTitle="Clear decisions with data analytics";
                $heroBody="Discover a more efficient data-based decision-making solution that reduces costs and work times and presents results like you have never seen before. Make decisions based on reliable data. Build effective management models based on KPI and KSI. ";
                $mainTitle="We are data driven";
                $pOne="In this technological world, data is constantly being analyzed. However, the misuse of data due to an incorrect analysis can lead to more than just a headache. Our data analysis service was created for our clients to discover a more efficient data-based decision-making solution that reduces costs and work times and provides information that creates new opportunities to help their businesses grow. We add value to the analysis of your data in 3 steps:";
                $pTwo='
                <ul class="data-list">
                    <li><span>Assessment:</span> We review your business needs by verifying and consolidating data from different sources.</li>
                    <li><span>Proposal:</span> We propose tailor-made solutions to meet your needs.</li>
                    <li><span>Outcome:</span> We set up automated repositories, model and cross data to deliver reports that
                    will generate added value for your business.</li>
                </ul>';
                $extra='<div class="video-wrapper top-lg"><iframe width="560" height="315" src="https://www.youtube.com/embed/L-08qD-tGNA?controls=0?showinfo=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>';
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


