	<h1>Listado de Usuario</h1>
<br>
<!--<pre>
<?php //print_r($usuarios);  //para imprimir arreglo?>
</pre>-->
<?php
echo $this->Html->Link('Agregar Usuario',array('action'=>'agregar'));
?>
<br><br>
<table>
	<th>Id</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Username</th>
	<th>Acciones</th>

<?php

	foreach ($usuarios as $u => $usuario): ?>
		<tr>
			<td><?php echo $usuario['Usuario']['id']; ?></td>
			<td><?php echo $usuario['Usuario']['nombreUsuario']; ?></td>
			<td><?php echo $usuario['Usuario']['apellidoUsuario']; ?></td>
			<td><?php echo $usuario['Usuario']['username']; ?></td>
			<td>
				<?php 
					echo $this->Html->link('Editar', 
					array('action'=>'edit',$usuario['Usuario']['id'])); 
				?>
				&nbsp;
				<?php 
					echo $this->Form->postLink('Eliminar',
						array('action'=>'delete',$usuario['Usuario']['id']),
						array('confirm'=>'Seguro quieres eliminar a '.$usuario['Usuario']['nombreUsuario'].'?'));
				?>
			</td>
		</tr>
	

 <?php endforeach; ?>
</table>
