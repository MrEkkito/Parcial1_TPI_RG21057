<!--Ejercicio 1 -->
<?php 

$filtrado = "";

$personajes = [
    [
        "nombre" => "lord farquaad",
        "imagen" => "src/images/img1"
    ],
    [
        "nombre" => "Hermanastra fea",
        "imagen" => "src/images/img2.jpg"
    ],
    [
        "nombre" = "Shrek",
        "imagen" = "src/images/img3.jpg"
    ],
    [
        "nombre" = "Burro",
        "imagen" = "src/images/img4.jpg"
    ],
    [
        "nombre" = "jenji",
        "imagen" = "src/image/img4.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes de Shrek</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Personajes de shrek</h1>
    <p>Filtrar por categoria<p>
    <a href="#home" name="villano">Personaje principal</a>
    <a href="#home" name="villano">Amigos de shrek</a>
    <a href="#home" name="villano">Villanos </a>
    <a href="#home" name="villano">Personajes secundarios</a>

    <div class="card">
<?php 
    if ($filtrado = )
        foreach ($personajes as $p){
        echo "<div class='personajes'>";
        echo "<p class='nombrePersonaje'>".$p['nombre'];
        echo
    }
?>
<img src="src/images/img1.jpg" alt="Imagen del personaje">

</div>    
</body>
</html>