<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Bill Format</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel = "stylesheet" href = "updatebillstyle.css">      
  </head>

  <body id="page-top">
            <?php
            require "../dbconnection/db.php";
            $conn = dbconnect();
            $sql = "SELECT * FROM bills";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                $row = mysqli_fetch_assoc($result);
                $commoncharges = $row["CommonCharges"];
                $watercharges = $row["WaterCharges"];
                $sinkingfund = $row["SinkingFund"];
                $buildingrepairfund = $row["BuildingRepairFund"];
                $twowheelercharges = $row["twowheelerParkingCharges"];
                $fourwheelercharges = $row["fourwheelerParkingCharges"];
                $insurance = $row["InsurancePremium"];
                $others = $row["Others"];
            }
            ?>

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="admindashboard.php">EasySociety</a>

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
          <a class="nav-link" href="admindashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_members.html" >
          <i class="fas fa-pen-fancy"></i>
            <span>Add Members</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="add_announcements.html" >
          <i class="fas fa-pen-fancy"></i>
            <span>Add Announcement</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="update_bill.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Update Bill Format</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="visitors-admin.php">
           <i class="fas fa-eye"></i>
            <span>View Visitors</span></a>
        </li>
      </ul>
      <div id="content-wrapper">

        <div class="card-header" style="text-align: center;"><i class="fas fa-edit"></i>Update Bill Format</div>

        <div style='border-radius: 5px; background-color: #fff;padding:20px;'>

          <form action="../update_bill_format.php" name ="update_bill_format" method="POST" > 
            <div class = "form-group">
              <label for="commoncharges">Common Charges (per sqft):</label>
                <input type="number" id="fname" name="common" placeholder="Common Charges(per sqft)" step="0.01" class = "input-control" 
                value = "<?php echo $commoncharges; ?>" required>
            </div>

            <div class = "form-group">
              <label for="watercharges">Water Changes:</label>
                <input type="number" id="lname" name="water" placeholder="Water Charges" class = "input-control" 
                step = "0.01" value = "<?php echo $watercharges; ?>" required>
            </div>

            <div class = "form-group">
              <label for="Sinking Fund">Sinking Fund:</label>
                <input type="number" step="0.01" id="lname" name="sink" placeholder="Sinking Fund" class = "input-control"
                 value = "<?php echo $sinkingfund; ?>" required>
            </div>

            <div class = "form-group">
              <label for="Building Repair Fund">Building Repair fund:</label>
                 <input type="number"  step="0.01" id="lname" name="building" placeholder="Building Repair Fund" 
                 class = "input-control" value = "<?php echo $buildingrepairfund; ?>" required>
            </div>

            <div class = "form-group">
              <label for="twowheelercharges">2 wheeler Parking Charges:</label>
              <input type='number' step="0.01"  id="lname" name="twowheeler" placeholder="2 wheeler Parking Charges"
              class = "input-control" value = "<?php echo $twowheelercharges; ?>" required>
            </div>

            <div class = "form-group">
              <label for="fourwheelercharges">4 wheeler Parking Charges:</label>
              <input type='number' step="0.01"  id="lname" name="fourwheeler" placeholder="4 wheeler Parking Charges"
              class = "input-control" value = "<?php echo $fourwheelercharges; ?>" required>
            </div>

            <div class = "form-group">
              <label for="InsurancePremium">Insurance Premium:</label>
                <input type="number" step="0.01" id="lname" name="insurance" placeholder="Insurance Premium"
                class = "input-control" value = "<?php echo $insurance; ?>" required>
            </div>

            <div class = "form-group">
              <label for="Others">Others:</label>
                <input type="number" step="0.01" id="lname" name="others" placeholder="Others"
                class = "input-control" value = "<?php echo $others; ?>" required>
            </div>

            <div class = "form-group">
              <label>&nbsp;</label>
              <input type="submit"  value="Submit" class = "button" name='submit'> 
              <input type = "reset" value = "Clear" class = "button" name = "Reset">
            </div>

          </form>
        </div>
      </div>
    </div>
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
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>
<script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
