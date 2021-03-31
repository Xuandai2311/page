<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.0/css/pro.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/admin.css">
</head>
<body class="fixed-left widescreen">
    <div id="wapper">
        <div class="topbar">
            <div class="topbar-left">
                <a href="index.html" class="logo"><span>Tony<span>Coder</span></span><i
                        class="zmdi zmdi-layers"></i></a>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Page title -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                    </ul>
                    <!-- Right(Notification and Searchbox -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href=""><i class="fal fa-bell"></i></a>
                            <!-- End Notification bar -->
                        </li>
                        <li>
                            <a href="index.php?act=logout"><i class="fal fa-user"></i></a>
                        </li>
                    </ul>
                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!-- User -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="../public/images/1.png" alt="user-img" title="Mat Helme"
                            class="img-circle img-thumbnail img-responsive">
                            
                        <div class="user-status offline"><i class="fad fa-circle"></i></div>
                    </div>
                    <h5><a href="#">
                        <?php
                            echo isset ($_SESSION['account']) ? $_SESSION['name'] : "";
                        ?>
                        </a>
                    </h5>
                    <ul class="list-inline">
                        <li>
                            <a href="#">
                                <i class="fas fa-cog"></i>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?act=logout" class="text-custom">
                                <i class="fal fa-power-off"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End User -->

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="text-muted menu-title">Navigation</li>
                        <li>
                            <a href="index.php" class="waves-effect active"><i class="fal fa-home"></i> <span> Trang Chủ
                                </span> </a>
                        </li>
                        <li class="menu-collapse" id="function">
                            <a href="#function"><i class="fas fa-sliders-h"></i> <span> Chức Năng </span> </a>
                            <div class="item">
                                <a href="index.php?ctrl=product/product">Quản Lý Sản Phẩm</a>
                                <a href="">Quản Lý Tài Khoản</a>
                            </div>
                        </li>
                        <li class="has_sub">
                            <a href="index.php?ctrl=users/Position" class="waves-effect"><i class="fas fa-users"></i><span> Nhân Viên </span> </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>
            </div>
        </div>
        <div id="page-wrapper">
            <div class="container-fluid">
                <?php 
                	if(file_exists($ctrl)) {
                		include $ctrl;
                    }
                ?>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
	$(document).ready(function () {
		setTimeout(function () {
			$('#message').hide(0);
		}, 3000);
	});
</script>
</body>

</html>