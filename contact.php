<!DOCTYPE html>
<html lang="en">
   <head>
      <?php 
         $description="Peterson Technologies, we detect, optimize, and enhance innovative ideas and solutions, transforming them into services.";
         $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi";
         $title="Peterson Technologies - Contact";
         include 'components/head.php';
         ?>
   </head>
   <body id="contact">
      <header>
         <?php 
            include 'components/header.php';
            ?>
      </header>
      <main>
         <section class="container-fluid services-main-section" >
            <div class="hero d-flex flex-column justify-content-center ">
            <div class="container">
            <div class="row">
            <div class="col-md-5 top-lg">
            <h3 class="semibold white bottom-lg">Let's connect</h3>

               <form>
                  <div class="form-group">
                     <label for="formGroupExampleInput">Full name</label>
                     <input type="text" class="form-control" id="fullName" placeholder="John Simons">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email address</label>
                     <input type="email" class="form-control" id="emailAdress" aria-describedby="emailHelp" placeholder="name@company.com">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">Phone number</label>
                     <input type="tel" class="form-control" id="phoneNumber" aria-describedby="phoneNumber" placeholder="+49 1241-1231-5122">
                  </div>
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Message</label>
                     <textarea class="form-control" id="formMessage" rows="3"></textarea>
                  </div>
                  <div class="button-wrapper top-md">
                     <button type="submit" class="button form-btn">Submit</button>
                  </div>
               </form>
            </div>
            <div class="col-md-6 offset-1 top-lg" id="offices">
            <h3 class="semibold bottom-lg">Our offices</h3>

            <div class="row">
               <div class="col-md-6 ">
                
                  <div class="card-inner">
                     <h6 class="card-title bold">
                        Germany
                     </h6>
                     <p class="card-body border-bottom-black">
                        De la rue 2312</br>Brandemburg
                     </p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card-inner ">
                     <h6 class="card-title bold">
                        Argentina
                     </h6>
                     <p class="card-body border-bottom-black">
                        De la rue 2312</br>Buenos Aires
                     </p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card-inner">
                     <h6 class="card-title bold">
                        Spain
                     </h6>
                     <p class="card-body border-bottom-black">
                        De la rue 2312</br>Madrid
                     </p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card-inner">
                     <h6 class="card-title bold">
                        Vitnam
                     </h6>
                     <p class="card-body border-bottom-black">
                        De la rue 2312</br>Ho Chi Minh
                     </p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card-inner">
                     <h6 class="card-title bold">
                         Netherlands
                     </h6>
                     <p class="card-body border-bottom-black">
                        De la rue 2312</br>Buenos Aires
                     </p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card-inner">
                     <h6 class="card-title bold">
                        Brazil
                     </h6>
                     <p class="card-body border-bottom-black">
                        De la rue 2312</br>Sao Paulo
                     </p>
                  </div>
               </div>
            </div>
         </section>

         <?php include 'components/clients-section.php';?>

      </main>
      <footer>
         <?php include 'components/footer.php';?>
      </footer>
   </body>
</html>