<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerNomineeDetails Controller
 *
 * @property \App\Model\Table\CustomerNomineeDetailsTable $CustomerNomineeDetails
 *
 * @method \App\Model\Entity\CustomerNomineeDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerNomineeDetailsController extends AppController
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
        $customerNomineeDetails = $this->paginate($this->CustomerNomineeDetails);

        $this->set(compact('customerNomineeDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer Nominee Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerNomineeDetail = $this->CustomerNomineeDetails->get($id, [
            'contain' => ['Customers', 'Logins']
        ]);

        $this->set('customerNomineeDetail', $customerNomineeDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerNomineeDetail = $this->CustomerNomineeDetails->newEntity();
        if ($this->request->is('post')) {
            $customerNomineeDetail = $this->CustomerNomineeDetails->patchEntity($customerNomineeDetail, $this->request->getData());
            if ($this->CustomerNomineeDetails->save($customerNomineeDetail)) {
                $this->Flash->success(__('The customer nominee detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer nominee detail could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerNomineeDetails->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerNomineeDetails->Logins->find('list', ['limit' => 200]);
        $this->set(compact('customerNomineeDetail', 'customers', 'logins'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Nominee Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerNomineeDetail = $this->CustomerNomineeDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerNomineeDetail = $this->CustomerNomineeDetails->patchEntity($customerNomineeDetail, $this->request->getData());
            if ($this->CustomerNomineeDetails->save($customerNomineeDetail)) {
                $this->Flash->success(__('The customer nominee detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer nominee detail could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerNomineeDetails->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerNomineeDetails->Logins->find('list', ['limit' => 200]);
        $this->set(compact('customerNomineeDetail', 'customers', 'logins'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Nominee Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerNomineeDetail = $this->CustomerNomineeDetails->get($id);
        if ($this->CustomerNomineeDetails->delete($customerNomineeDetail)) {
            $this->Flash->success(__('The customer nominee detail has been deleted.'));
        } else {
            $this->Flash->error(__('The customer nominee detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
