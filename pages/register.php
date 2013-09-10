<?php


if($_SERVER['REQUEST_METHOD']=='POST')
{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=slb', 'root', '');
    $st = $pdo->prepare("INSERT INTO registers(
                first_name,
                gender,
                nationality,
                mobile_phone_number,
                contry_of_assignment,
                last_name,
                gin_number,
                email_address,
                segment,
                passport_first_name,
                date_of_birth,
                contry_of_issue,
                date_of_expiration,
                arrival_airline,
                departure_date_and_time,
                departure_flight_number,
                check_in_date,
                upload_passport_scan,
                travel_with_family,
                passport_last_name,
                passport_number,
                date_of_issue,
                arrival_date_and_time,
                arrival_flight_number,
                departure_airline,
                check_out_date,
                family_details,
                preferred_photo,
                preferred_photo2,
                special_requirement,
                weight,
                height,
                body_size,
                favorite_color,
                health_condition,
                food_restriction,
                smoke,
                fill_ requirement,
                waistline_size,
                size_details
                )
            VALUES(
                :first_name,
                :gender,
                :nationality,
                :mobile_phone_number,
                :contry_of_assignment,
                :last_name,
                :gin_number,
                :email_address,
                :segment,
                :passport_first_name,
                :date_of_birth,
                :contry_of_issue,
                :date_of_expiration,
                :arrival_airline,
                :departure_date_and_time,
                :departure_flight_number,
                :check_in_date,
                :upload_passport_scan,
                :travel_with_family,
                :passport_last_name,
                :passport_number,
                :date_of_issue,
                :arrival_date_and_time,
                :arrival_flight_number,
                :departure_airline,
                :check_out_date,
                :family_details,
                :preferred_photo,
                :preferred_photo2,
                :special_requirement,
                :weight,
                :height,
                :body_size,
                :favorite_color,
                :health_condition,
                :food_restriction,
                :smoke,
                :fill_ requirement,
                :waistline_size,
                :size_details
            )");

    $pdo->beginTransaction();
    $variables = $_POST;
    $variables['preferred_photo']='';
    $variables['preferred_photo2']='';

    try{
        $st->execute($variables);

        $id = $pdo->lastInsertId();
        if(isset($_FILES['preferred_photo'])){
            $pathinfo = pathinfo($_FILES['preferred_photo']);
            if($pathinfo['extension']!='jpg' && $pathinfo['extension']!='jpeg' && $pathinfo['extension']!='png' && $pathinfo['extension']!='gif'){
                throw new Exception('You can upload file jpg,jpeg,png,gif');
            }
            $preferred_photo = 'preferred_photo/'.$id.'.'.$pathinfo['extension'];
            move_uploaded_file($_FILES['preferred_photo']['tmp_name'], $preferred_photo);
            $pdo->query("UPDATE registers SET preferred_photo='{$preferred_photo}' WHERE id='{$id}'");
        }
        if(isset($_FILES['preferred_photo2'])){
            $pathinfo = pathinfo($_FILES['preferred_photo2']);
            if($pathinfo['extension']!='jpg' && $pathinfo['extension']!='jpeg' && $pathinfo['extension']!='png' && $pathinfo['extension']!='gif'){
                throw new Exception('You can upload file jpg,jpeg,png,gif');
            }
            $preferred_photo2 = 'preferred_photo/'.$id.'_2.'.$pathinfo['extension'];
            move_uploaded_file($_FILES['preferred_photo2']['tmp_name'], $preferred_photo2);
            $pdo->query("UPDATE registers SET preferred_photo2='{$preferred_photo2}' WHERE id='{$id}'");
        }
        $pdo->commit();
        echo <<<HTML

<script type="text/javascript">
alert('Register success.');
window.location.href = 'home.php';
</script>
HTML;
        exit();

    } catch(Exception $e) {
        $pdo->rollBack();
        throw $e;
    }

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

.date-jui {
    background-image: url('images/Registeration/Icon_Date20x19.png');
    background-position: right 5px center;
    background-repeat: no-repeat;
}
</style>
<div class="section-div">
    <form method="post">
        <div class="bar section-div">Personal Infomation</div>
        <div class="section-div">
            <div class="pull-left" style="width: 44%; margin: 0 3%">
                <label>First Name</label>
                <input class="input-block-level" type="text" name="first_name">
                <label>Gender (F/M)</label>
                <input class="input-block-level" type="text" name="gender">
                <label>Nationality</label>
                <input class="input-block-level" type="text" name="nationality">
                <label>Mobile phone number</label>
                <input class="input-block-level" type="text" name="mobile_phone_number">
                <label>Country of assignment</label>
                <input class="input-block-level" type="text" name="contry_of_assignment">
            </div>
            <div class="pull-left" style="width: 44%; margin: 0 3%">
                <label>Last Name</label>
                <input class="input-block-level" type="text" name="last_name">
                <label>GIN Number</label>
                <input class="input-block-level" type="text" name="gin_number">
                <label>Email address</label>
                <input class="input-block-level" type="text" name="email_address">
                <label>Segment</label>
                <input class="input-block-level" type="text" name="segment">
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="bar section-div">Traveling Information</div>
        <div class="section-div">
            <div class="pull-left" style="width: 44%; margin: 0 3%">
                <label>Passport First Name(s)</label>
                <input class="input-block-level" type="text" name="passport_first_name">
                <label>Date of birth (DD/MM/YY)</label>
                <input class="input-block-level date-jui" type="text" name="date_of_birth">
                <label>Country of issue</label>
                <input class="input-block-level" type="text" name="contry_of_issue">
                <label>Date of Expiration</label>
                <input class="input-block-level date-jui" type="text" name="date_of_expiration">
                <label>Arrival airline</label>
                <input class="input-block-level" type="text" name="arrival_airline">
                <label>Departure date and time</label>
                <input class="input-block-level" type="text" name="departure_date_and_time">
                <label>Departure flight number</label>
                <input class="input-block-level" type="text" name="departure_flight_number">
                <label>Please confirm check-in date</label>
                <input class="input-block-level date-jui" type="text" name="check_in_date">
                <label>Upload passport scan</label>
                <input class="input-block-level" type="text" name="upload_passport_scan">
                <label>Are you travel with family? (Yes/No)</label>
                <label class="radio inline"><input type="radio" name="travel_with_family" value="yes" checked>Yes </label>
                <label class="radio inline"><input type="radio" name="travel_with_family" value="no"> No</label>
            </div>
            <div class="pull-left" style="width: 44%; margin: 0 3%">
                <label>Passport Last Name(s)</label>
                <input class="input-block-level" type="text" name="passport_last_name">
                <label>Passport number</label>
                <input class="input-block-level" type="text" name="passport_number">
                <label>Date of issue</label>
                <input class="input-block-level date-jui" type="text" name="date_of_issue">
                <label>Arrival date and time</label>
                <input class="input-block-level date-jui" type="text" name="arrival_date_and_time">
                <label>Arrival flight number</label>
                <input class="input-block-level" type="text" name="arrival_flight_number">
                <label>Departure airline</label>
                <input class="input-block-level" type="text" name="departure_airline">

                <div style="height: 65px;"></div>

                <label>Please confirm check-out date </label>
                <input class="input-block-level date-jui" type="text" name="check_out_date">
                <label>Please give us your family details </label>
                <textarea class="input-block-level" name="family_details"></textarea>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="bar section-div">Personal Infomation</div>
        <div class="section-div">
            <div class="pull-left" style="width: 44%; margin: 0 3%">
                <label>Upload 2 preferred photos</label>
                <input class="input-block-level" type="file" name="preferred_photo">
                <!--<input class="input-block-level" type="file" name="preferred_photo2">-->
                <label>Special requirement</label>
                <input class="input-block-level" type="text" name="special_requirement">
                <div>
                    <div class="pull-left" style="width: 47%; margin-right: 3%">
                        <label>Weight</label>
                        <input class="input-block-level" type="text" name="weight">
                    </div>
                    <div class="pull-left" style="width: 50%;">
                        <label>Height</label>
                        <input class="input-block-level" type="text" name="height">
                    </div>
                </div>
                <p>
                <label>Body size </label>

                <label class="radio inline"><input type="radio" name="body_size" value="xs" checked>XS </label>
                <label class="radio inline"><input type="radio" name="body_size" value="s">S </label>
                <label class="radio inline"><input type="radio" name="body_size" value="m">M </label>
                <label class="radio inline"><input type="radio" name="body_size" value="l">L </label>
                <label class="radio inline"><input type="radio" name="body_size" value="xl">XL </label>
                    </p>
<p>
                <label>Waistline size </label>

                <label class="radio inline"><input type="radio" name="waistline_size" value="xs" checked>XS </label>
                <label class="radio inline"><input type="radio" name="waistline_size" value="s">S </label>
                <label class="radio inline"><input type="radio" name="waistline_size" value="m">M </label>
                <label class="radio inline"><input type="radio" name="waistline_size" value="l">L </label>
                <label class="radio inline"><input type="radio" name="waistline_size" value="xl">XL </label>
</p>
                <p>
                    <label>Please give us your size details.</label>
                    <input class="input-block-level" type="text" name="size_details">
                </p>
            </div>
            <div class="pull-left" style="width: 44%; margin: 0 3%">
                <label>Favorite color</label>
                <input class="input-block-level" type="text" name="favorite_color">
                <label>Allergy or health condition</label>
                <input class="input-block-level" type="text" name="health_condition">

                <label>Food restriction</label>
                <label class="radio inline"><input type="radio" name="food_restriction" checked>No restriction </label>
                <label class="radio inline"><input type="radio" name="food_restriction">Halal </label>
                <label class="radio inline"><input type="radio" name="food_restriction">Vegetarian </label>

                <label>Smoke / Non smoke</label>
                <label class="radio inline"><input type="radio" name="smoke" checked>Smoke </label>
                <label class="radio inline"><input type="radio" name="smoke">No smoke </label>

            </div>
            <div class="clearfix"></div>
            <div class="text-center">
                <p class="section-div">
                <img src="images/Registeration/SizeChart577x708.png">
                </p>
                <p  style="text-align: left;margin-left: 28px; width: 200px;">
                    Please fill in other requirement if any<br>
                    <textarea style="width: 349px;
height: 114px;" name="fill_ requirement"></textarea>

                </p>
                <p>
                <button class="submit-button" type="submit"></button>
                </p>
            </div>
        </div>
    </form>
</div>
<link rel="stylesheet" type="text/css" href="css/minified/jquery-ui.min.css">
<script type="text/javascript" src="js/minified/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function(){
    $('.date-jui').datepicker();
});
</script>