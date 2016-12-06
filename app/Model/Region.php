<?php

class Region extends AppModel
{
	public $displayField = 'region_nombre'; // nombre que mostrará

	public $hasMany = array(
			'Cliente' => array(
					'className' => 'Cliente',
					'foreignKey'=> 'idRegion',
					'dependent' => true,
				)
		);
}

