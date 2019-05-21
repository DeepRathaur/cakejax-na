<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CropInsuranceOfflineCalculators Controller
 *
 * @property \App\Model\Table\CropInsuranceOfflineCalculatorsTable $CropInsuranceOfflineCalculators
 *
 * @method \App\Model\Entity\CropInsuranceOfflineCalculator[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CropInsuranceOfflineCalculatorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States', 'Districts', 'CroppingSeasons', 'CropMasters']
        ];
        $cropInsuranceOfflineCalculators = $this->paginate($this->CropInsuranceOfflineCalculators);

        $this->set(compact('cropInsuranceOfflineCalculators'));
    }

    /**
     * View method
     *
     * @param string|null $id Crop Insurance Offline Calculator id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cropInsuranceOfflineCalculator = $this->CropInsuranceOfflineCalculators->get($id, [
            'contain' => ['States', 'Districts', 'CroppingSeasons', 'CropMasters']
        ]);

        $this->set('cropInsuranceOfflineCalculator', $cropInsuranceOfflineCalculator);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cropInsuranceOfflineCalculator = $this->CropInsuranceOfflineCalculators->newEntity();
        if ($this->request->is('post')) {
            $cropInsuranceOfflineCalculator = $this->CropInsuranceOfflineCalculators->patchEntity($cropInsuranceOfflineCalculator, $this->request->getData());
            if ($this->CropInsuranceOfflineCalculators->save($cropInsuranceOfflineCalculator)) {
                $this->Flash->success(__('The crop insurance offline calculator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crop insurance offline calculator could not be saved. Please, try again.'));
        }
        $states = $this->CropInsuranceOfflineCalculators->States->find('list', ['limit' => 200]);
        $districts = $this->CropInsuranceOfflineCalculators->Districts->find('list', ['limit' => 200]);
        $croppingSeasons = $this->CropInsuranceOfflineCalculators->CroppingSeasons->find('list', ['limit' => 200]);
        $cropMasters = $this->CropInsuranceOfflineCalculators->CropMasters->find('list', ['limit' => 200]);
        $this->set(compact('cropInsuranceOfflineCalculator', 'states', 'districts', 'croppingSeasons', 'cropMasters'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Crop Insurance Offline Calculator id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cropInsuranceOfflineCalculator = $this->CropInsuranceOfflineCalculators->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cropInsuranceOfflineCalculator = $this->CropInsuranceOfflineCalculators->patchEntity($cropInsuranceOfflineCalculator, $this->request->getData());
            if ($this->CropInsuranceOfflineCalculators->save($cropInsuranceOfflineCalculator)) {
                $this->Flash->success(__('The crop insurance offline calculator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The crop insurance offline calculator could not be saved. Please, try again.'));
        }
        $states = $this->CropInsuranceOfflineCalculators->States->find('list', ['limit' => 200]);
        $districts = $this->CropInsuranceOfflineCalculators->Districts->find('list', ['limit' => 200]);
        $croppingSeasons = $this->CropInsuranceOfflineCalculators->CroppingSeasons->find('list', ['limit' => 200]);
        $cropMasters = $this->CropInsuranceOfflineCalculators->CropMasters->find('list', ['limit' => 200]);
        $this->set(compact('cropInsuranceOfflineCalculator', 'states', 'districts', 'croppingSeasons', 'cropMasters'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Crop Insurance Offline Calculator id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cropInsuranceOfflineCalculator = $this->CropInsuranceOfflineCalculators->get($id);
        if ($this->CropInsuranceOfflineCalculators->delete($cropInsuranceOfflineCalculator)) {
            $this->Flash->success(__('The crop insurance offline calculator has been deleted.'));
        } else {
            $this->Flash->error(__('The crop insurance offline calculator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
