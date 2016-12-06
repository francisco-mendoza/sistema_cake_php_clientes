
<script type="text/javascript">
	var tabButton = document.getElementById("actividades");
	tabButton.className = "active";
</script>


<div class="widget widget-nopad">
    <div style="float:left">
    <?php
	echo $this->Html->Link('Agregar Nueva Actividad','#agregar', array('data-toggle' => 'modal','class' => 'btn btn-default'));
	?>

	</div>

	&nbsp;

	<button class="btn btn-default"> Ver Tipo de Actividades</button>

	&nbsp;

	<br>


    <br>
	<div class="widget-header"> <i class="icon-list-alt"></i>
	<h3>Actividades</h3>
	</div>

	

	<table class="table table-bordered">
		<tr>
			<th>Id</th>
			<th>Tipo Actividad</th>
			<th>Cliente</th>
			<th>Contacto</th>
			
			<th>Comentario</th>
			<th>Acccion</th>
		</tr>
		<?php foreach ($actividads as $k => $actividad): ?>
			<tr>
				<td><?php echo $actividad['Actividad']['id']; ?></td>
				<td>
					<?php // aqui hacemos un enlace para que vaya al actividad que pertenece
						echo $this->Html->link($actividad['TipoActividad']['nombre'],
						array('controller'=>'tipoActividads', 'action'=>'detalle',
								$actividad['TipoActividad']['id'])); 
					?>
				</td>
				<td>
					<?php // aqui hacemos un enlace para que vaya al actividad que pertenece
						echo $this->Html->link($actividad['Cliente']['nombre'],
						array('controller'=>'clientes', 'action'=>'detalle',
								$actividad['Cliente']['id'])); 

						
					?>
				</td>
				<td>
					<?php // aqui hacemos un enlace para que vaya al actividad que pertenece
						echo $this->Html->link($actividad['Contacto']['nombre'],
						array('controller'=>'contactos', 'action'=>'detalle',
								$actividad['Contacto']['id'])); 
					?>
				</td>
				
				<td><?php echo $actividad['Actividad']['comentario']; ?></td>
				
				<td><a href="#" class="icon-edit"></a> <a href="#" class="icon-remove-circle"></a></td>
			</tr>
		<?php endforeach; ?>		
	</table>
</div>












<!--------------------------  MODAL PARA AGREGAR    ---------------------------->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Actividad</h4>
      </div>
      <div class="modal-body">


	<?php echo $this->Form->create('Actividad'); ?>
	<fieldset>
		
		<?php 
			
			echo $this->Form->input('idCliente',
				array('options' => $clientes, 'label'=>'Cliente'));

			echo $this->Form->input('idContacto',
				array('options' => $contactos, 'label'=>'Contacto'));

			echo $this->Form->input('idTipoActividad',
				array('options' => $tipoActividads, 'label'=>'TipoActividad'));
			
			echo $this->Form->input('comentario');
			
			
		?>
	</fieldset>
	



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="float:left">Cancelar</button>
        
        
        <?php 
			$opcion = array('label'=>'Agregar Region','class'=>'btn btn-success','type'=>'button');
			echo $this->Form->end($opcion); 
		?>
		
      </div>
    </div>
  </div>
</div>

