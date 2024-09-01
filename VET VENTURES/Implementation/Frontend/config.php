<?php
$server ="localhost";
$user ="root";
$password ="";
$db ="vetventures";

$con = new mysqli($server, $user, $password, $db);

if($con-> connect_error)
{
    die("connection failed:". $con->connect_error);
}
?>