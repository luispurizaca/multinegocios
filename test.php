<?php
require_once(__DIR__.'/config/conexion_bd.php');
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Mina&display=swap" rel="stylesheet">
<title>PHP</title>
<style>
body{
font-family: 'Mina', sans-serif;
}

.h1-titulo{
color: #111;
text-align: center;
font-size: 30px;
color: #000074;
}

#tabla_usuarios{
width: 80%;
margin: auto;
}

.td_usuarios{
text-align: center;
background: #000074;
color: white;
font-size: 16px;
}

.td_usuarios_content{
font-size: 13px;
}
</style>
</head>
<body>

<h1 class="h1-titulo">Bienvenido(a)</h1>
<table id="tabla_usuarios">
<tr>
<td class="td_usuarios" style="width: 20%;">Nombres</td>
<td class="td_usuarios" style="width: 20%;">Apellidos</td>
<td class="td_usuarios" style="width: 30%;">Correo</td>
<td class="td_usuarios" style="width: 30%;">Contrase&ntilde;a</td>
</tr>
<?php
$consulta = "SELECT * FROM users ORDER BY user_id ASC";
$query_consulta = mysqli_query($con, $consulta);
while($row = mysqli_fetch_array($query_consulta)){
$nombres = $row['firstname'];
$apellidos = $row['lastname'];
$correo = $row['user'];
$clave = $row['clave'];
?>
<tr>
<td class="td_usuarios_content" style="width: 20%;"><?php echo $nombres; ?></td>
<td class="td_usuarios_content" style="width: 20%;"><?php echo $apellidos; ?></td>
<td class="td_usuarios_content" style="width: 30%;"><?php echo $correo; ?></td>
<td class="td_usuarios_content" style="width: 30%;"><?php echo $clave; ?></td>
</tr>
<?php
}
?>
</table>

</body>
</html>