<?php

class CargoContacto extends AppModel
{
	public $displayField = 'nombre'; // nombre que mostrará

	public $hasMany = array(
			'Contacto' => array(
					'className' => 'Contacto',
					'foreignKey'=> 'idCargo',
					'dependent' => true,
				)
		);
}

