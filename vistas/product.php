<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Camisa Moderna - Textisur</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/product.css" />
</head>
<body>
    <header>
        <h1 class="logo" style="cursor: pointer;" onclick="location.href='index.php'">Textisur</h1>
    </header>
    <main class="vista-producto">
        <img src="../assets/images/camisa1.webp" alt="Camisa Moderna" />
        <div class="info">
            <h2>Camisa Polo</h2>
            <p>Descripción del producto. Tallas disponibles: S, M, L, XL.</p>
            <p><strong>$129.99</strong></p>
            <button class="btn-accent">Agregar al carrito</button>
            <button class="btn-secondary">Agregar a favoritos</button>
        </div>
        <div class="reseñas">
            <h3>Reseñas</h3>
            <div class="reseña">    
                <p><strong>Usuario1:</strong> Me encanta esta camisa, muy cómoda.</p>
            </div>
            <div class="reseña">    
                <p><strong>Usuario2:</strong> La calidad es excelente, la recomiendo.</p>
            </div>
            <div class="reseña">    
                <p><strong>Usuario3:</strong> El color es diferente al de la foto.</p>
            </div>
        </div>
    </main>
    <button class="back-button" onclick="location.href='index.php'">Regresar</button>
</body>
</html>