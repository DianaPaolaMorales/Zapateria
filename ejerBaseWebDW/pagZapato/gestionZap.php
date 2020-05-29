<TITLE>Formulario de Gestion de Grupos</TITLE>
<LINK HREF="../estilos/estiloAlta.css" REL="stylesheet" TYPE="text/css"/>
<SCRIPT LANGUAGE="javascript" TYPE="text/css">
function eliminar()
{
    if(confirm('¿Confirma la baja?'))
    document.formGestionEsp.submit()
}
</SCRIPT>
</HEAD>
<BODY>
    <FORM ID="formGestionEsp" NAME="formGestionEsp"
    METHOD="post"
    ACTION="gestionBase.php" ENCTYPE="multipart/form-data">
    <P CLASS="titulo">Gestion de Grupos</P>
    <BR/><BR/>
    <?php
    include"conectar.php";
    $vCveEsp=$_POST['cveEspe'];
    $resConectar=conecta();
    $sqlEspe="SELECT cveEsp,nomEsp,nomArea 
    FROM ESPECIALIDAD ,AREA WHERE cveEsp='$vCvEsp' AND ESPECIALIDAD.cveArea=AREA.cveArea;";
    $tablaEspe=mysql_query($tablaEspe);
    if($numfilasEspe>0){
        $filaEspe= mysql_fetch_array($tablaEspe);
        echo'<LABEL FORM="clave">'."Clave:".'</LABEL>';
        echo'<INPUT  NAME="cveEspecialidad" TYPE="text" ID="claveEspecialidad" READONLY="readonly"
        VALUE='.$filaEspe['cveEsp'].'><BR/>';
        echo'<LABEL FOR="nombre">'."Nombre:".'</LABEL>';
        echo'<INPUT NAME="nomEspecialidad" TYPE="text" ID="nombreEspecialidad" READONLY="readonly"
        VALUE='.$filaEspe['nomEsp'].'><BR/>';
        echo'<LABEL FOR="area">'."ÁREA:".'</LABEL>';
        echo'<INPUT NAME="nomArea" TYPE="text" ID="nombreArea" READONLY="readonly" VALUE='.$filaEspe['nomArea'].'><BR/>';
    }
    echo'<INPUT TYPE="button" NAME="botonG" ID="botonG" VALUE="Eliminar" ONCLICK="eliminar();"/>';
    echo'<INPUT TYPE="submit" NAME="botonG" ID="botonModificar" VALUE="Modificar"/><BR/>';
    ?>
    </FORM>
    <BR/>
    <IMG SRC="../imgZapato/flecha.png" WIDTH="60" HEIGHT="40" ONCLICK="history.back()"/>
</BODY>
</HTML>
