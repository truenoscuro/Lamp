<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>arrays Asociativos</title>
</head>
<body>
    <?php 
        //Arrays asociativos
        $exploradores =array("explorador1" => "Chrome","explorador2" => "Opera", "explorador3" => "Firefox");
        $datos = array("nombre" => "Nofre", "edad" => 26 , "alumne" => true, 3 => 100);

        echo "Explorador 3 : " . $exploradores["explorador3"];
        echo "<br>";
        echo "Nombre " . $datos["nombre"];
        echo "<br>";
        echo "3 " . $datos[3];
    
    ?>    
</body>
</html>