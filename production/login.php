
<?php 
session_start();

$conn = mysqli_connect('localhost','root','','akash');

if(!empty($_POST["username"])){

  $sql ="SELECT * FROM akashvalue WHERE username='".$_POST["username"]."'";

  $result= mysqli_query($conn,$sql);

  $row = mysqli_fetch_array($result);

  if( is_array($row)){
    echo $_SESSION["username"]=$row["username"];
    exit();

    header("location:../index.php");
  }else{
    header("location:../login.php");
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HTML OT PHP CONVERTED TEMPLATE | </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form action="include/check.php" method="post">
            <h1>Login Form</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" name="username" required="" />
            </div>
            <div>
              <input type="password" name="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <input type="submit" value="SUBMIT">
              <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">New to site?
                <a href="registration.php" class="to_register"> Create Account </a>
              </p>

              <div class="clearfix"></div>
              <br />


            </div>
          </form>
        </section>

      </div>
    </div>
  </div>
</body>
</html>

?>
