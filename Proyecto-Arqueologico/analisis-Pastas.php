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
      }
      .navbar{
          background: #1D4A96;
      }
      .table .table-responsive .table table-bordered {
          padding: 1em, 2em;
      }
      
      .container .table-responsive {
          padding: 15px, 15px;
          width: 100;
      }
      td, th{
          padding: 5px 10px;
      }
      
      .container-fluid {
        padding: 60px 50px;
        background-color: #D5F5E3;
      }
      .navbar {
        margin-bottom: 0;
        background-color: #2ECC71;
        z-index: 9999;
        border: 0;
        font-size: 30px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 2px;
        border-radius: 0;
        font-family:sans-serif !important;
        height: auto;
      }
      .navbar li a, .navbar .navbar-brand {
        color: #fff !important;
      }
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #FDFEFE !important;
        background-color: #138D75 !important;
      }
      .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
      }
      @media screen and (max-width: 768px) {
        .col-sm-4 {
          text-align: center;
          margin: 25px 0;
        }
      }
      @media (max-width: 30em){
          
          table{
              /*width: 0%;*/
              font-size: .9em;
          }
          
          .table tr{
              display: flex !important;
              flex-direction:column !important;
              border: 1px solid grey !important;
              padding: 1em !important;
              margin-bottom: 1em;
              text-align: 50px;
              color: #13C460;
              text-justify: 50px !important;
              white-space: pre-line !important;
          }
          
          .table td[data-titulo]{
              display: flex;
          }
          
          .table td[data-titulo]::before{
              content: attr(data-titulo);
              width: 0px;
              color: #229954;
              font-weight: bold;
              text-justify: auto !important;
              /*font-size: 1.2rem;*/
              line-height: 1.2em;
              max-width: 18rem;
          }
          
          .table thead{
              display: none !important;
          }
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
    <div class="table">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr style="padding: 5px, 10px">
                        <th>Fecha</th>
                        <th>Cuadrante</th>
                        <th>Sitio</th>
                        <th>Patrón</th>
                        <th>Utm E</th>
                        <th>Utm N</th>
                        <th>Latitud</th>
                        <th>Analizó</th>
                        <th>Bolsa</th>
                        <th>Tipo</th>
                        <th>Tratamiento</th>
                        <th>Modificación</th>
                        <th>Forma/Tratamientos</th>
                        <th>Peso</th>
                        <th>Total de fragmentos</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                
                <tbody> 
				    <?php 
                      $sql="SELECT Fecha, Cuadrante, Sitio, Patron, Utme, Utmn, Latitud, Analizo, Bolsa, Tipo, Tratamiento, Modificacion, FormasTratamientos, Peso, TotalFragmentos, Observaciones FROM analisispastas";
                      $result=mysqli_query($conexion,$sql);
                        if($result==false){
                            echo "no funciona :v";
                        }
                      while($mostrar=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td data-titulo="Fecha: " style="text-justify: auto;"><br><?php echo $mostrar['Fecha'] ?></td>
                        <td data-titulo="Cuadrante: "><br><?php echo $mostrar['Cuadrante'] ?></td>
                        <td data-titulo="Sitio: "><br><?php echo $mostrar['Sitio'] ?></td>
                        <td data-titulo="Patrón: "><br><?php echo $mostrar['Patron'] ?></td>
                        <td data-titulo="UTM E: "><br><?php echo $mostrar['Utme'] ?></td>
                        <td data-titulo="UTM N: "><br><?php echo $mostrar['Utmn'] ?></td>
                        <td data-titulo="Latitud: "><br><?php echo $mostrar['Latitud'] ?></td>
                        <td data-titulo="Analizó: "><br><?php echo $mostrar['Analizo'] ?></td>
                        <td data-titulo="Bolsa: "><br><?php echo $mostrar['Bolsa'] ?></td>
                        <td data-titulo="Tipo: "><br><?php echo $mostrar['Tipo'] ?></td>
                        <td data-titulo="Tratamiento: "><br><?php echo $mostrar['Tratamiento'] ?></td>
                        <td data-titulo="Modificación: "><br><?php echo $mostrar['Modificacion'] ?></td>
                        <td data-titulo="Formas y Tratamientos: "><br><?php echo $mostrar['FormasTratamientos'] ?></td>
                        <td data-titulo="Peso: "><br><?php echo $mostrar['Peso'] ?></td>
                        <td data-titulo="Total de fragmentos: "><br><?php echo $mostrar['TotalFragmentos'] ?></td>
                        <td data-titulo="Observaciones: "><br><?php echo $mostrar['Observaciones'] ?></td>
                        <td><a href='.php?matricula=<?php echo $mat ?>' class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" id="editar"></a></td>
                        <td><a href='.php?matricula=<?php echo $mat ?>' class="btn btn-danger  glyphicon glyphicon-remove" id="eliminar"></a></td> 
                    </tr>
                    <?php 
                        }
                    ?>
				</tbody>
            </table>
        </div>
    </div>    
</body>
</html>