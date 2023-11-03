
<?php
$user=0;
$match=0;
$pass=0;
if($_SERVER['REQUEST_METHOD']=="POST"){
    include 'connect.php'; // Include the database connection file
}

if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);// here md5 is used to convert the password (string )into hash.....
    $cpassword = md5($_POST['cpassword']);

    // Check if the username already exists
    $sql = "SELECT * FROM `data` WHERE username='$username'";
    $result = mysqli_query($con, $sql);

    if($result){
        $num = mysqli_num_rows($result);

        if($num > 0){
            // echo "Username Already Exists. Please choose a different username.";
            $user=1;
        } else {
            if($password === $cpassword){
                // Insert the user's data into the database
                $sql = "INSERT INTO `data` (username, password) VALUES ('$username', '$password')";
                $result = mysqli_query($con, $sql);

                if($result){
                    // echo "Sign up successful";
                    $match=1;
                } else {
                    echo "There is an error in inserting data: " . mysqli_error($con);
                }
            } else {
                // echo "Password does not match.";
                $pass=1;
            }
        }
    } else {
        echo "There is an error in the query: " . mysqli_error($con);
    }
}






?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script  defer src="index.js"></script>
  </head>
  <body>
    <?php

    if($user){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Username</strong> Already Exsists.
  <button id="okbt" type="button " class=" btn btn-danger " >close</button>
  
</div>';

    }
    else{
        if($match){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successfully </strong> Signup
            <button id="okbt" type="button" class="btn btn-success"  >close</button>
          </div>';
        }
    }
    if($pass){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Password</strong> dont match.
        <button  id="okbt" type="button" class="btn btn-danger"> close </button>
      </div>';
    }


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


