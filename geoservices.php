<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
                $description="Peterson Technologies, we detect, optimize, and enhance innovative ideas and solutions, transforming them into services.";
                $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi";
                $title="Peterson Technologies - Geoservices";
                include 'components/head.php';
        ?>
    </head>

    <body id="geoservice" class="service-page">
        <header>
            <?php 
                  include 'components/header.php';
            ?>
        </header>
        <main>

        <?php 
                $serviceName="Geoprocessing";
                $heroTitle="Business applied geographical data";
                $heroBody="Our geoprocessing service offering makes analyzing and managing geographic data easier. Real world applications include crop and stock monitoring, property appraisal, ﬁre detection, mycotoxins detection and more.";
                $mainTitle="Our geoservices";
                $pOne=' <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Geographical databases
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <p class="top-sm bottom-md home-text">Our service allows clients to vectorize analog cartographic documents, develop alternative layers, and spatialize tabular data using geographic databases. Our team has experience working with geographic data, so we can offer you a solution that is tailored to your needs.</p> 
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Monitoring
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">  We provide a comprehensive monitoring service to our clients, assisting them in identifying, understanding, and improving their organizational culture, as well as tracking and optimizing their development cycles and processes. Our monitoring service can help you identify areas for improvement, optimize your operations, and ensure that everything is running smoothly and efficiently by collecting and analyzing data on these various systems and processes. </p>
                    <p class="home-text">Applications:</p>
                    <ul class="home-text">
    <li>Culture identification</li>
    <li>Measurement of planted and harvested areas</li>
    <li>Development cycle monitoring</li>
    <li>Inconsistencies detection</li>
    <li>Assistance in physical inspections</li>
</ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Temporal analysis
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">By analyzing data over time we can detect any change or deviation from established regulations or guidelines.</p>
                    <p class="home-text">Applications:</p>
                    <ul class="home-text">
    <li>Confirmation of legal/environmental precepts</li>
    <li>Identification of occurrences of interest</li>
    <li>Historical data validation</li>
    <li>Deforestation detection</li>

</ul>
                    </div>
                  </div>
                </div>
              
              <div class="card">
                  <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Spatial analysis
                      </button>
                    </h5>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                    <p class="top-sm bottom-md home-text">Spatial analysis is a technique used to analyze data based on its location or geography. It involves looking at data from a spatial perspective and employing tools and techniques to understand patterns, trends, and relationships.    
              </p>
              <p class="home-text">Applications:</p>
              <ul class="home-text">
<li>Logistics analysis for optimal routes</li>
<li>Construction of spatial indexes</li>
<li>Analysis of influece areas or competition</li>
<li>Optimal spatial solution identification</li>

</ul>
                    </div>
                  </div>
                </div>
              </div>';
                $pTwo="";
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
