<?php

class Actividad extends AppModel
{
	public $displayField ='nombre';

	public $belongsTo = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey'=> 'idCliente'
			),
		'Contacto' => array(
			'className' => 'Contacto',
			'foreignKey'=> 'idContacto'
			),
		'TipoActividad' => array(
			'className' => 'TipoActividad',
			'foreignKey'=> 'idTipoActividad'
			),

		);

	
	
}



?>