<?php
include '../Includes/dbcon.php';
include '../Includes/session.php';

$query = "SELECT tblclass.className, tblclassarms.classArmName
    FROM tblclassteacher
    INNER JOIN tblclass ON tblclass.Id = tblclassteacher.classId
    INNER JOIN tblclassarms ON tblclassarms.Id = tblclassteacher.classArmId
    WHERE tblclassteacher.Id = '$_SESSION[userId]'";

$rs = $conn->query($query);
$num = $rs->num_rows;
$rrw = $rs->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/rvlogo.jpg" rel="icon">
    <title>Dashboard</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include "Includes/sidebar.php";?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include "Includes/topbar.php";?>
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <!-- <h1 class="h3 mb-0 text-gray-800">Class Teacher Dashboard (<?php echo $rrw['className'].' - '.$rrw['classArmName'];?>)</h1> -->
                        <h1 class="h3 mb-0 text-gray-800">Class Teacher Dashboard</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>

                    <div class="row mb-3">
                        <?php
                        $query1 = mysqli_query($conn, "SELECT * from tblstudents where classId = '$_SESSION[classId]' and classArmId = '$_SESSION[classArmId]'");
                        $students = mysqli_num_rows($query1);
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-primary text-white h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-5" style="font-size: 25px;">Attendance</div>
                                            <a href="inAttendence.php" class="btn btn-outline-light btn-sm">Manage</a>
                                            <!-- <div class="h5 mb-0 font-weight-bold mt-3"><?php echo $students; ?></div> -->
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        $query1 = mysqli_query($conn, "SELECT * from tblclass");
                        $class = mysqli_num_rows($query1);
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-success text-white h-100">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-5" style="font-size: 25px;">CIE</div>
                                            <a href="#" class="btn btn-outline-light btn-sm">Manage</a>
                                            <!-- <div class="h5 mb-0 font-weight-bold mt-3"><?php echo $class; ?></div> -->
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-chalkboard fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        $query1 = mysqli_query($conn, "SELECT * from tblclassarms");
                        $classArms = mysqli_num_rows($query1);
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-info text-white h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-5" style="font-size: 25px;">EL</div>
                                            <a href="#" class="btn btn-outline-light btn-sm">Manage</a>
                                            <!-- <div class="h5 mb-0 font-weight-bold mt-3"><?php echo $classArms; ?></div> -->
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-code-branch fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        $query1 = mysqli_query($conn, "SELECT * from tblattendance where classId = '$_SESSION[classId]' and classArmId = '$_SESSION[classArmId]'");
                        $totAttendance = mysqli_num_rows($query1);
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card bg-warning text-white h-100">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-5" style="font-size: 25px;">Lab Component</div>
                                            <a href="#" class="btn btn-outline-light btn-sm">Manage</a>
                                            <!-- <div class="h5 mb-0 font-weight-bold mt-3"><?php echo $totAttendance; ?></div> -->
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php include 'includes/footer.php'; ?>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>
