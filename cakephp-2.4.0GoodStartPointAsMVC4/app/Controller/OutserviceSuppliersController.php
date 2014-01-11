<?php
App::uses('AppController', 'Controller');
/**
 * OutserviceSuppliers Controller
 *
 * @property OutserviceSupplier $OutserviceSupplier
 * @property PaginatorComponent $Paginator
 */
class OutserviceSuppliersController extends AppController {

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
		$this->OutserviceSupplier->recursive = 0;
		$this->set('outserviceSuppliers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OutserviceSupplier->exists($id)) {
			throw new NotFoundException(__('Invalid outservice supplier'));
		}
		$options = array('conditions' => array('OutserviceSupplier.' . $this->OutserviceSupplier->primaryKey => $id));
		$this->set('outserviceSupplier', $this->OutserviceSupplier->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OutserviceSupplier->create();
			if ($this->OutserviceSupplier->save($this->request->data)) {
				$this->Session->setFlash(__('The outservice supplier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The outservice supplier could not be saved. Please, try again.'));
			}
		}
		$users = $this->OutserviceSupplier->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OutserviceSupplier->exists($id)) {
			throw new NotFoundException(__('Invalid outservice supplier'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OutserviceSupplier->save($this->request->data)) {
				$this->Session->setFlash(__('The outservice supplier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The outservice supplier could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OutserviceSupplier.' . $this->OutserviceSupplier->primaryKey => $id));
			$this->request->data = $this->OutserviceSupplier->find('first', $options);
		}
		$users = $this->OutserviceSupplier->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OutserviceSupplier->id = $id;
		if (!$this->OutserviceSupplier->exists()) {
			throw new NotFoundException(__('Invalid outservice supplier'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OutserviceSupplier->delete()) {
			$this->Session->setFlash(__('The outservice supplier has been deleted.'));
		} else {
			$this->Session->setFlash(__('The outservice supplier could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
