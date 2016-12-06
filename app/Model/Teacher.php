<?php

class Teacher extends AppModel
{
	public $displayField = 'name'; //title, name , scafolding
	public $hasMany = array(//relaciones
			'Course' => array(
					'className' => 'Course',
					'foreignKey'=> 'teacher_id',
					'dependent' => true
				)
		);

}

?>