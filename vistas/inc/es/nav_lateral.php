<section class="full-box nav-lateral">
    <div class="full-box nav-lateral-bg" onclick="show_nav_lateral()" ></div>
    <div class="full-box nav-lateral-content scroll">
        <figure class="full-box nav-lateral-avatar">
            <em class="far fa-times-circle" onclick="show_nav_lateral()" ></em>
            <img src="<?php echo SERVERURL; ?>vistas/assets/avatar/<?php echo $_SESSION['foto_sto']; ?>" class="img-fluid" alt="Avatar">
            <figcaption class="roboto-medium text-center">
                <?php echo $_SESSION['nombre_sto']; ?> <br><small class="roboto-condensed-light"><?php echo $_SESSION['cargo_sto']; ?></small>
            </figcaption>
        </figure>
        <div class="full-box nav-lateral-bar"></div>
        <nav class="full-box nav-lateral-menu">
            <ul>
                <li>
                    <a href="<?php echo SERVERURL.DASHBOARD; ?>/home/"><em class="fab fa-dashcube fa-fw"></em> &nbsp; Dashboard</a>
                </li>

                <?php if($_SESSION['cargo_sto']=="Administrador"){ ?>
                <li>
                    <a href="javascript:void(0);" class="nav-btn-submenu"><em class="fas fa-tag fa-fw"></em> &nbsp; Categorías <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/category-new/"><em class="fas fa-plus fa-fw"></em> &nbsp; Nueva categoría</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/category-list/"><em class="fas fa-clipboard-list fa-fw"></em> &nbsp; Lista de categorías</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/category-search/"><em class="fas fa-search fa-fw"></em> &nbsp; Buscar categoría</a>
                        </li>
                    </ul>
                </li>
                <?php } ?>

                <li>
                    <a href="javascript:void(0);" class="nav-btn-submenu"><em class="fas fa-users fa-fw"></em> &nbsp; Clientes <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/client-new/"><em class="fas fa-plus fa-fw"></em> &nbsp; Nuevo cliente</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/client-list/"><em class="fas fa-clipboard-list fa-fw"></em> &nbsp; Lista de clientes</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/client-search/"><em class="fas fa-search fa-fw"></em> &nbsp; Buscar cliente</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript:void(0);" class="nav-btn-submenu"><em class="fas fa-box-open fa-fw"></em> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <?php if($_SESSION['cargo_sto']=="Administrador"){ ?>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/product-new/"><em class="fas fa-plus fa-fw"></em> &nbsp; Agregar producto</a>
                        </li>
                        <?php } ?>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/product-list/"><em class="fas fa-boxes fa-fw"></em> &nbsp; Inventario de productos</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/product-minimum/"><em class="fas fa-stopwatch-20 fa-fw"></em> &nbsp; Productos en stock mínimo</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/product-search/"><em class="fas fa-search fa-fw"></em> &nbsp; Buscar producto</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="nav-btn-submenu"><em class="fas fa-file-invoice-dollar fa-fw"></em> &nbsp; Pedidos & Ventas <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="#"><em class="fas fa-file-invoice-dollar fa-fw"></em> &nbsp; Ventas realizadas</a>
                        </li>
                        <li>
                            <a href="#"><em class="fas fa-truck-loading fa-fw"></em> &nbsp; Pedidos pendientes</a>
                        </li>
                        <li>
                            <a href="#"><em class="fas fa-search-dollar fa-fw"></em> &nbsp; Buscar pedido o venta</a>
                        </li>
                    </ul>
                </li>

                <?php if($_SESSION['cargo_sto']=="Administrador"){ ?>
                <li>
                    <a href="javascript:void(0);" class="nav-btn-submenu"><em class="fas  fa-user-secret fa-fw"></em> &nbsp; Administradores <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/admin-new/"><em class="fas fa-plus fa-fw"></em> &nbsp; Nuevo administrador</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/admin-list/"><em class="fas fa-clipboard-list fa-fw"></em> &nbsp; Lista de administradores</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD; ?>/admin-search/"><em class="fas fa-search fa-fw"></em> &nbsp; Buscar administrador</a>
                        </li>
                    </ul>
                </li>
                <?php } ?>

                <li>
                    <a href="javascript:void(0);" class="nav-btn-submenu"><em class="fas fa-cogs fa-fw"></em> &nbsp; Configuraciones <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <?php if($_SESSION['cargo_sto']=="Administrador"){ ?>
                            <li>
                                <a href="<?php echo SERVERURL.DASHBOARD; ?>/company/"><em class="fas fa-store-alt fa-fw"></em> &nbsp; Empresa</a>
                            </li>
                        <?php } ?>
                        <li>
                            <a href="<?php echo SERVERURL.DASHBOARD."/admin-update/".$ins_login->encryption($_SESSION['id_sto']); ?>/"><i class="fas fa-user-cog fa-fw"></i> &nbsp; Cuenta</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo SERVERURL;?>" ><em class="fas fa-home fa-fw"></em> &nbsp; Sitio web</a>
                </li>

                <li>
                    <a href="javascript:void(0);" onclick="cerrar_sesion_administrador()" ><em class="fas fa-sign-out-alt fa-fw"></em> &nbsp; Cerrar sesión</a>
                </li>
            </ul>
        </nav>
    </div>
</section>