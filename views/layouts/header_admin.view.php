<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?= BASE_URL ?>/assets/images/logo.png" style="width: 50px;" alt="Logo" > infoBA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" role="button" href="<?= BASE_URL ?>/admin/dashboard">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Administración
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="adminDropdown">
                            <li><a class="dropdown-item" href="<?= BASE_URL ?>/admin/usuarios">Usuarios</a></li>
                            <li><a class="dropdown-item" href="/admin/proveedores">Proveedores</a></li>
                            <li><a class="dropdown-item" href="/admin/articulos">Articulos</a></li>
                            <li><a class="dropdown-item" href="/admin/clientes">Clientes</a></li>
                            <li><a class="dropdown-item" href="/admin/facturas">Facturas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if (isset($data['alertSuccess']) || isset($data['alertDanger']) || isset($data['alertWarning']) || isset($data['alertInfo']))
        include_once "views/layouts/header_alert.view.php";
    ?>
</header>