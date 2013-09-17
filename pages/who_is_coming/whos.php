<?php

$type = isset($_GET['type'])? $_GET['type']: 'executives';

$result = $pdo->query("SELECT * FROM whos WHERE type='{$type}'");
$whos = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<style type="text/css">
.grid {
    width: 177px;
    float: left;
    margin: 22px 0 0 22px;
    text-align: center;
}
.whos-all {
    margin-left: -22px;
}
.whos-thumb {
    background: url('images/WhosComing_Executives/whos_191x177.png') no-repeat;
    width: 177px;
    padding: 2px;
    box-sizing: border-box;
}

.type-page {
    height: 21px;
    margin: 0 auto;
    font-size: 20px;
    line-height: 21px;
}

.whos-thumb {
    text-shadow: none;
}

</style>

<div>
    <p class="text-center type-page">
        <img src="img/leftLine.png">
        <?php
        if($type=='executives'){ echo "Executives"; }
        else if($type=='participants'){ echo "Participants"; }
        else { echo "Interchange Team"; }
        ?>
        <img src="img/rightLine.png">
    </p>
    <div class="whos-all">
        <?php foreach($whos as $key => $who){?>
            <?php if($key%4==0){?>
                <div class="clearfix"></div>
            <?php }?>
        <div class="grid whos-thumb">
            <p><img src="img_whos/<?php echo $who['path'];?>"></p>
            <p><b><?php echo $who['title'];?></b></p>
            <p><?php
                //echo strlen($who['description'])>20? substr($who['description'], 0, 20)."...": $who['description'];
                echo $who['description'];
            ?></p>
        </div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
</div>

<div class="clearfix"></div>
<div class="end-icon"></div>
<a href="home.php?page=who_is_coming" class="back-icon"></a>
