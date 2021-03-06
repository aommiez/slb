<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/
include('pdo.php');
include('SimpleImage/src/abeautifulsite/SimpleImage.php');

// Define a destination
$targetFolder = 'img_gallery';

try {
    $pdo->beginTransaction();
    if(!$pdo->query("INSERT INTO galleries(day) VALUES('{$_POST['day']}')")){
        //var_dump($pdo->errorInfo());
        throw new Exception('error');
    }
    $id = $pdo->lastInsertId();

    $tempFile = $_FILES['Filedata']['tmp_name'];
    $targetPath = $targetFolder;

// Validate the file type
    $fileTypes = array('jpg','jpeg','gif','png'); // File extensions
    $fileParts = pathinfo($_FILES['Filedata']['name']);
    $fileParts['extension'] = strtolower($fileParts['extension']);

    if (in_array($fileParts['extension'], $fileTypes)) {

        $file_name = $id.'.'.$fileParts['extension'];
        $file_name_ori = 'ori_'.$id.'.'.$fileParts['extension'];
        $targetFile = $targetPath.'/'.$file_name;
        $targetFileOri = $targetPath.'/'.$file_name_ori;

        $img = new abeautifulsite\SimpleImage($tempFile);
        $img->save($targetFileOri);
        chmod($targetFileOri, '0777');
        $img->resize(182,182)->save($targetFile);
        chmod($targetFile, '0777');

        if(!$pdo->query("UPDATE galleries SET path='{$file_name}' WHERE id='{$id}'")){
            //var_dump($pdo->errorInfo());
            throw new Exception('error');
        }
        echo '1';
    } else {
        echo 'Invalid file type.';
    }
    $pdo->commit();
}
catch (Exception $e) {
    $pdo->rollBack();
}