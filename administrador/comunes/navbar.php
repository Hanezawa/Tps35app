<?php
session_start();
if (!isset($_SESSION['usuario'])){
    header('location:../index.php');
    exit;
}

include('modal-session.php');

?>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index_1.php">TPS 35</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars" style=""></i></button>
    <!-- Navbar-->
    <div class="col-lg-10">
    </div>
    <ul class="navbar-nav ms-auto ms-md-0 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fas fa-user fa-fw" style="#ffffff"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class='dropdown-item' href='./cambiar_contraseña.php'>Cambiar Contraseña</a></li>
                <li><a class='dropdown-item' href='#!' id='logout' data-bs-toggle="modal" data-bs-target="#staticBackdrop">Cerrar Sesion</a></li>

            </ul>
        </li>
    </ul>
</nav>