<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesión - Textisur</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/auth.css" />
    <script>
    function validarLogin(e) {
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        let mensaje = '';
        if (!email.value.trim() || !email.value.includes('@')) mensaje += 'Correo inválido.\n';
        if (!password.value.trim()) mensaje += 'La contraseña es obligatoria.\n';
        if (mensaje) {
            alert(mensaje);
            e.preventDefault();
        }
    }
    </script>
</head>
<body>
    <header>
        <h1 class="logo" style="cursor: pointer;" onclick="location.href='../index.php'">Textisur</h1>
    </header>
    <main class="auth-container">
        <h2>Inicia Sesión</h2>
        <form action="../login.php" method="POST" onsubmit="validarLogin(event)">
            <label>Correo electrónico:</label>
            <input type="email" name="email" id="email" required />
            <label>Contraseña:</label>
            <input type="password" name="password" id="password" required />
            <button class="btn-primary" type="submit">Entrar</button>
            <p>¿No tienes cuenta? <a href="register.php">Regístrate aquí</a></p>
        </form>
    </main>
    <button class="back-button" onclick="location.href='../index.php'">Regresar</button>
    <footer>
        <p>&copy; 2023 Textisur. Todos los derechos reservados.</p>
        <p><a href="#">Política de Privacidad</a></p>
        <p><a href="#">Términos y Condiciones</a></p>
        <p><a href="#">Contáctanos</a></p>
    </footer>
</body>
</html>