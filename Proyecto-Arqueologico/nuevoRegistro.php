<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Nuevo registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      .form-group row{
          padding-left: 10px;
          padding-right: 10px;
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
        font-size: 14px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 2px;
        border-radius: 0;
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
      @media screen and (max-width: 500px) {
        .col-sm-4 {
          text-align: center;
          margin: 25px 0;
        }
          .col-sm-6{
              margin: 15px 0;
          }  
      }
      .image_carousel {
            padding: 15px 0 15px 40px;
            position: relative;
            width:580px;
            background: #CCFFFF;
            margin:0px auto;
            margin-top:25px;
            border-radius:5px;
            box-shadow: 0 2px 5px #666666;
        }
        .image_carousel img {
            border: 1px solid #ccc;
            background-color: white;
            padding: 9px;
            margin: 7px;
            display: block;
            float: left;
        }
        a.prev, a.next {
            background: url(images/miscellaneous_sprite.png) no-repeat transparent;
            width: 45px;
            height: 50px;
            display: block;
            position: absolute;
            top: 85px;
        }
        a.prev {            left: -22px;
                            background-position: 0 0; }
        a.prev:hover {        background-position: 0 -50px; }
        a.prev.disabled {    background-position: 0 -100px !important;  }
        a.next {            right: -22px;
                            background-position: -50px 0; }
        a.next:hover {        background-position: -50px -50px; }
        a.next.disabled {    background-position: -50px -100px !important;  }
        a.prev.disabled, a.next.disabled {
            cursor: default;
        }

        a.prev span, a.next span {
            display: none;
        }
        .pagination {
            text-align: center;
        }
        .pagination a {
            background: url(images/miscellaneous_sprite.png) 0 -300px no-repeat transparent;
            width: 15px;
            height: 15px;
            margin: 0 5px 0 0;
            display: inline-block;
        }
        .pagination a.selected {
            background-position: -25px -300px;
            cursor: default;
        }
        .pagination a span {
            display: none;
        }
        .clearfix {
            float: none;
            clear: both;
        }
  </style>
  <script>
        $(function(){
          $("#file").on("change", function(){
              /*Limpiar vista previa*/
              $("#vista-previa").html('');
              var archivos = document.getElementById('file').files; /*selecciono todos los archivos??*/
              var navegador = window.URL || window.webkitURL;
              /*Recorrer los archivos*/
              for(x=0; x<archivos.length; x++){
                  /*validar tamaño y tipo de archivo*/
                  var size = archivos[x].size;
                  var type = archivos[x].type;
                  var name = archivos[x].name;
                  if(size>1024*1204){
                      $("#vista-previa").append("<p style='color: red'>El archivo "+name+" supera el maximo permitido 1MB</p>");
                  }else if(type != 'image/jpeg' && type != 'image/jpg' && type !='image/png'){
                      $("#vista-previa").append("<p style='color: blue'>El archivo "+name+" no es el tipo de imagen permitido</p>");
                  }else{
                      var objeto_url = navegador.createObjectURL(archivos[x]);
                      $("#vista-previa").append("<img src="+objeto_url+" width='400' height='400'>");/*aqui puedo conectar con el carrusel*/
                  }
              }
          });
        });
    </script>
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
            <li><a href="analisis-Pastas.php">Analisis de Pastas</a></li>
            <li><a href="#Conteo-de-Pastas">Conteo de pastas</a></li>
            <li><a href="#">otroCoso</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid text-center">
        <h2>Agregar Registro de Analisis de Pastas</h2>
        <h3>Este es un proyecto para el gestionamiento de datos arqueologicos</h3>
    </div>
    <div class="container">
        
      <h2>Ingresar los datos</h2>
      <p>Debe de ingresar los datos correctamente:</p>
      <form class="form-horizontal" action="guardar.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <div class="row">
          <div class="col-sm-8">
              <div class="col-sm-6"> 
                <label for="ex3">Fecha</label>
                <input class="form-control" id="ex3"  type="date"  name="fecha">
              </div>
              <div class="col-sm-6">
                <label for="ex3">Cuadrante</label>
                <input class="form-control" id="ex3" type="text" maxlength="20" minlength="0" placeholder="Cuadrante" name="cuadrante">
              </div>
              <div class="col-sm-6">
                <label for="ex3">Sitio</label>
                <input class="form-control" id="ex3" type="text" maxlength="20" minlength="0" placeholder="Sitio" name="sitio">
              </div>
              <div class="col-sm-6">
                <label for="ex3">Patrón</label>
                <input class="form-control" id="ex3" type="text" maxlength="30" minlength="0" placeholder="Patrón" name="patron">
              </div>
              <div class="col-sm-6">
                <label for="ex3">UTM E</label>
                <input class="form-control" id="ex3" type="number" pattern="{0-9}" min="0" max="999999999999" maxlength="12" minlength="0" placeholder="UTM E" name="utme">
              </div>
              <div class="col-sm-6">
                <label for="ex3">UTM N</label>
                <input class="form-control" id="ex3" type="number" pattern="{0-9}" min="0" max="999999999999" maxlength="12" minlength="0" placeholder="UTM N" name="utmn">
              </div>
              <div class="col-sm-6">
                <label for="ex3">Latitud</label>
                <input class="form-control" id="ex3" type="number" pattern="{0-9}" min="0" max="99999" maxlength="5" minlength="0" placeholder="Lalitud" name="latitud">
              </div>
              <div class="col-sm-6">
                <label for="ex3">Analizó</label>
                <input class="form-control" id="ex3" type="text" maxlength="40" minlength="0" placeholder="Analizó" name="analizo">
              </div>
              <div class="col-sm-6">
                <label for="ex3">Bolsa</label>
                <input class="form-control" pattern=".{0-9}" id="ex3" type="number" stepss="any" min="0" value="0.00" maxlength="10" minlength="0" placeholder="Bolsa" name="bolsa">
              </div>
              <div class="col-sm-6">
                <label for="ex3">Tipo</label>
                <input class="form-control" id="ex3" type="text" maxlength="10" minlength="0" placeholder="Tipo" name="tipo">
              </div>
              <div class="col-sm-6">
                <label for="ex3">Tratamiento</label>
                <input class="form-control" id="ex3" type="text" maxlength="100" minlength="0" placeholder="Tratamiento" name="tratamiento">
              </div>
              <div class="col-sm-6">
                <label for="ex3">Modificación</label>
                <input class="form-control" id="ex3" type="text" maxlength="100" minlength="0" placeholder="Modidicación" name="modificacion">
              </div>
              <div class="col-sm-6">
                <label for="ex3">Formas y Tratamientos</label>
                <input class="form-control" id="ex3" type="text"  maxlength="100" minlength="0" placeholder="Formas" name="formastratamientos">
              </div>
              <div class="col-sm-6">
                <label for="ex3">Peso</label>
                <input class="form-control" id="ex3" type="number" pattern=".{0-9}" maxlength="10" minlength="0" placeholder="Peso" name="peso">
              </div>
              <div class="col-sm-6">
                <label for="ex3">Total de fragmentos</label>
                <input class="form-control" id="ex3" type="number" min="0" maxlength="4" minlength="0" placeholder="Total de fragmentos" name="totalfragmentos">
              </div>
              <div class="col-sm-6">
                <label for="comment">Observaciones</label>
                  <textarea class="form-control" rows="1" id="comment" maxlength="250" minlength="0" placeholder="Observaciones" name="observaciones"></textarea>
              </div>
          </div>
          <div class="col-sm-4">
              <div class="col-sm-12">
                  <label for="ex3">Foto</label>
                  <input class="form-control" id="file" type="file" name="archivo[]" id="file[]" accept="image/*" multiple>
              </div>
              <div class="col-sm-4" class="" id="vista-previa" style="overflow-x: auto; overflow-y: none; height: 410px; width: 430px;"><!-- se muestran las imagenes -->
                  <div class="" id="vista-previa">
                  </div>
              </div>
          </div>
          
        </div> 
        <div class="col-sm-6" style="margin-top: 25px; margin-left: 90px;">
          <a href="guardar.php" type="submit" class="btn btn-success">Agregar Registro</a>
        </div>
      </form>
    </div>
</body>
</html>