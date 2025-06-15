<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form  method="post">
        <label>
           nombre :
        </label>
        <input type="text" name="name" id="name" required> 
        <label>
            ingrese correo :
        </label>
        <input type="email" name="email" id="email" required> 
        <br>
        <button name="enviar">enviar</button>

    </form>
    <?php
        include("register.php");
    ?>
    
</body>
</html>