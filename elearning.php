<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
                $description="Peterson Technologies, we detect, optimize, and enhance innovative ideas and solutions, transforming them into services.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi";
                $title="Peterson Technologies - E-Learning";
                include 'components/head.php';
        ?>
	</head>
	<body id="elearning" class="service-page">
		<header>
			<?php include 'components/header.php' ;?>
		</header>
		<main>
			<?php 
                $serviceName="E-Learning";
                $heroTitle="We make learning easy and effective";
                $heroBody="Our team will help you select or develop learning materials that turn information into clear, interactive content for students to learn at their own pace. No excuses, no limitations, no matter where you are, just sign into the platform and start learning.";
                $mainTitle="How we do it";
                $pOne="We constantly create courses of diverse topics to get the ball rolling. We want to make this platform our knowledge database and grow even further with everyone's input. We consider that learning is vital to boost our creativity and this is why we keep uploading courses and training materials accessible to everyone. Our goal is to encourage teams to take advantage of this learning opportunity.";
                $pTwo="If you already have courses or new courses ideas, contact our team at elearning.support@controlunion.com so we can start working side by side to have it available online as soon as possible. Let's work together to make our knowledge platform grow!    We apply design thinking and data driven decision processes combined with sprint methodologies to build digital solutions in the pursuit of a more efficient performance that will improve the customer journey.";
                $extra='<div class="video-wrapper top-lg"><iframe width="560" height="315" src="https://www.youtube.com/embed/zKjfpI4LrlQ?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>';
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
