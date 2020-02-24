<?php
    if(isset($_FILES["file"])){
        $reporte = null;
        for($x=0; $x<count($_FILES["file"]["name"]); $x++){
            $file = $_FILES["file"];
            $nombre = $file["name"][$x];
            $tipo = $file["type"][$x];
            $ruta_provisional = $file["tmp_name"][$x];
            $size = = $file["size"][$x];
            $dimensiones = getimagessize($ruta_provisional);
            $with = $dimensiones[0];
            $height = $dimensiones[1];
            $carpeta = "imagenes/";
        
            if($tipo != 'image/jpeg' && $tipo != 'image/jpg' && $tipo !='image/png'){
                $reporte .= "<p style='color: red'> Error $nombre, el archivo no es una imagen</p>"  ;
            }else if($size > 1024*1024){
                $reporte .= "<p style='color: red'> Error $nombre, el tamaño máximo permitido es 1 mb</p>"  ;
            }else if($width > 500 || $height > 500){
                $reporte .= "<p style='color: red'> Error $nombre, la anchura y la altura máxima permitida es de 500 px</p>"  ;
            }else if($width < 60 || $height < 60){
                $reporte .= "<p style='color: red'> Error $nombre, la anchura y la altura minima permitida es de 60 px</p>"  ;
            }else{
                $src = $carpeta.$nombre;
                move_uploaded_file($ruta_provisional, $src);
                echo "<p style='color: blue'> La imagen $nombre ha sido subida con éxito</p>";
            }
        }
        echo $reporte;
    }
?>