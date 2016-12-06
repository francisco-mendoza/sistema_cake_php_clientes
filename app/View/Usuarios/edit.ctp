<h1>Editar usuario</h1>
<?php

	echo $this->Form->create('Usuario', array('action' =>'edit'));
	echo $this->Form->input('nombreUsuario');
	echo $this->Form->input('apellidoUsuario');
	echo $this->Form->input('username');
	echo $this->Form->input('id',array('type'=>'hidden'));
	echo $this->Form->end('Guardar Usuario');

?>