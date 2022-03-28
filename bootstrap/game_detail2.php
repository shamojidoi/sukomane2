<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SUKOMANE</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/game_detail.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- <h1>PoseNet Demos</h1>
    <ul>
      <li><a href='camera.html'>Pose Estimation - Camera feed demo</a></li>
      <li><a href='coco.html'>Pose Estimation - Image demo</a></li>
      <li><a href="https://storage.googleapis.com/tfjs-models/demos/posenet/camera.html">demo</a></li>
    </ul> -->

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="color: black;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div class="sidebar-brand-text mx-3">SUKOMANE</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-home"></i>
                    <span>ホーム</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MAIN
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="score_edit.php"  data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <!-- <i class="fas fa-fw fa-cog"></i> -->
                    <i class="far fa-edit"></i>
                    <span>スコア入力</span>
                </a>
                <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Details:</h6>
                        <a class="collapse-item" href="https://storage.googleapis.com/tfjs-models/demos/posenet/camera.html">動作解析</a>
                        <a class="collapse-item" href="404.php">記録</a>
                    </div>
                </div> -->
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities"> -->
                    <!-- <i class="fas fa-fw fa-wrench"></i> -->
                    <!-- <span>3Dモデル</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Details:</h6>
                        <a class="collapse-item" href="../test2.html">3Dモデル変換</a>
                        <a class="collapse-item" href="404.php">記録</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="game.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>過去試合記録</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="players.php">
                    <i class="fas fa-users"></i>
                    <span>選手記録</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="404.php">
                    <i class="far fa-file-alt"></i>
                    <span>レポート作成</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="background-color: #000;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                   <h3>スコマネ高校</h3>
                   <p style="margin-left: 10px;"></p>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                Counter - Alerts -->
                                <!-- <span class="badge badge-danger badge-counter">3+</span>
                            </a> -->
                            <!-- Dropdown - Alerts -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> -->

                        <!-- Nav Item - Messages -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                Counter - Messages -->
                                <!-- <span class="badge badge-danger badge-counter">7</span>
                            </a> -->
                            <!-- Dropdown - Messages -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div> -->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION["u_name"];?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    プロフィール
                                </a>
                                <a class="dropdown-item" href="404.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    設定
                                </a>
                                <a class="dropdown-item" href="404.php">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    目標設定
                                </a>
                                <a class="dropdown-item" href="404.php">
                                    <i class="far fa-question-circle mr-2 text-gray-400"></i>
                                    使い方について
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    ログアウト
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-baseball-ball"></i>　試合記録　投手成績</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="far fa-calendar-alt text-white-50"></i>　試合サマリー</a>
                    </div>

                    <!-- Content Row -->
                    <div class="wrap">

                    <div class="score-board" style="margin: 0;
                                padding: 0;
                                border: 0;
                                font-size: 100%;
                                vertical-align: baseline;width:1000px;
                                align-items: center;
                                text-align:center;
                                margin-Left:10%;">
                        <div class="title-bar no-shadow">
                            <div class="title" style="justify-content: space-between;
                                align-items: center;
                                height: 32px;
                                color: #37474f;
                                padding: 2px 10px;
                                box-sizing: border-box;
                                background: #eceff1;
                                display: flex;
                                align-items: center;">
                        <span class="name" style="font-size: 18px;font-weight: bold;">2022/03/25(金)公式戦@甲子園</span>
                        </div>
                        </div>
                        <div class="score-table" style="width: 100%;font-size: 13px;background-color: #ffffff;">
                            <div class="each-row" style="width: 100%;display: flex;justify-content: space-between; height: 24px;background-color: #546e7a;color: #cfd8dc;">
                                <div class="team-name head" style="height: 24px;background-color: #546e7a;color: #cfd8dc;">
                                </div>
                                <div class="each-inning head score-header" style="width: 25%; margin-Right: 3%;">
                                    <span>team</span>
                                </div>
                                <div class="each-inning head score-header" style="width: 8%;">
                                    <span>1</span>
                                </div>
                                <div class="each-inning head score-header" style="width: 8%;">
                                    <span>2</span>
                                </div>
                                <div class="each-inning head score-header" style="width: 8%;">
                                    <span>3</span>
                                </div>
                                <div class="each-inning head score-header" style="width: 8%;">
                                    <span>4</span>
                                </div>
                                <div class="each-inning head score-header" style="width: 8%;">
                                    <span>5</span>
                                </div>
                                <div class="each-inning head score-header" style="width: 8%;">
                                    <span>6</span>
                                </div>
                                <div class="each-inning head score-header" style="width: 8%;">
                                    <span>7</span>
                                </div>
                                <div class="each-inning head score-header" style="width: 8%;">
                                    <span>8</span>
                                </div>
                                <div class="each-inning head score-header" style="width: 8%;">
                                    <span>9</span>
                                </div>
                                <div class="total head" style="width: 8%;">
                                    <span>計</span>
                                </div>
                                <div class="hit head" style="width: 8%;">
                                    <span>安</span>
                                </div>
                                <div class="lost head" style="width: 8%;">
                                    <span>失</span>
                                </div>
                            </div>
                            <div class="each-row score-row" style="display: flex; font-size: 24px;">
                                <div class="team-name score-row" style="width: 25%; height: 10%; margin-Right: 3%;">
                                    <div class="team" style="color: rgb(13, 71, 161); font-weight: bold; font-size: 24px;">
                                        スコマネ高校
                                    </div>
                                </div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="each-inning score-row" style="width: 8%;">1</div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="each-inning score-row" style="width: 8%;">3</div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="total score-row" style="width: 8%;">4</div>
                                <div class="hit score-row" style="width: 8%;">8</div>
                                <div class="lost score-row" style="width: 8%;">1</div>
                               
                            </div>
                            <div class="each-row score-row" style="display: flex; font-size: 24px;">
                                <div class="team-name score-row" style="width: 25%; height: 10%; margin-Right: 3%;">
                                    <div class="team" style="color: rgb(13, 71, 161); font-weight: bold; font-size: 24px;">
                                        スコマネ西高校
                                    </div>
                                </div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="each-inning score-row" style="width: 8%;">1</div>
                                <div class="each-inning score-row" style="width: 8%;">1</div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="each-inning score-row" style="width: 8%;">0</div>
                                <div class="total score-row" style="width: 8%;">2</div>
                                <div class="hit score-row" style="width: 8%;">10</div>
                                <div class="lost score-row" style="width: 8%;">2</div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="game-report" style="font-size: 100%;vertical-align: baseline;">
                        <div class="title-bar" style="box-sizing: border-box;">
                            <div class="title" style="justify-content: space-between;
                                height: 32px;
                                color: #37474f;
                                padding: 2px 10px;
                                box-sizing: border-box;
                                background: #eceff1;
                                display: flex;
                                align-items: center;">
                            <div class="name" style="font-size: 18px; font-weight: bold;">
                            <a href="game_detail.php">打撃成績</a>　/　投手成績</div>
                            </div>
                        </div>
                        <div class="pitcher-record" style="background-color: #ffffff;margin-bottom: 16px; box-sizing: border-box;">
                            <div class="visitor" style="margin-bottom: 8px;">
                                <div class="record-one-ball-pitcher-record-table" style="background-color: #ffffff;">
                                    <div class="team-name-row" style="border-bottom: 2px solid rgb(25, 118, 210);width: 100%;
                                        height: 40px;
                                        display: flex;
                                        justify-content: flex-start;
                                        align-items: flex-end; ">
                                        <div class="name" style="font-size: 18px;
                                            font-weight: bold;
                                            color: #37474f;
                                            margin-left: 10px;
                                            margin-bottom: 3px;">スコマネ高校</div>
                                    </div>
                                    <div class="table-area" style="display: flex;border-bottom: solid 1px #cfd8dc;">
                                        <div class="fixed-area" style="font-size: 14px;
                                            color: #37474f;
                                            width: 238px;
                                            border-right: none;
                                            position: relative;
                                            border-right: solid 1px #cfd8dc;">
                                            <div class="fixed-head" style="height: 122px;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                border-bottom: solid 1px #cfd8dc;
                                                position: relative;
                                                font-size: 13px;
                                                color: #78909c;">
                                                <div class="nameArea" style="display: flex;
                                                    justify-content: flex-start;
                                                    align-items: center;
                                                    width: 100%;
                                                    height: 100%;">
                                                    <div class="resultHead" style="width: 40px;
                                                        height: 100%;
                                                        border-right: solid 1px #cfd8dc;"></div>
                                                    <div class="nameHead" style="width: 65%;
                                                        height: 100%;
                                                        font-size: 12px;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-left: 8px;">選手名</div>
                                                </div>
                                            </div>
                                            <div class="fixed-body" style="border-bottom: solid 1px #cfd8dc;">
                                                <div class="each-row list-item" style="width: 100%;
                                                        display: flex;
                                                        align-items: center;
                                                        height: 32px;">
                                                    <div class="playerArea" style="width: 100%;
                                                        height: 100%;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        box-sizing: border-box;
                                                        position: relative;">
                                                        <div class="pitching-result" style="width: 40px;
                                                            height: 100%;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            border-right: solid 1px #cfd8dc;">
                                                            <div class="wlsh have-title" style="font-size: 14px;color: #37474f;">負</div>
                                                        </div>
                                                        <div class="player" style="margin-left: 8px;">
                                                            <div class="player-with-flag" style="display: flex;align-items: center;">
                                                                <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                                    <div class="player">
                                                                        <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ太郎</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="each-row even list-item" style="background-color: #eceff1;">
                                                    <div class="playerArea" style="width: 100%;
                                                        height: 100%;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        box-sizing: border-box;
                                                        position: relative;">
                                                        <div class="pitching-result" style="width: 40px;
                                                            height: 100%;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            border-right: solid 1px #cfd8dc;">
                                                            <div class="wlsh" style="font-size: 14px;color: #37474f;"></div>
                                                        </div>
                                                        <div class="player" style="margin-left: 8px;">
                                                            <div class="player-with-flag" style="display: flex;align-items: center;">
                                                                <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                                    <div class="player" >
                                                                        <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ次郎</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fixed-summary" style="height: 32px;
                                                display: flex;
                                                justify-content: space-between;
                                                align-items: center;
                                                font-size: 16px;
                                                font-weight: bold;
                                                color: #37474f;
                                                padding-right: 10px;">
                                                <div class="result" style="width: 40px;
                                                    height: 100%;
                                                    border-right: solid 1px #cfd8dc;"></div>
                                                <div class="label">合計</div>
                                            </div>
                                        </div>
                                        <div class="scrollable-area" style="width: 894px;white-space: nowrap;">
                                            <div class="scrollable" style="width: 100%;
                                                background-color: #ffffff;
                                                color: #37474f;
                                                border-collapse: separate;
                                                border-spacing: 0;">
                                                <div class="table header" style="width: 100%;">
                                                    <div class="row header" style="height: 122px;border-bottom: solid 1px #cfd8dc;">
                                                        <div class="era header highlight" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            background-color: rgba(227, 242, 253, 0.5);
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">防御率</div>
                                                        <div class="bf header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">打者</div>
                                                        <div class="hit header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">被安打</div>
                                                        <div class="homerun header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">被本塁打</div>
                                                        <div class="strikeout header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">奪三振</div>
                                                        <div class="bob header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">与四球</div>
                                                        <div class="hit-bastsmen header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">与死球</div>
                                                        <div class="point-lost header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">失点</div>
                                                        <div class="earned-run header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">自責点</div>
                                                        <div class="ip header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">投球回</div>
                                                        <div class="nopg header" sstyle="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">投球数</div>
                                                        <div class="each-ball header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">
                                                            <div class="ball-name">ストレート</div>
                                                        </div>
                                                        <div class="each-ball header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">
                                                            <div class="ball-name">スライダー</div>
                                                        </div>
                                                        <div class="each-ball header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">
                                                            <div class="ball-name">フォーク</div>
                                                        </div>
                                                        <div class="each-ball header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">
                                                            <div class="ball-name">カーブ</div>
                                                        </div>
                                                        <div class="each-ball header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">
                                                            <div class="ball-name">シュート</div>
                                                        </div>
                                                        <div class="each-ball header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">
                                                            <div class="ball-name">チェンジアップ</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table body" style="border-bottom: solid 1px #cfd8dc;
                                                    border-collapse: separate;
                                                    border-spacing: 0;
                                                    width: 100%;">
                                                    <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;">
                                                        <div class="era body highlight" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            background-color: rgba(227, 242, 253, 0.5);
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">4.50</div>
                                                        <div class="bf body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">27</div>
                                                        <div class="hit body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">8</div>
                                                        <div class="homerun body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">1</div>
                                                        <div class="strikeout body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">3</div>
                                                        <div class="bob body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">2</div>
                                                        <div class="hit-bastsmen body no-data" style="color: #b0bec5;font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">0</div>
                                                        <div class="point-lost body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">4</div>
                                                        <div class="earned-run body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">3</div>
                                                        <div class="ip body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">6</div>
                                                        <div class="nopg body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">99</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">20</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">10</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">10</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">5</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">5</div>
                                                    </div>
                                                    <div class="row body even list-item" style="background-color: #eceff1; height: 32px;
                                                            width: 100%;
                                                            display: flex;
                                                            justify-content: spa">
                                                        <div class="era body highlight" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            background-color: rgba(227, 242, 253, 0.5);
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">4.50</div>
                                                        <div class="bf body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">27</div>
                                                        <div class="hit body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">8</div>
                                                        <div class="homerun body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">1</div>
                                                        <div class="strikeout body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">3</div>
                                                        <div class="bob body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">2</div>
                                                        <div class="hit-bastsmen body no-data" style="color: #b0bec5;font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">0</div>
                                                        <div class="point-lost body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">4</div>
                                                        <div class="earned-run body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">3</div>
                                                        <div class="ip body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">6</div>
                                                        <div class="nopg body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">99</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">20</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">10</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">10</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">5</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">5</div>
                                                    </div>
                                                </div>
                                                <div class="table summary" style="width: 100%;">
                                                    <div class="row summary" style="height: 32px;
                                                            width: 100%;
                                                            display: flex;
                                                            justify-content: space-between;">
                                                        <div class="era summary highlight" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            background-color: rgba(227, 242, 253, 0.5);
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;"></div>
                                                        <div class="bf summary highlight" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">34</div>
                                                        <div class="hit summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">8</div>
                                                        <div class="homerun summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">1</div>
                                                        <div class="strikeout summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">5</div>
                                                        <div class="bob summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">3</div>
                                                        <div class="hit-bastsmen summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">0</div>
                                                        <div class="point-lost summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">4</div>
                                                        <div class="earned-run summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">3</div>
                                                        <div class="ip summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">135</div>
                                                        <div class="each-ball summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball summary"style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="home" style="margin-bottom: 8px;">
                                <div class="record-one-ball-pitcher-record-table" style="background-color: #ffffff;">
                                    <div class="team-name-row" style="border-bottom: 2px solid rgb(255, 111, 0);width: 100%;
                                        height: 40px;
                                        display: flex;
                                        justify-content: flex-start;
                                        align-items: flex-end; ">
                                        <div class="name" style="font-size: 18px;
                                            font-weight: bold;
                                            color: #37474f;
                                            margin-left: 10px;
                                            margin-bottom: 3px;">スコマネ西高校</div>
                                    </div>
                                    <div class="table-area" style="display: flex;border-bottom: solid 1px #cfd8dc;">
                                        <div class="fixed-area" style="font-size: 14px;
                                            color: #37474f;
                                            width: 238px;
                                            border-right: none;
                                            position: relative;
                                            border-right: solid 1px #cfd8dc;">
                                            <div class="fixed-head" style="height: 122px;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                border-bottom: solid 1px #cfd8dc;
                                                position: relative;
                                                font-size: 13px;
                                                color: #78909c;">
                                                <div class="nameArea" style="display: flex;
                                                    justify-content: flex-start;
                                                    align-items: center;
                                                    width: 100%;
                                                    height: 100%;">
                                                    <div class="resultHead" style="width: 40px;
                                                        height: 100%;
                                                        border-right: solid 1px #cfd8dc;"></div>
                                                    <div class="nameHead" style="width: 65%;
                                                        height: 100%;
                                                        font-size: 12px;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-left: 8px;">選手名</div>
                                                </div>
                                            </div>
                                            <div class="fixed-body" style="border-bottom: solid 1px #cfd8dc;">
                                                <div class="each-row list-item" style="width: 100%;
                                                        display: flex;
                                                        align-items: center;
                                                        height: 32px;">
                                                    <div class="playerArea" style="width: 100%;
                                                        height: 100%;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        box-sizing: border-box;
                                                        position: relative;">
                                                        <div class="pitching-result" style="width: 40px;
                                                            height: 100%;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            border-right: solid 1px #cfd8dc;">
                                                            <div class="wlsh have-title" style="font-size: 14px;color: #37474f;">負</div>
                                                        </div>
                                                        <div class="player" style="margin-left: 8px;">
                                                            <div class="player-with-flag" style="display: flex;align-items: center;">
                                                                <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                                    <div class="player">
                                                                        <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ太郎</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="each-row even list-item" style="background-color: #eceff1;">
                                                    <div class="playerArea" style="width: 100%;
                                                        height: 100%;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        box-sizing: border-box;
                                                        position: relative;">
                                                        <div class="pitching-result" style="width: 40px;
                                                            height: 100%;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            border-right: solid 1px #cfd8dc;">
                                                            <div class="wlsh" style="font-size: 14px;color: #37474f;"></div>
                                                        </div>
                                                        <div class="player" style="margin-left: 8px;">
                                                            <div class="player-with-flag" style="display: flex;align-items: center;">
                                                                <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                                    <div class="player" >
                                                                        <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ次郎</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fixed-summary" style="height: 32px;
                                                display: flex;
                                                justify-content: space-between;
                                                align-items: center;
                                                font-size: 16px;
                                                font-weight: bold;
                                                color: #37474f;
                                                padding-right: 10px;">
                                                <div class="result" style="width: 40px;
                                                    height: 100%;
                                                    border-right: solid 1px #cfd8dc;"></div>
                                                <div class="label">合計</div>
                                            </div>
                                        </div>
                                        <div class="scrollable-area" style="width: 894px;white-space: nowrap;">
                                            <div class="scrollable" style="width: 100%;
                                                background-color: #ffffff;
                                                color: #37474f;
                                                border-collapse: separate;
                                                border-spacing: 0;">
                                                <div class="table header" style="width: 100%;">
                                                    <div class="row header" style="height: 122px;border-bottom: solid 1px #cfd8dc;">
                                                        <div class="era header highlight" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            background-color: rgba(227, 242, 253, 0.5);
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">防御率</div>
                                                        <div class="bf header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">打者</div>
                                                        <div class="hit header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">被安打</div>
                                                        <div class="homerun header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">被本塁打</div>
                                                        <div class="strikeout header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">奪三振</div>
                                                        <div class="bob header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">与四球</div>
                                                        <div class="hit-bastsmen header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">与死球</div>
                                                        <div class="point-lost header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">失点</div>
                                                        <div class="earned-run header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">自責点</div>
                                                        <div class="ip header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">投球回</div>
                                                        <div class="nopg header" sstyle="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">投球数</div>
                                                        <div class="each-ball header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">
                                                            <div class="ball-name">ストレート</div>
                                                        </div>
                                                        <div class="each-ball header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">
                                                            <div class="ball-name">スライダー</div>
                                                        </div>
                                                        <div class="each-ball header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">
                                                            <div class="ball-name">フォーク</div>
                                                        </div>
                                                        <div class="each-ball header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">
                                                            <div class="ball-name">カーブ</div>
                                                        </div>
                                                        <div class="each-ball header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">
                                                            <div class="ball-name">シュート</div>
                                                        </div>
                                                        <div class="each-ball header" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: flex-start;
                                                            align-items: center;
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;
                                                            padding-top: 8px;
                                                            writing-mode: vertical-rl;">
                                                            <div class="ball-name">チェンジアップ</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table body" style="border-bottom: solid 1px #cfd8dc;
                                                    border-collapse: separate;
                                                    border-spacing: 0;
                                                    width: 100%;">
                                                    <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;">
                                                        <div class="era body highlight" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            background-color: rgba(227, 242, 253, 0.5);
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">4.50</div>
                                                        <div class="bf body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">27</div>
                                                        <div class="hit body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">8</div>
                                                        <div class="homerun body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">1</div>
                                                        <div class="strikeout body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">3</div>
                                                        <div class="bob body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">2</div>
                                                        <div class="hit-bastsmen body no-data" style="color: #b0bec5;font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">0</div>
                                                        <div class="point-lost body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">4</div>
                                                        <div class="earned-run body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">3</div>
                                                        <div class="ip body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">6</div>
                                                        <div class="nopg body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">99</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">20</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">10</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">10</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">5</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">5</div>
                                                    </div>
                                                    <div class="row body even list-item" style="background-color: #eceff1; height: 32px;
                                                            width: 100%;
                                                            display: flex;
                                                            justify-content: spa">
                                                        <div class="era body highlight" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            background-color: rgba(227, 242, 253, 0.5);
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">4.50</div>
                                                        <div class="bf body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">27</div>
                                                        <div class="hit body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">8</div>
                                                        <div class="homerun body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">1</div>
                                                        <div class="strikeout body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">3</div>
                                                        <div class="bob body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">2</div>
                                                        <div class="hit-bastsmen body no-data" style="color: #b0bec5;font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">0</div>
                                                        <div class="point-lost body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">4</div>
                                                        <div class="earned-run body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">3</div>
                                                        <div class="ip body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">6</div>
                                                        <div class="nopg body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">99</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">20</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">10</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">10</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">5</div>
                                                        <div class="each-ball body" style="font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">5</div>
                                                    </div>
                                                </div>
                                                <div class="table summary" style="width: 100%;">
                                                    <div class="row summary" style="height: 32px;
                                                            width: 100%;
                                                            display: flex;
                                                            justify-content: space-between;">
                                                        <div class="era summary highlight" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            background-color: rgba(227, 242, 253, 0.5);
                                                            width: 36px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;"></div>
                                                        <div class="bf summary highlight" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">34</div>
                                                        <div class="hit summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">8</div>
                                                        <div class="homerun summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">1</div>
                                                        <div class="strikeout summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">5</div>
                                                        <div class="bob summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">3</div>
                                                        <div class="hit-bastsmen summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">0</div>
                                                        <div class="point-lost summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">4</div>
                                                        <div class="earned-run summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">3</div>
                                                        <div class="ip summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">135</div>
                                                        <div class="each-ball summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball summary"style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                        <div class="each-ball summary" style="height: 32px;
                                                            font-family: Oswald;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            font-size: 16px;
                                                            cursor: pointer;">46</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>










                    <!-- Content Row -->

                    <div class="wrap">
                        



                        



                    </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SUKOMANE 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ログアウトしますか？</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">ログアウトする場合は、下記の「ログアウト」ボタンを押してください。</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">キャンセル</button>
                    <a class="btn btn-primary" href="../logout.php">ログアウト</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>