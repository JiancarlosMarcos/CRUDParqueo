<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header('Location: vehiculos.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="bg-light d-flex align-items-center text-center" style="height: 100vh;">
    
    <main class="container bg-light" style="max-width: 500px;">
        <form action="functions/login.php" method="POST">
            <img class="mb-4" src="img/boo.png" width="80" height="80">
            <h1 class="h3 mb-3 fw-normal">Inicio de Sesión</h1>

            <div class="form-floating mb-2">
                <input name="correo" type="email" class="form-control" placeholder="name@example.com">
                <label>Correo</label>
            </div>
            <div class="form-floating mb-2">
                <input name="contra" type="password" class="form-control" placeholder="Password">
                <label>Contraseña</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
            <p class="mt-5 mb-3 text-muted">©2021</p>
        </form>
    </main>

</body>
</html>