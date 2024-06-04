<?php include('config\constants.php'); ?>

<html>

<head>
    <title>Login - product Order System</title>
    <link rel="stylesheet" href="css\authentication.css">
</head>

<body>

    <div class="login-container">

        <div class="login">
            <h1 class="text-center">User Login</h1>
            <br><br>

            <?php
            if (isset($_SESSION['login'])) {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            }

            if (isset($_SESSION['no-login-message'])) {
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
            }
            ?>

            <!-- Login Form Starts Here -->
            <form action="" method="POST" class="text-center">
                <br>
                <input type="text" name="username" placeholder="Enter Username" autocomplete="off"><br><br>
                <input type="password" name="password" placeholder="Enter Password" autocomplete="off"><br><br>
                <input type="submit" name="submit" value="Login" class="btn-primary">
                <a href="user_signup.php">I don't Have An Account</a>
            </form>
            <!-- Login Form Ends Here -->

            <!-- Login Check -->
            <?php
            if (isset($_POST['submit'])) {
                // Process for Login
                // 1. Get the Data from Login form
                $username = $_POST['username'];
                $password = md5($_POST['password']);

                // 2. SQL to check whether the user with username and password exists or not
                $sql = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";

                // 3. Execute the Query
                $res = mysqli_query($conn, $sql);

                // 4. Count rows to check whether the user exists or not
                $count = mysqli_num_rows($res);

                if ($count == 1) {
                    // User Available and Login Success
                    $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
                    $_SESSION['user'] = $username; // To check whether the user is logged in or not and logout will unset it

                    // Redirect to Home Page/Dashboard
                    header('location:' . SITEURL . 'home.php');
                } else {
                    // User not Available and Login Fail
                    $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
                    // Redirect to Home Page/Dashboard
                    header('location:' . SITEURL . 'user_login.php');
                }
            }
            ?>

        </div>

    </div>

</body>

</html>
