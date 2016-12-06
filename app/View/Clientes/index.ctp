
<script type="text/javascript">
	var tabButton = document.getElementById("clientes");
	tabButton.className = "active";
</script>


<div class="widget widget-nopad">
    <div>
    <?php
	echo $this->Html->Link('Agregar Nuevo Cliente',array('action'=>'agregar'), array('class' => 'btn btn-default'));
	?>

    </div>

    <br>
	<div class="widget-header"> <i class="icon-list-alt"></i>
	<h3>Clientes</h3>
	</div>

	

	<table class="table table-bordered">
		<tr>
			<th>Id</th>
			<th>Ministerio</th>
			<th>Nombre</th>
			<th>Rut</th>
			<th>Código</th>
			<th>Sigla</th>
			<th>Region</th>
			<th>Dirección</th>
			<th>N Trabajadores</th>
			<th>Email</th>
			<th>DirectorioWeb</th>
			<th>Fono</th>
			<th>Skype</th>
			<th>TipoCliente</th>
			<th>Logo</th>
			<th>Presupuesto</th>
			<th>Acción</th>
		</tr>
		<?php foreach ($clientes as $k => $cliente): ?>
			<tr>
				<td><?php echo $cliente['Cliente']['id']; ?></td>
				<td>
					<?php // aqui hacemos un enlace para que vaya al ministerio que pertenece
						echo $this->Html->link($cliente['Ministerio']['nombre'],
						array('controller'=>'ministerios', 'action'=>'detalle',
								$cliente['Ministerio']['id'])); 
					?>
				</td>
				<td><?php echo $cliente['Cliente']['nombre']; ?></td>
				<td><?php echo $cliente['Cliente']['rut']; ?></td>
				<td><?php echo $cliente['Cliente']['codigo']; ?></td>
				<td><?php echo $cliente['Cliente']['sigla']; ?></td>
				<td><?php echo $cliente['Region']['region_nombre']; ?></td>
				<td><?php echo $cliente['Cliente']['direccion']; ?></td>
				<td><?php echo $cliente['Cliente']['numeroTrabajadores']; ?></td>
				<td><?php echo $cliente['Cliente']['email']; ?></td>
				<td><?php echo $cliente['Cliente']['direccionWeb']; ?></td>
				<td><?php echo $cliente['Cliente']['fono']; ?></td>
				<td><?php echo $cliente['Cliente']['skype']; ?></td>
				<td><?php echo $cliente['TipoCliente']['nombre']; ?></td>
				<td><?php echo $cliente['Cliente']['logo']; ?></td>
				<td><?php echo $cliente['Cliente']['presupuesto']; ?></td>
				<td>Eliminar - Editar</td>
			</tr>
		<?php endforeach; ?>		
	</table>
</div>

