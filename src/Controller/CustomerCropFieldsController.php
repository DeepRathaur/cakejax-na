<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerCropFields Controller
 *
 * @property \App\Model\Table\CustomerCropFieldsTable $CustomerCropFields
 *
 * @method \App\Model\Entity\CustomerCropField[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerCropFieldsController extends AppController
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
        $customerCropFields = $this->paginate($this->CustomerCropFields);

        $this->set(compact('customerCropFields'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer Crop Field id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerCropField = $this->CustomerCropFields->get($id, [
            'contain' => ['Customers', 'Logins']
        ]);

        $this->set('customerCropField', $customerCropField);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerCropField = $this->CustomerCropFields->newEntity();
        if ($this->request->is('post')) {
            $customerCropField = $this->CustomerCropFields->patchEntity($customerCropField, $this->request->getData());
            if ($this->CustomerCropFields->save($customerCropField)) {
                $this->Flash->success(__('The customer crop field has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer crop field could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerCropFields->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerCropFields->Logins->find('list', ['limit' => 200]);
        $this->set(compact('customerCropField', 'customers', 'logins'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Crop Field id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerCropField = $this->CustomerCropFields->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerCropField = $this->CustomerCropFields->patchEntity($customerCropField, $this->request->getData());
            if ($this->CustomerCropFields->save($customerCropField)) {
                $this->Flash->success(__('The customer crop field has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer crop field could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerCropFields->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerCropFields->Logins->find('list', ['limit' => 200]);
        $this->set(compact('customerCropField', 'customers', 'logins'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Crop Field id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerCropField = $this->CustomerCropFields->get($id);
        if ($this->CustomerCropFields->delete($customerCropField)) {
            $this->Flash->success(__('The customer crop field has been deleted.'));
        } else {
            $this->Flash->error(__('The customer crop field could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
