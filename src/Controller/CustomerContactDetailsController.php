<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerContactDetails Controller
 *
 * @property \App\Model\Table\CustomerContactDetailsTable $CustomerContactDetails
 *
 * @method \App\Model\Entity\CustomerContactDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerContactDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Logins', 'States', 'Districts']
        ];
        $customerContactDetails = $this->paginate($this->CustomerContactDetails);

        $this->set(compact('customerContactDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer Contact Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerContactDetail = $this->CustomerContactDetails->get($id, [
            'contain' => ['Customers', 'Logins', 'States', 'Districts']
        ]);

        $this->set('customerContactDetail', $customerContactDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerContactDetail = $this->CustomerContactDetails->newEntity();
        if ($this->request->is('post')) {
            $customerContactDetail = $this->CustomerContactDetails->patchEntity($customerContactDetail, $this->request->getData());
            if ($this->CustomerContactDetails->save($customerContactDetail)) {
                $this->Flash->success(__('The customer contact detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer contact detail could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerContactDetails->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerContactDetails->Logins->find('list', ['limit' => 200]);
        $states = $this->CustomerContactDetails->States->find('list', ['limit' => 200]);
        $districts = $this->CustomerContactDetails->Districts->find('list', ['limit' => 200]);
        $this->set(compact('customerContactDetail', 'customers', 'logins', 'states', 'districts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Contact Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerContactDetail = $this->CustomerContactDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerContactDetail = $this->CustomerContactDetails->patchEntity($customerContactDetail, $this->request->getData());
            if ($this->CustomerContactDetails->save($customerContactDetail)) {
                $this->Flash->success(__('The customer contact detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer contact detail could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerContactDetails->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerContactDetails->Logins->find('list', ['limit' => 200]);
        $states = $this->CustomerContactDetails->States->find('list', ['limit' => 200]);
        $districts = $this->CustomerContactDetails->Districts->find('list', ['limit' => 200]);
        $this->set(compact('customerContactDetail', 'customers', 'logins', 'states', 'districts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Contact Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerContactDetail = $this->CustomerContactDetails->get($id);
        if ($this->CustomerContactDetails->delete($customerContactDetail)) {
            $this->Flash->success(__('The customer contact detail has been deleted.'));
        } else {
            $this->Flash->error(__('The customer contact detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
