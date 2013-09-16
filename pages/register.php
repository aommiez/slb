<?php
session_start();

//test session
//$_SESSION['user_id'] = 'slb';

if($_SERVER['REQUEST_METHOD']=='POST')
{
    include('phpmailer/class.phpmailer.php');

    $pdo->beginTransaction();
    $variables = $_POST;
    $variables['preferred_photo']='';
    $variables['upload_passport_scan']='';

    $keys = array();
    $values = array();
    foreach($variables as $key => $value){
        $keys[] = $key;
        $values[] = "'".$value."'";
    }

    $count = $pdo->query("SELECT COUNT(*) as c FROM registers WHERE username='{$_SESSION['user_id']}'")->fetch(PDO::FETCH_ASSOC);
    $count = $count['c'];

    if($count != 0){
        $q = array();
        foreach($values as $key => $value){
            $q[] = "{$keys[$key]}={$value}";
        }
        $q = implode(',', $q);
        $query = "UPDATE registers SET {$q} WHERE username='{$_SESSION['user_id']}'";
        $st = $pdo->prepare($query);
    }
    else {
        $keys[] = 'username';
        $values[] = "'".$_SESSION['user_id']."'";
        $query = 'INSERT INTO registers('.implode(',', $keys).') VALUES('.implode(',', $values).')';
        $st = $pdo->prepare($query);
    }


    try{
        $a = $st->execute();

        /*
        if(!$a){
            var_dump($st->errorInfo());
            exit();
        }
        */


        //$id = $pdo->lastInsertId();
		//print_r($_FILES['preferred_photo']);

        if(isset($_FILES['preferred_photo'])){
			/*
			$pathinfo = pathinfo($_FILES['preferred_photo']);
            if($pathinfo['extension']!='jpg' && $pathinfo['extension']!='jpeg' && $pathinfo['extension']!='png' && $pathinfo['extension']!='gif'){
                throw new Exception('You can upload file jpg,jpeg,png,gif');
            }*/
		
			$filecheck = basename($_FILES['preferred_photo']['name']);
			 $ext = substr($filecheck, strrpos($filecheck, '.') + 1);

            $preferred_photo = 'preferred_photo/'.$_SESSION['user_id'].'.'.$ext;
            move_uploaded_file($_FILES['preferred_photo']['tmp_name'], $preferred_photo);
            $pdo->query("UPDATE registers SET preferred_photo='{$preferred_photo}' WHERE username='{$_SESSION['user_id']}'");
        }

        if(isset($_FILES['upload_passport_scan'])){
			/*
            $pathinfo = pathinfo($_FILES['upload_passport_scan']);
            if($pathinfo['extension']!='jpg' && $pathinfo['extension']!='jpeg' && $pathinfo['extension']!='png' && $pathinfo['extension']!='gif'){
                throw new Exception('You can upload file jpg,jpeg,png,gif');
            }*/
				
			$filecheck = basename($_FILES['upload_passport_scan']['name']);
			 $ext = substr($filecheck, strrpos($filecheck, '.') + 1);
            $upload_passport_scan = 'passport_scan/'.$_SESSION['user_id'].'.'.$ext;
            move_uploaded_file($_FILES['upload_passport_scan']['tmp_name'], $upload_passport_scan);
            $pdo->query("UPDATE registers SET upload_passport_scan='{$upload_passport_scan}' WHERE username='{$_SESSION['user_id']}'");
        }

        $pdo->commit();

        
        /*
         * SMTP
====
Server: nl0230exchub.mail.slb.com
Port: 587
Encryption: TLS
Username: interchangebkk
Password: ติดต่อผมโดยตรง
         */
        $mail = new PHPMailer();
        $mail->IsSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'nl0230exchub.mail.slb.com';			// Specify main and backup server
        $mail->Port = 587;
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'interchangebkk';                            // SMTP username
        $mail->Password = '2-5 Dec 2013';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
        $mail->From = 'interchangebkk@slb.com';
        $mail->FromName = 'InterChange Bangkok Web Message';
        $mail->AddAddress($_POST['email_address'],$_POST['first_name']);// Add a recipient
        $mail->AddCC('interchangebkk@slb.com');
        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        $mail->IsHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'InterChange Registration Confirmation';
        $mail->Body    = 'Dear '.$_POST['first_name'].
						'<br><br>
						 Thank you for accepting to be part of InterChange Bangkok 2013 and taking the time to register with us. If not done yet, kindly fill in details of your flights as soon as they are available to let us organize transfers in the most convenient way and book your hotel room accordingly.
						 <br><br>To stay on top of InterChange events, we advise you to visit the website on a regular basis. We hope you will find most of the answers to questions you might have about the event.
						 <br><br>
						 Should you have any questions please do not hesitate to contact us anytime. We look forward to meeting you in Bangkok!
						 <br><br>
						 Best Regards,
						 <br><br>
						 InterChange Bangkok Team';
        //$mail->AltBody = 'Thank you for register';
		if(!$mail->Send()) {
            /*
		   echo 'Message could not be sent.';
		   echo 'Mailer Error: ' . $mail->ErrorInfo;
		   exit;
            */
		}
        $alertMessage = ($count>0)? "Edit success.": "Register success.";
        $redirHref = ($count>0)? "home.php?page=register": "home.php";
echo <<<HTML

<script type="text/javascript">
	alert('{$alertMessage}');
    window.location.href = '';
</script>
HTML;
    } catch(Exception $e) {
        $pdo->rollBack();
        echo $e->getMessage();
        throw $e;
    }

}

