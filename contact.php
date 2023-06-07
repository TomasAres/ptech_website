<!DOCTYPE html>
<html lang="en">
   <head>
      <?php 
         $description="Peterson Technologies, we detect, optimize, and enhance innovative ideas and solutions, transforming them into services.";
         $keywords="peterson technologies, control union, it, software development, e-learning, elearning, e learning, app development, custom software, blockchain, geoservices, geomapping, data analytics, powerbi, contact us";
         $title="Peterson Technologies - Contact";
         include( $_SERVER['DOCUMENT_ROOT'] .  '/components/head.php');
         ?>
   </head>
   <body id="contact">
         <?php 
            include( $_SERVER['DOCUMENT_ROOT'] .  '/components/header.php');
            ?>
      <main>
         <section class="container-fluid services-main-section" >
            <div class="hero d-flex flex-column justify-content-center ">
            <div class="container">
            <div class="row">
            <div class="col-md-5">
            <h3 class="semibold white bottom-lg">{{letsconnect}}</h3>

               <form action="send-email.php" method="POST">
                  <div class="form-group">
                     <label for="formGroupExampleInput">{{full_name}}</label>
                     <input type="text" class="form-control" id="fullName" name="fullname" placeholder="{{name_placeholder}}" required>
                  </div>
                  <div class="row">
                  <div class="form-group col-6">
                     <label for="exampleInputEmail1">{{email_adress}}</label>
                     <input type="email" class="form-control" id="emailAdress" name="email" aria-describedby="emailHelp" placeholder="{{email_placeholder}}" required>
                  </div>
                  <div class="form-group col-6">
                     <label for="exampleInputEmail1">{{phone_number}}</label>
                     <input type="tel" class="form-control" id="phoneNumber" name="tel" aria-describedby="phoneNumber" placeholder="{{phone_number_placeholder}}" pattern="^[0-9]+$" required>
                  </div>
                  </div>
                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">{{message}}</label>
                     <textarea class="form-control" id="formMessage" rows="3" name="message" required></textarea>
                  </div>
                  <div class="button-wrapper top-md">
                     <button type="submit" class="button button-form">{{submit_button}}</button>
                  </div>
               </form>
            </div>
            <div class="col-md-6 offset-1 top-lg d-none" id="offices">
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
                        Vietnam
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

         <?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/clients-section.php');?>

      </main>
      <footer>
         <?php include( $_SERVER['DOCUMENT_ROOT'] .  '/components/footer.php');?>
      </footer>
   </body>
</html>