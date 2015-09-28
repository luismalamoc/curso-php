<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Ejemplo básico del Patron MVC en PHP</title>
</head>
<body>

<table>
	<tr>
		<th>ID</th>
		<th>Nombre</th>
	</tr>
	
	<?php foreach ($resultado as $producto): ?>
		<tr>
			<td><?php echo $producto['id']; ?></td>
			<td>
				<a href="?metodo=obtener&id=<?php echo $producto['id']; ?>"><?php echo $producto['nombre']; ?></a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>

</body>
</html>