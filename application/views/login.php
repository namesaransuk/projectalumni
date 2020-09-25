<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>

    <link rel="shortcut icon" type="image/x-icon" href="img/title-npru.png" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:300i&display=swap">

    <link rel="stylesheet" href="style.css">
</head>

<style>
    body {
        background-image: url('<?php echo base_url() ?>public/img/bg.jpg');
        font-family: 'Kanit', sans-serif;
    }

    #title {
        -webkit-text-stroke: 1px black;
    }

    #form {
        -webkit-backdrop-filter: blur(5px);
        backdrop-filter: blur(5px);
        background-color: rgba(255, 255, 255, 0.4);
    }

    @media screen and (min-width: 992px) and (max-width: 1199px) {
        #title {
            font-size: 40px;
        }
    }

    @media screen and (min-width: 768px) and (max-width: 991px) {
        #title {
            font-size: 35px;
        }
    }

    @media screen and (min-width: 578px) and (max-width: 767px) {
        #title {
            font-size: 30px;
        }
    }

    @media screen and (max-width: 577px) {

        #title {
            font-size: 25px;
        }
    }
</style>

<body>


    <?php include('component/header.php') ?>

    <div class="container">

        <!-- Default form login -->
        <form class="text-center mx-auto border border-light p-5 mt-5 mb-5 col-sm-6" id="form" method="POST" action="../Loginalumni/sendlogin">
        
        
        <h1 class="display-3 white-text" id="title">Log in</h1>
        
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success"><?php echo $_SESSION['seccess'] ?></div>
        <?php 
        } 
        ?>
        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
            <!-- Email -->
            <input type="email" id="defaultLoginFormEmail" name="u_email" id="u_email" class="form-control mb-4" placeholder="E-mail">

            <!-- Password -->
            <input type="password" id="defaultLoginFormPassword" name="u_pass" id="u_pass" class="form-control mb-4" placeholder="Password">

            <div class="d-flex justify-content-around">
                <div>
                    <!-- Remember me -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                        <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                    </div>
                </div>
                <div>
                    <!-- Forgot password -->
                    <a href="">Forgot password?</a>
                </div>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" name="but" type="submit">Sign in</button>

            <!-- Register -->
            <p>Not a member?
                <a href="">Register</a>
            </p>

        </form>
        <!-- Default form login -->
    </div>


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.13.0/js/mdb.min.js"></script>

</body>

</html>