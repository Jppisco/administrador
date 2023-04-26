<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link d-flex" href="index.php">
                            <i class="fas fa-tachometer-alt mr-2 fa-2x"></i>
                            <p class="texto"> Inicio</p>
                        </a>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="listadoadministrador.php">
                                <i class="fas fa-user mr-2 fa-2x"></i>
                                <p class="texto"> Administrador</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link d-flex" href="usuarios.php">
                                <i class="fas fa-user mr-2 fa-2x"></i>
                                <p class="texto"> Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="tipo.php">
                                <i class=" fas fa-tags mr-2 fa-2x"></i>
                                <p class="texto"> Categorías / Tipo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="productos.php">
                                <i class="fab fa-product-hunt mr-2 fa-2x"></i>
                                <p class="texto"> Productos</p>
                            </a>
                        </li>
                        <style>
                            .texto {
                                margin-left: 14px;
                                width: 70%;
                                margin-top: 14px;
                            }
                        </style>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="clientes.php">
                                <i class=" fas fa-users mr-2 fa-2x"></i>
                                <p class="texto"> Clientes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="ventas.php">
                                <i class="fas fa-cash-register mr-2 fa-2x"></i>
                                <p class="texto"> Nueva Venta</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex" href="lista_ventas.php">
                                <i class="fas fa-cart-plus mr-2 fa-2x"></i>
                                <p class="texto"> Historial Ventas</p>
                            </a>
                        </li>



                    </div>

            </nav>
        </div>