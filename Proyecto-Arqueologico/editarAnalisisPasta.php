<?php

    $conexion = mysqli_connect("localhost","root","","abdarqueologia");
    if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }else{
        
    }
    
    $id = $_POST['idAnalisis'];
    
    $fecha = $_POST['fecha'];
	$cuadrante = $_POST['cuadrante'];
	$sitio = $_POST['sitio'];
	$patron = $_POST['patron'];
    $utme = $_POST['utme'];
	$utmn = $_POST['utmn'];
	$latitud = $_POST['latitud'];
	$analizo = $_POST['analizo'];
    $bolsa = $_POST['bolsa'];
	$tipo = $_POST['tipo'];
	$tratamiento = $_POST['tratamiento'];
	$modificacion = $_POST['modificacion'];
    $formastratamientos = $_POST['formastratamientos'];
	$peso = $_POST['peso'];
	$totalfragmentos = $_POST['totalfragmentos'];
	$observaciones = $_POST['observaciones'];


 $editar = "UPDATE analisispastas SET Fecha = '$fecha', Cuadrante = '$cuadrante', Sitio = '$sitio', Patron = '$patron', Utme  = '$utme', Utmn = '$utmn', Latitud = '$latitud', Analizo = '$analizo', Bolsa = '$bolsa', Tipo = '$tipo', Tratamiento = '$tratamiento', Modificacion = '$modificacion', FormasTratamientos = '$formastratamientos', Peso = '$peso', TotalFragmentos = '$totalfragmentos', Observaciones = '$observaciones' WHERE IdAnalisisPastas = '$id'";
    /*faltaria configurar el id por analisis desde el boton de edicion de Analisis de Pastas*/

 if ($conexion->query($editar) === TRUE) {
    echo "<br />"."<h2>"."Resgristro editado correctamente"."</h2>";
 }
 else {
    echo "Error al crear el usuario.".$editar."<br>".$conexion->error;
 }
 header('Location: http://localhost/Proyecto-Arqueologico/nuevoRegistro.php?editar=correcto');
 mysqli_close($conexion);
?>