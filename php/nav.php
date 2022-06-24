<?php

include '../dashboard/connection.php';
$host = '../dashboard/';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EcoEx</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS FILES -->
    <link rel="stylesheet" type="text/css" href="../slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css" />
    <link href="../style/index.css" rel="stylesheet">
    <link href="../style/content.css" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar sticky-top navbar-expand-lg bg-light shadow-sm py-lg-0 py-2">
        <div class="container-fluid justify-content-between my-2 my-lg-0">

            <div class="d-flex align-items-center">
                <button style="margin-right: 10px  ;" class="navbar-toggler" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="align-items-center d-flex navbar-brand p-0" href="index.php"><img class="nav-img" width="114px" src="../images/logo.png" alt=""></a>
            </div>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-lg-1 mx-xl-2 mx-xxl-3">
                        <a class="nav-link " aria-current="page" href="about.php">About us</a>
                    </li>
                    <li class="nav-item mx-lg-1 mx-xl-2 mx-xxl-3" id="product-nav">
                        <a class="nav-link product-nav-a" aria-current="page" href="#">Products</a>
                        <ul class="megamenu-ul shadow" role="menu">
                            <li>
                                <div class="row justify-content-evenly">
                                    <div class="col-menu col-md-4">
                                        <h6 class="title">EPR Services</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="s-1.php">Plastic  </a></li>
                                                <li><a href="s-2.php">E-Waste </a></li>
                                                <li><a href="s-4.php">Batteries</a></li>
                                                <li><a href="s-5.php">Rubber and tyres</a></li>
                                                <a href="services.php" class="btn">More <span><i class="fas fa-chevron-right"></i></span></a>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-4">
                                        <h6 class="title">Waste Commodity</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="s-1.php">Plastic</a></li>
                                                <li><a href="s-6.php">Glass</a></li>
                                                <li><a href="s-4.php">Batteries</a></li>
                                                <li><a href="s-4.php">Rubber and tyres</a></li>
                                                <a href="services.php" class="btn">More <span><i class="fas fa-chevron-right"></i></span></a>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-4">
                                        <h6 class="title">Technology Consulting</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="s-7.php">Recycling Unit</a></li>
                                                <li><a href="s-9.php">Waste 2 in 1 plant</a></li>
                                                <li><a href="s-8.php">Waste to energy plants</a></li>
                                                <li><a href="s-11.php">Furniture unit</a></li>
                                                <a href="services.php" class="btn">More <span><i class="fas fa-chevron-right"></i></span></a>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mx-lg-1 mx-xl-2 mx-xxl-3">
                        <a class="nav-link " aria-current="page" href="membership.php">Membership</a>
                    </li>
                    <li class="nav-item mx-lg-1 mx-xl-2 mx-xxl-3">
                        <a class="nav-link " aria-current="page" href="process.php">Process</a>
                    </li>
                    <li class="nav-item mx-lg-1 mx-xl-2 mx-xxl-3">
                        <a class="nav-link " aria-current="page" href="media.php">Media</a>
                    </li>
                    <li class="nav-item mx-lg-1 mx-xl-2 mx-xxl-3">
                        <a class="nav-link " aria-current="page" href="market_watch.php">Market Watch</a>
                    </li>
                    <li class="nav-item mx-lg-1 mx-xl-2 mx-xxl-3">
                        <a class="nav-link " aria-current="page" href="career.php">Career</a>
                    </li>
                    <li class="nav-item mx-lg-1 mx-xl-2 mx-xxl-3">
                        <a class="nav-link " aria-current="page" href="resources.php">Resources</a>
                    </li>
                </ul>

            </div>
            <form class="">
                <a href="login.php" class="btn btn-sm  fw-bolder px-3 px-sm-4" type="button">Login</a>
                <a href="signup.php" class="bg-success btn  btn-sm d-inline-flex fw-bolder px-3 px-sm-4 text-light" type="button">Signup</a>
            </form>








        </div>
    </nav>
    <!-- NAVBAR -->


    <!-- SIDEBAR -->



    <div class="offcanvas offcanvas-start nav-offcanvas" data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="../images/logo.png" width="141px" alt=""></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="">
                <ul class="offcanvas-ul">
                    <li class=""><a href="index.php"><span><i class="fas fa-home"></i></span> Home</a></li>
                    <li class=""><a href="about.php"><span><i class="fas fa-info-circle"></i></span> About</a></li>
                    <li class=""><a href="#!"><span><i class="fas fa-cubes"></i></span> Products</a></li>
                    <li class=""><a href="membership.php"><span><i class="fas fa-user-check"></i></span> Membership</a></li>
                    <li class=""><a href="process.php"><span><i class="fas fa-chalkboard-teacher"></i></span> Process</a></li>
                    <li class=""><a href="media.php"><span><i class="fas fa-photo-video"></i></span> Media</a></li>
                    <li class=""><a href="market_watch.php"><span><i class="fas fa-chart-line"></i></span> Market Watch</a></li>
                    <li class=""><a href="career.php"><span><i class="fas fa-briefcase"></i></span> Career</a></li>
                    <li class=""><a href="resources.php"><span><i class="fas fa-hands-helping"></i></span> Resources</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- SIDEBAR -->