<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
                $description="Peterson Technologies, we detect, optimize, and enhance innovative ideas and solutions, transforming them into services.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi";
                $title="Peterson Technologies - Maximize your company's potential";
                include 'components/head.php';
        ?>
    </head>
    <body id="home" class="en">
            <?php include 'components/header.php'; ?>
        <main>
            <?php 
                  include 'components/hero-section.php';
                  include 'components/numbers-section-home.php';
                  include 'components/aboutus-section.php';
                  include 'components/services-section.php';
                  include 'components/ourwork-section.php';
                  include 'components/clients-section.php';
            ?>
        </main>
        <footer>
            <?php include 'components/footer.php';?>
        </footer>
    </body>
</html> 
