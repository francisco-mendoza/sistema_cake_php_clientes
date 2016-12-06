<?php

/**
 * @property void Contacto
 */
class ContactosController extends AppController
{
	public function index()
	{
		$this->Contacto->recursive = 0;
		$this->set('contactos', $this->paginate());
	}

	public function agregar()
	{
		if($this->request->is('post')):
			if($this->Contacto->save($this->request->data)):
				$this->Session->setFlash(__('El Nuevo Contacto ha sido guardado'),'cuadro-alerta', array('class'=>'alert-success'));
				$this->redirect(array('action'=>'index'));

			endif;
		endif;
		

		$clientes = $this->Contacto->Cliente->find('list');
		$this->set('clientes',$clientes);

		$cargos = $this->Contacto->CargoContacto->find('list');
		$this->set('cargos',$cargos);

		$areas = $this->Contacto->AreaContacto->find('list');
		$this->set('areas',$areas);

		$regions = $this->Contacto->Region->find('list');
		$this->set('regions',$regions);

		$estados = $this->Contacto->EstadoContacto->find('list');
		$this->set('estados',$estados);

	}

	public function ver($id)
	{
		
	}

	public function eliminar($id)
	{
		
	}
}

?>