// user

$result = $pdo->query("SELECT * FROM registers WHERE username='{$_SESSION['user_id']}'");
$old_register = ($result->rowCount()>0)? $result->fetch(PDO::FETCH_ASSOC): false;
function val_field($field)
{
    global $old_register;
    if(isset($old_register[$field]))
        return $old_register[$field];
    else
        return '';
}
?>

<style type="text/css">
.section-div {
    margin-top: 22px;
}

.submit-button {
    background: url('images/Registeration/Submit40x88.png');
    width: 88px;
    height: 40px;
}

.section-div input[type="text"], .section-div textarea {
    border-radius: 0;
}

.date-exp,.date-jui, .datetime-jui {
    background-image: url('images/Registeration/Icon_Date20x19.png');
    background-position: 314px 4px;
    background-repeat: no-repeat;
}
</style>
<div class="section-div">
    <form class="register-form" method="post" enctype="multipart/form-data" >
        <div class="bar section-div">Personal Information</div>
        <div class="section-div">
            <div class="pull-left" style="width: 44%; margin: 0 3%">
                <label>First name</label>
                <input class="input-block-level" type="text" name="first_name" value="<?php echo val_field('first_name');?>" TABINDEX=1>
                <p>
                <label>Gender (F/M)</label>
                    <label class="radio inline"><input type="radio" name="gender" value="Male" <?php if(val_field('gender')=='Male') echo "checked";?>>Male </label>
                    <label class="radio inline"><input type="radio" name="gender" value="Female" TABINDEX=3 <?php if(val_field('gender')=='Female') echo "checked";?>>Female </label>
                </p>
                <label>Nationality</label>
                <input class="input-block-level" type="text" name="nationality" value="<?php echo val_field('nationality');?>" TABINDEX=5>
                <label>Mobile phone number</label>
                <input class="input-block-level" type="text" name="mobile_phone_number" value="<?php echo val_field('mobile_phone_number');?>" TABINDEX=7>
                <label>Country of assignment</label>
                <input class="input-block-level" type="text" name="contry_of_assignment" value="<?php echo val_field('contry_of_assignment');?>" TABINDEX=9>
            </div>
            <div class="pull-left" style="width: 44%; margin: 0 3%">
                <label>Last name</label>
                <input class="input-block-level" type="text" name="last_name" value="<?php echo val_field('last_name');?>" TABINDEX=2>
                <label>GIN number</label>
                <input class="input-block-level" type="text" name="gin_number" value="<?php echo val_field('gin_number');?>" TABINDEX=4>
                <label>Email address</label>
                <input class="input-block-level" type="text" name="email_address" value="<?php echo val_field('email_address');?>" TABINDEX=6>
                <label>Segment</label>
                <input class="input-block-level" type="text" name="segment" value="<?php echo val_field('segment');?>" TABINDEX=8>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="bar section-div">Traveling Information</div>
        <div class="section-div">
            <div class="pull-left" style="width: 44%; margin: 0 3%">
                <label>Passport first name(s)</label>
                <input class="input-block-level" type="text" name="passport_first_name" value="<?php echo val_field('passport_first_name');?>" TABINDEX=10>
                <label>Date of birth (DD/MM/YY)</label>
                <input class="input-block-level date-jui" type="text" name="date_of_birth" value="<?php echo val_field('date_of_birth');?>" TABINDEX=12>
                <label>Country of issue</label>
                <input class="input-block-level" type="text" name="contry_of_issue" value="<?php echo val_field('contry_of_issue');?>" TABINDEX=14>
                <label>Date of Expiration</label>
                <input class="input-block-level date-exp" type="text" name="date_of_expiration" value="<?php echo val_field('date_of_expiration');?>" TABINDEX=16>
                <label>Arrival airline</label>
                <input class="input-block-level" type="text" name="arrival_airline" value="<?php echo val_field('arrival_airline');?>" TABINDEX=18>
                <label>Departure date and time</label>
                <input class="input-block-level datetime-jui" type="text" name="departure_date_and_time" value="<?php echo val_field('departure_date_and_time');?>" TABINDEX=20>
                <label>Departure flight number</label>
                <input class="input-block-level" type="text" name="departure_flight_number" value="<?php echo val_field('departure_flight_number');?>" TABINDEX=22>
                <label>Please confirm your hotel check-in date</label>
                <input class="input-block-level date-jui" type="text" name="check_in_date" value="<?php echo val_field('check_in_date');?>" TABINDEX=23>
				<p>
                <label>Upload passport scan</label>
                <input class="input-block-level" type="file" name="upload_passport_scan" value="<?php echo val_field('upload_passport_scan');?>" TABINDEX=25>
				</p>
				<p>
                <label>Are you travel with family? (Yes/No)</label>
                <label class="radio inline"><input type="radio" name="travel_with_family" value="yes" <?php if(val_field('travel_with_family')=='yes') echo "checked";?> >Yes </label>
                <label class="radio inline"><input type="radio" name="travel_with_family" value="no" <?php if(val_field('travel_with_family')=='no') echo "checked";?> TABINDEX=26> No</label>
				</p>
            </div>
            <div class="pull-left" style="width: 44%; margin: 0 3%">
                <label>Passport last name(s)</label>
                <input class="input-block-level" type="text" name="passport_last_name" value="<?php echo val_field('passport_last_name');?>" TABINDEX=11>
                <label>Passport number</label>
                <input class="input-block-level" type="text" name="passport_number" value="<?php echo val_field('passport_number');?>" TABINDEX=13>
                <label>Date of issue</label>
                <input class="input-block-level date-jui" type="text" name="date_of_issue" value="<?php echo val_field('date_of_issue');?>" TABINDEX=15>
                <label>Arrival date and time</label>
                <input class="input-block-level datetime-jui" type="text" name="arrival_date_and_time" value="<?php echo val_field('arrival_date_and_time');?>" TABINDEX=17>
                <label>Arrival flight number</label>
                <input class="input-block-level" type="text" name="arrival_flight_number" value="<?php echo val_field('arrival_flight_number');?>" TABINDEX=19>
                <label>Departure airline</label>
                <input class="input-block-level" type="text" name="departure_airline" value="<?php echo val_field('departure_airline');?>" TABINDEX=21>

                <div style="height: 65px;"></div>

                <label>Please confirm your hotel check-out date </label>
                <input class="input-block-level date-jui" type="text" name="check_out_date" value="<?php echo val_field('check_out_date');?>" TABINDEX=24>
                <label>Please give us your family details </label>
                <textarea class="input-block-level" name="family_details" value="<?php echo val_field('family_details');?>" TABINDEX=27></textarea>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="bar section-div">Other Information</div>
        <div class="section-div">
            <div class="pull-left" style="width: 44%; margin: 0 3%">
			<p>
                <label>Upload preferred photo</label>
                <input class="input-block-level" type="file" name="preferred_photo" TABINDEX=28>
                <!--<input class="input-block-level" type="file" name="preferred_photo2">-->
                <!--<label>Special requirement</label>
                <input class="input-block-level" type="text" name="special_requirement">-->
				</p>
                <div>
                    <div class="pull-left" style="width: 47%; margin-right: 3%">
                        <label>Weight</label>
                        <input class="input-block-level" type="text" name="weight" value="<?php echo val_field('weight');?>" TABINDEX=30>
                    </div>
                    <div class="pull-left" style="width: 50%;">
                        <label>Height</label>
                        <input class="input-block-level" type="text" name="height" value="<?php echo val_field('height');?>" TABINDEX=31>
                    </div>
                </div>
                <p>
                <label>Shirt size </label>

                <label class="radio inline"><input type="radio" name="body_size" value="xs" <?php if(val_field('body_size')=='xs') echo "checked";?> TABINDEX=32>XS </label>
                <label class="radio inline"><input type="radio" name="body_size" value="s" <?php if(val_field('body_size')=='s') echo "checked";?>>S </label>
                <label class="radio inline"><input type="radio" name="body_size" value="m" <?php if(val_field('body_size')=='m') echo "checked";?>>M </label>
                <label class="radio inline"><input type="radio" name="body_size" value="l" <?php if(val_field('body_size')=='l') echo "checked";?>>L </label>
                <label class="radio inline"><input type="radio" name="body_size" value="xl" <?php if(val_field('body_size')=='xl') echo "checked";?>>XL </label>
                    </p>
