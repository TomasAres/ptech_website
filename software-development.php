<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
                $description="Peterson Technologies, we detect, optimize, and enhance innovative ideas and solutions, transforming them into services.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi";
                $title="Peterson Technologies - Software Development";
                include 'components/head.php';
        ?>
	</head>
	<body id="software-development" class="service-page">
		<header>
			<?php include 'components/header.php' ;?>
		</header>
		<main>
			<?php 
                $serviceName="Software development";
                $heroTitle="Custom software development";
                $heroBody="We help in the end-to-end custom software development process adjusted exclusively to your business needs, challenges, and objectives. We understand your requirements and turn your ideas into deliverables with maximum business proficiency.";
                $mainTitle="Unique and modern tech services";
                $pOne="We offer tech services to address any of your specific business needs. With vast experience, Peterson Technologies offers diverse custom software development services to develop and deliver the right software for your company. Our service includes:";
                $pTwo='
                        <ul class="data-list">
                                <li><span>Web development:</span> We provide both back-end and front-end development. Our team builds web applications powered by efficient and mantainable code, with stunning user interfaces.</li>
                                <li><span>Mobile applications:</span> Smartphones, tablets or wearables. Follow your users where they are with carefully crafted mobile apps.
                                </li>
                                <li><span>Cloud development:</span> Migrate from legacy systems through cloud transformation by deploying on selected cloud platforms.</li>
                                <li><span>UX/UI design:</span> Great code deserves an equally stunning visual representation. Our Product Design team combines beautiful interfaces with captivating user experience.</li>
                        </ul>';
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
