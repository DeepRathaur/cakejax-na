<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CroppingSeasons Controller
 *
 * @property \App\Model\Table\CroppingSeasonsTable $CroppingSeasons
 *
 * @method \App\Model\Entity\CroppingSeason[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CroppingSeasonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $croppingSeasons = $this->paginate($this->CroppingSeasons);

        $this->set(compact('croppingSeasons'));
    }

    /**
     * View method
     *
     * @param string|null $id Cropping Season id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $croppingSeason = $this->CroppingSeasons->get($id, [
            'contain' => []
        ]);

        $this->set('croppingSeason', $croppingSeason);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $croppingSeason = $this->CroppingSeasons->newEntity();
        if ($this->request->is('post')) {
            $croppingSeason = $this->CroppingSeasons->patchEntity($croppingSeason, $this->request->getData());
            if ($this->CroppingSeasons->save($croppingSeason)) {
                $this->Flash->success(__('The cropping season has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cropping season could not be saved. Please, try again.'));
        }
        $this->set(compact('croppingSeason'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cropping Season id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $croppingSeason = $this->CroppingSeasons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $croppingSeason = $this->CroppingSeasons->patchEntity($croppingSeason, $this->request->getData());
            if ($this->CroppingSeasons->save($croppingSeason)) {
                $this->Flash->success(__('The cropping season has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cropping season could not be saved. Please, try again.'));
        }
        $this->set(compact('croppingSeason'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cropping Season id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $croppingSeason = $this->CroppingSeasons->get($id);
        if ($this->CroppingSeasons->delete($croppingSeason)) {
            $this->Flash->success(__('The cropping season has been deleted.'));
        } else {
            $this->Flash->error(__('The cropping season could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
