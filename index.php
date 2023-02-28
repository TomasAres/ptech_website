<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
                $description="Peterson Technologies, we detect, optimize, and enhance innovative ideas and solutions, transforming them into services.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi";
                $title="Peterson Technologies - Maximize your company's potential";
                include( $_SERVER['DOCUMENT_ROOT'] . '/components/head.php' ); 
        ?>
    </head>
    <body id="home" class="en">
            <?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/header.php'); ?>
        <main>
            <?php 
                  include( $_SERVER['DOCUMENT_ROOT'] .  '/components/hero-section.php');
                  include( $_SERVER['DOCUMENT_ROOT'] .  '/components/numbers-section-home.php');
                  include( $_SERVER['DOCUMENT_ROOT'] .  '/components/aboutus-section.php');
                  include( $_SERVER['DOCUMENT_ROOT'] .  '/components/services-section.php');
                  include( $_SERVER['DOCUMENT_ROOT'] .  '/components/ourwork-section.php');
                  include( $_SERVER['DOCUMENT_ROOT'] .  '/components/clients-section.php');
                  include( $_SERVER['DOCUMENT_ROOT'] .  '/components/loader.php');
            ?>
        </main>
        <footer>
            <?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/footer.php');?>
        </footer>
    </body>
</html> 
