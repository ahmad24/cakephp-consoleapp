<?php
App::uses('AppController', 'Controller');
/**
 * LogCategories Controller
 *
 * @property LogCategory $LogCategory
 * @property PaginatorComponent $Paginator
 */
class LogCategoriesController extends AppController {

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
		$this->LogCategory->recursive = 0;
		$this->set('logCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LogCategory->exists($id)) {
			throw new NotFoundException(__('Invalid log category'));
		}
		$options = array('conditions' => array('LogCategory.' . $this->LogCategory->primaryKey => $id));
		$this->set('logCategory', $this->LogCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LogCategory->create();
			if ($this->LogCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The log category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The log category could not be saved. Please, try again.'));
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
		if (!$this->LogCategory->exists($id)) {
			throw new NotFoundException(__('Invalid log category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LogCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The log category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The log category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LogCategory.' . $this->LogCategory->primaryKey => $id));
			$this->request->data = $this->LogCategory->find('first', $options);
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
		$this->LogCategory->id = $id;
		if (!$this->LogCategory->exists()) {
			throw new NotFoundException(__('Invalid log category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LogCategory->delete()) {
			$this->Session->setFlash(__('The log category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The log category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
