<?php include('subscribe.php') ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>About us</title>
</head>
<body>
    <!-- Navigation Bar Starts Here -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top  py-0 " >
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
           </button>
         
        <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
            <div class="navbar-nav">
                <a href="index.php" class="nav-link ">Home</a>
                <a href="aboutus.php" class="nav-link active ">About Us</a>
                <a href="#" class="nav-link ">Contact Us</a>
                <a href="enroll.php" class="nav-link  ">
                <button type="button" class="pink btn btn-outline-primary">Register Now</button>
                </a>

             </div>
           </div>
       
        </div>
    </nav>
    <!-- Navigation Bar Ends Here -->
    
    <main class=" rounded  py-5 mb-8 bg-light px-5 col-lg-12 shadow">
        <h1>About Us</h1>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
           Sit modi inventore iste rem debitis, illum dicta hic veniam 
           quisquam nostrum! Quisquam quibusdam accusantium commodi quasi
            pariatur nihil? Numquam maxime consequatur, neque est eos tempore, 
            omnis natus accusamus, quas debitis mollitia.
        </p>
        

    </main>
    <!-- Our Program section starts here -->
    <div class="container py-5 px-5">
        <div class="row">
            <div class="col-lg-6">
                <h1>Our Program</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat at doloribus 
                   minima repudiandae assumenda laborum beatae quis libero culpa aliquid!</p>
                   
            </div>
            <div class="col-lg-6">
            <img src="/bootstrap-gridlayout/images/joshua-woroniecki-lzh3hPtJz9c-unsplash.jpg" alt="">
            
            </div>
            
        </div>
    </div>
    <!-- Our Program section Ends here -->

    <!-- Cards Start Here -->
    <div class="container px-5 col-lg-12">
        <h1>The Programs</h1>

    </div>
    <!-- Card 1 Strats Here -->
   
      <div class="container py-5">
          <div class="row">
              <div class="col-lg-4 ">
                <div class="card shadow" style="width: 18rem;">
                      <div class="card-body">
                      <h5 class="card-title">Skill Discovery</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur 
                          adipisicing elit. Cumque, magnam.</p>
                      <a href="#" class="btn btn-primary">Veiw Details</a>
                    </div>
                  </div>
                  <!-- Card 1 Ends Here-->
                  

            
             <!-- Card 1 Starts Here-->
              </div>
              <div class="col-lg-4">
                <div class="card shadow" style="width: 18rem;">
                      <div class="card-body">
                      <h5 class="card-title">Upskilling Program</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur 
                          adipisicing elit. Cumque, magnam.</p>
                      <a href="#" class="btn btn-primary">Veiw Details</a>
                    </div>
                  </div>
                  
                 <!-- Card 1 Ends Here-->
            
                   <!-- Card 1 Starts Here-->
              </div>
              <div class="col-lg-4 ">
                <div class="card shadow" style="width: 18rem;">
                      <div class="card-body">
                      <h5 class="card-title">Path Finding Program</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur 
                          adipisicing elit. Cumque, magnam.</p>
                      <a href="#" class="btn btn-primary">Veiw Details</a>
                    </div>
                  </div>
                  

            

              </div>
          </div>
      </div>
    
    
      <!-- Card 3 Ends Here -->

      <div class="container">
      <form action="aboutus.php" method="POST">
      <?php 
                    if($response)
                    {
                        include('response.php');
                    }
                
                ?>

        <div class="row g-3 px-5 py-5 mb-3 align-items-center">
            
            <div class="col-lg-12">
            <span id="emailHelpInline" class="form-text">
               
              <h4 > Subscribe to get information,latest news about Zalego Academy.</h4>
              </span>
            </div>
            <div class="col-lg-6 ">
              <input type="email" name ="email" id="inputemail" class="form-control" placeholder="Your email address" >
            </div>
            <div class="col-lg-6">
            <button class="btn btn-primary" name="submitButton" type="submit" >Subscribe</button>
            </div>
              
            
          </div>
          </form>
      </div>
     

      <hr>

     


      


   


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
 
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>   
</body>
</html>