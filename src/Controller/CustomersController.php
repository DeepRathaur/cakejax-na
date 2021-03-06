<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Customers Controller
 *
 * @property \App\Model\Table\CustomersTable $Customers
 *
 * @method \App\Model\Entity\Customer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Logins', 'ParentCustomers', 'Zones', 'States', 'Districts']
        ];
        $customers = $this->paginate($this->Customers);

        $this->set(compact('customers'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => ['Logins', 'ParentCustomers', 'Zones', 'States', 'Districts', 'CustomerBankDetails', 'CustomerContactDetails', 'CustomerCropFields', 'CustomerDocuments', 'CustomerInsuranceTypes', 'CustomerLandHoldDetails', 'CustomerNomineeDetails', 'ChildCustomers']
        ]);

        $this->set('customer', $customer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customer = $this->Customers->newEntity();
        if ($this->request->is('post')) {
            $customer = $this->Customers->patchEntity($customer, $this->request->getData());
            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('The customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer could not be saved. Please, try again.'));
        }
        $logins = $this->Customers->Logins->find('list', ['limit' => 200]);
        $parentCustomers = $this->Customers->ParentCustomers->find('list', ['limit' => 200]);
        $zones = $this->Customers->Zones->find('list', ['limit' => 200]);
        $states = $this->Customers->States->find('list', ['limit' => 200]);
        $districts = $this->Customers->Districts->find('list', ['limit' => 200]);
        $this->set(compact('customer', 'logins', 'parentCustomers', 'zones', 'states', 'districts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customer = $this->Customers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customer = $this->Customers->patchEntity($customer, $this->request->getData());
            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('The customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer could not be saved. Please, try again.'));
        }
        $logins = $this->Customers->Logins->find('list', ['limit' => 200]);
        $parentCustomers = $this->Customers->ParentCustomers->find('list', ['limit' => 200]);
        $zones = $this->Customers->Zones->find('list', ['limit' => 200]);
        $states = $this->Customers->States->find('list', ['limit' => 200]);
        $districts = $this->Customers->Districts->find('list', ['limit' => 200]);
        $this->set(compact('customer', 'logins', 'parentCustomers', 'zones', 'states', 'districts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customer = $this->Customers->get($id);
        if ($this->Customers->delete($customer)) {
            $this->Flash->success(__('The customer has been deleted.'));
        } else {
            $this->Flash->error(__('The customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
