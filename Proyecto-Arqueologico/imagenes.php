<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>
        $(function(){
          $("#file").on("change", function(){
              /*Limpiar vista previa*/
              $("#vista-previa").html('');
              var archivos = document.getElementById('file').files;
              var navegador = window.URL || window.webkitURL;
              /*Recorrer los archivos*/
              for(x=0; x<archivos.length; x++){
                  /*validar tamaño y tipo de archivo*/
                  var size = archivos[x].size;
                  var type = archivos[x].type;
                  var name = archivos[x].name;
                  if(size>1024*1204){
                      $("#vista-previa").append("<p style='color: res'>El archivo "+name+" supera el maximo permitido 1MB</p>");
                  }else if(type != 'image/jpeg' && type != 'image/jpg' && type !='image/png'){
                      $("#vista-previa").append("<p style='color: res'>El archivo "+name+" no es el tipo de imagen permitido</p>");
                  }else{
                      var objeto_url = navegador.createObjectURL(archivos[x]);
                      $("#vista-previa").append("<img src="+objeto_url+" width='250' height='250'>");
                  }
              }
          });
        });
      
        $("#btn").on("click", function(){
           var formData = new FormData($("#formulario")[0]);
           var ruta = "multiple-ajax.php";
            $.ajax({
                url: ruta,
                type: "post",
                data: formData,
                contentType: false;
                processData: false;
                success: function(datos){
                    $("#respuesta").html(datos);
                }
            });
        });
    </script>
</head>
<body>
    <form method="post" id="formulario" enctype="multipart/form-data">
       Subir imagen: <input type="file" id="file" name="file[]" multiple>  
       <button type="button" id="btn">Subir imágenes</button>      
    </form>
    <div id="vista-previa"></div>
    <div id="respuesta"></div>
</body>
</html>