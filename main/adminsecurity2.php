<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LMBS - Admin Security</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
       
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     

      <!-- Nav Item - Charts -->
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


            <!-- Nav Item - Alerts -->
            
            <!-- Nav Item - Messages -->
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle" src="img/logotransparent.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="index.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Login Screen
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Question No.2</h1>
		<p>
    <?php 
          include 'connection.php'; 
          

           If (isset($_POST['submitone'] )){ 
          $answer = mysqli_real_escape_string($db, $_POST['answerone']);
          $findwhere = "SELECT * FROM login WHERE username='admin' LIMIT 1";
          $querryrecord = mysqli_query($db, $findwhere);
          $results = mysqli_fetch_assoc($querryrecord);
           
          If($answer != $results['answer1']){
          $findwhere = "SELECT * FROM login WHERE username='admin' LIMIT 1";
          $querryrecord = mysqli_query($db, $findwhere);
          $results = mysqli_fetch_assoc($querryrecord);
           echo $results['question1'];
    ?>
          <br><center><b>Your answer is incorrect.</b></center>

    <?php
          }else
          {
            header("Location:changepassadmin.php");
          }

           }else{
          $findwhere = "SELECT * FROM login WHERE username='admin' LIMIT 1";
          $querryrecord = mysqli_query($db, $findwhere);
          $results = mysqli_fetch_assoc($querryrecord);
           echo $results['question1'];
           }
    ?>
    </p>
        </div>
        <br>
        <div class="container-fluid" align="center">
          <p>Answer:</p>

				    <Form method="POST" action="adminsecurity2.php">
              <input type="text" name="answerone" size="60%" id="myInput">
              <br><br>
              <button onclick="document.getElementById('myInput').value = ''" class="btn btn-danger btn-circle btn-lg">
                    <i class="fas fa-trash"></i>
                  </button>
              &nbsp
              <button type="submit" name="submitone" class="btn btn-success btn-circle btn-lg">
                    <i class="fas fa-check"></i>
                  </button>
            </Form>
            
       <br><br>
             <a href="forgot-password.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Back</a>
        
          
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Angeles City Science High School - Senior High 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
