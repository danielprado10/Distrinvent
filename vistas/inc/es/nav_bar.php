<nav class="full-box navbar-info">
    <a href="javascript:void(0);" class="float-start" onclick="show_nav_lateral()">
        <em class="fas fa-exchange-alt"></em>
    </a>
    <a href="<?php echo SERVERURL;?>" title="Web" >
        <em class="fas fa-home"></em>
    </a>
    <a href="<?php echo SERVERURL.DASHBOARD."/admin-update/".$ins_login->encryption($_SESSION['id_sto']); ?>/" title="Cuenta" >
        <em class="fas fa-user-cog"></em>
    </a>
    <a href="javascript:void(0);" onclick="cerrar_sesion_administrador()" title="Cerrar sesión" >
        <em class="fas fa-sign-out-alt"></em>
    </a>
</nav>