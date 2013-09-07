<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nuiz
 * Date: 4/9/2556
 * Time: 14:04 น.
 * To change this template use File | Settings | File Templates.
 */
?>
<style type="text/css">
.meeting-menu {
    width: 372px;
    height: 208px;
    position: relative;
    margin-top: 20px;
}

.meeting-shadow {
    background: url('images/Template/DropShadow46x374.png');
    width: 374px;
    height: 46px;
    position: absolute;
    bottom: -30px;
    left: 0;
}

.meeting-display {
    position: absolute;
    z-index: 1;
}

.meeting-content {
    background: rgba(0,0,0,0.6);

    -ms-background: none;
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);

    width: 100%;
    box-sizing: border-box;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 2;
    padding: 10px;

    color: white;
}

.meeting-content a {
    color: #c9ac26;
    font-weight: bold;
    font-size: 12px;

    position: absolute;
    bottom: 10px;
    right: 10px;
}
</style>
<div class="meeting">
    <div class="meeting-menu pull-left">
        <div class="meeting-display">
            <img src="images/Meeting/Hotel208x372.png">
        </div>
        <div class="meeting-content">
            <b>Siam Kempinski Hotel</b>, the most luxury 5 stars hotel in<br />
            the center of Bangkok Metropolitan
            <a href="home.php?page=meeting_info/hotel">more »</a>
        </div>
        <div class="meeting-shadow"></div>
    </div>
    <div class="meeting-menu pull-right">
        <div class="meeting-display">
            <img src="images/Meeting/Visa208x372.png">
        </div>
        <div class="meeting-content">
            Entering Kingdom of Thailand for business is required to obtain
            a Non-Immigrant Category “B” (Business visa) from a Royal
            Thai Embassy or a Royal Thai Consulate-General
            <a href="home.php?page=meeting_info/visa">more »</a>
        </div>
        <div class="meeting-shadow"></div>
    </div>
    <div class="clearfix"></div>
    <div class="meeting-menu pull-left">
        <div class="meeting-display">
            <img src="images/Meeting/Facilities208x372.png">
        </div>
        <div class="meeting-content">
            <b>The electricity in Thailand is</b><br />
            220 volts, 50 cycles/sec. Plugs A & C.<br />
            <a href="home.php?page=meeting_info/facilities">more »</a>
        </div>
        <div class="meeting-shadow"></div>
    </div>
    <div class="meeting-menu pull-right">
        <div class="meeting-display">
            <img src="images/Meeting/Weather208x372.png">
        </div>
        <div style="z-index: 2;
position: absolute;
top: 70px; width: 100%; box-sizing: border-box; padding: 0 10px;">
            <img class="pull-left" src="images/Meeting/day55x97.png" class="pull-left">
            <img class="pull-right" src="images/Meeting/NInight52x98.png">
        </div>
        <div class="meeting-content">
            <b>The Weather on 2-5 December in Bangkok will be</b><br />
            Day :   approximately 31-34 C<br />
            Night : approximately 21-25 C
            <a href="home.php?page=meeting_info/weather">more »</a>
        </div>
        <div class="meeting-shadow"></div>
    </div>
    <div class="clearfix"></div>
    <div class="end-icon"></div>
</div>