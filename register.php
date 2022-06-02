<?php

include("con_db.php");

if (isset($_POST['register'])) {

    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $codigo_postal = trim($_POST['codigo_postal']);
    $dni = trim($_POST['dni']);
    $tipo_vehiculo = trim($_POST['tipo_vehiculo']);
    $antiguedad_carnet = trim($_POST['antiguedad_carnet']);
    $multipropietario = trim($_POST['multipropietario']);
    $valor_vehiculo = trim($_POST['valor_vehiculo']);
    $plazos_pago = trim($_POST['plazos_pago']);
    $aceptado = false;

    if ($antiguedad_carnet === 'si' || $valor_vehiculo < 50000 || $plazos_pago < 4) {
        $aceptado = true;
    }

    $consulta = "INSERT INTO datos_contratacion(nombre, email, dni, codigo_postal, tipo_vehiculo, antiguedad_carnet, multipropietario, valor_vehiculo, plazos_pago, aceptado) VALUES ('$nombre','$email','$dni', '$codigo_postal','$tipo_vehiculo','$antiguedad_carnet','$multipropietario','$valor_vehiculo','$plazos_pago' '$aceptado')";


    $resultado = mysqli_query($conex, $consulta);
    if ($resultado) {
?>
        <?php
        if ($aceptado) {
        ?>
            <h3 class="ok">¡Tu poliza ha sido aceptada!</h3>
        <?php
        } else {
        ?>
            <h3 class="ok">¡Lo sentimos, tu poliza ha sido rechaza</h3>
        <?php
        }
        ?>

    <?php
    } else {
    ?>
        <h3 class="bad">Error</h3>

    <?php
    }

    ?>

<?php
}


?>