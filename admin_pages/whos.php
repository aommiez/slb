<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nuiz
 * Date: 16/9/2556
 * Time: 2:47 น.
 * To change this template use File | Settings | File Templates.
 */
if($_SERVER['REQUEST_METHOD']=='POST'){
    try {
        foreach($_POST['title'] as $key=> $value){
            if(!$pdo->query("UPDATE whos SET title='{$_POST['title'][$key]}', description='{$_POST['description'][$key]}' WHERE id='{$key}'")){
                throw new Exception('');
            }
        }

        echo <<<HTML
<script type="text/javascript">
window.location.reload();
</script>
HTML;

    }
    catch (Exception $e) {

    }
}

$type = isset($_GET['type'])? $_GET['type']: "executives";
$whos = $pdo->query("SELECT * FROM whos WHERE type='{$type}'")->fetchAll(PDO::FETCH_ASSOC);
?>
<ul class="nav nav-pills">
    <li <?php if($type=='executives') echo 'class="active"';?>>
        <a href="admin.php?page=whos&type=executives">executives</a>
    </li>
    <li <?php if($type=='participants') echo 'class="active"';?>>
        <a href="admin.php?page=whos&type=participants">participants</a>
    </li>
    <li <?php if($type=='interchange_team') echo 'class="active"';?>>
        <a href="admin.php?page=whos&type=interchange_team">interchange team</a>
    </li>
</ul>
<div style="padding: 20px;">
    <h3>Upload whos</h3>
    <div id="file_upload_1"></div>
</div>
<form method="post">
    <ul class="thumbnails">
        <?php foreach($whos as $value){?>
        <li class="span3">
            <div class="thumbnail">
                <p class="text-center"><img src="img_whos/<?php echo $value['path'];?>" height="100"></p>
                <label>title</label>
                <input class="input-block-level" type="text" name="title[<?php echo $value['id'];?>]" value="<?php echo $value['title'];?>">
                <label>description</label>
                <input class="input-block-level" type="text" name="description[<?php echo $value['id'];?>]" value="<?php echo $value['description'];?>">
            </div>
        </li>
        <?php }?>
    </ul>
    <p>
        <button class="btn btn-primary" type="submit">Update</button>
    </p>
</form>
<link rel="stylesheet" type="text/css" href="uploadify/uploadify.css">
<script type="text/javascript" src="uploadify/jquery.uploadify.min.js"></script>
<script type="text/javascript">
$(function() {
    $("#file_upload_1").uploadify({
        formData: { type: '<?php echo $_GET['type'];?>' },
        swf           : 'uploadify/uploadify.swf',
        uploader      : 'uploadify_whos.php',
        'onQueueComplete' : function(queueData) {
            window.location.reload();
        }
    });
});
</script>