<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title> Front Page </title>
      <!--Bootsrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<!--icon-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style>
            *{
                font-family: "Fredoka", sans-serif;
            }

            .h-font{
                font-family: "Roboto Serif", serif;
            }

            
            
        </style>
   </head>

  <body>
       <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
          <div class="container-fluid">
             <a class="navbar-brand me-5 fw-bold fs-3 h-font " href="webpage.php">PhilTravel</a>
              <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                         <a class="nav-link active" aria-current="page" href="#">Home</a>
                     </li>

                      <li class="nav-item">
                          <a class="nav-link" href="#">Destinations</a>
                     </li>

                      <li class="nav-item">
                         <a class="nav-link" href="#">About Us</a>
                      </li>
                  </ul>
        
                  
             </div>
         </div>
     </nav>

     <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
              <form>
                 <div class="modal-header">
                     <h5 class="modal-title d-flex align-items-center">
                     <i class="bi bi-person-fill fs-3 me-2"></i>User Login</h5>
                     <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>

                  <div class="modal-body">
                     <div class="mb-3">
                           <label class="form-label">Email address</label>
                           <input type="email" class="form-control shadow-none">
                     </div>

                     <div class="mb-4">
                           <label class="form-label">Password</label>
                           <input type="password" class="form-control shadow-none">
                     </div>

                     <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none" >Forgot Password?</a>
                     </div>
                   </div>

              </form>
         </div>
     </div>
     </div>
 
     <div class="modal fade" id="visitorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
              <form>
                 <div class="modal-header">
                     <h5 class="modal-title d-flex align-items-center">
                     <i class="bi bi-person-walking"></i>Visitors Name</h5>
                     <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>

                  <div class="modal-body">
                     <div class="mb-3">
                           <label class="form-label">Name</label>
                           <input type="email" class="form-control shadow-none">
                     </div>

                     <div class="mb-4">
                           <label class="form-label">Contact Number</label>
                           <input type="password" class="form-control shadow-none">
                     </div>

                     <div class="d-flex align-items-center justify-content-between mb-2">
                         <button type="submit" class="btn btn-dark shadow-none">SUBMIT</button>
                     </div>
                   </div>

              </form>
         </div>
     </div>
     </div>
   

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </body>
</html>