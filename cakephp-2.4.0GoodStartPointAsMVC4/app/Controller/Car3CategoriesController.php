<?php
App::uses('AppController', 'Controller');
/**
 * Car3Categories Controller
 *
 * @property Car3Category $Car3Category
 * @property PaginatorComponent $Paginator
 */
class Car3CategoriesController extends AppController {

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
		$this->Car3Category->recursive = 0;
		$this->set('car3Categories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Car3Category->exists($id)) {
			throw new NotFoundException(__('Invalid car3 category'));
		}
		$options = array('conditions' => array('Car3Category.' . $this->Car3Category->primaryKey => $id));
		$this->set('car3Category', $this->Car3Category->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Car3Category->create();
			if ($this->Car3Category->save($this->request->data)) {
				$this->Session->setFlash(__('The car3 category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car3 category could not be saved. Please, try again.'));
			}
		}
		$users = $this->Car3Category->User->find('list');
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
		if (!$this->Car3Category->exists($id)) {
			throw new NotFoundException(__('Invalid car3 category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Car3Category->save($this->request->data)) {
				$this->Session->setFlash(__('The car3 category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car3 category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Car3Category.' . $this->Car3Category->primaryKey => $id));
			$this->request->data = $this->Car3Category->find('first', $options);
		}
		$users = $this->Car3Category->User->find('list');
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
		$this->Car3Category->id = $id;
		if (!$this->Car3Category->exists()) {
			throw new NotFoundException(__('Invalid car3 category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Car3Category->delete()) {
			$this->Session->setFlash(__('The car3 category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The car3 category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
