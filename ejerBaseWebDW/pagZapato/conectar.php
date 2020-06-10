<?php
functión conecta () {
    $vServidor = "localhost" ;
    $vUsuarioBD = "root" ;
    $vContraseñaBD = "" ;
    $vBD = "escuela" ;
    $errorServ = "No se puede conectar con el servidor" ;
    $errorBD = "No se puede seleccionar la base de datos" ;

    $conexion = mysql_connect ($vServidor,$vUsuarioBD,$vContraseñaBD ) or die ( $errorServ);
    mysql_select_db ($vBD) or die ($errorBD );
    return($conexion);
}
?>