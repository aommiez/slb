<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['login']);
echo '<script type="text/javascript">window.location.href="index.php"</script>';
/**
 * Created by JetBrains PhpStorm.
 * User: issrapongwongyai
 * Date: 9/6/13 AD
 * Time: 12:07 PM
 * To change this template use File | Settings | File Templates.
 */
