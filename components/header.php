   <!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MQ2PW33"
   height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->
<header class="header"> 
   <div class="container">
      <nav class="navbar navbar-expand-lg">
         <a class="navbar-brand" href="../"><img src="../img/ptech_logo.png" alt="Logo Peterson Technologies" class="logo-img"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <img src="/img/icons/menu.svg" alt="Expandable menu" class="navbar-toggler-icon" width="20" height="20">
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <a class="nav-link gray" href="../">{{home}}</a>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle"  href="../about-us" role="button" aria-haspopup="true" aria-expanded="false">{{about}}</a>
                 <div class="dropdown-menu">
                     <a class="dropdown-item" href="../about-us">About us</a>
                     <a class="dropdown-item" href="../about-us#our-team">Our team</a>
                     <a class="dropdown-item" href="#">Partners</a>
                     <a class="dropdown-item" href="#">Vacancies</a>
                  </div>
               
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle"  href="/#services" role="button" aria-haspopup="true" aria-expanded="false">{{services}}</a>
                 <div class="dropdown-menu">
                     <a class="dropdown-item" href="../solutions/data-analytics">{{data_analytics}}</a>
                     <a class="dropdown-item" href="../solutions/geoservices">{{geoservices}}</a>
                     <a class="dropdown-item" href="../solutions/elearning">{{elearning}}</a>
                     <a class="dropdown-item" href="../solutions/connected-platform">{{supplychain_traceability}}</a>
                  </div>
               
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="../#case-studies">{{work}}</a>
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
                  <a class="nav-link button button-nav" href="../contact">{{contact}}</a>
               </li>
               <li class="nav-item d-md-none"> 
                  <a class="nav-link gray" href="../contact">{{contact}}</a>
               </li>
            </ul>
                    
         </div>
      </nav>
   </div>
</header>

<?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/loader.php'); ?>