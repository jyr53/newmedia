<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Gender Controller
 *
 * @property \App\Model\Table\GenderTable $Gender
 * @method \App\Model\Entity\Gender[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GenderController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $gender = $this->paginate($this->Gender);

        $this->set(compact('gender'));
    }

    /**
     * View method
     *
     * @param string|null $id Gender id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gender = $this->Gender->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('gender'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gender = $this->Gender->newEmptyEntity();
        if ($this->request->is('post')) {
            $gender = $this->Gender->patchEntity($gender, $this->request->getData());
            if ($this->Gender->save($gender)) {
                $this->Flash->success(__('le genre a été sauvegarde.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__("le genre n'a pas été sauvegarder essayer a nouveau ."));
        }
        $this->set(compact('gender'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gender id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gender = $this->Gender->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gender = $this->Gender->patchEntity($gender, $this->request->getData());
            if ($this->Gender->save($gender)) {
                $this->Flash->success(__('le genre a été sauvegarde.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__("le genre n'a pas été sauvegarder essayer a nouveau ."));
        }
        $this->set(compact('gender'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gender id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gender = $this->Gender->get($id);
        if ($this->Gender->delete($gender)) {
            $this->Flash->success(__('le genre a bien été supprimer.'));
        } else {
            $this->Flash->error(__("le genre n'a pas été supprimer essayer a nouveau ."));
        }

        return $this->redirect(['action' => 'index']);
    }
}
