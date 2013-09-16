 <?php
session_start();
date_default_timezone_set("Asia/Bangkok");
$page = isset($_GET['page'])? $_GET['page']: 'home';
include_once('pdo.php');
?>
<!DOCTYPE HTML>
<meta http-equiv="x-ua-compatible" content="IE=Edge">
<meta http-equiv="content-Type" content="text/html" charset="utf-8">
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<meta name="viewport" content="width=1208,  maximum-scale=2">
<link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<title>Admin</title>

<style type="text/css">

</style>
</head>
<body>
<div class="container">
    <?php
    if(!isset($_SESSION['admin_login']) || !$_SESSION['admin_login']){
        include('admin_pages/login.php');
        exit();
    }
    ?>
    <ul class="nav nav-pills">
        <li <?php if($page=='whos') echo 'class="active"';?>>
            <a href="admin.php?page=whos">Who's coming</a>
        </li>
        <li <?php if($page=='gallery') echo 'class="active"';?>>
            <a href="admin.php?page=gallery">gallery</a>
        </li>
    </ul>
    <div>

        <?php
        //include page
        include('admin_pages/'.$page.'.php');
        ?>
    </div>
</div>
</body>
</html>