    <div class="mobile-menu-left-overlay"></div>
    <nav class="side-menu">
        <ul class="side-menu-list">
            <li class="blue-dirty">
                <a href="<?php echo Conectar::ruta() . "views/tablero/" ?>">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Tablero</span>
                </a>
            </li>
            <li class="blue-dirty with-sub">
                <span>
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Reportes</span>
                </span>

                <ul>
                    <li><a href="<?php echo Conectar::ruta() . "views/Reportes/stock.php" ?>"><span class="lbl">Stock</span></a></li>
                </ul>
                <ul>
                    <li><a href="<?php echo Conectar::ruta() . "views/Reportes/general.php" ?>"><span class="lbl">General</span></a></li>
                </ul>

            </li>
            <li class="blue-dirty">
                <a href="<?php echo Conectar::ruta() . "views/persona/consulta.php" ?>">
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Gestion de Usuario</span>
                </a>
            </li>

            <li class="blue-dirty with-sub">
                <span>
                    <span class="glyphicon glyphicon-th"></span>
                    <span class="lbl">Inventario</span>
                </span>

                <ul>
                    <li><a href="<?php echo Conectar::ruta() . "views/Inventario/" ?>"><span class="lbl">Mantenimiento</span></a></li>
                </ul>

            </li>
        </ul>

    </nav>