<style type="text/css">
.picture {
    float: left;
    text-align: center;
    margin: 22px 0 0 22px;
}

.picture:nth-child(4n-3){
    margin-left: 0;
}
.thumb-block {
    background: url('images/Gallery/GALLERY177x177.png');
    width: 177px;
    height: 177px;
    display: block;
}

.picture a {
    color: inherit;
}

.upper-text {
    vertical-align: super; font-size: 13px;
}

.bar {
    margin-top: 14px;
}
</style>
<div>
    <div class="bar my-bar">December 2<span class="upper-text">nd</span>, 2013<span class="arrow-down"></span></div>
    <div class="picture-list">
        <?php for($i=0; $i<4; $i++){?>
            <div class="picture">
                <a href="home.php?page=gallery/album&id=1">
                    <p class="thumb-block">

                    </p>
                    <p><b>Album Name</b><br />Time 06.00-08.00</p>
                </a>
            </div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
    <div class="bar my-bar">December 3<span class="upper-text">rd</span>, 2013<span class="arrow-down"></span></div>
    <div class="picture-list">
        <?php for($i=0; $i<8; $i++){?>
            <div class="picture">
                <a href="home.php?page=gallery/album&id=1">
                    <p class="thumb-block">

                    </p>
                    <p><b>Album Name</b><br />Time 06.00-08.00</p>
                </a>
            </div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
    <div class="bar my-bar">December 4<span class="upper-text">th</span>, 2013<span class="arrow-down"></span></div>
    <div class="picture-list">
        <?php for($i=0; $i<8; $i++){?>
            <div class="picture">
                <a href="home.php?page=gallery/album&id=1">
                    <p class="thumb-block">

                    </p>
                    <p><b>Album Name</b><br />Time 06.00-08.00</p>
                </a>
            </div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
    <div class="bar my-bar">December 5<span class="upper-text">th</span>, 2013<span class="arrow-down"></span></div>
    <div class="picture-list">
        <?php for($i=0; $i<8; $i++){?>
            <div class="picture">
                <a href="home.php?page=gallery/album&id=1">
                    <p class="thumb-block">

                    </p>
                    <p><b>Album Name</b><br />Time 06.00-08.00</p>
                </a>
            </div>
        <?php }?>
        <div class="clearfix"></div>
    </div>
    <div class="end-icon"></div>
</div>