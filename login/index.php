<?php

require_once "../connection.php";


if (!empty($_POST)) {
    $email = $_POST['email'];
    $password =md5($_POST['password']);
    $sql = "SELECT * FROM users
    WHERE email='$email' AND password='$password'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $totalNum = mysqli_num_rows($res);
        if ($totalNum > 0) {
            echo "Login Success";
            // header("Location:/creationnews/admin");
            // exit();
        } else {
            echo "username & password not match";
        }
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-md-12">
                <h1>Login to Dashboard</h1>
            </div>
            <div class="col-md-12">
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-success">Login</button>
                    </div>
                </form>
                <a href="./register.php">Register</a>

            </div>
        </div>
    </div>
</body>

</html>