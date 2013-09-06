<?php
/*
session_start();
if ($_SESSION['login'] != 1 ) {
    echo '<script type="text/javascript">window.location.href="index.php"</script>';
}*/
$page = isset($_GET['page'])? $_GET['page']: 'home';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta http-equiv="content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=940,  maximum-scale=2">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" media="screen" href="css/font-face.css">
    <link rel="stylesheet" media="screen" href="css/style.css">
    <!--[if IE]>
    <link rel="stylesheet" media="screen" href="css/style-ie.css">
    <!-->
    <title>Interchange Bangkok 2013</title>

</head>
<body>
<div class="main-wrap">
    <div class="page-wrap">
        <header>
            <div class="user-section">
                <a href="home.php?page=register" class="register-button"></a>
                <a href="index.php" class="logout-button"></a>
            </div>
            <div class="before-header"></div>
            <div class="logo"></div>
            <nav class="nav-menu font-minion">
                <div class="wrap">
                    <a href="home.php" class="<?php if($page=='home') echo 'active';?>">Home</a>
                    <a href="home.php?page=meeting_info" class="<?php if($page=='meeting_info') echo 'active';?>">Meeting Info</a>
                    <a href="home.php?page=agenda" class="<?php if($page=='agenda') echo 'active';?>">Agenda</a>
                    <a href="home.php?page=explore_thailand" class="<?php if($page=='explore_thailand') echo 'active';?>">Explore Thailand</a>
                    <a href="home.php?page=who_is_coming" class="<?php if($page=='who_is_coming') echo 'active';?>">Who's coming?</a>
                    <a href="home.php?page=gallery" class="<?php if($page=='gallery') echo 'active';?>">Gallery</a>
                </div>
            </nav>
        </header>
        <section class="container">
            <div class="wrap">
                <?php include('pages/'.$page.'.php');?>
            </div>

            <footer class="page-footer">

            </footer>
        </section>
    </div>
</div>
</body>
</html>