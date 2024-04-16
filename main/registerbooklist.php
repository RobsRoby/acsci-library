<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Book List</title>

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
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">
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
          <span>Students List</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="addstudentadmin.php">Add Students</a>
            <a class="collapse-item" href="grade11.php">Grade 11</a>
            <a class="collapse-item" href="grade12.php">Grade 12</a>
            <a class="collapse-item" href="re-print.php">Re-print LRN</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Settings</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Utilities:</h6>
            <a class="collapse-item" href="adminblank.php">Account Settings</a>
            <a class="collapse-item" href="backup.php">Backup Database</a>
            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Functions
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Books</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="registerbooklist.php">Registered Books</a>
            <a class="collapse-item" href="register.php">Re-register Books</a>
            <a class="collapse-item" href="re-printbar.php">Re-print Barcodes</a>
              <!--
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.php">404 Page</a>
            <a class="collapse-item" href="blank.php">Blank Page</a>
          </div>
            -->
        </div>
      </li>

      <!-- Nav Item - Tables. -->
      <li class="nav-item">
        <a class="nav-link" href="clearance.php">
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
                <a class="dropdown-item" href="adminblank.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                
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
            <h1 class="h3 mb-0 text-gray-800">Registered Books</h1>
            <form method="post" action="export.php">
    		</form>
           
          </div>
<div class="container-fluid">
        <div class="my-2"></div>
    
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Book List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-4"><div class="dataTables_length" id="dataTable_length"><label>
                
                <form method="POST" action="registerbooklist.php">


                <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                  
                  <?php
                  if(isset($_POST['numberrows']))
                  {
                  $_SESSION["datalength"] = $_POST['dataTable_length'];
                  $results_per_page= $_SESSION["datalength"];
                  } 
                  else{
                  $results_per_page="10";
                  }

                  if($results_per_page == "10")
                  {
                  
                  ?>
                  <option value="10"<?php echo 'selected';?>>10</option>
                  <?php
                  }
                  else{
                  ?>
                  <option value="10">10</option>
                  <?php
                  } 
                  ?>

                    <?php
                  if($results_per_page == "25")
                  {
                  $results_per_page

                  ?>
                  <option value="25"<?php echo 'selected';?>>25</option>
                  <?php
                  }
                  else{
                  ?>
                  <option value="25">25</option>
                  <?php
                  } 
                  ?>
                  
                    <?php
                  if($results_per_page == "50")
                  {
                  $results_per_page

                  ?>
                  <option value="50"<?php echo "selected";?>>50</option>
                  <?php
                  }
                  else{
                  ?>
                  <option value="50">50</option>
                  <?php
                  } 
                  ?>  
                  
                    <?php
                  if($results_per_page == "100")
                  {
                  $results_per_page

                  ?>
                  <option value="100"<?php echo "selected";?>>100</option>
                  <?php
                  }
                  else{
                  ?>
                  <option value="100">100</option>
                  <?php
                  } 
                  ?>

                </select>
                <button type="submit" name="numberrows">Show</button>
                </form>
                <br>
               </label></div></div>
              <div class="col-sm-12 col-md-2">
                <br>
                 
                </div>

               <div class="col-sm-12 col-md-4">

                <div id="dataTable_filter" class="dataTables_filter" >
                  <form action="registerbooklist.php" method="POST" align="center">
                  <label>Search:
                  <input type="search" name="valueToSearch" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                  <input type="submit" name="search" value="Search" placeholder="" aria-controls="dataTable">
                  </label>
                  </form>
                </div>


              </div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;"></th><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">Code</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 62px;">Book</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 62px;">Grade</th></tr>
                  </thead>
                  <tfoot>
                    <tr> </tr>
                  </tfoot>
                  <tbody>
 
 <?php




include 'connection.php';   
$datatable="registeredbooks";

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;


