<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macuin - Administración de Autopartes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
            <h1 class="page-title">ADMINISTRACIÓN DE AUTOPARTES</h1>
            <div class="header-actions">
                <button class="btn-outline"><i class="fa-solid fa-rotate"></i> ACTUALIZAR INVENTARIO</button>
                <button class="btn-add"><i class="fa-solid fa-plus"></i> AGREGAR NUEVA PARTE</button>
            </div>
        </header>

        <div class="dashboard-grid">
            
            <section class="left-panel">
                <div class="search-filters">
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Búsqueda por nombre, ID o SKU...">
                    </div>
                    <select class="select-box">
                        <option>Categoría: Todas</option>
                    </select>
                    <button class="filter-btn"><i class="fa-solid fa-filter"></i></button>
                </div>

                <table class="products-table">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Información de Parte</th>
                            <th>Categoría</th>
                            <th>Precio Neto</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><div class="part-image"><i class="fa-solid fa-compact-disc"></i></div></td>
                            <td>
                                <div class="part-name">KIT DISCOS CERÁMICOS</div>
                                <div class="part-sku">MQ-29402-BRK</div>
                            </td>
                            <td><span class="badge-outline">FRENOS</span></td>
                            <td>
                                <div class="price">$4,250.00</div>
                                <div class="currency">MXN</div>
                            </td>
                            <td>
                                <div class="status-indicator text-green">
                                    <span class="dot dot-green"></span> EN STOCK
                                </div>
                            </td>
                            <td class="actions">
                                <i class="fa-solid fa-pen"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                        <tr>
                            <td><div class="part-image"><i class="fa-solid fa-filter"></i></div></td>
                            <td>
                                <div class="part-name">FILTRO DE ALTO FLUJO</div>
                                <div class="part-sku">MQ-11055-MTR</div>
                            </td>
                            <td><span class="badge-outline">MOTOR</span></td>
                            <td>
                                <div class="price">$890.00</div>
                                <div class="currency">MXN</div>
                            </td>
                            <td>
                                <div class="status-indicator text-red">
                                    <span class="dot dot-red"></span> SIN EXISTENCIAS
                                </div>
                            </td>
                            <td class="actions">
                                <i class="fa-solid fa-pen"></i>
                                <i class="fa-solid fa-trash"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="right-panel">
                <div class="tabs">
                    <div class="tab active">EDITAR DATOS</div>
                    <div class="tab">ESTADO DE PEDIDO</div>
                </div>

                <div class="edit-form">
                    <div class="form-group">
                        <label class="form-label">Denominación del Producto</label>
                        <input type="text" class="form-input" value="Kit Discos Cerámicos">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Especificaciones Técnicas</label>
                        <textarea class="form-textarea">Kit de frenado de alto rendimiento con acabado cerámico. Diseñado para resistencia extrema.</textarea>
                    </div>

                    <div class="form-group grid-2">
                        <div>
                            <label class="form-label">Costo (MXN)</label>
                            <input type="text" class="form-input" value="4250">
                        </div>
                        <div>
                            <label class="form-label">Existencias</label>
                            <input type="text" class="form-input" value="24">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" style="margin-top: 2rem;">Estado del Pedido Logístico</label>
                        <button class="state-btn active">RECIBIDO <i class="fa-regular fa-circle-check"></i></button>
                        <button class="state-btn">SURTIDO <i class="fa-solid fa-box"></i></button>
                        <button class="state-btn">ENVIADO <i class="fa-solid fa-truck"></i></button>
                    </div>

                    <button class="btn-pdf"><i class="fa-solid fa-file-pdf"></i> GENERAR REPORTE PDF</button>
                </div>

                <div class="panel-footer">
                    <a href="{{ route('dashboard') }}" class="btn-discard" style="text-align: center; text-decoration: none;">DESCARTAR</a>
                    <button class="btn-confirm">CONFIRMAR</button>
                </div>
            </section>

        </div>
    </main>

</body>
</html>
