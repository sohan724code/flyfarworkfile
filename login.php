<?php

include("config.php");
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $mypassword = mysqli_real_escape_string($conn, $_POST['userPassword']);



    $sql = "SELECT id FROM users WHERE email = '$userEmail' and password = '$mypassword'";
    $sql1 = "SELECT id FROM employee WHERE email = '$userEmail' and password = '$mypassword'";

    $result = mysqli_query($conn, $sql);
    $result1 = mysqli_query($conn, $sql1);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    $count1 = mysqli_num_rows($result1);

    if ($count == 1) {
        $_SESSION['login_user'] = $userEmail;
        header("location: index.php");
    } elseif ($count1 == 1) {
        $_SESSION['login_user'] = $userEmail;
        header("location: index.php");
    } else {

        $error = 0;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">

    <!-- fontawsome -->
    <script src="https://kit.fontawesome.com/84e2e81068.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container mt-5" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <div>
                    <img src="images/logo.png" alt="" style="width: 150px;">
                </div>
                <h3 class="mt-3">Create Account</h3>
                <input class="mt-2" type="text" placeholder="Name" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#" method="POST">
                <div>
                    <img src="images/logo.png" alt="" style="width: 150px;">
                </div>
                <h3 class="mt-4 fw-bold">Log in</h3>
                <div>
                    <span>See The Whole World And Get Better Experience</span>
                </div>

                <!-- <span class="fs-6 mt-3 fw-bold">Email</span> -->
                <input class="mt-3 rounded-3" type="email" name="userEmail" placeholder="Enter Your Email" />
                <!-- <span class="fs-6 mt-2 fw-bold d-inline-block text-start">Password</span> -->
                <input class="mt-2 rounded-3" type="password" name="userPassword" placeholder="Enter Your Password" />
                <a href="#">Forgot your password?</a>
                <button>Log In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left ">

                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Log In</button>

                </div>
                <div class="overlay-panel overlay-right">

                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>

                </div>
            </div>
        </div>
    </div>

    <footer>
        <p class="text-secondary mt-5">
            @2022 FlyFar All right reserved
        </p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="js/login.js"></script>
</body>

</html>