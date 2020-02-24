<?php
    requiere 'conexion.php';
    $fecha = $_POST['fecha']
    $cuadrante = $_POST['cuadrante']
    $sitio = $_POST['sitio']
    $patron = $_POST['patron']
    $utme = $_POST['utme']
    $utmn = $_POST['utmn']
    $latitud = $_POST['latitud']
    $realizo = $_POST['realizo']
    $bolsa = $_POST['bolsa']
    $tipo = $_POST['tipo']
    $tratamiento = $_POST['tratamiento']
    $modificacion = $_POST['modificacion']
    $formastrata = $_POST['formastrata']
    $totalfrag = $_POST['totalfrag']
    $observaciones = $_POST['observaciones']
    
    $sql = "INSERT INTO analisispastas(Fecha, Cuadrante, Sitio, Patron, Utme, Utmn, Latitud, Analizo, Bolsa, Tipo, Tratamiento, Modificacion, FormasTratamientos, Peso, TotalFragmentos, Observaciones, Mapa) VALUES ('$fecha', '$cuadrante', '$sitio', '$patron', '$utme', '$utmn', '$latitud', '$realizo', '$bolsa', '$tipo', '$tratamiento', '$modificacion', '$formastrata', '$totalfrag', '$observaciones')";
?>