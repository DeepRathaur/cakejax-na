<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerInsuranceTypes Controller
 *
 * @property \App\Model\Table\CustomerInsuranceTypesTable $CustomerInsuranceTypes
 *
 * @method \App\Model\Entity\CustomerInsuranceType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerInsuranceTypesController extends AppController
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
        $customerInsuranceTypes = $this->paginate($this->CustomerInsuranceTypes);

        $this->set(compact('customerInsuranceTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer Insurance Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerInsuranceType = $this->CustomerInsuranceTypes->get($id, [
            'contain' => ['Customers', 'Logins']
        ]);

        $this->set('customerInsuranceType', $customerInsuranceType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerInsuranceType = $this->CustomerInsuranceTypes->newEntity();
        if ($this->request->is('post')) {
            $customerInsuranceType = $this->CustomerInsuranceTypes->patchEntity($customerInsuranceType, $this->request->getData());
            if ($this->CustomerInsuranceTypes->save($customerInsuranceType)) {
                $this->Flash->success(__('The customer insurance type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer insurance type could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerInsuranceTypes->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerInsuranceTypes->Logins->find('list', ['limit' => 200]);
        $this->set(compact('customerInsuranceType', 'customers', 'logins'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Insurance Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerInsuranceType = $this->CustomerInsuranceTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerInsuranceType = $this->CustomerInsuranceTypes->patchEntity($customerInsuranceType, $this->request->getData());
            if ($this->CustomerInsuranceTypes->save($customerInsuranceType)) {
                $this->Flash->success(__('The customer insurance type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer insurance type could not be saved. Please, try again.'));
        }
        $customers = $this->CustomerInsuranceTypes->Customers->find('list', ['limit' => 200]);
        $logins = $this->CustomerInsuranceTypes->Logins->find('list', ['limit' => 200]);
        $this->set(compact('customerInsuranceType', 'customers', 'logins'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Insurance Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerInsuranceType = $this->CustomerInsuranceTypes->get($id);
        if ($this->CustomerInsuranceTypes->delete($customerInsuranceType)) {
            $this->Flash->success(__('The customer insurance type has been deleted.'));
        } else {
            $this->Flash->error(__('The customer insurance type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
