<?php

class Ministerio extends AppModel
{
	public $displayField = 'nombre'; // nombre que mostrará

	public $hasMany = array(
			'Cliente' => array(
					'className' => 'Cliente',
					'foreignKey'=> 'idMinisterio',
					'dependent' => true,
				)
		);
}

