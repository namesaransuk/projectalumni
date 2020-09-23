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
</style>

<body>


    <?php $this->load->view('component/header'); ?>

    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="<?php echo base_url(); ?>public/img/b1.jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Light mask</h3>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="<?php echo base_url(); ?>public/img/b2.jpg" alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="<?php echo base_url(); ?>public/img/b3.jpg" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <div class="bg-white">
        <div class="container">
            <div class="text-center p-3">
                <h3>ระบบลงทะเบียนศิษย์เก่ามหาวิทยาลัยราชภัฏนครปฐม</h3>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                NPRU
            </div>
            <div class="card-body">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non nobis id, quam sequi quae laborum omnis iure soluta, possimus quia nihil reprehenderit, hic illum incidunt ea earum quidem quas ipsa!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non nobis id, quam sequi quae laborum omnis iure soluta, possimus quia nihil reprehenderit, hic illum incidunt ea earum quidem quas ipsa!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non nobis id, quam sequi quae laborum omnis iure soluta, possimus quia nihil reprehenderit, hic illum incidunt ea earum quidem quas ipsa!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non nobis id, quam sequi quae laborum omnis iure soluta, possimus quia nihil reprehenderit, hic illum incidunt ea earum quidem quas ipsa!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non nobis id, quam sequi quae laborum omnis iure soluta, possimus quia nihil reprehenderit, hic illum incidunt ea earum quidem quas ipsa!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non nobis id, quam sequi quae laborum omnis iure soluta, possimus quia nihil reprehenderit, hic illum incidunt ea earum quidem quas ipsa!
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