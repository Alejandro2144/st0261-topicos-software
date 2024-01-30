<?php

$conex = mysqli_connect("localhost", "root", "", "registro");

if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
}

?>