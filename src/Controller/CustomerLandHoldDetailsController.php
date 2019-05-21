<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerLandHoldDetails Controller
 *
 * @property \App\Model\Table\CustomerLandHoldDetailsTable $CustomerLandHoldDetails
 *
 * @method \App\Model\Entity\CustomerLandHoldDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerLandHoldDetailsController extends AppController
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
        $customerLandHoldDetails = $this->paginate($this->CustomerLandHoldDetails);

        $this->set(compact('customerLandHoldDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer Land Hold Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerLandHoldDetail = $this->CustomerLandHoldDetails->get($id, [
            'contain' => ['Customers', 'Logins', 'States', 'Districts']
        ]);

        $this->set('customerLandHoldDetail', $customerLandHoldDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerLandHoldDetail = $this->CustomerLandHoldDetails->newEntity();
        if ($this->request->is('post')) {
            $customerLandHoldDetail = $this->CustomerLandHoldDetails->patchEntity($customerLandHoldDetail, $this->request->getData());
            if ($this->CustomerLandHoldDetails->save($customerLandHoldDetail)) {
                $this->Flash->success(__('The customer land hold detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer land hold detail could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerLandHoldDetails->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerLandHoldDetails->Logins->find('list', ['limit' => 200]);
        $states = $this->CustomerLandHoldDetails->States->find('list', ['limit' => 200]);
        $districts = $this->CustomerLandHoldDetails->Districts->find('list', ['limit' => 200]);
        $this->set(compact('customerLandHoldDetail', 'customers', 'logins', 'states', 'districts'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Land Hold Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerLandHoldDetail = $this->CustomerLandHoldDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerLandHoldDetail = $this->CustomerLandHoldDetails->patchEntity($customerLandHoldDetail, $this->request->getData());
            if ($this->CustomerLandHoldDetails->save($customerLandHoldDetail)) {
                $this->Flash->success(__('The customer land hold detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer land hold detail could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerLandHoldDetails->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerLandHoldDetails->Logins->find('list', ['limit' => 200]);
        $states = $this->CustomerLandHoldDetails->States->find('list', ['limit' => 200]);
        $districts = $this->CustomerLandHoldDetails->Districts->find('list', ['limit' => 200]);
        $this->set(compact('customerLandHoldDetail', 'customers', 'logins', 'states', 'districts'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Land Hold Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerLandHoldDetail = $this->CustomerLandHoldDetails->get($id);
        if ($this->CustomerLandHoldDetails->delete($customerLandHoldDetail)) {
            $this->Flash->success(__('The customer land hold detail has been deleted.'));
        } else {
            $this->Flash->error(__('The customer land hold detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