if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $sql = "SELECT * FROM ".$datatable." WHERE CONCAT( `book` , `code` ) LIKE '%".$valueToSearch."%' ORDER BY book ASC LIMIT $start_from, ".$results_per_page;
    $search_result = filterTable($sql);
    
}
 else {
  
$sql = "SELECT * FROM ".$datatable." ORDER BY code ASC LIMIT $start_from, ".$results_per_page;
    $search_result = filterTable($sql);
    
};


function filterTable($sql)
{
    Include 'connection.php'; 
    $filter_Result = mysqli_query($db, $sql);
    return $filter_Result;
};
?>
              <form action="registerbooklist.php" method="POST">
<?php while ($row=mysqli_fetch_assoc($search_result)){ ?>                     
                  <tr role="row" class="even">
                     <td width="1%"><input type="checkbox" name="check_list[]" value="<?php echo $row['id']; ?>"></td>
                      <td class="sorting_1"><?php echo $row['code']; ?></td>
                      <td class="sorting_1"><?php echo $row['book']; ?></td>
                      <td><?php echo $row['grade']; ?></td>
                    </tr>
<?php } ?> 
                  </tbody>
                </table>
                        
              

              <p><?php if (mysqli_num_rows($search_result)==0) { echo "There are no Records Shown."; } else{ ?>
               <script type="text/javascript">
                  
                  function check_all() {
                    var checkboxes = document.getElementsByName('check_list[]');
                    checkboxes = [...checkboxes];
                    for (var i = 0; i < checkboxes.length; i++) {
                      checkboxes[i].checked = true
                    }
                  }

                  function un_check_all() {
                    var checkboxes = document.getElementsByName('check_list[]');
                    checkboxes = [...checkboxes];
                    for (var i = 0; i < checkboxes.length; i++) {
                      checkboxes[i].checked = false;
                    }
                  }
                function ValidateSelection()  
                {  
                    var checkboxes = document.getElementsByName("check_list[]");  
                    var numberOfCheckedItems = 0;  
                    for(var i = 0; i < checkboxes.length; i++)  
                    {  
                        if(checkboxes[i].checked)  
                            numberOfCheckedItems++;  
                    }  
                    if(numberOfCheckedItems > 1)  
                    {  
                        alert("You can only select one");  
                        return false;  
                    }  
                }  
                </script>
                <input type="button" name="Check_All" value="Select All" onClick="check_all()">&nbsp
                <input type="button" id="clearAll" value="Clear All" onClick="un_check_all();">&nbsp
               <input type="submit" name="deleterows" value="Delete" onclick="return confirm('Are you sure you want to delete this record/s?')">
              
               <?php } ?></p>

              <?php
              if(isset($_POST['deleterows'])){
              if(!empty($_POST['check_list'])){
             
              foreach($_POST['check_list'] as $selected){
                $sql="DELETE FROM ".$datatable." WHERE id=".$selected;
                mysqli_query($db, $sql);
                echo "<meta http-equiv='refresh' content='0'>";
              }

              }
              };
             ?>

              <br><br>
              </form>
              </div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite"> <?php
              $sql="SELECT count(id) AS total FROM ".$datatable;
              $result=mysqli_query($db,$sql);
              $values=mysqli_fetch_assoc($result);
              $num_rows=$values['total'];
              echo $num_rows;
              ?>
              entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">

                <ul class="pagination">

                <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="-1" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Pages</a></li>

                <?php 
                if(isset($_POST['search']))
                {
                }else{
                $sql = "SELECT COUNT(id) AS total FROM ".$datatable;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
                $total_pages = ceil($row["total"] / $results_per_page); 
                for ($i=1; $i<=$total_pages; $i++) { 
                ?>
                 <li class="paginate_button page-item active"><a href="registerbooklist.php?page=<?php echo $i; ?>" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $i; ?></a></li>

                <?php
                }
                }

                ?>
                </ul></div></div></div></div>
                            </div>
                          </div>
                        </div>
  <br><br>
  
            
</div>
        <!-- /.container-fluid -->
</div>

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
