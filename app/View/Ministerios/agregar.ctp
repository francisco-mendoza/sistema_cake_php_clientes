<div class="agregar">
	<?php echo $this->Form->create('Ministerio'); ?>
	<fieldset>
		<legend>Agregar Ministerio</legend>
		<?php echo $this->Form->input('nombre', array('label' =>'Nombre')); ?>
		<?php echo $this->Form->input('descripcion', array('label' =>'Descripción')); ?>

	</fieldset>
	<?php echo $this->Form->end('Agregar Ministerio'); ?>
</div>