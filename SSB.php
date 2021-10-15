<?php
//conexión base de datos
$link = mysql_connect("localhost","root","") or die ("<h2>No se encontró el servidor</h2>");
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
$req = (strlen($nombres)*strlen($contraseña)*strlen($confirmarcontraseña)*strlen($nombres)*strlen($apellidos)*strlen($fechanac)*strlen($telefono)*strlen(sexo)) or die ("No se han llenado todos los campos <br><br>href="Regis.html">")
//confirmación de la contraseña
if($contraseña != $confirmarcontraseña){
    die('Las contraseñas no coinciden <br /> <a href="Regis.html" >Volver</a>');
}
//encriptación de la contraseña
$contraseñausuario = md5(contraseña);
//ingreso de información a las tablas
mysql_query("INSERT INTO registro VALUES ('','$correo','$contraseña','$nombres','$apellidos','$fechanac','$telefono','$sexo')",link) or die ("<h2>Error de envío</h2>");
echo'
    <script>
    alert("Registro exitoso")
    location.href="Regis-html";
    </script>
'
?>