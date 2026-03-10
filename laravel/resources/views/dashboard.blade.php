<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macuin - Dashboard de Pedidos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

    <nav class="topbar">
        <a href="{{ route('login') }}" class="logo-link">
            <div class="logo">MACUIN</div>
        </a>
        <h1 class="page-title">VISUALIZACIÓN GLOBAL DE PEDIDOS</h1>
        <div class="user-info">
            <div class="operator-text">
                <span class="op-label">Operador</span>
                <span class="op-name">Saúl</span>
            </div>
            <div class="user-icon"><i class="fa-regular fa-user"></i></div>
        </div>
    </nav>

    <main class="main-content">
        
        <section class="table-section">
            <table class="orders-table">
                <thead>
                    <tr>
                        <th>ID Pedido</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#MAC-2024-001</td>
                        <td>Logistics Advanced S.A.</td>
                        <td>12/05/2024</td>
                        <td>$12,450.00</td>
                        <td><span class="badge badge-green">ENVIADO</span></td>
                        <td><a href="#" class="action-link">VER DETALLE</a></td>
                    </tr>
                    <tr>
                        <td>#MAC-2024-002</td>
                        <td>Global Motors Corp.</td>
                        <td>12/05/2024</td>
                        <td>$45,200.00</td>
                        <td><span class="badge badge-blue">SURTIDO</span></td>
                        <td><a href="#" class="action-link">VER DETALLE</a></td>
                    </tr>
                    <tr>
                        <td>#MAC-2024-003</td>
                        <td>Industrial Parts LLC</td>
                        <td>11/05/2024</td>
                        <td>$8,900.00</td>
                        <td><span class="badge badge-gray">RECIBIDO</span></td>
                        <td><a href="#" class="action-link">VER DETALLE</a></td>
                    </tr>
                    <tr>
                        <td>#MAC-2024-004</td>
                        <td>EuroTech Assembly</td>
                        <td>11/05/2024</td>
                        <td>$31,120.00</td>
                        <td><span class="badge badge-blue">SURTIDO</span></td>
                        <td><a href="#" class="action-link">VER DETALLE</a></td>
                    </tr>
                    <tr>
                        <td>#MAC-2024-005</td>
                        <td>Pacific Rim Parts</td>
                        <td>10/05/2024</td>
                        <td>$15,750.00</td>
                        <td><span class="badge badge-green">ENVIADO</span></td>
                        <td><a href="#" class="action-link">VER DETALLE</a></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <aside class="sidebar-filters">
            <h2 class="filters-title">FILTROS DE BÚSQUEDA</h2>

            <div class="filter-group">
                <label class="filter-label">Búsqueda Rápida</label>
                <div class="filter-input-wrapper">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="filter-input" placeholder="ID, Cliente...">
                </div>
            </div>

            <div class="filter-group">
                <label class="filter-label">Estado del Pedido</label>
                <div class="filter-input-wrapper">
                    <i class="fa-regular fa-folder-open"></i>
                    <select class="filter-input">
                        <option value="">Todos los estados</option>
                        <option value="enviado">Enviado</option>
                        <option value="surtido">Surtido</option>
                        <option value="recibido">Recibido</option>
                    </select>
                </div>
            </div>

            <div class="filter-group">
                <label class="filter-label">Fecha</label>
                <div class="filter-input-wrapper">
                    <i class="fa-regular fa-calendar"></i>
                    <input type="date" class="filter-input">
                </div>
            </div>

            <button class="btn-filtrar">FILTRAR</button>
        </aside>

    </main>

</body>
</html>
