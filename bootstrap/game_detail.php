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
                        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-baseball-ball"></i>　試合記録　打撃成績</h1>
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
                        <div class="title-bar" style="height: 32px;
                            color: #37474f;
                            padding: 2px 10px;
                            box-sizing: border-box;
                            background: #eceff1;
                            display: flex;
                            justify-content: space-between;
                            align-items: center;">
                            <div class="title" style="height: 32px;
                                color: #37474f;
                                padding: 2px 10px;
                                box-sizing: border-box;
                                background: #eceff1;
                                display: flex;
                                justify-content: space-between;
                                align-items: center;">
                                <div class="name" style="font-size: 18px; font-weight: bold;">打撃成績</div>
                                <div class="name" style="font-size: 18px; font-weight: bold;">　/　</div>
                                <div class="name" style="font-size: 18px; font-weight: bold;"><a href="game_detail2.php">投手成績</a></div>
                                <div class="note" style="font-size: 14px; padding-left:30px; display: flex; ">
                                    <div class="text">():スターティングメンバー　|</div>
                                    <div class="red" style="color: #ff5252;">赤字</div>
                                    <div>:安打　|</div>
                                    <div class="bold" style="font-weight: bold;">太字</div>
                                    <div class="text">:打点　｜</div>
                                    <div class="dialog" style="color: #2979ff;text-decoration: underline;cursor: pointer;">略語の説明</div>
                                </div>
                            </div>
                        </div>
                        <div class="batter-record" style="margin-bottom: 16px; box-sizing: border-box;">
                            <div class="visitor" style="border-bottom: solid 1px #cfd8dc; box-sizing: border-box;">
                                <div class="record-one-ball-batter-record-table" style="background-color: #ffffff;display: flex;justify-content: space-between; box-sizing: border-box;">
                                    <div class="side-line" style="background-color: rgb(25, 118, 210); width: 8px; min-height: 100%; box-sizing: border-box;box-sizing: border-box;"></div>
                                    <div class="main" style="display: flex;flex-direction: column-reverse; width: calc(100% - 8px);height: 100%;box-sizing: border-box;">
                                <div class="team-name-row" style="width: 100%;
                                    height: px;
                                    display: flex;
                                    justify-content: flex-start;
                                    align-items: center;
                                    box-sizing: border-box;">
                                    <!-- <div class="inning-runs" style="width: calc(100% - 620px);display: flex;justify-content: space-between; box-sizing: border-box;">  -->
                                        <!-- <div class="each-inning" style="width: 120px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">1</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">3</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div> -->
                                    <!-- </div> -->
                                </div>
                                <div class="table-area" style="display: flex;border-bottom: solid 1px #cfd8dc;box-sizing: border-box;">
                                    <div class="fixed-area" style="font-size: 14px;
                                        color: #37474f;
                                        min-width: 270px;
                                        border-right: none;
                                        position: relative;
                                        border-right: solid 1px #cfd8dc ;
                                        box-sizing: border-box;">
                                        <div class="fixed-head" style="height: 63px;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            border-bottom: solid 1px #cfd8dc;
                                            position: relative;
                                            font-size: 13px;
                                            color: #78909c;
                                            box-sizing: border-box;">
                                            <div class="nameArea" style="display: flex;
                                                justify-content: flex-start;
                                                align-items: center;
                                                width: 100%;
                                                height: 100%;
                                                position: relative;
                                                box-sizing: border-box;">
                                                <div class="positionHead" style="width: 56px;
                                                    height: 100%;
                                                    font-size: 14px;
                                                    color: #37474f;
                                                    border-right: solid 1px #cfd8dc;
                                                    display: flex;
                                                    justify-content: flex-start;
                                                    align-items: center;
                                                    padding-top: 8px;
                                                    -webkit-writing-mode: vertical-rl;
                                                    writing-mode: vertical-rl;
                                                    box-sizing: border-box;">位置</div>
                                                <div class="nameHead" style="height: 100%;
                                                    font-size: 12px;
                                                    display: flex;
                                                    justify-content: flex-start;
                                                    align-items: center;
                                                    padding-left: 15px;
                                                    box-sizing: border-box;">選手名</div>
                                            </div>
                                        </div>
                                        <div class="fixed-body" style="border-bottom: solid 1px #cfd8dc;box-sizing: border-box;display: block;">
                                            <div class="each-row list-item" style="width: 100%;
                                                display: flex;
                                                align-items: center;
                                                height: 32px;
                                                box-sizing: border-box;">
                                                <div class="playerArea" style="width: 100%;
                                                    height: 100%;
                                                    display: flex;
                                                    justify-content: flex-start;
                                                    align-items: center;
                                                    box-sizing: border-box;
                                                    position: relative;">
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">(中)</div>
                                                    <div class="player" style="margin-left: 16px;box-sizing: border-box;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;box-sizing: border-box;">
                                                            <div class="player" style="box-sizing: border-box;">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;background: transparent;box-sizing: border-box;">スコマネ太郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each-row list-item" style="width: 100%;
                                                display: flex;
                                                align-items: center;
                                                height: 32px;
                                                box-sizing: border-box;">
                                                <div class="playerArea" style="width: 100%;
                                                    height: 100%;
                                                    display: flex;
                                                    justify-content: flex-start;
                                                    align-items: center;
                                                    box-sizing: border-box;
                                                    position: relative;">
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">(右)</div>
                                                    <div class="player" style="margin-left: 16px;box-sizing: border-box;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;box-sizing: border-box;">
                                                            <div class="player" style="box-sizing: border-box;">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;text-decoration: none;background: transparent;box-sizing: border-box;">スコマネ次郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(左)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ三郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(一)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ四郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(二)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ五郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(三)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ六郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(遊)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ七郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(投)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ八郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(捕)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ九郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fixed-summary" style="height: 32px;
                                            display: flex;
                                            justify-content: flex-end;
                                            align-items: center;
                                            font-size: 16px;
                                            font-weight: bold;
                                            color: #37474f;
                                            padding-right: 10px;">
                                            <div class="label">合計</div>
                                        </div>
                                    </div>
                                    <div class="scrollable-area" style="width: 867px;white-space: nowrap;box-sizing: border-box;display: block;">
                                        <div class="scrollable" style="width: 100%;
                                            background-color: #ffffff;
                                            color: #37474f;
                                            border-collapse: separate;
                                            border-spacing: 0;
                                            box-sizing: border-box;
                                            display: block;">
                                            <div class="table header" style="width: 100%;box-sizing: border-box; display: block;">
                                                <div class="row header" style="height: 63px;border-bottom: solid 1px #cfd8dc;width: 104%;display: flex;justify-content: space-between;box-sizing: border-box;">
                                                    <div class="batting-average header highlight" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        vertical-align: baseline;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">打率</div>
                                                    <div class="hit header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">安打</div>
                                                    <div class="runs-batting-in header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">打点</div>
                                                    <div class="homerun header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">本塁打</div>
                                                    <div class="run header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">得点</div>
                                                    <div class="strikeout header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">三振</div>
                                                    <div class="base-on-ball header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">四球</div>
                                                    <div class="dead-ball header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">死球</div>
                                                    <div class="sacrifice-hit header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">犠打</div>
                                                    <div class="stolen-base header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">盗塁</div>
                                                    <div class="error1 header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">失策</div>
                                                    <div class="ops header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 42px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">OPS</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;
                                                        ">1</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">3</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">4</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">6</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">7</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">8</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">9</div>
                                                </div>
                                            </div>
                                            <div class="table body" style="border-bottom: solid 1px #cfd8dc;
                                                    border-collapse: separate;
                                                    border-spacing: 0;
                                                    width: 104%;
                                                    box-sizing: border-box;
                                                    display: block;">
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;
                                                        margin-top: -2%;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;
                                                        border-bottom: solid 1px #cfd8dc;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        border-bottom: solid 1px #cfd8dc;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="table summary" style="width: 100%;box-sizing: border-box;display: block;">
                                                <div class="row summary" style="height: 32px;
                                                    width: 100%;
                                                    display: flex;
                                                    justify-content: space-between;
                                                    box-sizing: border-box;">
                                                    <div class="batting-average summary highlight" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;"></div>
                                                    <div class="at-bat summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">37</div>
                                                    <div class="hit summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">10</div>
                                                    <div class="runs-batting-in summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="homerun summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">1</div>
                                                    <div class="run summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="strikeout summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">6</div>
                                                    <div class="base-on-ball summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">4</div>
                                                    <div class="sacrifice-hit summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">1</div>
                                                    <div class="error1 summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="ops summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                            </div>
                            <div class="home" style="font-size: 100%;vertical-align: baseline; box-sizing: border-box;">
                                <div class="record-one-ball-batter-record-table" style="background-color: #ffffff;
                                        display: flex;
                                        justify-content: space-between;">
                                    <div class="side-line" style="background-color: rgb(255, 111, 0);width: 8px;min-height: 100%;"></div>
                                    <div class="main" style="display: flex;flex-direction: column;width: calc(100% - 8px);height: 100%;">
                                <div class="team-name-row" style="width: 100%;
                                        height: 64px;
                                        display: flex;
                                        justify-content: flex-start;
                                        align-items: center;">
                                    <div class="team-total" style="width: 620px;
                                            height: 100%;
                                            display: flex;
                                            justify-content: space-between;
                                            align-items: center;
                                            padding: 0 14px 0 18px;">
                                        <div class="name" style="font-size: 32px;
                                            font-weight: bold;
                                            color: #37474f;">スコマネ西高校</div>
                                        <!-- <div class="run" style="font-family: Oswald;
                                            font-size: 40px;
                                            font-weight: bold;
                                            color: #37474f;">3</div>-->
                                    </div>
                                    <div class="inning-runs" style="width: calc(100% - 620px);height: 100%;display: flex;justify-content: space-between; box-sizing: border-box;">
                                        <!-- <div class="each-inning" style="width: 120px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">3</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">0</div>
                                        <div class="each-inning" style="width: 56px;
                                            height: 100%;
                                            border-right: solid 1px #cfd8dc;
                                            font-family: Oswald;
                                            font-size: 24px;
                                            color: #37474f;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            box-sizing: border-box;">x</div> -->
                                    </div> 
                                </div>
                                <div class="table-area" style="display: flex;border-bottom: solid 1px #cfd8dc;box-sizing: border-box;">
                                    <div class="fixed-area" style="font-size: 14px;
                                        color: #37474f;
                                        min-width: 265px;
                                        border-right: none;
                                        position: relative;
                                        border-right: solid 1px #cfd8dc;
                                        box-sizing: border-box;">
                                        <div class="fixed-head" style="height: 63px;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            border-bottom: solid 1px #cfd8dc;
                                            position: relative;
                                            font-size: 13px;
                                            color: #78909c;
                                            box-sizing: border-box;">
                                            <div class="nameArea" style="display: flex;
                                                justify-content: flex-start;
                                                align-items: center;
                                                width: 100%;
                                                height: 100%;
                                                position: relative;
                                                box-sizing: border-box;">
                                                <div class="positionHead" style="width: 56px;
                                                    height: 100%;
                                                    font-size: 14px;
                                                    color: #37474f;
                                                    border-right: solid 1px #cfd8dc;
                                                    display: flex;
                                                    justify-content: flex-start;
                                                    align-items: center;
                                                    padding-top: 8px;
                                                    -webkit-writing-mode: vertical-rl;
                                                    writing-mode: vertical-rl;
                                                    box-sizing: border-box;">位置</div>
                                                <div class="nameHead" style="height: 100%;
                                                    font-size: 12px;
                                                    display: flex;
                                                    justify-content: flex-start;
                                                    align-items: center;
                                                    padding-left: 15px;
                                                    box-sizing: border-box;">選手名</div>
                                            </div>
                                        </div>
                                        <div class="fixed-body" style="border-bottom: solid 1px #cfd8dc;box-sizing: border-box;display: block;">
                                            <div class="each-row list-item" style="width: 100%;
                                                display: flex;
                                                align-items: center;
                                                height: 32px;
                                                box-sizing: border-box;">
                                                <div class="playerArea" style="width: 100%;
                                                    height: 100%;
                                                    display: flex;
                                                    justify-content: flex-start;
                                                    align-items: center;
                                                    box-sizing: border-box;
                                                    position: relative;">
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">(中)</div>
                                                    <div class="player" style="margin-left: 16px;box-sizing: border-box;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;box-sizing: border-box;">
                                                            <div class="player" style="box-sizing: border-box;">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;background: transparent;box-sizing: border-box;">スコマネ太郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="each-row list-item" style="width: 100%;
                                                display: flex;
                                                align-items: center;
                                                height: 32px;
                                                box-sizing: border-box;">
                                                <div class="playerArea" style="width: 100%;
                                                    height: 100%;
                                                    display: flex;
                                                    justify-content: flex-start;
                                                    align-items: center;
                                                    box-sizing: border-box;
                                                    position: relative;">
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">(右)</div>
                                                    <div class="player" style="margin-left: 16px;box-sizing: border-box;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;box-sizing: border-box;">
                                                            <div class="player" style="box-sizing: border-box;">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;text-decoration: none;background: transparent;box-sizing: border-box;">スコマネ次郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(左)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ三郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(一)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ四郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(二)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ五郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(三)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ六郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(遊)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ七郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(投)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ八郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <div class="playerStatus" style="width: 56px;
                                                        height: 100%;
                                                        font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        border-right: solid 1px #cfd8dc;">(捕)</div>
                                                    <div class="player" style="margin-left: 16px;">
                                                        <div class="directory-link playerName" style="font-weight: bold;font-size: 13px;">
                                                            <div class="player">
                                                                <div class="name" style="font-size: 16px; color: rgb(13, 71, 161); font-weight: bold;">スコマネ九郎</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fixed-summary" style="height: 32px;
                                            display: flex;
                                            justify-content: flex-end;
                                            align-items: center;
                                            font-size: 16px;
                                            font-weight: bold;
                                            color: #37474f;
                                            padding-right: 10px;">
                                            <div class="label">合計</div>
                                        </div>
                                    </div>
                                    <div class="scrollable-area" style="width: 867px;white-space: nowrap;box-sizing: border-box;display: block;">
                                        <div class="scrollable" style="width: 100%;
                                            background-color: #ffffff;
                                            color: #37474f;
                                            border-collapse: separate;
                                            border-spacing: 0;
                                            box-sizing: border-box;
                                            display: block;">
                                            <div class="table header" style="width: 100%;box-sizing: border-box; display: block;">
                                                <div class="row header" style="height: 63px;border-bottom: solid 1px #cfd8dc;width: 100%;display: flex;justify-content: space-between;box-sizing: border-box;">
                                                    <div class="batting-average header highlight" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        vertical-align: baseline;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">打率</div>
                                                    <div class="hit header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">安打</div>
                                                    <div class="runs-batting-in header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">打点</div>
                                                    <div class="homerun header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">本塁打</div>
                                                    <div class="run header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">得点</div>
                                                    <div class="strikeout header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">三振</div>
                                                    <div class="base-on-ball header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">四球</div>
                                                    <div class="dead-ball header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">死球</div>
                                                    <div class="sacrifice-hit header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">犠打</div>
                                                    <div class="stolen-base header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">盗塁</div>
                                                    <div class="error1 header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 27px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">失策</div>
                                                    <div class="ops header" style="font-size: 14px;
                                                        color: #37474f;
                                                        display: flex;
                                                        justify-content: flex-start;
                                                        align-items: center;
                                                        padding-top: 8px;
                                                        -webkit-writing-mode: vertical-rl;
                                                        writing-mode: vertical-rl;
                                                        min-width: 42px;border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">OPS</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">1</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">3</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">4</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">6</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">7</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">8</div>
                                                    <div class="each-inning header" style="color: #cfd8dc;background-color: #546e7a;writing-mode: unset;
                                                        justify-content: center;
                                                        padding: 0;
                                                        font-size: 14px;
                                                        display: flex;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">9</div>
                                                </div>
                                            </div>
                                            <div class="table body" style="border-bottom: solid 1px #cfd8dc;
                                                    border-collapse: separate;
                                                    border-spacing: 0;
                                                    width: 100%;
                                                    box-sizing: border-box;
                                                    display: block;
                                                    margin-top:-2%;">
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row body list-item" style="height: 32px;
                                                        width: 100%;
                                                        display: flex;
                                                        justify-content: space-between;
                                                        box-sizing: border-box;">
                                                    <div class="batting-average body highlight" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;">.400</div>
                                                    <div class="at-bat body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">5</div>
                                                    <div class="hit body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="runs-batting-in body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="homerun body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="run body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="strikeout body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="base-on-ball body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="sacrifice-hit body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="error1 body no-data" style="color: #b0bec5;font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="ops body" style="font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">.800</div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;
                                                            font-size: 100%;vertical-align: baseline;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                            <div class="each-result" style="width: 100%;
                                                                height: 100%;
                                                                min-height: 15px;
                                                                display: flex;
                                                                justify-content: center;
                                                                align-items: center;
                                                                box-sizing: border-box;">右安</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">中飛</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;">
                                                        <div class="each-result" style="width: 100%;
                                                            height: 100%;
                                                            min-height: 15px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            box-sizing: border-box;">二ゴロ</div>
                                                        </div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        box-sizing: border-box;">
                                                        <div class="result-area" style="width: 100%;
                                                            height: 100%;
                                                            display: flex;
                                                            flex-direction: column;
                                                            justify-content: space-between;
                                                            align-items: center;
                                                            box-sizing: border-box;"></div>
                                                    </div>
                                                    <div class="each-inning inning-body list-item" style="font-size: 14px;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            width: 56px;
                                                            cursor: default;
                                                            min-width: 27px;
                                                            border-right: solid 1px #cfd8dc;
                                                            box-sizing: border-box;">
                                                        <div class="result-area">
                                                        <div class="each-result">左安</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="table summary" style="width: 100%;box-sizing: border-box;display: block;">
                                                <div class="row summary" style="height: 32px;
                                                    width: 100%;
                                                    display: flex;
                                                    justify-content: space-between;
                                                    box-sizing: border-box;">
                                                    <div class="batting-average summary highlight" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        background-color: rgba(227, 242, 253, 0.5);
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;
                                                        margin-left:1%;"></div>
                                                    <div class="at-bat summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">37</div>
                                                    <div class="hit summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">10</div>
                                                    <div class="runs-batting-in summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="homerun summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">1</div>
                                                    <div class="run summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="strikeout summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">6</div>
                                                    <div class="base-on-ball summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">4</div>
                                                    <div class="sacrifice-hit summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">0</div>
                                                    <div class="stolen-base summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">1</div>
                                                    <div class="error1 summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;">2</div>
                                                    <div class="ops summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        min-width: 42px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        cursor: pointer;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                    <div class="each-inning summary" style="height: 32px;
                                                        font-family: Oswald;
                                                        display: flex;
                                                        justify-content: center;
                                                        align-items: center;
                                                        width: 56px;
                                                        cursor: default;
                                                        min-width: 27px;
                                                        border-right: solid 1px #cfd8dc;
                                                        font-size: 16px;
                                                        box-sizing: border-box;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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