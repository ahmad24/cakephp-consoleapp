<?php
App::uses('AppController', 'Controller');
/**
 * MaintenanceCategories Controller
 *
 * @property MaintenanceCategory $MaintenanceCategory
 * @property PaginatorComponent $Paginator
 */
class MaintenanceCategoriesController extends AppController {

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
		$this->MaintenanceCategory->recursive = 0;
		$this->set('maintenanceCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MaintenanceCategory->exists($id)) {
			throw new NotFoundException(__('Invalid maintenance category'));
		}
		$options = array('conditions' => array('MaintenanceCategory.' . $this->MaintenanceCategory->primaryKey => $id));
		$this->set('maintenanceCategory', $this->MaintenanceCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MaintenanceCategory->create();
			if ($this->MaintenanceCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The maintenance category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The maintenance category could not be saved. Please, try again.'));
			}
		}
		$users = $this->MaintenanceCategory->User->find('list');
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
		if (!$this->MaintenanceCategory->exists($id)) {
			throw new NotFoundException(__('Invalid maintenance category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MaintenanceCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The maintenance category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The maintenance category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MaintenanceCategory.' . $this->MaintenanceCategory->primaryKey => $id));
			$this->request->data = $this->MaintenanceCategory->find('first', $options);
		}
		$users = $this->MaintenanceCategory->User->find('list');
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
		$this->MaintenanceCategory->id = $id;
		if (!$this->MaintenanceCategory->exists()) {
			throw new NotFoundException(__('Invalid maintenance category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MaintenanceCategory->delete()) {
			$this->Session->setFlash(__('The maintenance category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The maintenance category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
