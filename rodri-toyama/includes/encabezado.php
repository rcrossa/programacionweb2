<nav class="navbar shadow-sm navbar-expand-md navbar-dark bg-orangened">
    <a class="navbar-brand" href="/images/iconolog.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-pills align-items-center">
            <li class="nav-brand mr-4">
                <a href="index.php" class="logomenu"> <img src="images/logo_cabecera.png" width="80" height="70" alt="Logo">
                </a></li>
            <li <?php echo ($page == 'index') ? "class='nav-item active px-2'" : ""; ?> class="nav-item px-2">
                <a class="nav-link borde" href="index.php">Inicio</a>
            </li>
            <li <?php echo ($page == 'catalogo') ? "class='nav-item active px-2'" : ""; ?> class="nav-item px-2">
                <a class="nav-link borde" href="catalogo.php">Catálogo</a>
            </li>
            <li <?php echo ($page == 'paquetes') ? "class='nav-item active px-2'" : ""; ?> class="nav-item px-2">
                <a class="nav-link borde" href="paquetes.php">Paquetes</a>
            </li>
            <li <?php echo ($page == 'contacto') ? "class='nav-item active px-2'" : ""; ?> class="nav-item px-2">
                <a class="nav-link borde" href="contacto.php">Contacto</a>
            </li>
        </ul>
    </div>
</nav>