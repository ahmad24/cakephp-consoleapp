<?php
App::uses('AppController', 'Controller');
/**
 * CustomerCategories Controller
 *
 * @property CustomerCategory $CustomerCategory
 * @property PaginatorComponent $Paginator
 */
class CustomerCategoriesController extends AppController {

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
		$this->CustomerCategory->recursive = 0;
		$this->set('customerCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CustomerCategory->exists($id)) {
			throw new NotFoundException(__('Invalid customer category'));
		}
		$options = array('conditions' => array('CustomerCategory.' . $this->CustomerCategory->primaryKey => $id));
		$this->set('customerCategory', $this->CustomerCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerCategory->create();
			if ($this->CustomerCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The customer category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer category could not be saved. Please, try again.'));
			}
		}
		$users = $this->CustomerCategory->User->find('list');
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
		if (!$this->CustomerCategory->exists($id)) {
			throw new NotFoundException(__('Invalid customer category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CustomerCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The customer category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CustomerCategory.' . $this->CustomerCategory->primaryKey => $id));
			$this->request->data = $this->CustomerCategory->find('first', $options);
		}
		$users = $this->CustomerCategory->User->find('list');
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
		$this->CustomerCategory->id = $id;
		if (!$this->CustomerCategory->exists()) {
			throw new NotFoundException(__('Invalid customer category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomerCategory->delete()) {
			$this->Session->setFlash(__('The customer category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The customer category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
