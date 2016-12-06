<?php

class Contacto extends AppModel
{
	public $displayField ='nombre';

	public $belongsTo = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey'=> 'idCliente'
			),
		'CargoContacto' => array(
			'className' => 'CargoContacto',
			'foreignKey'=> 'idCargo'
			),
		'AreaContacto' => array(
			'className' => 'AreaContacto',
			'foreignKey'=> 'idArea'
			),
		'Region' => array(
			'className' => 'Region',
			'foreignKey'=> 'idRegion'
			),
		'EstadoContacto' => array(
			'className' => 'EstadoContacto',
			'foreignKey'=> 'idEstado'
			),

		);

	
	
}



?>