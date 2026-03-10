<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macuin - Inicio de Sesión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <div class="logo">MACUIN</div>

    <div class="login-card">
        <h2 class="login-title">INICIO DE SESIÓN</h2>

        <div class="form-group">
            <label class="form-label">USUARIO O EMAIL</label>
            <div class="input-wrapper">
                <i class="fa-regular fa-user"></i>
                <input type="text" class="form-input" placeholder="nombre@gmail.com">
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">CONTRASEÑA</label>
            <div class="input-wrapper">
                <i class="fa-solid fa-lock"></i>
                <input type="password" class="form-input" placeholder="********">
                <i class="fa-regular fa-eye eye-icon"></i>
            </div>
        </div>

        <a href="#" class="forgot-password">¿OLVIDÓ SU CONTRASEÑA?</a>

        <a href="{{ route('dashboard') }}" class="btn-ingresar">INGRESAR</a>
    </div>

</body>
</html>
