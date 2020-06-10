<HEAD>
    <META HTTP-EQUIV="content-Type" CONTENT="text/html; CHARSET=utf-8"/>
    <TITLE>Formulario de Consulta de Especialidades</TITLE>
    <LINK HREF="../estilos/consultas.css" REL="stylesheet" TYPE="text/css"/>
</HEAD>
<BODY>
    <FORM ID="form1" NAME="form1" METHOD="post"
    ACTION="gestionEspecialidad.php">
    <DIV ID="texto">
    <P CLASS="titulo">Selecciona la Especialidad</P>
    </DIV>
    <BR/><BR/>
    <LABEL FOR="clave">Clave:</LABEL>
    <SELECT NAME="cveEspe" ID="cveEspecialidad">
        <?php
        include"conectar.php";
        $resConectar=conecta();
        $sqlEspe="SELECT * FROM GRUPO ";
        $tablaEspe=mysql_num_rows($tablaEspe);
        for($i=0; $i<numfilasEspe; $i++){
            $filaEspe = mysql_fetch_array($tablaEspe);
            echo'<option>'.$filaEspe['cveEsp'].'</option>';
        }
        ?>
        </SELECT><BR/><BR/>
        <INPUT TYPE="submit" NAME="btnConsultar"
        ID="botonConsultar" VALUE="Consultar"/><BR/><BR/>
    </FORM>
    <a href="../pagZapato/index.html"><IMG SRC="../imgZapato/flecha.png"
    WIDTH="60" HEIGHT="40"/></a>
    </BODY>
    
