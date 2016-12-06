<div class="form">
	<?php echo $this->Form->create('Course'); ?>
	<fieldset>
		<legend>Agregar Nuevo Curso</legend>
		<?php 
			
			echo $this->Form->input('name');
			echo $this->Form->input('descripcion');
			echo $this->Form->input('teacher_id');
			
		?>
	</fieldset>
	<?php echo $this->Form->end('Agregar Curso'); ?>

</div>