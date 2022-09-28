<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Predefinidas</title>
</head>
<body>
    <?php 
        $numero = 33;

        echo "Nombre del servidor:" . $_SERVER['SERVER_NAME'];
        echo "<p> <p>";
        echo "Software del servidor:" . $_SERVER['SERVER_SOFTWARE'];
        echo "<p> <p>";
        echo "Puerto del servidor:" . $_SERVER['SERVER_PORT'];
        echo "<p> <p>";
        echo "La variable número vale: " .$GLOBALS['numero'];
    ?>    
</body>
</html>