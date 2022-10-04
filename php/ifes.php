<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Ifs</title>
</head>
<body>
<?php

$nota1 = 2;
$nota2 = 8;
$nota3 = 5;

if($nota1 >= 5){
    echo "Aprobado" ;
}else{
    echo "Suspendido";
}
echo "<br>";

if($nota2 >=5 && $nota3>=5){
    echo "superAprovats";
}


?>
</body>
</html>
