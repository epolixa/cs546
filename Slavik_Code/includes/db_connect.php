<?php
include_once 'psl-config.php';   // As functions.php is not included
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
if(mysqli_connect_errno())
{
    echo mysqli_connect_error();
}
?>