<?php
   if(isset($_GET['signout'])){
     unset($_SESSION['userName']);
    unset($_SESSION['level']);
    setcookie('flag_sign_in', 'false'); // huy trang thai auto dang nhap
    header('Location: index.php');

   } 
   
?>

<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin BookShop</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <!-- /.dropdown -->
                <!-- /.dropdown -->
                <?php 
                if(isset($_SESSION['userName'])){
                    echo "Xin chào,<strong> ".$_SESSION['userName']."</strong>";
                }

                ?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
        
                        <li><a href="admin.php?v=caidataikhoan"><i class="fa fa-gear fa-fw"></i> Cài đặt tài khoản</a>
                        </li>
                        <li class="divider"></li>
                        <form action="" method="get">
                        <li><button class="btn btn-link" name="signout"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</button>
                        </li>
                        </form>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
