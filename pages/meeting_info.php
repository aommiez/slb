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
            The Siam Kempinski Hotel will be reserved for all participants for 4 nights from 2nd to 6th Dec. Check-in time is 2 p.m. on 2nd Dec, check-out time is 12 p.m. on 6th Dec. 
            <a href="home.php?page=meeting_info/hotel">more »</a>
        </div>
        <div class="meeting-shadow"></div>
    </div>
    <div class="meeting-menu pull-right">
        <div class="meeting-display">
            <img src="images/Meeting/Visa208x372.png">
        </div>
        <div class="meeting-content">
            All participants are required to obtain a Non-Immigrant Category “B” (Business visa), even though nationals of certain countries are eligible for Tourist visa exemption. 

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
           The event venue will be well prepared for your convenient stay. See more info for electricity system, internet access and currency exchange.
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
            December is high to peak season in Thailand and one of the reasons that is the case is because the weather is brilliant. The temperatures are usually comfortable between 21-34 °C
            <a href="home.php?page=meeting_info/weather">more »</a>
        </div>
        <div class="meeting-shadow"></div>
    </div>
    <div class="clearfix"></div>
    <div class="end-icon"></div>
</div>