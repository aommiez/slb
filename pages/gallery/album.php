<style type="text/css">
.picture-list {
    background: white;
    padding: 6px;
}

.picture {
    float: left;
    margin: 4px;
    background: url('images/Gallery/GALLERY182x182.png') no-repeat;
    width: 182px;
    height: 182px;
}
</style>
<div>
    <div class="bar my-bar">December 2<span class="upper-text">nd</span>, 2013<span class="arrow-down"></span></div>
    <p style="text-align: center; margin: 22px;"><b>Album Name</b><br />Time 06.00-08.00</p>
    <div class="picture-list">
        <?php for($i=0; $i<32; $i++){?>
            <div class="picture">
                <a href="home.php?page=gallery/album?id=1">
                    <p class="thumb-block">

                    </p>
                </a>
            </div>
        <?php }?>
        <div class="clearfix"></div>
        <a href="home.php?page=gallery" class="back-icon"></a>
    </div>
    <div class="end-icon"></div>
</div>