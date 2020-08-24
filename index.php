<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $path = "../task/elems/$page.php";
    if (file_exists($path)) {
        $content = $path;
    } 
} else {
    $content = '../task/elems/main.php';
}
include_once('../task/elems/db.php');



$sql = mysqli_query($link, 'SELECT * FROM `task` WHERE `ID` = 1');

while($res = mysqli_fetch_array($sql)){
    $preview = $res['preview']; 
    $name = $res['name'];
    $surname = $res['surname'];
    $portions = $res['portions'];
    $present = $res['present'];
    $weight = preg_replace('#\.#', ',', $res['weight']);
    $contains = $res['contains'];
    $disable = $res['disable'];
}

$sql = mysqli_query($link, 'SELECT * FROM `task` WHERE `ID` = 2');

while($res = mysqli_fetch_array($sql)){
    $preview2 = $res['preview']; 
    $name2 = $res['name'];
    $surname2 = $res['surname'];
    $portions2 = $res['portions'];
    $present2 = $res['present'];
    $weight2 = preg_replace('#\.#', ',', $res['weight']);
    $contains2 = $res['contains'];
    $disable2 = $res['disable'];
}

$sql = mysqli_query($link, 'SELECT * FROM `task` WHERE `ID` = 3');

while($res = mysqli_fetch_array($sql)){
    $preview3 = $res['preview']; 
    $name3 = $res['name'];
    $surname3 = $res['surname'];
    $portions3 = $res['portions'];
    $present3 = $res['present'];
    $weight3 = preg_replace('#\.#', ',', $res['weight']);
    $contains3 = $res['contains'];
    $disable3 = $res['disable'];
}


mysqli_close($link);


include_once('../task/elems/layout.php');