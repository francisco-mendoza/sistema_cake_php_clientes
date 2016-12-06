<?php

class TeachersController extends AppController
{
	public function index()
	{
		$this->Teacher->recursive = 0;
		$this->set('teachers',$this->paginate());
	}

	public function add()
	{
		if($this->request->is('post')):
			if ($this->Teacher->save($this->request->data)):
				$this->Session->setFlash('El profesor se agregó');
				$this->redirect(array('action'=>'index')); //rederige
			endif;
		endif;
	}
}

?>