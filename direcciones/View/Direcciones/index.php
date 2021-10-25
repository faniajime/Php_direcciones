<html>
<head>
	<title>Direcciones de Contactos, bienvenido</title>
	<meta charset="UTF-8"/>
</head>
<body>
<style>
	table, th, td {
		border: 1px solid black;
	}
</style>
<h1>Direcciones de Contactos</h1>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=cree">Anadir un nuevo contacto</a></p>
<?php 
if (!empty($_GET['mensaje'])){
	echo "<p>{$_GET['mensaje']}</p>";
}
?>

<table>
<tr><th scope="col">Nombre</th><th scope="col">Apellidos</th><th scope="col">Teléfono de la Casa</th><th scope="col">Dirección de la Casa</th><th scope="col">Teléfono del Trabajo</th><th scope="col">Dirección del Trabajo</th><th scope="col">Correo Electrónico</th><th scope="col"> </th><th scope="col"> </th></tr>

<?php

foreach ($direcciones as $contacto)
{
?>	
	<tr>
		<td><?php echo $contacto->nombre; ?></td>
		<td><?php echo $contacto->apellidos; ?></td>
		<td><?php echo $contacto->telefono; ?></td>
		<td><?php echo $contacto->direccion; ?></td>
		<td><?php echo $contacto->trabajotel; ?></td>
		<td><?php echo $contacto->trabajodir; ?></td>
		<td> <a href="mailto:<?php echo $contacto->correo; ?>"><?php echo $contacto->correo; ?></a></td>
		<td><a href="?id=<?php echo $contacto->correo;?>&amp;action=edite">Editar</a></td>
		<td><a href="?id=<?php echo $contacto->correo;?>&amp;action=borre">Borrar</a></td>
	</tr>
<?php
}
?>
</table>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=cree">Añadir un nuevo contacto</a></p>
</body>
</html>