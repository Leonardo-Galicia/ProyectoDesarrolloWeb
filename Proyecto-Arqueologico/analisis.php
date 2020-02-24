<?php
    $conexion=mysqli_connect("localhost","root","","abdarqueologia");
    if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }else{
        
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Analisis de Pastas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
      body{
          font-family: Verdana;
          background-color: #7DCEA0 !important;
      
      }
  </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#myPage"><span class="glyphicon glyphicon-log-out"></span>Cerrar Sesión</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="prueba.html">Inicio</a></li>
            <li><a href="#about">Analisis de Pastas</a></li>
            <li><a href="#services">Conteo de pastas</a></li>
            <li><a href="#portfolio">PORTFOLIO</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid text-center">
        <h2>Analisis de Pastas</h2>
        <h3>Este es un proyecto para el gestionamiento de datos arqueologicos</h3>
    </div>
    <div class="container">
        <div class="row">
            <a href="nuevoRegistro.php" class="btn btn-success">Nuevo Registro</a>
        </div>
    </div>
    <div class="">
        <?php 
              $sql="SELECT Fecha, Cuadrante, Sitio, Patron, Utme, Utmn, Latitud, Analizo, Bolsa, Tipo, Tratamiento, Modificacion, FormasTratamientos, Peso, TotalFragmentos, Observaciones FROM analisispastas";
              $result=mysqli_query($conexion,$sql);
              if($result==false){
                  echo "no funciona :v";
              }
              while($mostrar=mysqli_fetch_assoc($result)){
        ?>
        
    <div class="container">
        <div class="card hovercard" >
        <div class="cardheader">
            <div class="card-body info">
                <p class="card-text">Fecha: <?php echo $mostrar['Fecha'] ?></p>
                <p class="card-text">Cuadrante: <?php echo $mostrar['Cuadrante'] ?></p>
                <p class="card-text">Sitio: <?php echo $mostrar['Sitio'] ?></p>
                <p class="card-text">Patrón: <?php echo $mostrar['Patron'] ?></p>
                <p class="card-text">UTM E: <?php echo $mostrar['Utme'] ?></p>
                <p class="card-text">UTM N: <?php echo $mostrar['Utmn'] ?></p>
                <p class="card-text">Latitud: <?php echo $mostrar['Latitud'] ?></p>
                <p class="card-text">Analizó: <?php echo $mostrar['Analizo'] ?></p>
                <p class="card-text">Bolsa: <?php echo $mostrar['Bolsa'] ?></p>
                <p class="card-text">Tipo: <?php echo $mostrar['Tipo'] ?></p>
                <p class="card-text">Tratamiento: <?php echo $mostrar['Tratamiento'] ?></p>
                <p class="card-text">Modificación: <?php echo $mostrar['Modificacion'] ?></p>
                <p class="card-text">Formas y tratamientos: <?php echo $mostrar['FormasTratamientos'] ?></p>
                <p class="card-text">Peso: <?php echo $mostrar['Peso'] ?></p>
                <p class="card-text">Total de fragmentos: <?php echo $mostrar['TotalFragmentos'] ?></p>
                <p class="card-text">Observaciones: <?php echo $mostrar['Observaciones'] ?></p>
                <a href='.php?matricula=<?php echo $mat ?>' class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" id="editar"></a>
                <a href='.php?matricula=<?php echo $mat ?>' class="btn btn-danger  glyphicon glyphicon-remove" id="eliminar"></a>
            </div><br>
            <!--<img class="card-img-bottom" src="img_avatar6.png" alt="Card image" style="width:100%">  -->        
                   
            <?php 
            }
            ?>
        </div><br>
        </div> 
    </div>
    </div>   
</body>
</html>