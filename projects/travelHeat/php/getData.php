<?php

$serverName = "50.62.209.72:3306";
$userName = "hmuser";
$password = "nnjjswat.48";
$dbName = "HeatMapDb";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);
$result = mysqli_query($conn, "SELECT * FROM Locations");

$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}

echo json_encode($data);
exit();