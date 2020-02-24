<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Document</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            html{
                margin: 0px;
                padding: 0px;
            }
            *{
                box-sizing: border-box;
            }
            .boxlogin{
                border-radius: 4px;
                background-color: #7CC14E;
                box-shadow: 0px 2px 10px #d6d6d6;
                margin: 100px auto;
                width: 350px;
                -webki-border-radius: 8px;
                -moz-border-radius: 8px;
            }
            input[type="text"]{
                margin: 10px;
                width: 325px;
            }
            input[type="submit"]{
                margin: 10px;
                width: 325px;
                margin-top: 14px;
            }
            label{
                margin:  15px;
            }
            body{
                background-image: url("login.jpg");
            }
        </style>
    </head>
    <body>
        <!--<img src="login.jpg" class="img-responsive" style="width:100%">-->
        <div class="jumbotron boxlogin">
            <form method="post" name="glogin" id="flogin">
                <label>Usuario: </label>
                <input type="text" name="username" id="username" class="form-control">
                <label>Contraseña: </label>
                <input type="text" name="password" id="password" class="form-control">
                <input type="submit" class="form-control" value="Ingresar">
            </form>
        </div>
    </body>
</html>