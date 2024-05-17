<?php
include ("conexion.php");

if (isset($_POST['register'])) {
    if (
        strlen($_POST['name'])      >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['email'])     >= 1 &&
        strlen($_POST['phone'])     >= 1 &&
        strlen($_POST['password'])  >= 1
    ) {
        $name       = trim($_POST['name']);
        $direction  = trim($_POST['direction']);
        $email      = trim($_POST['email']);
        $phone      = trim($_POST['phone']);
        $password   = trim($_POST['password']);
        $fecha      = date("d/m/y");
        $consulta   = "INSERT INTO datos(nombre,correo,direccion,telefono,contrasena,fecha)
                        VALUES('$name', '$email', '$direction', '$phone', '$password','$fecha')";
        $resultado  = mysqli_query($conex, $consulta);
        if ($resultado) {
            echo "<script>alert('Tu registro se completó');</script>";        
           
        } else {
            echo "<script>alert('Algo ocurrio mal, vuelve a intentar');</script>";                    
        }
    } else {
        echo "<script>alert('Tu registro no se completó, intenta de nuevo');</script>";                    
       
    }

}
?>