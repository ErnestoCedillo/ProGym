<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scalable=1.0, maximun-scale=1.0, minumun-scale=1.0">
    <title>Registrar</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link rel="stylesheet" href="estilos.css">
    
    
    
</head>
<body>
    
    <header>
        <div class="container">
        <h1>Registrarse</h1>
        </div>
    </header>
    
  
    <div class="container">
        <form action="registrar-usuario.php" method="POST">
        <div class="form-group">
            <label class="sr-only" for="Nombre">Nombre:</label>
            <input class="form-control" id="Nombre" type="text" placeholder="Nombre(s)">
            </div>
        <div class="form-group">    
            <label class="sr-only" for="Apellido">Apellido:</label>
            <input class="form-control" id="Apellido" type="text" placeholder="Apellido">
            </div>
            </div>
        </form>    

        <div class="container"> 
        <form action="registrar-usuario.php" method="POST" class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="username">Usuario</label>
            <input class="form-control" id="username" type="text" placeholder="Usuario">
            </div>
        <div class="form-group">
            <div class="input-group">
                <label class="sr-only" for="dominio">Dominio</label>
                <div class="input-group-addon">@</div>
                <input class="form-control" id="Dominio" type="text" placeholder="Dominio">
            </div>
            </div>
        </form>    
            
            </div>
    <br>

    <div class="container">
        <form action="registrar-usuario.php" method="POST">
        <div class="form-group">
            <label class="sr-only" for="password">Password</label>
            <input class="form-control" id="password" type="password" placeholder="Ingrese su password">
            </div>
        <div class="form-group">
            <label class="sr-only" for="Repetir">Repetir</label>
            <input class="form-control" id="Repetir" type="password" placeholder="Reingrese su password">
            </div>
            
            <div class="form-group">
             <button class="btn btn-lg btn-primary">Registrar</button>
            </div>
        </form>
        </div>
        
    </body>
</html>