<?php
   $connection = mysqli_connect('localhost', 'eslology_zaza', 'rufus4', 'eslology_pocket');    
    if(!$connection) {
       die("Database connection failed");
    }

        if(isset($_POST['button1'])){
        upPoints1();
            $page = 'index.php';
header('Location: '.$page, true, 303);
exit;
    }
        function upPoints1(){
            global $connection;
          $sql = "UPDATE `kids` SET `points` = `points` -1 WHERE `ID` = 1";
$reso = mysqli_query($connection, $sql);
            $page = 'index.php';
header('Location: '.$page, true, 303);
exit;
    }

        if(isset($_POST['button2'])){
        downPoints1();
    }
        function downPoints1(){
            global $connection;
          $sql = "UPDATE `kids` SET `points` = `points` +1 WHERE `ID` = 1";
$reso = mysqli_query($connection, $sql);
            $page = 'index.php';
header('Location: '.$page, true, 303);
exit;
    }

        if(isset($_POST['button3'])){
        upPoints2();
    }
        function upPoints2(){
            global $connection;
          $sql = "UPDATE `kids` SET `points` = `points` -1 WHERE `ID` = 2";
$reso = mysqli_query($connection, $sql);
            $page = 'index.php';
header('Location: '.$page, true, 303);
exit;
    }

    if(isset($_POST['button4'])){
        downPoints2();
    }
        function downPoints2(){
            global $connection;
          $sql = "UPDATE `kids` SET `points` = `points` +1 WHERE `ID` = 2";
$reso = mysqli_query($connection, $sql);
    }

///////

$sql1 = "SELECT `points` FROM `kids` WHERE `ID` = 1";
$result = mysqli_query($connection, $sql1);
$row = mysqli_fetch_assoc($result);
    $int = $row["points"];
    $up = $int + 1;
    $down = $int - 1;

$sql2 = "SELECT `points` FROM `kids` WHERE `ID` = 2";
$result1 = mysqli_query($connection, $sql2);
$row1 = mysqli_fetch_assoc($result1);
    $int1 = $row1["points"];
    $up1 = $int1 + 1;
    $down1 = $int1 - 1;

?>