<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RegionalLanguages Controller
 *
 * @property \App\Model\Table\RegionalLanguagesTable $RegionalLanguages
 *
 * @method \App\Model\Entity\RegionalLanguage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegionalLanguagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $regionalLanguages = $this->paginate($this->RegionalLanguages);

        $this->set(compact('regionalLanguages'));
    }

    /**
     * View method
     *
     * @param string|null $id Regional Language id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $regionalLanguage = $this->RegionalLanguages->get($id, [
            'contain' => []
        ]);

        $this->set('regionalLanguage', $regionalLanguage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $regionalLanguage = $this->RegionalLanguages->newEntity();
        if ($this->request->is('post')) {
            $regionalLanguage = $this->RegionalLanguages->patchEntity($regionalLanguage, $this->request->getData());
            if ($this->RegionalLanguages->save($regionalLanguage)) {
                $this->Flash->success(__('The regional language has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The regional language could not be saved. Please, try again.'));
        }
        $this->set(compact('regionalLanguage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Regional Language id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $regionalLanguage = $this->RegionalLanguages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $regionalLanguage = $this->RegionalLanguages->patchEntity($regionalLanguage, $this->request->getData());
            if ($this->RegionalLanguages->save($regionalLanguage)) {
                $this->Flash->success(__('The regional language has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The regional language could not be saved. Please, try again.'));
        }
        $this->set(compact('regionalLanguage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Regional Language id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $regionalLanguage = $this->RegionalLanguages->get($id);
        if ($this->RegionalLanguages->delete($regionalLanguage)) {
            $this->Flash->success(__('The regional language has been deleted.'));
        } else {
            $this->Flash->error(__('The regional language could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
