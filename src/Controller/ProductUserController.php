<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductUser Controller
 *
 * @property \App\Model\Table\ProductUserTable $ProductUser
 * @method \App\Model\Entity\ProductUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductUserController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Productrent'],
        ];
        $productUser = $this->paginate($this->ProductUser);

        $this->set(compact('productUser'));
    }

    /**
     * View method
     *
     * @param string|null $id Product User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productUser = $this->ProductUser->get($id, [
            'contain' => ['Users', 'Productrent'],
        ]);

        $this->set(compact('productUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productUser = $this->ProductUser->newEmptyEntity();

        if ($this->request->is('post')) {
            $productUser = $this->ProductUser->patchEntity($productUser, $this->request->getData());
            if ($this->ProductUser->save($productUser)) {
                $this->Flash->success(__("l'enregistrement c'est bien effectuer."));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__("l'enregistrement ne c'est pas bien passer ,essayer a nouveau."));
        }
       // $this->set('groups', $this->Users->Groups->find('list'));

        $users = $this->ProductUser->Users->find('list', ['limit' => 200])->all();
        $productrent = $this->ProductUser->Productrent->find('list', ['limit' => 200])->all();
        $this->set(compact('productUser', 'users', 'productrent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Product User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productUser = $this->ProductUser->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productUser = $this->ProductUser->patchEntity($productUser, $this->request->getData());
            if ($this->ProductUser->save($productUser)) {
                $this->Flash->success(__('The product user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product user could not be saved. Please, try again.'));
        }
        $users = $this->ProductUser->Users->find('list', ['limit' => 200])->all();
        $productrent = $this->ProductUser->Productrent->find('list', ['limit' => 200])->all();
        $this->set(compact('productUser', 'users', 'productrent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productUser = $this->ProductUser->get($id);
        if ($this->ProductUser->delete($productUser)) {
            $this->Flash->success(__('The product user has been deleted.'));
        } else {
            $this->Flash->error(__('The product user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
