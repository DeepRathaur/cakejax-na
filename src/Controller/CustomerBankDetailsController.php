<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerBankDetails Controller
 *
 * @property \App\Model\Table\CustomerBankDetailsTable $CustomerBankDetails
 *
 * @method \App\Model\Entity\CustomerBankDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerBankDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Logins']
        ];
        $customerBankDetails = $this->paginate($this->CustomerBankDetails);

        $this->set(compact('customerBankDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer Bank Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerBankDetail = $this->CustomerBankDetails->get($id, [
            'contain' => ['Customers', 'Logins']
        ]);

        $this->set('customerBankDetail', $customerBankDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerBankDetail = $this->CustomerBankDetails->newEntity();
        if ($this->request->is('post')) {
            $customerBankDetail = $this->CustomerBankDetails->patchEntity($customerBankDetail, $this->request->getData());
            if ($this->CustomerBankDetails->save($customerBankDetail)) {
                $this->Flash->success(__('The customer bank detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer bank detail could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerBankDetails->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerBankDetails->Logins->find('list', ['limit' => 200]);
        $this->set(compact('customerBankDetail', 'customers', 'logins'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Bank Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerBankDetail = $this->CustomerBankDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerBankDetail = $this->CustomerBankDetails->patchEntity($customerBankDetail, $this->request->getData());
            if ($this->CustomerBankDetails->save($customerBankDetail)) {
                $this->Flash->success(__('The customer bank detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer bank detail could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerBankDetails->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerBankDetails->Logins->find('list', ['limit' => 200]);
        $this->set(compact('customerBankDetail', 'customers', 'logins'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Bank Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerBankDetail = $this->CustomerBankDetails->get($id);
        if ($this->CustomerBankDetails->delete($customerBankDetail)) {
            $this->Flash->success(__('The customer bank detail has been deleted.'));
        } else {
            $this->Flash->error(__('The customer bank detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
