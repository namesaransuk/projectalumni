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

    <div class="container mt-5 mb-5">
        <div class="card p-3">
            <div class="card-body">

                <div class="row">
                    <div class="col-sm-1 my-auto text-center">
                        <img src="img/npru.png" id="t" class="mx-auto" width="75" alt="">
                    </div>
                    <div class="col-sm-11 mt-3 my-auto text-center">
                        <h1 id="t1">สมาคมศิษย์เก่ามหาวิทยาลัยราชภัฏนครปฐม</h1>
                        <h3 id="t2">NAKHON PATHOM RAJABHAT UNIVERSITY ALUMNI ASSOCIATION</h3>
                    </div>
                </div>

                <hr>

                <h3 class="text-center border border-light shadow-sm rounded p-2 mb-3">รายชื่อศิษย์เก่า</h3>

                <?php if (!isset($_SESSION['id'])) { ?>
                    <div class='alert alert-info alert-dismissable pb-0'>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p id="show">กรุณาเข้าสู่ระบบเพื่อดูรายละเอียดเพิ่มเติมของศิษย์เก่า</p>
                    </div>
                <?php } ?>

                <?php
                include('php/show_alumni.php');
                while ($result = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class="row border border-secondary pt-2 mb-2 rounded-pill shadow">
                        <div class="form-group col-sm-3 my-auto text-center">
                            <img src="upload/<?php echo $result['u_picture'] ?>" class="border border-light rounded mb-0" width="150" alt="">
                        </div>

                        <div class="col-sm-6 my-auto">
                            <div class="form-group">
                                <label class="col-3"><b>ชื่อ-นามสกุล</b></label>
                                <?php echo $result['u_tname'] ?> <?php echo $result['u_fname'] ?> <?php echo $result['u_lname'] ?>
                            </div>

                            <div class="form-group">
                                <label class="col-3"><b>ปีที่จบ</b></label>
                                <?php echo $result['u_year'] ?>
                            </div>
                            <div class="form-group">
                                <label class="col-3"><b>อีเมล์</b></label>
                                <?php echo $result['u_email'] ?>
                            </div>
                        </div>

                        <div class="form-group col-sm-2 my-auto text-center">
                            <?php if (isset($_SESSION['id'])) { ?>
                                <a class="btn purple-gradient" role="submit" href="information.php?id=<?php echo @$result['id'] ?>">ดูรายละเอียด</a>
                            <?php } else { ?>
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="กรุณาเข้าสู่ระบบเพื่อดูรายละเอียดเพิ่มเติม">
                                    <button class="btn purple-gradient" style="pointer-events: none;" type="button" disabled>ดูรายละเอียด</button>
                                </span>
                            <?php } ?>
                        </div>

                    </div>
                <?php } ?>
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

    <script>
        // Tooltips Initialization
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>