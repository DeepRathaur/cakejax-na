<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerVhicleDetails Controller
 *
 * @property \App\Model\Table\CustomerVhicleDetailsTable $CustomerVhicleDetails
 *
 * @method \App\Model\Entity\CustomerVhicleDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustomerVhicleDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $customerVhicleDetails = $this->paginate($this->CustomerVhicleDetails);

        $this->set(compact('customerVhicleDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer Vhicle Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerVhicleDetail = $this->CustomerVhicleDetails->get($id, [
            'contain' => []
        ]);

        $this->set('customerVhicleDetail', $customerVhicleDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerVhicleDetail = $this->CustomerVhicleDetails->newEntity();
        if ($this->request->is('post')) {
            $customerVhicleDetail = $this->CustomerVhicleDetails->patchEntity($customerVhicleDetail, $this->request->getData());
            if ($this->CustomerVhicleDetails->save($customerVhicleDetail)) {
                $this->Flash->success(__('The customer vhicle detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer vhicle detail could not be saved. Please, try again.'));
        }
        $this->set(compact('customerVhicleDetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Vhicle Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerVhicleDetail = $this->CustomerVhicleDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerVhicleDetail = $this->CustomerVhicleDetails->patchEntity($customerVhicleDetail, $this->request->getData());
            if ($this->CustomerVhicleDetails->save($customerVhicleDetail)) {
                $this->Flash->success(__('The customer vhicle detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer vhicle detail could not be saved. Please, try again.'));
        }
        $this->set(compact('customerVhicleDetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Vhicle Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerVhicleDetail = $this->CustomerVhicleDetails->get($id);
        if ($this->CustomerVhicleDetails->delete($customerVhicleDetail)) {
            $this->Flash->success(__('The customer vhicle detail has been deleted.'));
        } else {
            $this->Flash->error(__('The customer vhicle detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
