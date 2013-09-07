<style type="text/css">
.my-bar {
    margin-top: 10px;
}

.my-table {
    border-spacing: 3px;
    border-collapse: separate;
    width: 780px;
    margin-left: -3px;

    vertical-align: middle;
}
.my-table td, .my-table th {
    padding: 10px 16px;
}
.my-table th {
    font-weight: bold;
}
.my-table tr {
    background: #f0f1ec;
}

.my-table tr:nth-child(2n) {
    background: #ffffff;
}

.upper-text {
    vertical-align: super; font-size: 13px;
}
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $("#tb1arrow").bind('click',function(){
            if ($("#tb1div").is(":visible")) {
                $("#tb1div").slideUp('slow');
            } else {
                $("#tb1div").slideDown('slow');
            }
        });
        $("#tb2arrow").bind('click',function(){
            if ($("#tb2div").is(":visible")) {
                $("#tb2div").slideUp('slow');
            } else {
                $("#tb2div").slideDown('slow');
            }
        });
        $("#tb3arrow").bind('click',function(){
            if ($("#tb3div").is(":visible")) {
                $("#tb3div").slideUp('slow');
            } else {
                $("#tb3div").slideDown('slow');
            }
        });
        $("#tb4arrow").bind('click',function(){
            if ($("#tb4div").is(":visible")) {
                $("#tb4div").slideUp('slow');
            } else {
                $("#tb4div").slideDown('slow');
            }
        });
    });
</script>
<div class="bar my-bar">December 2<span class="upper-text">nd</span>, 2013<span class="arrow-down" id="tb1arrow"></span></div>
<div id="tb1div" style="display: none;">
<table class="my-table">
    <tr>
        <th width="147">Time</th>
        <th width="256">Activity</th>
        <th width="145">Venue</th>
        <th width="220">Dress Code</th>
    </tr>

    <tr>
        <td>08.00 – 16.00 (8.00)</td>
        <td>Event Registration</td>
        <td>Registration Area</td>
        <td rowspan="2"><span class="pull-left">Smart Casual</span><span class="pull-right"><img src="images/Agenda/shirt2_31x27.png"></span></td>
    </tr>
    <tr>
        <td>16.00 – 18.00 (2.00)</td>
        <td>Workshop Preparation Wrap Up</td>
        <td></td>
    </tr>

    <tr>
        <td>18.00 – 19.00 (1.00)</td>
        <td>Team Building #1</td>
        <td>Garden</td>
        <td rowspan="2">
            <span class="pull-left">Smart Casual<br />
            No High-heeled Shoes</span>
            <span class="pull-right" style="margin-top: 10px;"><img src="images/Agenda/shose19x36.png"></span>
        </td>
    </tr>
    <tr>
        <td>19.00 – 23.00 (4.00)</td>
        <td>Welcome Cocktail</td>
        <td>Garden</td>
    </tr>
</table>
</div>

<div class="bar my-bar">December 3<span class="upper-text">rd</span>, 2013<span class="arrow-down" id="tb2arrow"></span></div>
<div id="tb2div" style="display: none;">
<table class="my-table">
    <tr>
        <th width="147">Time</th>
        <th width="256">Activity</th>
        <th width="145">Venue</th>
        <th width="220">Dress Code</th>
    </tr>

    <tr>
        <td>06.00 – 07.00 (1.00)</td>
        <td>Optional Morning Activity</td>
        <td>Defined Areas</td>
        <td>
            <span class="pull-left">Sportswear</span>
            <span class="pull-right"><img src="images/Agenda/shose16x32.png"><img src="images/Agenda/shirt3_24x26.png"><img src="images/Agenda/gg24x16.png"></span>
        </td>
    </tr>
    <tr>
        <td>07.00 – 08.00 (1.00)</td>
        <td>Breakfast</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>08.00 – 08.45 (0.45)</td>
        <td>Opening Ceremony</td>
        <td rowspan="3">Ballroom</td>
        <td rowspan="8"><span class="pull-left">Smart Casual</span><span class="pull-right"><img src="images/Agenda/shirt2_31x27.png"></span></td>
    </tr>
    <tr>
        <td>08.45 – 09.30 (0.45)</td>
        <td>Executive Presentation #1</td>
    </tr>
    <tr>
        <td>09.30 – 10.15 (0.45)</td>
        <td>Executive Presentation #2</td>
    </tr>
    <tr>
        <td>10.15 – 10.30 (0.15)</td>
        <td>Coffee Break</td>
        <td>Break Area</td>
    </tr>
    <tr>
        <td>10.30 – 11.30 (1.00)</td>
        <td>Panel Discussion #1</td>
        <td rowspan="2">Ballroom</td>
    </tr>
    <tr>
        <td>11.30 – 12.15 (0.45)</td>
        <td>Executive Presentation #3</td>
    </tr>
    <tr>
        <td>12.15 – 13.15 (1.00)</td>
        <td>Lunch</td>
        <td></td>
    </tr>
    <tr>
        <td>13.15 – 14.00 (0.45)</td>
        <td>Executive Presentation #4</td>
        <td>Ballroom</td>
    </tr>
    <tr>
        <td>14.00 – 19.00 (5.00)</td>
        <td>Team Building #2</td>
        <td>Meet in Lobby</td>
        <td>
            <span class="pull-left"><b>Polo shirt with pants<br />
