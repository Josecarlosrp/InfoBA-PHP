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
                        <a class="nav-link" role="button" href="<?= BASE_URL ?>">
                            Ofertas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" role="button" href="<?= BASE_URL ?>">
                            Novedades
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" role="button" href="<?= BASE_URL ?>">
                            Más vendidos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" role="button" href="<?= BASE_URL ?>">
                            categorias
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" role="button" href="<?= BASE_URL ?>/admin/">
                            Administración
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li>
                        <button type="button" class="btn btn-outline-light btn-lg" data-bs-toggle="modal" data-bs-target="#modalLoginForm">
                            <i class="fa-solid fa-user text-danger"></i> Entrar
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if (isset($data['alertSuccess']) || isset($data['alertDanger']) || isset($data['alertWarning']) || isset($data['alertInfo']))
        include_once "views/layouts/header_alert.view.php";
    include_once "views/layouts/forms/login.php";
    ?>
</header>