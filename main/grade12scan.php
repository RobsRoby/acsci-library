<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Library - Grade 12 Books Return</title>

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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Library</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="library.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Books Return</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="grade11scan.php">Grade 11</a>
            <a class="collapse-item" href="grade12scan.php">Grade 12</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Books Assign</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="assign11.php">Grade 11</a>
            <a class="collapse-item" href="assign12.php">Grade 12</a>
            <!--
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.php">404 Page</a>
            <a class="collapse-item" href="blank.php">Blank Page</a>
          </div>
            -->
        </div>
      </li>
      <!-- Divider -->
     
      <!-- Nav Item - Tables. -->
      <li class="nav-item">
        <a class="nav-link" href="clearancelibrary.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Clearance List</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                <img class="img-profile rounded-circle" src="img/logotransparent.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
   <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Grade 12 | Return Books</h1>
          </div>

            <div class="row">

            <div class="col-lg-4 mb-">
            <div class="card mb-4 py-3 border-bottom-primary">
                <div class="card-body">
                  View 
                  <form method="post" action="grade12scan.php">
                  <input type="Text" name="lrn" autofocus required>
                  <input type="submit" name="submitlrn" value="Scan">
                  </form> 
                </div>
              </div>
          </div>
          </div>
<?php
  include 'connection.php';


 If (isset($_POST['submitlrn'] )){  
  $_SESSION["datalrn"] = $_POST['lrn'];
  $lrn= $_SESSION["datalrn"];
  $user_check_querylrn = "SELECT * FROM grade12 WHERE LRN=".$lrn." LIMIT 1";
          $resultlrn = mysqli_query($db, $user_check_querylrn);
          $userlrn = mysqli_fetch_assoc($resultlrn);

          If ($lrn === $userlrn['LRN']){
?>
            
          

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">LRN No.<?php echo $userlrn['LRN'];?></h6><BR><h6 class="m-0 font-weight-bold text-primary">SCAN VALUES</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6">



              </div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Book1</th><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Book2</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 62px;">Book3</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 51px;">Book4</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 51px;">Book5</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 51px;">Book6</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 51px;">Book7</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 51px;">Book8</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 51px;">Book9</th></tr>
                  </thead>
                  
                  <tbody>
 
              <?php
              include 'connection.php';   
              $datatable="grade12";

              
                  $sql = "SELECT * FROM ".$datatable." WHERE LRN=".$userlrn['LRN'] ;
                  $search_result = mysqli_query($db, $sql);
              ?>
              <tr role="row" class="even">
              <form action="createtablebooks11.php"  target="_blank"method="post">
                     <style>
  .barbar2 {
    font-family: 'Code 128';
    font-size: 60px;
</style>
 <?php while ($row=mysqli_fetch_assoc($search_result)){ ?>                     
                        <input type="hidden" name="lrn" value="<?php echo $userlrn['LRN']; ?>">
                        <input type="hidden" name="section" value="<?php echo $row['Section']; ?>">
                        <input type="hidden" name="name" value="<?php echo $row['Name']; ?>">
                      <td><input type="hidden" name="book1" value="<?php echo $row['Book1']; ?>"><?php echo $row['Book1']; ?><center><input type="text" class="barbar2" name="book1value"></center></td>
                      <td><input type="hidden" name="book2" value="<?php echo $row['Book2']; ?>"><?php echo $row['Book2']; ?><center><input type="text" class="barbar2" name="book2value"></center></td>
                      <td><input type="hidden" name="book3" value="<?php echo $row['Book3']; ?>"><?php echo $row['Book3']; ?><center><input type="text" class="barbar2" name="book3value"></center></td>
                      <td><input type="hidden" name="book4" value="<?php echo $row['Book4']; ?>"><?php echo $row['Book4']; ?><center><input type="text" class="barbar2" name="book4value"></center></td>
                      <td><input type="hidden" name="book5" value="<?php echo $row['Book5']; ?>"><?php echo $row['Book5']; ?><center><input type="text" class="barbar2" name="book5value"></center></td>
                      <td><input type="hidden" name="book6" value="<?php echo $row['Book6']; ?>"><?php echo $row['Book6']; ?><center><input type="text" class="barbar2" name="book6value"></center></td>
                      <td><input type="hidden" name="book7" value="<?php echo $row['Book7']; ?>"><?php echo $row['Book7']; ?><center><input type="text" class="barbar2" name="book7value"></center></td>
                      <td><input type="hidden" name="book8" value="<?php echo $row['Book8']; ?>"><?php echo $row['Book8']; ?><center><input type="text" class="barbar2" name="book8value"></center></td>
                      <td><input type="hidden" name="book9" value="<?php echo $row['Book9']; ?>"><?php echo $row['Book9']; ?><center><input type="text" class="barbar2" name="book9value"></center></td>                
                    </tr>
<?php } ?> 
                  </tbody>
                </table> 
                
              <br><br>
              <center><input type="submit" name="submitall" value="Scan All"></center>
              <br>
              </form>

             

       
                                    </div></div>

                                </div>
                            </div>
                          </div>
                        </div>

<?php }

else{ echo "<br><br><br><center><h2>LRN is not found by the system..</h2></center>";} 

}?>



        </div>
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="activity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Recent Activity</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        	List
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Back</button>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