<p>
                <label>Pants size </label>

                <label class="radio inline"><input type="radio" name="waistline_size" value="xs" <?php if(val_field('waistline_size')=='xs') echo "checked";?> TABINDEX=33>XS </label>
                <label class="radio inline"><input type="radio" name="waistline_size" value="s" <?php if(val_field('waistline_size')=='s') echo "checked";?>>S </label>
                <label class="radio inline"><input type="radio" name="waistline_size" value="m" <?php if(val_field('waistline_size')=='m') echo "checked";?>>M </label>
                <label class="radio inline"><input type="radio" name="waistline_size" value="l" <?php if(val_field('waistline_size')=='l') echo "checked";?>>L </label>
                <label class="radio inline"><input type="radio" name="waistline_size" value="xl" <?php if(val_field('waistline_size')=='xl') echo "checked";?>>XL </label>
</p>
                <p>
                    <label>Please give us more information of your size details.</label>
                    <input class="input-block-level" type="text" name="size_details" value="<?php echo val_field('size_details');?>" TABINDEX=34>
                </p>
            </div>
            <div class="pull-left" style="width: 44%; margin: 0 3%">
                <label>Favorite color</label>
                <input class="input-block-level" type="text" name="favorite_color" value="<?php echo val_field('favorite_color');?>" TABINDEX=29>
                <label>Allergy or health condition(if any)</label>
                <input class="input-block-level" type="text" name="health_condition" value="<?php echo val_field('health_condition');?>" TABINDEX=35>

                <p>
                <label>Food restriction</label>
                <label class="radio inline"><input type="radio" name="food_restriction" value="No restriction" <?php if(val_field('food_restriction')=='No restriction') echo "checked";?> TABINDEX=36>No restriction </label>
                <label class="radio inline"><input type="radio" name="food_restriction" value="Halal" <?php if(val_field('food_restriction')=='Halal') echo "checked";?>>Halal </label>
                <label class="radio inline"><input type="radio" name="food_restriction" value="Vegetarian" <?php if(val_field('food_restriction')=='Vegetarian') echo "checked";?>>Vegetarian </label>
                </p>
                <p>
                <label>Smoking / Non smoking</label>
                <label class="radio inline"><input type="radio" name="smoke" value="Smoking" TABINDEX=37 <?php if(val_field('smoke')=='Smoking') echo "checked";?>>Smoking </label>
                <label class="radio inline"><input type="radio" name="smoke" value="Non smoking" <?php if(val_field('smoke')=='Non smoking') echo "checked";?>>Non smoking </label>
                </p>
            </div>
            <div class="clearfix"></div>
            <div class="text-center">
                <p class="section-div">
                <img src="images/Registeration/SizeChart577x708.png">
                </p>
                <p  style="text-align: left;margin-left: 28px; width: 200px;">
                    Please fill in other requirement(if any)<br>
                    <textarea style="width: 349px; height: 114px;" name="fill_requirement" value="<?php echo val_field('fill_requirement');?>" TABINDEX=38></textarea>

                </p>
                <p>
                <button class="submit-button" type="submit"></button>
                </p>
            </div>
        </div>
    </form>
