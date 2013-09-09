<?php
date_default_timezone_set("Asia/Bangkok");
if($_SERVER['REQUEST_METHOD']=='POST'){
    echo '<script type="text/javascript">window.location.href="home.php"</script>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta http-equiv="content-Type" content="text/html" charset="utf-8">
    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <meta name="viewport" content="width=1208,  maximum-scale=2">
    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Interchange Bangkok 2013</title>

    <style type="text/css">
        heml, body {
            height: 100%;
        }
        body {
            background-image: url('images/Template/BG1024x1280.png');
            background-color: black;
            background-position: top;
            background-repeat: no-repeat;
            padding: 0;
            margin: 0;

            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            text-shadow: rgba(0,49,24,0.4) 0px 0px 1px;
        }

        div.page-footer {
            position: absolute;
            bottom: 0;
            left: 50%;
            margin-left: -640px;

            width: 1280px;
            height: 242px;
            background: url('images/Template/Foot242x1280.png');
            pointer-events: none;
        }

        .wrap {
            background: url('images/Login/Contener828x587.png');
            width: 587px;
            height: 828px;
            margin: 0 auto;
            padding-top: 160px;
            box-sizing: border-box;
            position: relative;
        }

        .login-button {
            background: url('images/Login/LOGIN40x89.png');
            width: 89px;
            height: 40px;
        }
    </style>
</head>
<body>
<div class="wrap">
    <div style="text-align: center;">
        <img src="images/Login/Logo345x247.png">
    </div>
    <form  style="text-align: center; margin-top: 38px; position: relative; z-index: 2;"  >
        <div></div>
        <input type="text" name="login" id="loginName"><br />
        <input type="password" name="password" id="loginPass"><br />
        <button id="loginClick" class="login-button"></button>
        <p style="margin-top: 36px; color: rgb(239,228,198);" class="count-down">
            COUNT DOWN TO THE EVENT DAY<br /><b>
            <?php
            $target = strtotime('2013-09-09 '.date('H:i:s', time()));
            $now = time();
            $dif = $target-$now;
            $day = (int)($dif/(60*60*24));
            echo $day;
            ?>
            <br />DAY</b>
        </p>
    </form>
    <a href="mailto:interchangebkk@slb.com?Subject=Hello" style="
        display: block;
        width: 140px;
        height: 20px;
        position: absolute;
        bottom: 20px;
        right: -175px;
        z-index: 3;
        opacity: 0;
    "></a>
    <div class="page-footer" style="z-index: 1;">
    </div>
</div>
<script type="text/javascript" src="js/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript">
$(function(){
    /*
    var liftoffTime = new Date(2013, 10, 10);
    var nowTime = new Date();

    var timeDiff = Math.abs(liftoffTime.getTime() - nowTime.getTime());
    var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
    alert(diffDays);

    $('.count-down').countdown({
        targetDate: {
            'day':         02,
            'month':     12,
            'year':     2013,
            'hour':     0,
            'min':         0,
            'sec':         0
        },
        compact: true,
        layout: 'COUNT DOWN TO THE EVENT DAY<br /><b>{dn}<br />DAY</b>',
        description: 'to wait'
    });
*/

    $("#loginClick").click(function(e){
        e.preventDefault();
        $.post("login1.php", { login: $("#loginName").val() , password: $("#loginPass").val() }, function(data) {
            if (data == 0) {
                alert("This website is restricted for InterChange participant only. \n Please contact interchangebkk@slb.com to request for the access. ");
            } else if ( data == 1 ) {
                alert('Incorrect password');
            } else if ( data == 999 ) {
                window.location.href="home.php";
            }
        });
    });
});
</script>
</body>
</html>