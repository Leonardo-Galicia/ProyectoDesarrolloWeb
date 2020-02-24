<?php
	
	$conexion = mysqli_connect("localhost","root","","abdarqueologia");
    if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }else{
        
    }
	
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

    $analisisPastas = "SELECT Fecha, Cuadrante, Sitio, Patron, Utme, Utmn, Latitud, Analizo, Bolsa, Tipo, Tratamiento, Modificacion, FormasTratamientos, Peso, TotalFragmentos, Observaciones FROM analisispastas WHERE Fecha = '$fecha', Cuadrante = '$cuadrante', Sitio = '$sitio', Patron = '$patron', Utme  = '$utme', Utmn = '$utmn', Latitud = '$latitud', Analizo = '$analizo', Bolsa = '$bolsa', Tipo = '$tipo', Tratamiento = '$tratamiento', Modificacion = '$modificacion', FormasTratamientos = '$formastratamientos', Peso = '$peso', TotalFragmentos = '$totalfragmentos', Observaciones = '$observaciones'";/*se filtra para buscar informacion*/
    $result = $conexion->query($analisisPastas);
    $count = mysqli_num_rows($result);
	
	$sql = "INSERT INTO analisispastas (Fecha, Cuadrante, Sitio, Patron, Utme, Utmn, Latitud, Analizo, Bolsa, Tipo, Tratamiento, Modificacion, FormasTratamientos, Peso, TotalFragmentos, Observaciones) VALUES ('$fecha', '$cuadrante', '$sitio', '$patron', '$utme', '$utmn', '$latitud', '$analizo', '$bolsa', '$tipo', '$tratamiento', '$modificacion', '$formartratamientos', '$peso', '$totalfragmentos', '$observaciones')";
	$resultado = $mysqli->query($sql);
	$id_insert = $mysqli->insert_id;
	
	if($_FILES["archivo"]["error"]>0){
		echo "Error al cargar archivo";	
		} else {
		
		$permitidos = array("image/jpeg","image/png");
		$limite_kb = 200;
		
		if(in_array($_FILES["archivo"]["type"], $permitidos) && $_FILES["archivo"]["size"] <= $limite_kb * 1024){
			
			$ruta = 'files/'.$id_insert.'/';
			$archivo = $ruta.$_FILES["archivo"]["name"];
			
			if(!file_exists($ruta)){
				mkdir($ruta);
			}
			
			if(!file_exists($archivo)){
				
				$resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
				
				if($resultado){
					echo "Archivo Guardado";
					} else {
					echo "Error al guardar archivo";
				}
				
				} else {
				echo "Archivo ya existe";
			}
			
			} else {
			echo "Archivo no permitido o excede el tamaño";
		}
		
	}
    header('Location: http://localhost/Proyecto-Arqueologico/nuevoRegistro.php?guardar=correcto');
?>