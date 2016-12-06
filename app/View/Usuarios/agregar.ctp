<h1>Agregar Usuarios</h1>
<?php
	
	echo $this->Form->create('Usuario'); //crear formulario
	echo $this->Form->input('nombreUsuario',array('label'=>'Nombre')); //input
	echo $this->Form->input('apellidoUsuario',array('label'=>'Apellido'));//input
	echo $this->Form->input('username',array('label'=>'Nombre Usuario'));//input
	echo $this->Form->input('password',array('label'=>'Contraseña'));//input
	echo $this->Form->end('Guardar Usuario'); //boton
?>