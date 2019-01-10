<!doctype html>
<html>

<head>

   <title>User Login - Rentify</title>

   <!--Header-->
   <?php include '../includes/header.php'?>


   <!-- STYLESHEETS-->
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
   <link href="userRegister.css" rel="stylesheet" type="text/css">
   <link href="../css/app.css" rel="stylesheet" type="text/css">


</head>

<body>

   <!--Nav Bar-->
   <nav class="navbar sticky-top centered navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/">
            <img src="img/logo.png" width="70" height="auto" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../rent-product">Rent Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../add-product">Submit Product</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        FAQ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>



   <section>
      <div class="container">
         <div class="row">
            <div class="col-md-5 mx-auto">
               <div id="first">
                  <div class="myform form ">
                     <div class="mb-3">
                        <div class="col-md-12 text-center">
                           <h1>LOGIN</h1>
                           <hr />
                        </div>
                     </div>
                     <form action="" method="POST" name="login">
                        <div class="form-group">
                           <label for="userEmail">Email address</label>
                           <input type="email" name="email" class="form-control" id="loginEmail" placeholder="bolaji@favcode54.org"
                              required>
                        </div>
                        <div class="form-group">
                           <label for="userPassword">Password</label>
                           <input type="password" name="password" id="loginPassword" class="form-control" placeholder="⚫⚫⚫⚫⚫⚫⚫⚫"
                              required>
                        </div>
                        <div class="form-group">
                           <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                        </div>
                        <div class="col-md-12 text-center ">
                           <input type="submit" value="Login" class="btn btn-block mybtn btn-primary"></input>
                        </div>
                        <div class="form-group">
                           <p class="text-center">Don't have account? <a href="#" id="signup">Sign up here</a></p>
                        </div>
                     </form>

                  </div>
               </div>
               <div id="second">
                  <div class="myform form ">
                     <div class="mb-3">
                        <div class="col-md-12 text-center">
                           <h1>SIGN UP</h1>
                           <hr />
                        </div>
                     </div>
                     <form action="#" name="registration">
                        <div class="form-group">
                           <label for="userFName">First Name</label>
                           <input type="text" name="firstname" class="form-control" id="firstName" placeholder="Bolaji"
                              required>
                        </div>
                        <div class="form-group">
                           <label for="userLName">Last Name</label>
                           <input type="text" name="lastname" class="form-control" id="lastName" placeholder="Ayodeji"
                              required>
                        </div>
                        <div class="form-group">
                           <label for="userEmail">Email address</label>
                           <input type="email" name="email" class="form-control" id="signupEmail" placeholder="bolaji@favcode54.org"
                              required>
                        </div>
                        <div class="form-group">
                           <label for="userPassword">Password</label>
                           <input type="password" name="password" id="signupPassword" class="form-control" placeholder="⚫⚫⚫⚫⚫⚫⚫⚫"
                              required>
                        </div>
                        <div class="col-md-12 text-center mb-3">
                           <input type="submit" value="Sign Up" class="btn btn-block mybtn btn-primary"></input>
                        </div>
                        <div class="col-md-12 ">
                           <div class="form-group">
                              <p class="text-center">Already have an account? <a href="#" id="signin">Login here</a></p>
                           </div>
                        </div>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>


   <!-- Footer -->
   <?php include '../includes/footer.php'?>
   <!-- Footer -->

   <!--==================== JavaScript ==============================-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
   <script src="userRegister.js"></script>

</body>

</html>
