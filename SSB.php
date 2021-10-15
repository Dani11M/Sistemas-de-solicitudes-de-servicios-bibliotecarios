<?php
//conexión base de datos
$link = mysql_connect("127.0.0.1","root@localhost","") or die ("<h2>Error al conectar</h2>");
$db = mysql_select_db("sistemabibliotecario",$link) or die("<h2>Error al conectar</h2>");
//obtención de valores del registro
$correo = $POST['correo'];
$contraseña = $POST['password'];
$confirmarcontraseña = $POST['NewPassword'];
$nombres = $POST['Nombres'];
$apellidos = $POST['Apellidos'];
$fechanac = $POST['FNac'];
$telefono = $POST['phone'];
$sexo = $POST['sexo'];
//obtención del tamaño del dato (longitud de string, int)
$req = (strlen($nombres)*strlen($contraseña)*strlen($confirmarcontraseña)*strlen($nombres)*strlen($apellidos)*strlen($fechanac)*strlen($telefono)*strlen(sexo))
//confirmación de la contraseña
if($contraseña != $confirmarcontraseña){
    die('Las contraseñas no coinciden <br><br><a href="Regis.html" >Volver</a>');
}

?>