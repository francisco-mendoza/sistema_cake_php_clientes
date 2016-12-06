<?php

class ActividadsController extends AppController
{
	public $paginate = array(
			'limit' => 8,
			'order' => array('Actividad.id' => 'asc'
				)
				
		);

	public function index()
	{
		$this->Actividad->recursive = 0;
		$this->set('actividads',$this->paginate());



		if($this->request->is('post')):
			if($this->Actividad->save($this->request->data)):
				$this->Session->setFlash(__('La nueva Actividad ha sido agregada'),'cuadro-alerta', array('class'=>'alert-success'));;
				$this->redirect(array('action'=>'index'));
			endif;
		endif;

		

		$clientes = $this->Actividad->Cliente->find('list');
		$this->set('clientes',$clientes);

		$contactos = $this->Actividad->Contacto->find('list');
		$this->set('contactos',$contactos);


		$tipoActividads = $this->Actividad->TipoActividad->find('list');
		$this->set('tipoActividads',$tipoActividads);







	}

	public function agregar()
	{
		if($this->request->is('post')):
			if($this->Actividad->save($this->request->data)):
				$this->Session->setFlash('La nueva Actividad ha sido agregada');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	}
}

?>