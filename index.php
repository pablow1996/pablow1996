<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="style/main.css">
    <title>Register</title>
</head>
<body>
<div class="jumbotron text-center">
<center>
    <div class="subrayado">
      <h1>Proyecto 2</h1>
    </div>
</center>

</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-header">Regístrese</div>
        <div class="card-body">
          <form action="Index.php" method="POST" id="formulario">
            <div class="form-group">
              <label>Nombre </label>
              <input type="text" name="NAME" class="form-control" />
            </div>

            <div class="form-group">
              <label>Contraseña </label>
              <input type="text" name="PASSWORD" class="form-control" />
            </div>
            <button type="submit" class="btn btn-success btn-lg"> Iniciar</button>
          </form>
        </div>
        <div class="card-footer">
          <div class="alert alert-success">
          <a href="http://localhost:8080/PROYECTO2/index.php">Regístrate</a>

          </div>

        </div>
      </div>



    </div>
    <div class="col-sm-4"></div>
  </div>
</div>

</body>
</html>




<?php
/*            if(isset($_POST["HEIGHT"]) && isset ($_POST["WEIGHT"])){
              require_once("imc.php");
              $height = $_POST["HEIGHT"];
              $weight = $_POST["WEIGHT"];
              ECHO IMC($weight, $height);
            }*/
        ?>