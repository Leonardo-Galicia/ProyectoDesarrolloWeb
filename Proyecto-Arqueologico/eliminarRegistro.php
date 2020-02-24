<?php
session_start();
?>

<?php
  $conexion = mysqli_connect("localhost","root","","abdarqueologia");
    if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }else{
        
    }
 $tbl_solicitante = "solicitante";
  
 $conexion = new mysqli($host, $user_db, $pass_db, $db_name);

  $conn = new mysqli($host, $user_db, $pass_db, $db_name);

  if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
   }

   
   $delete = "delete FROM $tbl_solicitante WHERE NumSolicitante = '$user'";
   $result = $conexion->query($delete);
  header('Location: http://localhost/ProOnliPc-inicio/indexAdmin.php?eliminarservicio=correcto');//redirecciona a la pagina del usuario




 mysqli_close($conexion); 


 ?>