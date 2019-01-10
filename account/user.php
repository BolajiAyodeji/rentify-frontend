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
   <?php include '../includes/nav.php'?>


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
