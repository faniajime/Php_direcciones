<html>
<head>
	<title>Direcciones de contactos, bienvenido</title>
  <meta charset="UTF-8"/>
</head>
<body>
<h1>Editar contacto</h1>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=index">Ver los contactos disponibles.</a></p>
<form name="direccion" id="direccion" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input name="action" type="hidden" value="edite" />
  <p>Este formulario le permite guardar direcciones de contactos. </p>
  <p>Nombre:
    <input name="nombre" type="text" id="nombre" size="51" maxlength="50" value="<?php echo $direccion->nombre;?>" />
  </p>
  <p>Apellidos:
    <input name="apellidos" type="text" id="apellidos" size="51" maxlength="100"  value="<?php echo $direccion->apellidos;?>" />
  </p>
  <p>Telefono:
    <input name="telefono" type="number" id="telefono" size="51" maxlength="8" value="<?php echo $direccion->telefono;?>" />
  </p>
  <p>Direccion:
    <input name="direccion" type="text" id="direccion" size="51" maxlength="100" value="<?php echo $direccion->direccion;?>"/>
  </p>
  <p>Telefono de trabajo:
    <input name="trabajotel" type="number" id="trabajotel" size="51" maxlength="8" value="<?php echo $direccion->trabajotel;?>"/>
  </p>
  <p>Direccion de trabajo:
    <input name="trabajodir" type="text" id="trabajodir" size="51" maxlength="100" value="<?php echo $direccion->trabajodir;?>"/>
  </p>
  <p>Correo electr&oacute;nico:
    <input name="correo" type="text" id="correo" size="51" maxlength="50" value="<?php echo $direccion->correo;?>"/>
  </p>

  <p>
    <input name="Actualizar" type="submit" value="Actualizar" />
  </p>
</form>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=index">Ver los contactos disponibles.</a></p>
</body>
</html>