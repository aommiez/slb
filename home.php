<?php
session_start();
/*
if ($_SESSION['login'] != 1 ) {
    echo '<script type="text/javascript">window.location.href="index.php"</script>';
}
*/
$page = isset($_GET['page'])? $_GET['page']: 'home';
?>
<!DOCTYPE HTML>
<meta http-equiv="x-ua-compatible" content="IE=Edge">
    <meta http-equiv="content-Type" content="text/html" charset="utf-8">
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <meta name="viewport" content="width=1208,  maximum-scale=2">
    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" media="screen" href="css/font-face.css">
    <link rel="stylesheet" media="screen" href="css/style.css">
    <!--[if IE]>
    <link rel="stylesheet" media="screen" href="css/style-ie.css">
    <!-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src="js/backgroundSize.jquery.js" type="text/javascript"></script>
    <title>Interchange Bangkok 2013</title>
</head>
<body>
<div class="main-wrap">
    <div class="page-wrap">
        <div class="page-header" style="position: relative; z-index: 1;">
            <div class="user-section">
                <a href="home.php?page=register" class="register-button"></a>
                <a href="index.php" class="logout-button"></a>
            </div>
            <div class="before-header"></div>
            <div class="logo"></div>
            <div class="nav-menu font-minion">
                <div class="wrap">
                    <a href="home.php" class="<?php if($page=='home') echo 'active';?>">Home</a>
                    <a href="home.php?page=meeting_info" class="<?php if($page=='meeting_info') echo 'active';?>">Meeting Info</a>
                    <a href="home.php?page=agenda" class="<?php if($page=='agenda') echo 'active';?>">Agenda</a>
                    <a href="home.php?page=explore_thailand" class="<?php if($page=='explore_thailand') echo 'active';?>">Explore Thailand</a>
                    <a href="#home.php?page=who_is_coming" class="<?php if($page=='who_is_coming') echo 'active';?>">Who's coming?</a>
                    <a href="#home.php?page=gallery" class="<?php if($page=='gallery') echo 'active';?>">Gallery</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="container" style="position: relative; z-index: 2;">
            <div class="wrap" style="position: relative; z-index: 2;">
                <?php include('pages/'.$page.'.php');?>
            </div>

            <div class="page-footer">

            </div>
        </div>

        <a href="mailto:interchangebkk@slb.com?Subject=" style="
        display: block;
        position: absolute;
        bottom: 20px;
        right: 0;
        opacity: 0;
        z-index: 3;
        width: 140px;
        height: 20px;
    ">
        </a>
        <div class="bg-wrap" style="width: 100%; overflow: hidden;">
            <img src="images/Template/Contener935x1080.png">
        </div>
    </div>
</div>
</body>
</html>