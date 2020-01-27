<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <title>ACCKEEP</title>
    <!--=== Bootstrap Css ===-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <!--=== Data Table Plugin Css ===-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!--=== Custom Css ===-->
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <aside class="main_sidebar" id="main_sidebar">
        <div class="logo">
           <a href="index.php"><img src="img/logo.png" alt="" /></a>
            
        </div>
        <ul>
            <li class="<?php if($page == 'index'){echo 'active';}?>">
                <a href="/"><i class="fas fa-home mr-1"></i>হোম</a>
            </li>
            <li class="<?php if($page == 'add_product'){echo 'active';}?>">
                <a href="add_product.php"><span><i class="far fa-edit"></i></span>পণ্য যোগ করুন</a>
            </li>
            <li class="<?php if($page == 'booking'){echo 'active';}?>">
                <a href="booking.php"><i class="fas fa-book mr-1"></i>বুকিং</a>
            </li>
            <li class="<?php if($page == 'collection'){echo 'active';}?>">
                <a href="collection.php"><i class="fas fa-luggage-cart mr-1"></i>সংরক্ষণ</a>
            </li>
            <li class="<?php if($page == 'delivery'){echo 'active';}?>">
               <a href="delivery.php"> <i class="fas fa-truck mr-1"></i>ডেলিভারি</a>
            </li>
            <li class="<?php if($page == 'daily_calc'){echo 'active';}?>">
              <a href="daily_calc.php"> <i class="fas fa-calculator mr-1"></i> দৈনিক হিসাব</a>
            </li>
            <li class="<?php if($page == 'user_list'){echo 'active';}?>">
               <a href="user_list.php"> <i class="fas fa-user-friends mr-1"></i>গ্রাহক লিস্ট </a>
            </li>
            <li class="<?php if($page == 'login'){echo 'active';}?>">
                <a href="login.php"><i class="fas fa-bars mr-1"></i>প্রবেশ করুন </a>
            </li>
        </ul>
        <div class="setting_area">
            <span><i class="fas fa-cog"></i> Logout</span>
        </div>
    </aside>
      <div class="content_wrapper" id="content_wrapper">
      <header class="page_header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-between align-items-center">
                    <div class="page_title">
                        <h3>Page title</h3>
                    </div>
                    
                    <div class="right_icons float-right">
                       <div class="user d-inline mr-5">
                           <span class="mr-1"><i class="fas fa-user"></i></span><span><small>Username</small></span>
                       </div>
<!--                        <span class="log" id="bar"><i class="fas fa-bars"></i></span>-->
                    </div>
                </div>
            </div>
        </div>

    </header>


 