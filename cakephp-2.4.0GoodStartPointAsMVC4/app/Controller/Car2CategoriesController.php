<?php
App::uses('AppController', 'Controller');
/**
 * Car2Categories Controller
 *
 * @property Car2Category $Car2Category
 * @property PaginatorComponent $Paginator
 */
class Car2CategoriesController extends AppController {

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
		$this->Car2Category->recursive = 0;
		$this->set('car2Categories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Car2Category->exists($id)) {
			throw new NotFoundException(__('Invalid car2 category'));
		}
		$options = array('conditions' => array('Car2Category.' . $this->Car2Category->primaryKey => $id));
		$this->set('car2Category', $this->Car2Category->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Car2Category->create();
			if ($this->Car2Category->save($this->request->data)) {
				$this->Session->setFlash(__('The car2 category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car2 category could not be saved. Please, try again.'));
			}
		}
		$car1Categories = $this->Car2Category->Car1Categorie->find('list');
		$users = $this->Car2Category->User->find('list');
		$this->set(compact('car1Categories', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Car2Category->exists($id)) {
			throw new NotFoundException(__('Invalid car2 category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Car2Category->save($this->request->data)) {
				$this->Session->setFlash(__('The car2 category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car2 category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Car2Category.' . $this->Car2Category->primaryKey => $id));
			$this->request->data = $this->Car2Category->find('first', $options);
		}
		$car1Categories = $this->Car2Category->Car1Categorie->find('list');
		$users = $this->Car2Category->User->find('list');
		$this->set(compact('car1Categories', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Car2Category->id = $id;
		if (!$this->Car2Category->exists()) {
			throw new NotFoundException(__('Invalid car2 category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Car2Category->delete()) {
			$this->Session->setFlash(__('The car2 category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The car2 category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
