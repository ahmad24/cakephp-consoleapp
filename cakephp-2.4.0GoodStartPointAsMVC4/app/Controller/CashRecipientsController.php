<?php
App::uses('AppController', 'Controller');
/**
 * CashRecipients Controller
 *
 * @property CashRecipient $CashRecipient
 * @property PaginatorComponent $Paginator
 */
class CashRecipientsController extends AppController {

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
		$this->CashRecipient->recursive = 0;
		$this->set('cashRecipients', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CashRecipient->exists($id)) {
			throw new NotFoundException(__('Invalid cash recipient'));
		}
		$options = array('conditions' => array('CashRecipient.' . $this->CashRecipient->primaryKey => $id));
		$this->set('cashRecipient', $this->CashRecipient->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CashRecipient->create();
			if ($this->CashRecipient->save($this->request->data)) {
				$this->Session->setFlash(__('The cash recipient has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cash recipient could not be saved. Please, try again.'));
			}
		}
		$cards = $this->CashRecipient->Card->find('list');
		$checks = $this->CashRecipient->Check->find('list');
		$users = $this->CashRecipient->User->find('list');
		$this->set(compact('cards', 'checks', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CashRecipient->exists($id)) {
			throw new NotFoundException(__('Invalid cash recipient'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CashRecipient->save($this->request->data)) {
				$this->Session->setFlash(__('The cash recipient has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cash recipient could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CashRecipient.' . $this->CashRecipient->primaryKey => $id));
			$this->request->data = $this->CashRecipient->find('first', $options);
		}
		$cards = $this->CashRecipient->Card->find('list');
		$checks = $this->CashRecipient->Check->find('list');
		$users = $this->CashRecipient->User->find('list');
		$this->set(compact('cards', 'checks', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CashRecipient->id = $id;
		if (!$this->CashRecipient->exists()) {
			throw new NotFoundException(__('Invalid cash recipient'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CashRecipient->delete()) {
			$this->Session->setFlash(__('The cash recipient has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cash recipient could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
