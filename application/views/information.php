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
        background-image: url('img/bg.jpg');
        font-family: 'Kanit', sans-serif;
    }

    @media screen and (min-width: 992px) and (max-width: 1199px) {
        #t1 {
            font-size: 30px;
        }

        #t2 {
            font-size: 22px;
        }
    }

    @media screen and (min-width: 768px) and (max-width: 991px) {
        #t1 {
            font-size: 25px;
        }

        #t2 {
            font-size: 18px;
        }
    }

    @media screen and (min-width: 578px) and (max-width: 767px) {
        #t1 {
            font-size: 18px;
        }

        #t2 {
            font-size: 11px;
        }
    }

    @media screen and (max-width: 577px) {

        #t1,
        #t2 {
            font-size: 20px;
            margin-top: 10px;
        }
    }
</style>

<body>

    <?php include('component/header.php') ?>
    <?php
    include('php/show_alumni.php');
    // if (isset($_GET['u_id'])) {
    //     $strID = $_GET['u_id'];
    // }
    // $sql = "SELECT * FROM user WHERE '".$_GET['u_id']."'";
    // $stmt = $conn->query($sql);
    $result = $stmt4->fetch(PDO::FETCH_ASSOC);
    // $result3 = $stmt3->fetch(PDO::FETCH_ASSOC);
    ?>

    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb purple lighten-4">
                <li class="breadcrumb-item"><a class="black-text" href="index.php">Home</a><i class="fas fa-angle-right mx-2" aria-hidden="true"></i></li>
                <li class="breadcrumb-item"><a class="black-text" href="alumnilist.php">Alumni</a><i class="fas fa-angle-right mx-2" aria-hidden="true"></i></li>
                <li class="breadcrumb-item active"><?php echo $result['u_fname'] ?></li>
            </ol>
        </nav>
    </div>

    <div class="container mt-2 mb-5">
        <div class="card p-3">
            <div class="card-body">

                <div class="container">
                    <div class="form-group text-center">
                        <img src="upload/<?php echo $result['u_picture'] ?>" width="250" alt="">
                    </div>

                    <h5 class="mb-3"><b>ข้อมูลส่วนตัว</b></h5>
                    <div class="form-group">
                        <label class="col-3">ชื่อ-นามสกุล</label>
                        <?php echo $result['u_tname'] ?> <?php echo $result['u_fname'] ?> <?php echo $result['u_lname'] ?>
                    </div>


                    <div class="form-group">
                        <label class="col-3">คณะ</label>
                        <?php echo $result['u_faculty'] ?>
                    </div>

                    <div class="form-group">
                        <label class="col-3">สาขา</label>
                        <?php echo $result['u_major'] ?>
                    </div>

                    <div class="form-group">
                        <label class="col-3">ปีที่จบ</label>
                        <?php echo $result['u_year'] ?>
                    </div>

                    <div class="form-group">
                        <label class="col-3">อีเมล์</label>
                        <?php echo $result['u_email'] ?>
                    </div>

                    <div class="form-group">
                        <label class="col-3">Facebook</label>
                        <?php echo $result['u_fb'] ?>
                    </div>


                    <hr>

                    <h5 class="mb-3"><b>ข้อมูลที่ทำงาน</b></h5>

                    <div class="form-group">
                        <label class="col-3">สถานะ</label>
                        <?php echo $result['h_type'] ?>
                    </div>

                    <div class="form-group">
                        <label class="col-3">ชื่อบริษัท</label>
                        <?php echo $result['h_workplace'] ?>
                    </div>

                    <div class="form-group">
                        <label class="col-3">ตำแหน่ง</label>
                        <?php echo $result['h_position'] ?>
                    </div>

                </div>

            </div>
        </div>
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