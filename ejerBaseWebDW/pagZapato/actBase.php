<?php
include"conectar.php";
$vCveEsp=$_POST['cveNombre'];
$vNomEsp=$_POST['nomCorreo'];
$vNomGrupo=$_POST['nombreGrupo'];
$vBoton=$_POST['boton'];
$resConectar=conecta();
$sqlArea="SELECT cvegrado FROM Grado WHERE nomgrupo='$vNomGrupo';";
$sqlCveArea=mysql_query($sqlArea,$resConectar);
$resulCveArea=mysql_fetch_array($sqlCveArea);
$vCveArea=$resulCveArea["cvegrado"];

if($vBoton=="Guardar"){
    $sqlAltaEsp="INSERT TO GRUPO VALUES('$vCveEsp','$vNomEsp´,'$vCveArea');";
    $guarda=mysql_query($sqlAltaEsp,$resConectar);
    if(!$guarda){
        echo "<SCRIPT LANGUAGE='javascript' TYPE='text/javacript'>
        alert('Ocurrio un error...Posible grupo repetida') javascript:history.back(1) </SCRIPT>";
    }
    else {
        echo "<SCRIPT LANGUAGE='javascript' TYPE='text/javascript'>
        alert('Nombre Registrado')
        window.location='../index.html' </SCRIPT>";
    }
}
else {
    $sqlModEsp="UPDATE GRUPO SET nomEsp='$vNomEsp',cveArea='$vCveArea' WHERE cveEsp='$vCveEsp';";
    $modificar=mysql_query($sqlModEsp,$resConectar);
    if(!$modificar){
        echo "<SCRIPT LANGUAGE='javascript' TYPE='text/javascript'>
        alert('Ocurrio un error...No se guardo el registro')
        javascript:history.back(1)
        </SCRIPT>";
    }
    else {
        echo "<SCRIPT LANGUAGE='javascript' TYPE='text/javascript'>
        alert('Nombre modificado')
        window.location='consultaNombre.php'
        </SCRIPT>";
    }
}
?>