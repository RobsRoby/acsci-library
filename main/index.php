
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LMBS - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
	
	body { 
  background: url(img/frontback.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }
</style>
</head>

<body>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body-->
            <div class="row" >
              <div class="col-lg-6 d-none d-lg-block bg-login-image" ></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <?php
                  	include 'connection.php';
					$user_check_querypassadmin = "SELECT * FROM login WHERE username='admin' LIMIT 1";
					$resultpassadmin = mysqli_query($db, $user_check_querypassadmin);
					$userpassadmin = mysqli_fetch_assoc($resultpassadmin);
					
					$user_check_querypasslibrary = "SELECT * FROM login WHERE username='library' LIMIT 1";
					$resultpasslibrary = mysqli_query($db, $user_check_querypasslibrary);
					$userpasslibrary = mysqli_fetch_assoc($resultpasslibrary);

                  If (isset($_POST['submit'] )){  
					$user = mysqli_real_escape_string($db, $_POST['username']);
					$pass = mysqli_real_escape_string($db, $_POST['password']);

					$adminuser="admin";
					$adminpass=$userpassadmin['password'];

					$libuser="library";
					$userpass=$userpasslibrary['password'];

					If($user != $adminuser OR $libuser){
					?>
					<p align="center">Username is not found</p>
				<?php
					}

					If ($user == $adminuser){
						If ($pass == $adminpass) 
						{		
						header("Location:admin.php");
						}
						If ($pass != $adminpass)
						{
				?>
					<p align="center">Admin Pasword  Doesn't Match.</p>
				<?php	

						}
					}
					
					If ($user == $libuser)
					{
						If ($pass == $userpass){
						header("Location:library.php");
						}
						If ($pass != $userpass){
				?>

						<p align="center">Librarian Pasword  Doesn't Match.</p>
				<?php
						}
					} 	
				}

                ?>
                  
                  <form class="user" action="index.php" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Your Username...." name="username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Login">
                    <hr>
                  </form>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
