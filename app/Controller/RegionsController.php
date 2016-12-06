<?php

class RegionsController extends AppController
{
	public $paginate = array(
			'limit' => 8,
			'order' => array('Region.id' => 'asc'
				)
		);

	public function index()
	{
		$this->Region->recursive = 0;
		$this->set('regions',$this->paginate());



		if($this->request->is('post')):
			if($this->Region->save($this->request->data)):
				$this->Session->setFlash(__('La nueva Region ha sido agregada'),'cuadro-alerta', array('class'=>'alert-success'));;
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	}

	public function agregar()
	{
		if($this->request->is('post')):
			if($this->Region->save($this->request->data)):
				$this->Session->setFlash('La nueva Region ha sido agregada');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	}
}

?>