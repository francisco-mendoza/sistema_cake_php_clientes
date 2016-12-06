<div class="widget widget-nopad">

	<div class="widget-header"> <i class="icon-list-alt"></i>
	<h3>Agregar Nuevo Contacto</h3>
	</div>
<div class="widget-content">
<div class="form" style="padding: 1%;">
	<?php echo $this->Form->create('Contacto'); ?>
	<div style="float: left; padding-right: 10px;">
		
		<?php 
			echo $this->Form->input('nombre');
			echo $this->Form->input('apellido');
			echo $this->Form->input('idCliente',
				array('options' => $clientes, 'label'=>'Cliente'));
			echo $this->Form->input('idCargo',
				array('options' => $cargos, 'label'=>'CargoContacto'));
			echo $this->Form->input('email');
			echo $this->Form->input('email_secretaria');
			
		?>
	</div>
	<div>
		<?php 
			
			
			echo $this->Form->input('fono');
			echo $this->Form->input('movil');
			echo $this->Form->input('idArea',
				array('options' => $areas, 'label'=>'AreaContacto'));
			echo $this->Form->input('idRegion',
				array('options' => $regions, 'label'=>'Region'));
			echo $this->Form->input('direccionPostal');
			echo $this->Form->input('skype');
			echo $this->Form->input('idEstado',
				array('options' => $estados, 'label'=>'EstadosContacto'));
		?>



	</div>
	<?php 
	$opcion = array('label'=>'Agregar Contacto','class'=>'btn btn-success');
	echo $this->Form->end($opcion); ?>

</div>
</div>
</div>