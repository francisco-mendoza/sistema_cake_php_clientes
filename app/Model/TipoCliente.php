<?php

class TipoCliente extends AppModel
{
	public $displayField = 'nombre'; // nombre que mostrará

	public $hasMany = array(
			'Cliente' => array(
					'className' => 'Cliente',
					'foreignKey'=> 'idTipoCliente',
					'dependent' => true,
				)
		);
}

