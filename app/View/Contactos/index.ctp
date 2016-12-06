
<script type="text/javascript">
	var tabButton = document.getElementById("contactos");
	tabButton.className = "active";
</script>

<div class="widget widget-nopad">
    <div>
    <?php
	echo $this->Html->Link('Agregar Nuevo Contacto',array('action'=>'agregar'), array('class' => 'btn btn-default'));
	?>

    </div>

    <br>
	<div class="widget-header"> <i class="icon-list-alt"></i>
	<h3>Contactos</h3>
	</div>

	

	<table class="table table-bordered">
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Cliente</th>
			<th>Cargo</th>
			<th>Email</th>
			<th>Email Secretaria</th>
			<th>Fono</th>
			<th>Movil</th>
			<th>Area</th>
			<th>Region</th>
			<th>Dirección</th>
			<th>Skype</th>
			<th>Estado</th>
		</tr>
		<?php foreach ($contactos as $k => $contacto): ?>
			<tr>
				<td><?php echo $contacto['Contacto']['id']; ?></td>
				<td><?php echo $contacto['Contacto']['nombre']; ?></td>
				<td><?php echo $contacto['Contacto']['apellido']; ?></td>
				<td>
					<?php // aqui hacemos un enlace para que vaya al Cliente que pertenece
						echo $this->Html->link($contacto['Cliente']['nombre'],
						array('controller'=>'clientes', 'action'=>'detalle',
								$contacto['Cliente']['id'])); 
					?>
				</td>
				<td>
					<?php // aqui hacemos un enlace para que vaya al Cargo que pertenece
						echo $this->Html->link($contacto['CargoContacto']['nombre'],
						array('controller'=>'cargoContactos', 'action'=>'detalle',
								$contacto['CargoContacto']['id'])); 
					?>
				</td>
				<td><?php echo $contacto['Contacto']['email']; ?></td>
				<td><?php echo $contacto['Contacto']['email_secretaria']; ?></td>
				<td><?php echo $contacto['Contacto']['fono']; ?></td>
				<td><?php echo $contacto['Contacto']['movil']; ?></td>
				<td>
					<?php // aqui hacemos un enlace para que vaya al Cargo que pertenece
						echo $this->Html->link($contacto['AreaContacto']['nombre'],
						array('controller'=>'areaContactos', 'action'=>'detalle',
								$contacto['AreaContacto']['id'])); 
					?>
				</td>
				<td><?php echo $contacto['Region']['region_nombre']; ?></td>
				<td><?php echo $contacto['Contacto']['direccionPostal']; ?></td>
				<td><?php echo $contacto['Contacto']['skype']; ?></td>
				<td><?php echo $contacto['EstadoContacto']['nombre']; ?></td>
			</tr>
		<?php endforeach; ?>		
	</table>
</div>

