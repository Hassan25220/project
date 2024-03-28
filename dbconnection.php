<?php

$server = "localhost";
$serverName = "root";
$password = "";
$database = "printing_press_management";
$connection = null;

try {
    $connection = mysqli_connect($server, $serverName, $password, $database);

    if ($connection) {
        //echo "Data base connection successFull";
    }
} catch (Exception $errormessage) {
    echo $errormessage->getMessage();
}
?>