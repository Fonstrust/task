<?php
include_once('../elems/db.php');

if ($_POST['set_changes']) {
    $preview = $_POST['set-preview'];
    $name = $_POST['set-name'];
    $surname = $_POST['set-surname'];
    $portions = $_POST['set-portions'];
    $present = $_POST['set-present'];
    $weight = $_POST['set-weight'];
    $contains = $_POST['set-contains'];
    $disable = $_POST['set-disable'];
    
    $preview2 = $_POST['set-preview2'];
    $name2 = $_POST['set-name2'];
    $surname2 = $_POST['set-surname2'];
    $portions2 = $_POST['set-portions2'];
    $present2 = $_POST['set-present2'];
    $weight2 = $_POST['set-weight2'];
    $contains2 = $_POST['set-contains2'];
    $disable2 = $_POST['set-disable2'];
    
    $preview3 = $_POST['set-preview3'];
    $name3 = $_POST['set-name3'];
    $surname3 = $_POST['set-surname3'];
    $portions3 = $_POST['set-portions3'];
    $present3 = $_POST['set-present3'];
    $weight3 = $_POST['set-weight3'];
    $contains3 = $_POST['set-contains3'];
    $disable3 = $_POST['set-disable3'];
    
    mysqli_query($link, "UPDATE `task` SET `preview` = '".$preview."', `name` = '".$name."', `surname` = '".$surname."', `portions` = '".$portions."', `present` = '".$present."', `weight` = '".$weight."', `contains` = '".$contains."', `disable` = '".$disable."' WHERE `ID` = 1");
    mysqli_query($link, "UPDATE `task` SET `preview` = '".$preview2."', `name` = '".$name2."', `surname` = '".$surname2."', `portions` = '".$portions2."', `present` = '".$present2."', `weight` = '".$weight2."', `contains` = '".$contains2."', `disable` = '".$disable2."' WHERE `ID` = 2");
    mysqli_query($link, "UPDATE `task` SET `preview` = '".$preview3."', `name` = '".$name3."', `surname` = '".$surname3."', `portions` = '".$portions3."', `present` = '".$present3."', `weight` = '".$weight3."', `contains` = '".$contains3."', `disable` = '".$disable3."' WHERE `ID` = 3");

    mysqli_close($link);
    header('Location: ../index.php');
}
