<?php
App::uses('AppController', 'Controller');
/**
 * OutServices Controller
 *
 * @property OutService $OutService
 * @property PaginatorComponent $Paginator
 */
class OutServicesController extends AppController {

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
		$this->OutService->recursive = 0;
		$this->set('outServices', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OutService->exists($id)) {
			throw new NotFoundException(__('Invalid out service'));
		}
		$options = array('conditions' => array('OutService.' . $this->OutService->primaryKey => $id));
		$this->set('outService', $this->OutService->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OutService->create();
			if ($this->OutService->save($this->request->data)) {
				$this->Session->setFlash(__('The out service has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The out service could not be saved. Please, try again.'));
			}
		}
		$cards = $this->OutService->Card->find('list');
		$users = $this->OutService->User->find('list');
		$outserviceSuppliers = $this->OutService->OutserviceSupplier->find('list');
		$this->set(compact('cards', 'users', 'outserviceSuppliers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OutService->exists($id)) {
			throw new NotFoundException(__('Invalid out service'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->OutService->save($this->request->data)) {
				$this->Session->setFlash(__('The out service has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The out service could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OutService.' . $this->OutService->primaryKey => $id));
			$this->request->data = $this->OutService->find('first', $options);
		}
		$cards = $this->OutService->Card->find('list');
		$users = $this->OutService->User->find('list');
		$outserviceSuppliers = $this->OutService->OutserviceSupplier->find('list');
		$this->set(compact('cards', 'users', 'outserviceSuppliers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->OutService->id = $id;
		if (!$this->OutService->exists()) {
			throw new NotFoundException(__('Invalid out service'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OutService->delete()) {
			$this->Session->setFlash(__('The out service has been deleted.'));
		} else {
			$this->Session->setFlash(__('The out service could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
