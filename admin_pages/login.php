<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nuiz
 * Date: 16/9/2556
 * Time: 2:25 น.
 * To change this template use File | Settings | File Templates.
 */
if($_SERVER['REQUEST_METHOD']=='POST'){
    if($_POST['username']=='admin' && $_POST['password']=='123456'){
        $_SESSION['admin_login'] = true;
        echo <<<HTML
    <script type="text/javascript">
    window.location.href = "admin.php";
    </script>
HTML;
    }
}
?>
<form method="post">
    <legend>Admin login</legend>
    <label>username</label>
    <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>">
    <label>password</label>
    <input type="password" name="password">
    <div>
        <button class="btn" type="submit">Submit</button>
    </div>
</form>