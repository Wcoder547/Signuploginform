<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script defer src="index.js"></script>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 col-xm-12 ">
                <h1 class="text-center">Sign up </h1>
                <form action="signup.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Enter username" autocomplete="off">

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="Password" name="password"
                            placeholder="Enter password" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="cpassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword"
                            placeholder="Confirm Password" autocomplete="off">
                    </div>

                    <button type="submit" class="btn btn-success w-100 my-3" name="signup">signup</button>
                </form>
                
            </div>
            <div class="col-md-6 col-xm-12 my-5">
                <h1 class="text-center">Log in</h1>
                <form action="login.php" method="post" >
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Enter username" autocomplete="off">

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="Password" name="password"
                            placeholder="Enter password" autocomplete="off">
                    </div>
                   

                    <button type="submit" class="btn btn-dark w-100 my-3"name = "login">Log in</button>
                </form>
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>