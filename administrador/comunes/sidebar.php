<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu bg-success">
        <div class="nav">
            <div class="sb-sidenav-menu-heading text-white">Core</div>
            <a class="nav-link text-white" href="index_1.php">
                <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <a class="nav-link text-white" href="administrar_usuarios.php">
                <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-circle-user"></i></div>
                Administrar Usuarios
            </a>
            <a class="nav-link text-white" href="instructores.php">
                <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-circle-user"></i></div>
                Instructores
            </a>
            <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon text-white"><i class="fas fa-columns"></i></div>
                Cursos
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link text-white" href="courses.php">
                        <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-book"></i></div>
                        Gestionar Cursos
                    </a>
                    <a class="nav-link text-white" href="fichas.php">
                        <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-book"></i></div>
                        Gestionar Fichas
                    </a>
                </nav>
            </div>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Layouts
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                </nav>
            </div>
            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Charts
            </a>
            <a class="nav-link" href="tables.html">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Tables
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer bg-success text-white">
        <div class="small">Ha iniciado Sesi&oacute;n Como:</div>
        <?php echo $_SESSION["usuario"]; ?>
    </div>
</nav>