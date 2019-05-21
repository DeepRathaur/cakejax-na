<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InsuranceTypes Controller
 *
 * @property \App\Model\Table\InsuranceTypesTable $InsuranceTypes
 *
 * @method \App\Model\Entity\InsuranceType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InsuranceTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $insuranceTypes = $this->paginate($this->InsuranceTypes);

        $this->set(compact('insuranceTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Insurance Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $insuranceType = $this->InsuranceTypes->get($id, [
            'contain' => []
        ]);

        $this->set('insuranceType', $insuranceType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $insuranceType = $this->InsuranceTypes->newEntity();
        if ($this->request->is('post')) {
            $insuranceType = $this->InsuranceTypes->patchEntity($insuranceType, $this->request->getData());
            if ($this->InsuranceTypes->save($insuranceType)) {
                $this->Flash->success(__('The insurance type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The insurance type could not be saved. Please, try again.'));
        }
        $this->set(compact('insuranceType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Insurance Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $insuranceType = $this->InsuranceTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $insuranceType = $this->InsuranceTypes->patchEntity($insuranceType, $this->request->getData());
            if ($this->InsuranceTypes->save($insuranceType)) {
                $this->Flash->success(__('The insurance type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The insurance type could not be saved. Please, try again.'));
        }
        $this->set(compact('insuranceType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Insurance Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $insuranceType = $this->InsuranceTypes->get($id);
        if ($this->InsuranceTypes->delete($insuranceType)) {
            $this->Flash->success(__('The insurance type has been deleted.'));
        } else {
            $this->Flash->error(__('The insurance type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
