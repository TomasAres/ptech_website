<header class="header">
<div id="loading" style="background:red;width:100vw;height:100vh;"></div>
   <div class="container">
      <nav class="navbar navbar-expand-lg">
         <a class="navbar-brand" href="../index.php"><img src="../img/ptech_logo.png" alt="Logo Peterson Technologies" class="logo-img"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <img src="/img/icons/menu.svg" alt="Expandable menu" class="navbar-toggler-icon" width="20" height="20">
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link gray" href="../">{{home}}</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link gray" href="../#about-us">{{about}}</a>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle"  href="/#services" role="button" aria-haspopup="true" aria-expanded="false">{{services}}</a>
                 <div class="dropdown-menu">
                     <a class="dropdown-item" href="../solutions/data-analytics.php">{{data_analytics}}</a>
                     <a class="dropdown-item" href="../solutions/geoservices.php">{{geoservices}}</a>
                     <a class="dropdown-item" href="../solutions/elearning.php">{{elearning}}</a>
                     <a class="dropdown-item" href="../solutions/connected-platform.php">{{supplychain_traceability}}</a>
                  </div>
               
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="../#our-work">{{work}}</a>
               </li>
               <li class="nav-item dropdown" id="languageSelector">
                 <a class="nav-link dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">{{language}}</a>
                 <div class="dropdown-menu">
                     <a class="dropdown-item" id="en">{{lan_english}}</a>
                     <a class="dropdown-item" id="es">{{lan_spanish}}</a>
                     <a class="dropdown-item" id="pt">{{lan_portuguese}}</a>
                  </div>
               
               </li>
               <li class="nav-item">
                  <a class="nav-link icon-link" href="https://www.linkedin.com/company/ptechnologies/" target="_blank"><img src="../img/linkedin.png" alt ="LinkedIn Logo"></a>
               </li>
               <li class="nav-item d-none d-md-block"> 
                  <a class="nav-link button button-nav" href="../contact.php">{{contact}}</a>
               </li>
               <li class="nav-item d-md-none"> 
                  <a class="nav-link gray" href="../contact.php">{{contact}}</a>
               </li>
            </ul>
                     <div class="d-none">           
                    <button id="cookieReset">Show the cookie settings dialog</button>
                    <button id="trackingLog">Log the status to the developer
    console
</button>
</div> 
         </div>
      </nav>
   </div>
</header>
