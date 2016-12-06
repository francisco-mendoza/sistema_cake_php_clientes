<?php

class Cliente extends AppModel
{
	public $displayField ='nombre';

	public $belongsTo = array(
		'Ministerio' => array(
			'className' => 'Ministerio',
			'foreignKey'=> 'idMinisterio'
			),
		'Region' => array(
			'className' => 'Region',
			'foreignKey'=> 'idRegion'
			),
		'TipoCliente' => array(
			'className' => 'TipoCliente',
			'foreignKey'=> 'idTipoCliente'
			)

		);

	
	
}

