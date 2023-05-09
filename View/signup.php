<?php 

    require_once '../Controller/DBController.php';
    require_once '../Controller/AuthController.php';
    require_once '../Model/users.php';

    $errMsg = "";

    if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['phonenumber']) && isset($_POST['password']))
    {
        if (!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['phonenumber']) && !empty($_POST['password']))
        {
            $user = new User();
            $user->setUserEmail($_POST['email']);
            $user->setUserName($_POST['username']);
            $user->setUserNumber($_POST['phonenumber']);
            $user->setPassword($_POST['password']);

            $auth = new AuthController();

            if($auth->register($user))
            {
                header("location: index.php");
            }
            else
            {
                $errMsg = $_SESSION["errMsg"];
            }

        }
        else
        {
            $errMsg = "Please fill all the fields";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Vizew</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <?php
    require_once("header.php"); ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="vizew-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <div class="vizew-login-area section-padding-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="login-content">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h4>Sign Up</h4>
                            <div class="line"></div>
                        </div>

                        <?php

                            if ($errMsg != "") {

                            ?>
                            
                                <div clss="alert alert-danger" role="alert"><?php echo $errMsg ?></div>

                            <?php
                            }
                        ?>


                        <form method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name" name="username">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number" name="phonenumber">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>

                            <p >
                                <span>Already have an account?</span>
                                <a href="login.php">
                                    <span style="color:#fff;text-decoration:underline"> Log in</span>
                                </a>
                            </p>
                            
                            <button type="submit" class="btn vizew-btn w-100 mt-30">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Login Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>