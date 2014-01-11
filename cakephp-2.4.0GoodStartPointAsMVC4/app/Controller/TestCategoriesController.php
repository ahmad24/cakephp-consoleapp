<?php
App::uses('AppController', 'Controller');
/**
 * TestCategories Controller
 *
 * @property TestCategory $TestCategory
 * @property PaginatorComponent $Paginator
 */
class TestCategoriesController extends AppController {

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
		$this->TestCategory->recursive = 0;
		$this->set('testCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TestCategory->exists($id)) {
			throw new NotFoundException(__('Invalid test category'));
		}
		$options = array('conditions' => array('TestCategory.' . $this->TestCategory->primaryKey => $id));
		$this->set('testCategory', $this->TestCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TestCategory->create();
			if ($this->TestCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The test category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The test category could not be saved. Please, try again.'));
			}
		}
		$users = $this->TestCategory->User->find('list');
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
		if (!$this->TestCategory->exists($id)) {
			throw new NotFoundException(__('Invalid test category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TestCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The test category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The test category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TestCategory.' . $this->TestCategory->primaryKey => $id));
			$this->request->data = $this->TestCategory->find('first', $options);
		}
		$users = $this->TestCategory->User->find('list');
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
		$this->TestCategory->id = $id;
		if (!$this->TestCategory->exists()) {
			throw new NotFoundException(__('Invalid test category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TestCategory->delete()) {
			$this->Session->setFlash(__('The test category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The test category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
