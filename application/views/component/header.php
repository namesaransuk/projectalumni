<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark secondary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.php"><img src="../../public/img/npru.png" width="35" alt=""></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <?php if ($_SERVER['SCRIPT_NAME'] == '/projectAlumni/index.php') { ?>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            <?php } ?>

            <?php if ($_SERVER['SCRIPT_NAME'] == '/projectAlumni/alumnilist.php') { ?>
                <li class="nav-item active">
                    <a class="nav-link" href="alumnilist.php">Alumni List</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="alumnilist.php">Alumni List</a>
                </li>
            <?php } ?>
        </ul>
        <!-- Links -->

        <!-- <form class="form-inline">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        </form> -->
        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['id'])) { ?>
                <li class="nav-item dropdown">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ยินดีต้อนรับ คุณ <?php echo $_SESSION['u_fname'] ?>
                        </a>
                        <div class="dropdown-menu dropdown-primary text-center">
                            <a class="dropdown-item" href="profile.php">ข้อมูลส่วนตัว</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="php/l_logout.php">ออกจากระบบ</a>
                        </div>
                    </div>
                </li>
            <?php } else { ?>
                <a role="button" class="btn btn-sm btn-success" href="login.php">เข้าสู่ระบบ</a>
            <?php } ?>
        </ul>


    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->