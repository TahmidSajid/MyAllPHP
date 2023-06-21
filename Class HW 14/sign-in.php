<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <title>Neptune - Responsive Admin Dashboard Template</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace.css" rel="stylesheet">
    <link href="assets/css/main.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/neptune.png" />
</head>
<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">
        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="sign-up.html">Sign Up</a></p>
                <?php
                if(isset($_SESSION['account'])){
                ?>
                <div class="alert alert-success" role="alert">
                    <?php
                    echo $_SESSION['account'];
                    ?>
                </div>
                <?php
                }
                ?>
                <form action="sign-in-backend.php" method="post">
                    <div class="auth-credentials m-b-xxl">
                        <label for="signInEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" placeholder="example@neptune.com" name="login_email" value="<?php
                        if(isset($_SESSION['email'])){
                            echo $_SESSION['email'];
                        }
                        ?>">
                        <?php
                        if(isset($_SESSION['email_miss'])){
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <?php
                            echo $_SESSION['email_miss']
                            ?>
                        </div>
                        <?php
                        }
                        ?>
                        <label for="signInPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="login_password">
                        <?php
                        if(isset($_SESSION['give_password'])){
                        ?>
                        <div class="alert alert-warning" role="alert">
                            <?php
                            echo $_SESSION['give_password']
                            ?>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        if(isset($_SESSION['password_miss'])){
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <?php
                            echo $_SESSION['password_miss']
                            ?>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="auth-submit">
                        <button class="btn btn-primary" type="submit">Sign In</button>
                    </div>
                </form>
            <div class="divider"></div>            
        </div>
    </div>
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/js/main.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php
session_unset();
?>