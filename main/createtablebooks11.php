 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LMBS - Failed to Scan</title>

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
        <div class="container-fluid" align="center">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">
            <?php
      If (isset($_POST['submitall'] )){  
      date_default_timezone_set('Australia/Melbourne');
      $date = date('m/d/Y h:i:s a', time());   
        $lrn=$_POST['lrn'];
        $section=$_POST['section'];
        $names=$_POST['name'];
 
        
        $book1values=$_POST['book1value'];
        $book2values=$_POST['book2value'];
        $book3values=$_POST['book3value'];
        $book4values=$_POST['book4value'];
        $book5values=$_POST['book5value'];
        $book6values=$_POST['book6value'];
        $book7values=$_POST['book7value'];
        $book8values=$_POST['book8value'];
        $book9values=$_POST['book9value'];

        $book1=$_POST['book1'];
        $book2=$_POST['book2'];
        $book3=$_POST['book3'];
        $book4=$_POST['book4'];
        $book5=$_POST['book5'];
        $book6=$_POST['book6'];
        $book7=$_POST['book7'];
        $book8=$_POST['book8'];
        $book9=$_POST['book9'];
                
    

          If ($book1values === $book1){
           If ($book2values === $book2){
             If ($book3values === $book3){
              If ($book4values === $book4){
                If ($book5values === $book5){
                 If ($book6values === $book6){
                  If ($book7values === $book7){
                   If ($book8values === $book8){
                     If ($book9values === $book9){
                 include 'connection.php';
                  $query = "INSERT INTO clearancegrade11 (LRN, name, section, checkornot, datecleared) VALUES ('$lrn.', '$names','$section','check','$date')"; 
                  mysqli_query($db, $query);
                  $db -> close();
                  header("Location:grade11scan.php");
                   
            }
            else{
            echo "Book 9 has failed to scan";
            }
            }
            else{
            echo "Book 8 has failed to scan";
            }
            }
            else{
            echo "Book 7 has failed to scan";
            }
            }
            else{
            echo "Book 6 has failed to scan";
            }
            } 
            else{
            echo "Book 5 has failed to scan";
            }
            }
            else{
            echo "Book 4 has failed to scan";
            }
            }
            else{
            echo "Book 3 has failed to scan";
            }
            
            }
            else{
            echo "Book 2 has failed to scan";
            }          
            }
            else{
            echo "Book 1 has failed to scan";
            }

          }


            ?>



          </h1>
    <img src="img/source.gif" alt="X" height="35%" width="35%"><br>
        </div>
        <br><br><br>
        
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
           <span>Copyright &copy; Angeles City Science Senior High School 2019</span>
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


 

<SCRIPT> setTimeout("self.close()", 3000 )  </SCRIPT>
