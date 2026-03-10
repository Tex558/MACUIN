<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macuin - Actualización de Stock</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/stock.css') }}">
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
            <h1 class="page-title">ACTUALIZACIÓN DE STOCK</h1>
            <div class="header-actions">
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Buscar parte para actualizar...">
                </div>
                <button class="btn-add">
                    <i class="fa-solid fa-plus"></i> AGREGAR NUEVA PARTE
                </button>
            </div>
        </header>

        <div class="stock-table-container">
            <table class="stock-table">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>SKU</th>
                        <th>Nombre de la Parte</th>
                        <th>Stock Actual</th>
                        <th>Nuevo Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="part-image"><i class="fa-solid fa-compact-disc"></i></div>
                        </td>
                        <td><span class="sku-text">MQ-29402-BRK</span></td>
                        <td>
                            <div class="part-name">KIT DISCOS CERÁMICOS</div>
                            <div class="part-category">Categoría: Frenos</div>
                        </td>
                        <td><span class="stock-current">24</span></td>
                        <td><input type="text" class="stock-input" value="24"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="part-image"><i class="fa-solid fa-filter"></i></div>
                        </td>
                        <td><span class="sku-text">MQ-11055-MTR</span></td>
                        <td>
                            <div class="part-name">FILTRO DE ALTO FLUJO</div>
                            <div class="part-category">Categoría: Motor</div>
                        </td>
                        <td><span class="stock-current">08</span></td>
                        <td><input type="text" class="stock-input" value="08"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="part-image"><i class="fa-solid fa-bolt"></i></div>
                        </td>
                        <td><span class="sku-text">MQ-8832-ELE</span></td>
                        <td>
                            <div class="part-name">ALTERNADOR INDUSTRIAL 90A</div>
                            <div class="part-category">Categoría: Eléctrico</div>
                        </td>
                        <td><span class="stock-current">15</span></td>
                        <td><input type="text" class="stock-input" value="15"></td>
                    </tr>
                </tbody>
            </table>

            <div class="bottom-actions">
                <a href="{{ route('dashboard') }}" class="btn-cancel">CANCELAR</a>
                <button class="btn-save"><i class="fa-regular fa-floppy-disk"></i> GUARDAR CAMBIOS</button>
            </div>
        </div>

    </main>

</body>
</html>
