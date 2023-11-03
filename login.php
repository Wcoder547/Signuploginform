<?php
$succ=0;
$fail=0;
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        $sql="SELECT * FROM `data` WHERE username='$username' and password='$password'";
        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                // echo "Login successfully";
                $succ=1;
                $_SESSION['username']=$username;
                header("location:welcome.php");
            }
            else{
                // echo "Invalid credientals";
                $fail=1;
            }
        } 
    }
}






?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="index.js"></script>

    <title>Login</title>
  </head>
  <body>
   
<?php
if($succ){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successfully </strong> Login
    <button id="okbt" type="button" class="btn btn-success"  >close</button>
  </div>';
}
if($fail){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Invalid</strong> Username Or password.
    <button id="okbt" type="button " class=" btn btn-danger " >close</button>
    
  </div>';
}
?>
   
  </body>
</html>