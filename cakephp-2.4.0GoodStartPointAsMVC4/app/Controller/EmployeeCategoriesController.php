<?php
App::uses('AppController', 'Controller');
/**
 * EmployeeCategories Controller
 *
 * @property EmployeeCategory $EmployeeCategory
 * @property PaginatorComponent $Paginator
 */
class EmployeeCategoriesController extends AppController {

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
		$this->EmployeeCategory->recursive = 0;
		$this->set('employeeCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmployeeCategory->exists($id)) {
			throw new NotFoundException(__('Invalid employee category'));
		}
		$options = array('conditions' => array('EmployeeCategory.' . $this->EmployeeCategory->primaryKey => $id));
		$this->set('employeeCategory', $this->EmployeeCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmployeeCategory->create();
			if ($this->EmployeeCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The employee category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee category could not be saved. Please, try again.'));
			}
		}
		$users = $this->EmployeeCategory->User->find('list');
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
		if (!$this->EmployeeCategory->exists($id)) {
			throw new NotFoundException(__('Invalid employee category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmployeeCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The employee category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmployeeCategory.' . $this->EmployeeCategory->primaryKey => $id));
			$this->request->data = $this->EmployeeCategory->find('first', $options);
		}
		$users = $this->EmployeeCategory->User->find('list');
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
		$this->EmployeeCategory->id = $id;
		if (!$this->EmployeeCategory->exists()) {
			throw new NotFoundException(__('Invalid employee category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EmployeeCategory->delete()) {
			$this->Session->setFlash(__('The employee category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The employee category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