and sneakers.</b><br />
Short pants, skirts,<br />
vest and strapless<br />
are not allowed</span>
            <span class="pull-right text-center">
                <p>
                    <img src="images/Agenda/shirt4_24x26.png">
                </p>
                <img src="images/Agenda/pant34x16.png"><br />
                <img src="images/Agenda/shose16x32.png"><br />
            </span>
        </td>
    </tr>
    <tr>
        <td>19.00 – 19.20 (0.20)</td>
        <td>Fresh Up</td>
        <td>Private Room</td>
        <td rowspan="3">
            <span class="pull-left">
                Smart Casual
            </span>
            <span class="pull-right text-center">
        <img src="images/Agenda/shirt2_31x27.png">
        </span>
        </td>
    </tr>
    <tr>
        <td>19.20 – 23.30 (4.10)</td>
        <td>Dinner Party</td>
        <td>Meet in Lobby</td>
    </tr>
    <tr>
        <td>23.30 – 24.00 (0.30)</td>
        <td>Return to Hotel</td>
        <td></td>
    </tr>
</table>
</div>
<div class="bar my-bar">December 4<span class="upper-text">th</span>, 2013<span class="arrow-down" id="tb3arrow"></span></div>
<div id="tb3div" style="display: none;">
<table class="my-table">
    <tr>
        <th width="147">Time</th>
        <th width="256">Activity</th>
        <th width="145">Venue</th>
        <th width="220">Dress Code</th>
    </tr>
    <tr>
        <td>06.00 – 07.00 (1.00)</td>
        <td>Optional Morning Activity</td>
        <td>Defined Areas</td>
        <td>
            <span class="pull-left">Sportswear</span>
            <span class="pull-right"><img src="images/Agenda/shose16x32.png"><img src="images/Agenda/shirt3_24x26.png"><img src="images/Agenda/gg24x16.png"></span>
        </td>
    </tr>
    <tr>
        <td>07.00 – 08.00 (1.00)</td>
        <td>Breakfast</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>08.00 – 08.15 (0.15)</td>
        <td>Day Overview</td>
        <td rowspan="2">Ballroom</td>
        <td rowspan="8"><span class="pull-left">Smart Casual</span><span class="pull-right"><img src="images/Agenda/shirt2_31x27.png"></span></td>
    </tr>
    <tr>
        <td>08.15 – 09.00 (0.45)</td>
        <td>Executive Presentation #5</td>
    </tr>
    <tr>
        <td>09.00 – 11.45 (2.45)</td>
        <td>Technology Exhibitions  + Coffee Break</td>
        <td></td>
    </tr>
    <tr>
        <td>11.45 – 12.45 (1.00)</td>
        <td>Lunch</td>
        <td></td>
    </tr>
    <tr>
        <td>12.45 – 13.45 (1.00)</td>
        <td>Motivational  Speaker</td>
        <td rowspan="2">Ballroom</td>
    </tr>
    <tr>
        <td>13.45 – 14.45 (1.00)</td>
        <td>Panel Discussion #2</td>
    </tr>
    <tr>
        <td>14.45 – 15.00 (0.15)</td>
        <td>Coffee Break</td>
        <td>Break Area</td>
    </tr>
    <tr>
        <td>15.00 – 17.30 (2.30)</td>
        <td>Workshops</td>
        <td>Break Out Rooms</td>
    </tr>
    <tr>
        <td>17.30 – 18.00 (0.30)</td>
        <td>Self Preparation</td>
        <td>Private Room</td>
        <td rowspan="2">
            <span class="pull-left">Casual Dress</span>
            <span class="pull-right">
                <img src="images/Agenda/pant29x22.png">
                <img src="images/Agenda/shirt1_28x29.png">
            </span>
        </td>
    </tr>
    <tr>
        <td>18.00 – 23.00 (5.00)</td>
        <td>Dinner Party</td>
        <td>Meet in Lobby</td>
    </tr>
    <tr>
        <td>23.00 – 23.45 (0.45)</td>
        <td>Return to Hotel</td>
        <td></td>
        <td></td>
    </tr>
