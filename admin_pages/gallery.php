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
        foreach($_POST['del'] as $key=> $value){
            if($value=='yes' && $result = $pdo->query("SELECT * FROM galleries WHERE id='{$key}' LIMIT 1")){
                if($result->rowCount()==0)
                    continue;
                $item = $result->fetch();
                @unlink('img_gallery/'.$item['path']);
                @unlink('img_gallery/ori_'.$item['path']);
                if(!$pdo->query("DELETE FROM galleries WHERE id='{$key}' LIMIT 1")){
                    throw new Exception('');
                }
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

$day = isset($_GET['day'])? $_GET['day']: "2";
$galleries = $pdo->query("SELECT * FROM galleries WHERE day='{$day}'")->fetchAll(PDO::FETCH_ASSOC);
?>
<ul class="nav nav-pills">
    <li <?php if($day=='2') echo 'class="active"';?>>
        <a href="admin.php?page=gallery&day=2">2</a>
    </li>
    <li <?php if($day=='3') echo 'class="active"';?>>
        <a href="admin.php?page=gallery&day=3">3</a>
    </li>
    <li <?php if($day=='4') echo 'class="active"';?>>
        <a href="admin.php?page=gallery&day=4">4</a>
    </li>
    <li <?php if($day=='5') echo 'class="active"';?>>
        <a href="admin.php?page=gallery&day=5">5</a>
    </li>
</ul>
<div style="padding: 20px;">
    <h3>Upload Gallery</h3>
    <div id="file_upload_1"></div>
</div>
<style type="text/css">
.t-block {
    position: relative;
}
.t-block.del {
    background: rgba(255,0,0,0.3);
}

.t-block .del-button {
    position: absolute;
    top: 2px;
    right: 2px;
    cursor: pointer;
    display: none;
}

.t-block:hover .del-button {
    display: block;
}
</style>
<form method="post">
    <ul class="thumbnails">
        <?php foreach($galleries as $value){?>
            <li class="span3 t-block">
                <div class="thumbnail">
                    <p class="text-center"><img src="img_gallery/<?php echo $value['path'];?>" height="100"></p>
                </div>
                <span class="icon-remove del-button"></span>
                <input class="is-del" type="hidden" name="del[<?php echo $value['id'];?>]" value="no">
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
        'debug'    : true,
        //'preventCaching' : false,
        formData: { day: '<?php echo $day;?>' },
       // 'script': 'uploadify_gallery.php',
        swf           : 'uploadify/uploadify.swf',
        uploader      : 'uploadify_gallery.php',
        'onQueueComplete' : function(queueData) {
            //alert(queueData.uploadsSuccessful);
           // window.location.reload();
        },
        'onUploadError' : function(file, errorCode, errorMsg, errorString) {
            alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
        }
    });

    $('.del-button').click(function(e){
        var tb = $(this).closest('.t-block');
        tb.toggleClass('del');
        if(tb.hasClass('del'))
            $('.is-del', tb).val('yes');
        else
            $('.is-del', tb).val('no');
    });
});
</script>