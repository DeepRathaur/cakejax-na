<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FuelTypes Controller
 *
 * @property \App\Model\Table\FuelTypesTable $FuelTypes
 *
 * @method \App\Model\Entity\FuelType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FuelTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $fuelTypes = $this->paginate($this->FuelTypes);

        $this->set(compact('fuelTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Fuel Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fuelType = $this->FuelTypes->get($id, [
            'contain' => []
        ]);

        $this->set('fuelType', $fuelType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fuelType = $this->FuelTypes->newEntity();
        if ($this->request->is('post')) {
            $fuelType = $this->FuelTypes->patchEntity($fuelType, $this->request->getData());
            if ($this->FuelTypes->save($fuelType)) {
                $this->Flash->success(__('The fuel type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fuel type could not be saved. Please, try again.'));
        }
        $this->set(compact('fuelType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fuel Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fuelType = $this->FuelTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fuelType = $this->FuelTypes->patchEntity($fuelType, $this->request->getData());
            if ($this->FuelTypes->save($fuelType)) {
                $this->Flash->success(__('The fuel type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fuel type could not be saved. Please, try again.'));
        }
        $this->set(compact('fuelType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fuel Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fuelType = $this->FuelTypes->get($id);
        if ($this->FuelTypes->delete($fuelType)) {
            $this->Flash->success(__('The fuel type has been deleted.'));
        } else {
            $this->Flash->error(__('The fuel type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
