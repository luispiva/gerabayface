<?php
App::uses('AppController', 'Controller');
/**
 * Pabxconfs Controller
 *
 * @property Pabxconf $Pabxconf
 * @property PaginatorComponent $Paginator
 */
class PabxconfsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pabxconf->recursive = 0;
		$this->set('pabxconfs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pabxconf->exists($id)) {
			throw new NotFoundException(__('Invalid pabxconf'));
		}
		$options = array('conditions' => array('Pabxconf.' . $this->Pabxconf->primaryKey => $id));
		$this->set('pabxconf', $this->Pabxconf->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pabxconf->create();
			if ($this->Pabxconf->save($this->request->data)) {
				return $this->flash(__('The pabxconf has been saved.'), array('action' => 'index'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pabxconf->exists($id)) {
			throw new NotFoundException(__('Invalid pabxconf'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pabxconf->save($this->request->data)) {
				return $this->flash(__('The pabxconf has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Pabxconf.' . $this->Pabxconf->primaryKey => $id));
			$this->request->data = $this->Pabxconf->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pabxconf->id = $id;
		if (!$this->Pabxconf->exists()) {
			throw new NotFoundException(__('Invalid pabxconf'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pabxconf->delete()) {
			return $this->flash(__('The pabxconf has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The pabxconf could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}

/**
 * admib_index method
 *
 * @return void
 */
	public function admib_index() {
		$this->Pabxconf->recursive = 0;
		$this->set('pabxconfs', $this->Paginator->paginate());
	}

/**
 * admib_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admib_view($id = null) {
		if (!$this->Pabxconf->exists($id)) {
			throw new NotFoundException(__('Invalid pabxconf'));
		}
		$options = array('conditions' => array('Pabxconf.' . $this->Pabxconf->primaryKey => $id));
		$this->set('pabxconf', $this->Pabxconf->find('first', $options));
	}

/**
 * admib_add method
 *
 * @return void
 */
	public function admib_add() {
		if ($this->request->is('post')) {
			$this->Pabxconf->create();
			if ($this->Pabxconf->save($this->request->data)) {
				return $this->flash(__('The pabxconf has been saved.'), array('action' => 'index'));
			}
		}
	}

/**
 * admib_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admib_edit($id = null) {
		if (!$this->Pabxconf->exists($id)) {
			throw new NotFoundException(__('Invalid pabxconf'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pabxconf->save($this->request->data)) {
				return $this->flash(__('The pabxconf has been saved.'), array('action' => 'index'));
			}
		} else {
			$options = array('conditions' => array('Pabxconf.' . $this->Pabxconf->primaryKey => $id));
			$this->request->data = $this->Pabxconf->find('first', $options);
		}
	}

/**
 * admib_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admib_delete($id = null) {
		$this->Pabxconf->id = $id;
		if (!$this->Pabxconf->exists()) {
			throw new NotFoundException(__('Invalid pabxconf'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pabxconf->delete()) {
			return $this->flash(__('The pabxconf has been deleted.'), array('action' => 'index'));
		} else {
			return $this->flash(__('The pabxconf could not be deleted. Please, try again.'), array('action' => 'index'));
		}
	}
}
