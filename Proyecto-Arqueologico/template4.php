<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" language="javascript" src="jquery.js"></script>
    <script type="text/javascript" language="javascript" src="jquery.carouFredSel-5.6.4-packed.js"></script>
    <script type="text/javascript" language="javascript" src="jquery.touchSwipe.js"></script>
    <script type="text/javascript">
    $(function() {
        $("#foo2").carouFredSel({
            circular: true,
            infinite: false,
            auto     : true,
            prev    : {    
                button    : "#foo2_prev",
                key        : "left"
            },
            next    : { 
                button    : "#foo2_next",
                key        : "right"
            },
            pagination    : "#foo2_pag"
        });
    });
    </script>
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
    </script>
    <style>
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
</head>
<body>
   <div class="col-sm-4">
        <div class="col-sm-4">
            <label for="ex3">Foto</label>
            <input class="form-control" id="file" type="file" name="archivo[]" id="file[]" accept="image/*" multiple>
        </div>
        <div class="col-sm-4" class="" id="vista-previa"><!-- se muestran las imagenes -->
            <div class="image_carousel">
                <div id="foo2">
                </div>
            </div>
            <div class="clearfix"></div>
            <a class="prev" id="foo2_prev" href="#"><span>prev</span></a>
            <a class="next" id="foo2_next" href="#"><span>next</span></a>
            <div class="pagination" id="foo2_pag"></div>
        </div>
    </div>

</body>
</html>