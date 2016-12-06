<div class="widget widget-nopad">

	<div class="widget-header"> <i class="icon-list-alt"></i>
	<h3>Agregar Nuevo cliente</h3>
	</div>
<div class="widget-content">
<div class="form" style="padding: 1%;">
	<?php echo $this->Form->create('Cliente'); ?>
	<div style="float: left; padding-right: 10px;">
		
		<?php 
			echo $this->Form->input('idMinisterio',
				array('options' => $ministerios, 'label'=>'Ministerio'));
			echo $this->Form->input('nombre');
			echo $this->Form->input('rut');
			echo $this->Form->input('codigo');
			echo $this->Form->input('sigla');
			echo $this->Form->input('idRegion',
				array('options' => $regions, 'label'=>'Región'));
			echo $this->Form->input('direccion');
			echo $this->Form->input('numeroTrabajadores');

		?>


	</div>


	<div>
		<?php

			echo $this->Form->input('email');
			echo $this->Form->input('direccionWeb');
			echo $this->Form->input('fono');
			echo $this->Form->input('skype');
			echo $this->Form->input('idTipoCliente',
				array('options' => $tipoClientes, 'label'=>'Tipo de Cliente'));
			echo $this->Form->input('logo');
			echo $this->Form->input('presupuesto');

		?>

	</div>

	<div><br><br><br>
		<?php 
			$opcion = array('label'=>'Agregar Cliente','class'=>'btn btn-success');
			echo $this->Form->end($opcion); 
		?>
	


	</div>

</div>
</div>
</div>