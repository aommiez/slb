<?php
$days2 = $pdo->query("SELECT * FROM galleries WHERE day='2'")->fetchAll(PDO::FETCH_ASSOC);
$days3 = $pdo->query("SELECT * FROM galleries WHERE day='3'")->fetchAll(PDO::FETCH_ASSOC);
$days4 = $pdo->query("SELECT * FROM galleries WHERE day='4'")->fetchAll(PDO::FETCH_ASSOC);
$days5 = $pdo->query("SELECT * FROM galleries WHERE day='5'")->fetchAll(PDO::FETCH_ASSOC);
?>
<style type="text/css">
.picture-list {
    padding-bottom: 20px;
}
.grid {
width: 177px;
float: left;
margin: 22px 0 0 22px;
text-align: center;
}
.whos-thumb {
background: url('images/WhosComing_Executives/whos_191x177.png') no-repeat;
width: 177px;
padding: 2px;
height: 191px;
box-sizing: border-box;
cursor: pointer;
}
.whos-thumb.fl {
    margin-left: 0;
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

.arrow-down {
    cursor: pointer;
}
</style>
<div>
    <div class="bar my-bar">December 2<span class="upper-text">nd</span>, 2013<span class="arrow-down" day="2"></span></div>
    <div class="picture-list" day="2">
        <?php foreach($days2 as $key => $picture){?>
            <div class="grid whos-thumb hide">
                <p>
                    <a class="fancybox" rel="day2" href="img_gallery/ori_<?php echo $picture['path'];?>">
                        <img src="img_gallery/<?php echo $picture['path'];?>">
                    </a>
                </p>
            </div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
    <div class="bar my-bar">December 3<span class="upper-text">rd</span>, 2013<span class="arrow-down" day="3"></span></div>
    <div class="picture-list" day="3">
        <?php foreach($days3 as $key => $picture){?>
            <div class="grid whos-thumb hide">
                <p>
                    <a class="fancybox" rel="day3" href="img_gallery/ori_<?php echo $picture['path'];?>">
                        <img src="img_gallery/<?php echo $picture['path'];?>">
                    </a>
                </p>
            </div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
    <div class="bar my-bar">December 4<span class="upper-text">th</span>, 2013<span class="arrow-down" day="4"></span></div>
    <div class="picture-list" day="4">

        <?php foreach($days4 as $key => $picture){?>
            <div class="grid whos-thumb hide">
                <p>
                    <a class="fancybox" rel="day4" href="img_gallery/ori_<?php echo $picture['path'];?>">
                        <img src="img_gallery/<?php echo $picture['path'];?>">
                    </a>
                </p>
            </div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
    <div class="bar my-bar">December 5<span class="upper-text">th</span>, 2013<span class="arrow-down" day="5"></span></div>
    <div class="picture-list" day="5">

        <?php foreach($days5 as $key => $picture){?>
            <div class="grid whos-thumb hide">
                <p>
                    <a class="fancybox" rel="day5" href="img_gallery/ori_<?php echo $picture['path'];?>">
                        <img src="img_gallery/<?php echo $picture['path'];?>">
                    </a>
                </p>
            </div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
    <div class="end-icon"></div>
</div>
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css">
<script type="text/javascript" src="source/jquery.fancybox.js"></script>
<script tpye="text/css">
$(function(){
    $('.arrow-down').click(function(e){
        e.preventDefault();
        var day = $(this).attr('day');
        var list = $('.picture-list[day="'+day+'"]');

        var el = list.find('.whos-thumb:visible').first();
        for(var i=0;i<8;i++){
            if(el.size()==0)
                el = list.find('.whos-thumb:last');
            else
                el = el.prev();

            if(el.size()==0){
                setUpfancy(list);
            } else {
                el.show();
            }

        }

        setUpmarginLeft(list);
        setUpfancy(list);
    }).click();

    function setUpfancy(context)
    {
        $(document).unbind('click.fb-start');

        $(".whos-thumb:visible .fancybox").fancybox({
            prevEffect		: 'none',
            nextEffect		: 'none'
        });
    }

    function setUpmarginLeft(context)
    {
        var el = context.find('.whos-thumb:visible').removeClass('fl').first();
        var i=0;
        while(el.size()!=0){
            i++;
            if(i%4==1){
                el.addClass('fl');
            }
            el = el.next();
        }
    }

    setUpfancy();
});
</script>