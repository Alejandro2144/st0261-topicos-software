<?php

include("conexion.php");

if(isset($_POST['signup'])) {
    if(strlen($_POST['name']) >= 1) {
        $name = trim($_POST['name']);
        $fecha = date("Y-m-d"); 
        $consulta = "INSERT INTO datos(nombre, fecha) VALUES('$name', '$fecha')"; 
        $resultado = mysqli_query($conex, $consulta); 
        if($resultado) {
            ?>
            <h3 class="success"> All ok! </h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error"> Please fill out all fields. </h3>
        <?php
    }
}

?>