</div>
<link rel="stylesheet" type="text/css" href="css/minified/jquery-ui.min.css">

<style type="text/css">
        /* css for timepicker */
    .ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }
    .ui-timepicker-div dl { text-align: left; }
    .ui-timepicker-div dl dt { float: left; clear:left; padding: 0 0 0 5px; }
    .ui-timepicker-div dl dd { margin: 0 10px 10px 45%; }
    .ui-timepicker-div td { font-size: 90%; }
    .ui-tpicker-grid-label { background: none; border: none; margin: 0; padding: 0; }

    .ui-timepicker-rtl{ direction: rtl; }
    .ui-timepicker-rtl dl { text-align: right; padding: 0 5px 0 0; }
    .ui-timepicker-rtl dl dt{ float: right; clear: right; }
    .ui-timepicker-rtl dl dd { margin: 0 45% 10px 10px; }

    input.error {
        background: #FDE5E5;
    }
</style>
<script type="text/javascript" src="js/minified/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript">
$(function(){
    $('.date-jui').datepicker({ changeMonth: true, changeYear: true, yearRange: "1950:2013", dateFormat: 'dd/mm/yy' });
	$('.date-exp').datepicker({ changeMonth: true, changeYear: true, yearRange: "2013:+30", dateFormat: 'dd/mm/yy' });
    $('.datetime-jui').datetimepicker({ dateFormat: 'dd/mm/yy' });
	
    $('.register-form').submit(function(e){
        var i1 = $('input[name="first_name"]');
        var i2 = $('input[name="last_name"]');
        var i3 = $('input[name="email_address"]');
        var i4 = $('input[name="mobile_phone_number"]');
		var i5 = $('input[name="nationality"]');
		var i6 = $('input[name="contry_of_assignment"]');
		var i7 = $('input[name="gin_number"]');
		var i8 = $('input[name="segment"]');
		var i9 = $('input[name="passport_first_name"]');
		var i10 = $('input[name="date_of_birth"]');
		var i11 = $('input[name="contry_of_issue"]');
		var i12 = $('input[name="date_of_expiration"]');
		var i13 = $('input[name="upload_passport_scan"]');
		var i14 = $('input[name="travel_with_family"]');
		var i15 = $('input[name="passport_last_name"]');
		var i16 = $('input[name="passport_number"]');
		//var i17 = $('input[name="date_of_issue"]');
		var i18 = $('input[name="weight"]');
		var i19 = $('input[name="height"]');
		var i20 = $('input[name="body_size"]');
		var i21 = $('input[name="food_restriction"]');
		var i22 = $('input[name="smoke"]');
		var i23 = $('input[name="waistline_size"]');
		var i24 = $('input[name="gender"]');


//24
		if($.trim(i24.val())==''){
            i24.addClass('error').focus();
            $(window).scrollTop(i24.offset().top-30);
            e.preventDefault();
        }
        else {
            i24.removeClass('error');
        }
//23
		if($.trim(i23.val())==''){
            i23.addClass('error').focus();
            $(window).scrollTop(i23.offset().top-30);
            e.preventDefault();
        }
        else {
            i23.removeClass('error');
        }
//22
		if($.trim(i22.val())==''){
            i22.addClass('error').focus();
            $(window).scrollTop(i22.offset().top-30);
            e.preventDefault();
        }
        else {
            i22.removeClass('error');
        }
//21
		if($.trim(i21.val())==''){
            i21.addClass('error').focus();
            $(window).scrollTop(i21.offset().top-30);
            e.preventDefault();
        }
        else {
            i21.removeClass('error');
        }
//20
		if($.trim(i20.val())==''){
            i20.addClass('error').focus();
            $(window).scrollTop(i20.offset().top-30);
            e.preventDefault();
        }
        else {
            i20.removeClass('error');
        }
//19
		if($.trim(i19.val())==''){
            i19.addClass('error').focus();
            $(window).scrollTop(i19.offset().top-30);
            e.preventDefault();
        }
        else {
            i19.removeClass('error');
        }
//18
		if($.trim(i18.val())==''){
            i18.addClass('error').focus();
            $(window).scrollTop(i18.offset().top-30);
            e.preventDefault();
        }
        else {
            i18.removeClass('error');
        }
//17
	/*	if($.trim(i17.val())==''){
            i17.addClass('error').focus();
            $(window).scrollTop(i17.offset().top-30);
            e.preventDefault();
        }
        else 
            i17.removeClass('error');
        }*/
//16
		if($.trim(i16.val())==''){
            i16.addClass('error').focus();
            $(window).scrollTop(i16.offset().top-30);
            e.preventDefault();
        }
        else {
            i16.removeClass('error');
        }
//15
		if($.trim(i15.val())==''){
            i15.addClass('error').focus();
            $(window).scrollTop(i15.offset().top-30);
            e.preventDefault();
        }
        else {
            i15.removeClass('error');
        }
//14
		if($.trim(i14.val())==''){
            i14.addClass('error').focus();
            $(window).scrollTop(i14.offset().top-30);
            e.preventDefault();
        }
        else {
            i14.removeClass('error');
        }
//13
        <?php if(!$old_register){?>
		if($.trim(i13.val())==''){
            i13.addClass('error').focus();
            $(window).scrollTop(i13.offset().top-30);
            e.preventDefault();
        }
        else {
            i13.removeClass('error');
        }
        <?php }?>
//12
		if($.trim(i12.val())==''){
            i12.addClass('error').focus();
            $(window).scrollTop(i12.offset().top-30);
            e.preventDefault();
        }
        else {
            i12.removeClass('error');
        }
//11
		if($.trim(i11.val())==''){
            i11.addClass('error').focus();
            $(window).scrollTop(i11.offset().top-30);
            e.preventDefault();
        }
        else {
            i11.removeClass('error');
        }
//10
		if($.trim(i10.val())==''){
            i10.addClass('error').focus();
            $(window).scrollTop(i10.offset().top-30);
            e.preventDefault();
        }
        else {
            i10.removeClass('error');
        }
//9
		if($.trim(i9.val())==''){
            i9.addClass('error').focus();
            $(window).scrollTop(i9.offset().top-30);
            e.preventDefault();
        }
        else {
            i9.removeClass('error');
        }
//8
		if($.trim(i8.val())==''){
            i8.addClass('error').focus();
            $(window).scrollTop(i8.offset().top-30);
            e.preventDefault();
        }
        else {
            i8.removeClass('error');
        }
//7
		if($.trim(i7.val())==''){
            i7.addClass('error').focus();
            $(window).scrollTop(i7.offset().top-30);
            e.preventDefault();
        }
        else {
            i7.removeClass('error');
        }
//6
		if($.trim(i6.val())==''){
            i6.addClass('error').focus();
            $(window).scrollTop(i6.offset().top-30);
            e.preventDefault();
        }
        else {
            i6.removeClass('error');
        }
//5
		if($.trim(i5.val())==''){
            i5.addClass('error').focus();
            $(window).scrollTop(i5.offset().top-30);
            e.preventDefault();
        }
        else {
            i5.removeClass('error');
        }
//4
        if($.trim(i4.val())==''){
            i4.addClass('error').focus();
            $(window).scrollTop(i4.offset().top-30);
            e.preventDefault();
        }
        else {
            i4.removeClass('error');
        }
//3
        if($.trim(i3.val())==''){
            i3.addClass('error').focus();
            $(window).scrollTop(i3.offset().top-30);
            e.preventDefault();
        }
        else {
            i3.removeClass('error');
        }
//2
        if($.trim(i2.val())==''){
            i2.addClass('error').focus();
            $(window).scrollTop(i2.offset().top-30);
            e.preventDefault();
        }
        else {
            i2.removeClass('error');
        }
//1
        if($.trim(i1.val())==''){
            i1.addClass('error').focus();
            $(window).scrollTop(i1.offset().top-30);
            e.preventDefault();
        }
        else {
            i1.removeClass('error');
        }
    });
});
</script>