
<?php
include 'Includes/dbcon.php';
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
  <link href="img/logo/rvlogo.jpg" rel="icon">
  <title>AMS - Login</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <style>
   body {
      margin: 0;
      padding: 0;
      font-family: 'Helvetica', sans-serif;
      background-color: #f8f9fc;
    }

    .background-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: 1;
    }

    .background-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-size: cover;
      filter: blur(1.5px);
      animation: slideImages 20s linear infinite;
    }

    @keyframes slideImages {
      0% {
        background-image: url('img/SAM_1736.JPG');
      }
      25% {
        background-image: url('img/2023-01-08.jpg');
      }
      50% {
        background-image: url('img/2023-01-17.jpg');
      }
      75% {
        background-image: url('img/IMG-20210406-WA0002.jpg');
      }
      100% {
        background-image: url('img/1550039080phpX9bYQN.jpeg');
      }
    }

    .container-login {
      color:rgb(0, 0,0);
      font-family: 'Times New Roman', Times, serif;
      position: absolute;
      top: 30%;
      left: 30%;
      transform: translate(-50%, -50%);
      width: 700px;
      height: 760px;
      overflow-y: auto;
      background-color: rgba(128, 128, 128, 0.6);
      padding: 0px;
      border: 5px solid rgba(0, 0, 0, 0.9);
      border-radius: 5px;
      /* box-shadow: <?php echo $showAlert ? '0 0 20px rgba(255, 0, 0, 0.5)' : '0 0 20px rgba(0, 255, 0, 0.5)'; ?>; */
      box-shadow: 0 0 20px rgba(0, 255, 0, 0.5);
      z-index: 1;
      margin-top: 200px;
      margin-bottom: 100px;
      overflow-x:hidden;
      animation: fadeIn 1s ease-in-out;
  }

  @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }


.container-login h5 {
  text-align: center;
  margin-bottom: 10px;
  font-size: 1.5em;
}

.container-login img {
  display: block;
  margin: 0 auto 10px;
  max-width: 80px;
  height: auto;
}

.container-login .form-group {
  margin-bottom: 10px;
}

.container-login .form-control {
  border: 1px solid #ccc;
  border-radius: 3px;
  font-size: 14px;
}

.container-login .btn-success {
  background-color: #28a745;
  color: #fff;
  padding: 10px 15px;
  font-size: 16px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.container-login .custom-control-label {
  font-family: Arial, sans-serif;
}

.container-login.invalid-login {
    box-shadow: 0 0 20px rgba(255, 0, 0, 0.5);
  }

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-4o5+rxjntbXywKKN4Hq4xnoG67Zhkcrkwo48IDe17+3y3I9bhJN83fUfpG0iA4Spt5OxvqF5MN2b4qD8gmLCYg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-gradient-login" >

<div class="background-container">
    <div class="background-image" style="background-image: url('img/SAM_1736.JPG');"></div>
    <div class="background-image" style="background-image: url('img/2023-01-08.jpg');"></div>
    <div class="background-image" style="background-image: url('img/2023-01-17.jpg');"></div>
    <div class="background-image" style="background-image: url('img/IMG-20210406-WA0002.jpg');"></div>
    <div class="background-image" style="background-image: url('img/1550039080phpX9bYQN.jpeg');"></div>
  </div>
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                <h5 align="center">ATTENDANCE MANAGEMENT SYSTEM</h5>
                  <div class="text-center">
                    <img src="img/logo/rvlogo.jpg" style="width:200px; height:100px">
                    <h1 class="h4 text-gray-900 mb-4">Login Panel</h1>
                  </div>
                  <form class="user" method="Post" action="">
                  <div class="form-group">
                  <select required name="userType" class="form-control mb-3">
                          <option value="">--Select User Roles--</option>
                          <option value="Administrator">Administrator</option>
                          <option value="ClassTeacher">ClassTeacher</option>
                          <option value="Student">Student</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" required name="username" id="exampleInputEmail" placeholder="Enter Email Address">
                    </div>
                    <div class="form-group">
  <div class="input-group">
    <input type="password" name="password" required class="form-control" id="exampleInputPassword" placeholder="Enter Password">
    <div class="input-group-append">
      <span class="input-group-text" id="togglePassword" onclick="togglePasswordVisibility()">
  <i class="fas fa-eye"></i>
</span>
    </div>
  </div>
</div>
<script>
  function togglePasswordVisibility() {
  const passwordInput = document.getElementById('exampleInputPassword');
  const toggleButton = document.getElementById('togglePassword');

  if (passwordInput && toggleButton) {
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
      passwordInput.type = 'password';
      toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
    }
  }
}
</script>


                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck" >Remember
                          Me</label>
                      </div>
                    </div>
                    <div class="form-group">
                        <input type="submit"  class="btn btn-success btn-block" value="Login" name="login" />
                    </div>


<?php

    $showAlert=false;
  if(isset($_POST['login'])){

    $userType = $_POST['userType'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    if($userType == "Administrator"){

      $query = "SELECT * FROM tbladmin WHERE emailAddress = '$username' AND password = '$password'";
      $rs = $conn->query($query);
      $num = $rs->num_rows;
      $rows = $rs->fetch_assoc();

      if($num > 0){

        $_SESSION['userId'] = $rows['Id'];
        $_SESSION['firstName'] = $rows['firstName'];
        $_SESSION['lastName'] = $rows['lastName'];
        $_SESSION['emailAddress'] = $rows['emailAddress'];

        echo "<script type = \"text/javascript\">
        window.location = (\"Admin/index.php\")
        </script>";
      }
      else {
        $showAlert = true;
    }
    }
    else if($userType == "ClassTeacher"){

      $query = "SELECT * FROM tblclassteacher WHERE emailAddress = '$username' AND password = '$password'";
      $rs = $conn->query($query);
      $num = $rs->num_rows;
      $rows = $rs->fetch_assoc();

      if($num > 0){

        $_SESSION['userId'] = $rows['Id'];
        $_SESSION['firstName'] = $rows['firstName'];
        $_SESSION['lastName'] = $rows['lastName'];
        $_SESSION['emailAddress'] = $rows['emailAddress'];
        $_SESSION['classId'] = $rows['classId'];
        $_SESSION['classArmId'] = $rows['classArmId'];

        echo "<script type = \"text/javascript\">
        window.location = (\"ClassTeacher/index.php\")
        </script>";
      }

      else {
        $showAlert = true;
    }
    }
    else if($userType == "Student"){

      $query = "SELECT * FROM tblclassteacher WHERE emailAddress = '$username' AND password = '$password'";
      $rs = $conn->query($query);
      $num = $rs->num_rows;
      $rows = $rs->fetch_assoc();

      if($num > 0){

        $_SESSION['userId'] = $rows['Id'];
        $_SESSION['firstName'] = $rows['firstName'];
        $_SESSION['lastName'] = $rows['lastName'];
        $_SESSION['emailAddress'] = $rows['emailAddress'];
        $_SESSION['classId'] = $rows['classId'];
        $_SESSION['classArmId'] = $rows['classArmId'];

        echo "<script type = \"text/javascript\">
        window.location = (\"Student/index.php\")
        </script>";
      }

      else {
        $showAlert = true;
    }
    }
    if ($showAlert) {
      echo '<script>
              document.querySelector(".container-login").classList.add("invalid-login");
            </script>';
            
  }
}
?>

<?php
if ($showAlert) {
    echo '<div class="alert alert-danger" role="alert">
        Invalid Username/Password!
        </div>';
}
?>

                    <hr>
                    <a href="index.html" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>


                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>

</html>