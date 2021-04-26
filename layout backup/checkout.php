
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Payment History</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/bill.css" rel="stylesheet">
   
      
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="../residentdashboard.php">EasySociety</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
      <ul class="nav navbar-nav ml-auto" >
          <li class="nav-item ">
              <a href="#">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#logoutModal">Logout</button>
                </a>
            </li>
     </ul>
    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../residentdashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view_announcements.php" >
          <i class="fas fa-pen-fancy"></i>
            <span>View Notice Board</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewduebills.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>View Bill</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="visitors-user.php">
           <i class="fas fa-eye"></i>
            <span>View Visitors</span></a>
        </li>
      </ul>

      <div id="content-wrapper">


       
<?php
$flat = $_SESSION['flataddress'];
$contact = $_SESSION['contact'];
require('../dbconnection/db.php');
$con = dbconnect(); 
$sql = "SELECT * from duebills where FlatAddress='$flat'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
	$month_year = $row["MonthandYear"];
    $flatowner = $row["FlatOwner"];
	$total = $row["Total"];
	$_SESSION['amount'] = $total;
	$_SESSION['flatowner'] = $flatowner;
?>

         <!-- DataTables Example -->
		 
         <div class="card mb-3" style = "width:90%;margin-left:5%;">
            <div class="card-header" style="text-align:center;font-size:20px;font-weight:bold;padding:10px 15px">
              <i class="fas fa-table"></i>
              DETAILED CHECKOUT REPORT : <?php echo $month_year  ?> 
            </div> 
            <div class="card-body" style="">
                <h6 style = "text-align:center">
                </h6>

              <div id="content" class="table-responsive" style="width:80%;margin-left:10%;">
                <table class="table table-dark table-bordered" width="60%;" cellspacing="0">
                  <tr><td>Month and Year</td><td><?php echo "$month_year" ?></td></tr>
                  <tr><td>Flat Address</td><td><?php echo "$flat" ?></td></tr>
                  <tr><td>Flat Owner</td><td><?php echo "$flatowner" ?></td></tr>
				  <tr><td>Flat Owner</td><td><?php echo "$contact" ?></td></tr>
                  <tr><td><strong>Total Payment(including dues)</strong></td><td><strong><?php echo "$total" ?></strong></td></tr>
   
                </table>
              </div>
              <a href = "payscript.php" style="text-align:center;  -ms-transform: translate(-50%, -50%);margin-left:40%;transform: translate(-50%, -50%);">
              <button type="button" class="btn btn-primary">PAY WITH RAZORPAY</button>
              </a>
            </div>
            
          </div>

        </div>

        <?php
         }
         else
         echo "Hello";
         ?>
        <!-- /.container-fluid -->    

    <!-- Sticky Footer -->
    <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © EasySociety</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

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
            <a class="btn btn-primary" href="../logoutcontrol.php">Logout</a>
          </div>
        </div>
      </div>
    </div>


    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script> 
    <script src = "script.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.1.1/jspdf.umd.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
