<style type="text/css">
    .grid-menu {
        width: 243px;
        height: 350px;
        position: relative;
        margin-top: 20px;
    }

    .grid-menu.margin {
        margin-left: 22px;
    }

    .grid-shadow {
        background: url('images/Template/DropShadow46x374.png');
        width: 374px;
        height: 46px;
        position: absolute;
        bottom: -30px;
        left: 0;
    }

    .grid-display {
        position: absolute;
        z-index: 1;
    }

    .grid-content {
        background: rgba(0,0,0,0.6);
        width: 100%;
        box-sizing: border-box;
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: 2;
        padding: 10px;

        color: white;
    }

    .grid-content a {
        color: #c9ac26;
        font-weight: bold;
        font-size: 12px;

        position: absolute;
        bottom: 10px;
        right: 10px;
    }
</style>
<div class="grid">
    <div class="grid-menu pull-left">
        <div class="grid-display">
            <img src="images/WhosComing/Executive350x243.png">
        </div>
        <div class="grid-content">
            <a href="home.php?page=who_is_coming/executives">more »</a>
        </div>
        <div class="grid-shadow"></div>
    </div>
    <div class="grid-menu margin pull-left">
        <div class="grid-display">
            <img src="images/WhosComing/Participant350x243.png">
        </div>
        <div class="grid-content">
            <a href="#">more »</a>
        </div>
        <div class="grid-shadow"></div>
    </div>
    <div class="grid-menu margin pull-left">
        <div class="grid-display">
            <img src="images/WhosComing/Interchange350x243.png">
        </div>
        <div class="grid-content">
            <a href="#">more »</a>
        </div>
        <div class="grid-shadow"></div>
    </div>
    <div class="clearfix"></div>
    <div class="end-icon"></div>
</div>