</table>
</div>
<div class="bar my-bar">December 5<span class="upper-text">th</span>, 2013<span class="arrow-down" id="tb4arrow"></span></div>
<div id="tb4div" style="display: none;">
<table class="my-table">
    <tr>
        <th width="147">Time</th>
        <th width="256">Activity</th>
        <th width="145">Venue</th>
        <th width="220">Dress Code</th>
    </tr>
    <tr>
        <td>06.00 – 07.00 (1.00)</td>
        <td>Optional Morning Activity</td>
        <td>Defined Areas</td>
        <td>
            <span class="pull-left">Sportswear</span>
            <span class="pull-right"><img src="images/Agenda/shose16x32.png"><img src="images/Agenda/shirt3_24x26.png"><img src="images/Agenda/gg24x16.png"></span>
        </td>
    </tr>
    <tr>
        <td>07.00 – 08.00 (1.00)</td>
        <td>Breakfast</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>08.00 – 08.15 (0.15)</td>
        <td>Day Overview</td>
        <td>Ballroom</td>
        <td rowspan="11"><span class="pull-left">Smart Casual</span><span class="pull-right"><img src="images/Agenda/shirt2_31x27.png"></span></td>
    </tr>
    <tr>
        <td>08.15 – 10.15 (2.00)</td>
        <td>Workshop Presentations<br />
            (4Groups x 30Mins.)</td>
        <td></td>
    </tr>
    <tr>
        <td>10.15 – 10.30 (0.15)</td>
        <td>Coffee Break</td>
        <td>Break Area</td>
    </tr>
    <tr>
        <td>10.30 – 11.15 (0.45)</td>
        <td>Guest of Honor (???)</td>
        <td rowspan="2">Ballroom</td>
    </tr>
    <tr>
        <td>11.15 – 12.00 (0.45)</td>
        <td>Executive Presentation #6</td>
    </tr>
    <tr>
        <td>12.00 – 13.00 (1.00)</td>
        <td>Lunch</td>
        <td></td>
    </tr>
    <tr>
        <td>13.00 – 14.00 (1.00)</td>
        <td>Panel Discussion #3 (Clients)</td>
        <td>Ballroom</td>
    </tr>
    <tr>
        <td>14.00 – 14.15 (0.15)</td>
        <td>Coffee Break</td>
        <td>Break Area</td>
    </tr>
    <tr>
        <td>14.15 – 14.30 (0.15)</td>
        <td>Workshop Feedback</td>
        <td rowspan="3">Ballroom</td>
    </tr>
    <tr>
        <td>14.30 – 15.30 (1.00)</td>
        <td>Paal Keynote Speech / Round Table</td>
    </tr>
    <tr>
        <td>15.30 – 16.00 (0.30)</td>
        <td>Interchange Closing</td>
    </tr>
    <tr>
        <td>16.00 – 16.20 (0.20)</td>
        <td>Fresh Up</td>
        <td>Private Room</td>
        <td rowspan="2">
            <span class="pull-left">Provided Dress<br />
No High-heeled Shoes</span>
            <span class="pull-right">
                <img src="images/Agenda/shose19x36.png">
            </span>
        </td>
    </tr>
    <tr>
        <td>16.20 – 23.00 (6.40)</td>
        <td>Gala Dinner Party</td>
        <td>Meet in Lobby</td>
    </tr>
    <tr>
        <td>23.00 – 24.00 (1.00)</td>
        <td>Return to Hotel</td>
        <td></td>
        <td></td>
    </tr>
</table>
</div>