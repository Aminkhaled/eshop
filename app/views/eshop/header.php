
<?php

if (isset($_SESSION['url_address']) && $_SESSION != ""){
    $file = $_SESSION['url_address'].".vcf";

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/force-download');
        header("Content-Disposition: attachment; filename=\"" . basename($file) . "\";");
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        ob_clean();
        flush();
        readfile( ROOT . "vcards/" .  + $file); //showing the path to the server where the file is to be download
        exit();
    }
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $data['page_title'] ?> | E-Shopper</title>
    <link href="<?php echo ASSETS ?>eshop/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ASSETS ?>eshop/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo ASSETS ?>eshop/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo ASSETS ?>eshop/css/price-range.css" rel="stylesheet">
    <link href="<?php echo ASSETS ?>eshop/css/animate.css" rel="stylesheet">
    <link href="<?php echo ASSETS ?>eshop/css/main.css" rel="stylesheet">
    <link href="<?php echo ASSETS ?>eshop/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo ASSETS ?>eshop/js/html5shiv.js"></script>
    <script src="<?php echo ASSETS ?>eshop/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo ASSETS ?>eshop/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo ASSETS ?>eshop/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo ASSETS ?>eshop/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo ASSETS ?>eshop/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo ASSETS ?>eshop/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                          <?php if(isset($data['user_data'])){ ?>
                              <li><a href="#"><i class="fa fa-envelope"></i> <?php echo $data['user_data']->email ?></a></li>
                              <li><a href="<?php
                                 $url_vcard = str_replace(' ','-',$data['user_data']->name);
                                  echo ROOT .$url_vcard.".vcf"  ?>"><i class="fa fa-user"></i> <?php echo $data['user_data']->name ?></a></li>

                          <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
<!--                            <li><a href="--><?php //download_vcard(); ?><!--"><i class="fa fa-facebook"></i></a></li>-->
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="<?php echo ASSETS ?>eshop/images/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <?php if(isset($data['user_data'])): ?>
                                <li><a href="lougout"><i class="fa fa-lock"></i> Log out</a></li>

                            <?php else:?>
                            <li><a href="login"><i class="fa fa-lock"></i> Login</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

</header><!--/header-->