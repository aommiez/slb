<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=admin_slb', 'admin_slb', '111111');
$registers = $pdo->query("SELECT * FROM registers")->fetchAll();
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta http-equiv="content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=940,  maximum-scale=2">
    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">


    <style type="text/css" title="currentStyle">
        @import "media/demo_page.css";
        @import "media/demo_table.css";
        @import "media/css/TableTools.css";
    </style>
    <script type="text/javascript" charset="utf-8" src="media/jquery.js"></script>
    <link rel="stylesheet" media="screen" href="css/font-face.css">
    <script type="text/javascript" src="media/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" src="media/js/ZeroClipboard.js"></script>
    <script type="text/javascript" charset="utf-8" src="media/js/TableTools.js"></script>
    <link rel="stylesheet" media="screen" href="css/jquery.dataTables.css">

    <title>interchange bangkok 2013</title>
</head>
<body>
<div class="container">
    <table id="data_table_1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($registers as $key=>$value){?>
            <tr>
                <td><?php echo $value['id'];?></td>
                <td><?php echo $value['first_name'].' '.$value['last_name'];?></td>
                <td><?php echo $value['email_address'];?></td>
                <td><?php echo $value['mobile_phone_number'];?></td>
                <td><?php echo $value['contry_of_assignment'];?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <script type="text/javascript">
        $(function(){
            $('#data_table_1').dataTable({
                "sDom": 'T<"clear">lfrtip',
                "oTableTools": {
                    "sSwfPath": "media/swf/copy_csv_xls_pdf.swf"
                }
            });
        });
    </script>
</div>
</body>
</html>