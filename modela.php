<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modelo A</title>
    <link rel="stylesheet" href="css/vrmod.css">
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="js/script.js" defer></script>
</head>
<body class="body">
    <?php include('navbar.php'); ?>
    <div class="container select">
        <div class="header">
            <img src="images/bonsai-vertical-w.png" alt="Logo" class="logo">
            <span class="model-title">Modelo A</span>
        </div>
        <div class="vr-viewer">
            <a-scene embedded>
                <a-sky id="vr-image" src="images/modela/sala.jpg"></a-sky>
            </a-scene>
        </div>
        <div class="nav">
            <button class="nav-button" onclick="changeImage('images/modela/sala.jpg')">Sala</button>
            <button class="nav-button" onclick="changeImage('images/modela/cocina.jpg')">Cocina</button>
            <button class="nav-button" onclick="changeImage('images/modela/habitacion.jpg')">Habitación</button>
            <button class="nav-button" onclick="changeImage('images/modela/baño.jpg')">Baño</button>
        </div>
    </div>
</body>
</html>
