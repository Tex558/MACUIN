<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macuin - Agregar Nueva Parte</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/add-part.css') }}">
</head>
<body>

    <aside class="sidebar">
        <a href="{{ route('dashboard') }}" class="sidebar-logo">MACUIN</a>
        <nav class="sidebar-nav">
            <a href="#" class="nav-item active">
                <i class="fa-solid fa-box"></i>
                <span>Inventario</span>
            </a>
            <a href="#" class="nav-item">
                <i class="fa-solid fa-users"></i>
                <span>Usuarios</span>
            </a>
            <a href="#" class="nav-item">
                <i class="fa-solid fa-gear"></i>
                <span>Configuración</span>
            </a>
        </nav>
        <div class="sidebar-footer">
            <div class="user-avatar">AD</div>
            <div class="user-details">
                <span class="user-name">Admin Macuin</span>
                <span class="user-role">Internal Staff</span>
            </div>
        </div>
    </aside>

    <main class="main-content">
        
        <header class="top-header">
            <h1 class="page-title">AGREGAR NUEVA PARTE</h1>
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Buscar en catálogo...">
            </div>
        </header>

        <div class="form-container">
            
            <div class="image-panel">
                <span class="panel-label">FOTOGRAFÍA DEL PRODUCTO</span>
                
                <div class="image-upload-box">
                    <i class="fa-solid fa-camera-retro"></i>
                    <div class="upload-title">CLICK PARA SUBIR IMAGEN</div>
                    <div class="upload-subtitle">JPG, PNG O WEBP (MÁX. 5MB)</div>
                </div>

                <div class="image-note">
                    Asegúrese de que la pieza esté centrada y tenga fondo neutro.
                </div>
            </div>

            <div class="data-panel">
                
                <div class="form-group">
                    <label class="form-label">Nombre de la Parte</label>
                    <input type="text" class="form-input" placeholder="Ej. KIT DISCOS CERÁMICOS FRONTALES">
                </div>

                <div class="grid-2">
                    <div class="form-group">
                        <label class="form-label">SKU / ID</label>
                        <input type="text" class="form-input" placeholder="MQ-00000-XXX">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Categoría</label>
                        <select class="form-select">
                            <option value="">Seleccionar...</option>
                            <option value="frenos">Frenos</option>
                            <option value="motor">Motor</option>
                            <option value="electrico">Eléctrico</option>
                        </select>
                    </div>
                </div>

                <div class="grid-2">
                    <div class="form-group">
                        <label class="form-label">Precio Unitario (USD)</label>
                        <input type="text" class="form-input" placeholder="$ .00">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Stock Inicial</label>
                        <input type="number" class="form-input" placeholder="0">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Descripción Técnica</label>
                    <textarea class="form-textarea" placeholder="Especificaciones, dimensiones, compatibilidad..."></textarea>
                </div>

                <div class="form-actions">
                    <a href="{{ route('admin') }}" class="btn-cancel">CANCELAR</a>
                    <button class="btn-save"><i class="fa-regular fa-floppy-disk"></i> GUARDAR NUEVA PARTE</button>
                </div>

            </div>
        </div>

    </main>

</body>
</html>
