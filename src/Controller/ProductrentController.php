<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Productrent Controller
 *
 * @property \App\Model\Table\ProductrentTable $Productrent
 *  * @method \App\Model\Entity\Productrent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductrentController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $productrents = $this->paginate($this->Productrent->find()->contain(['Gender','Type']) );
        $this->log(print_r($productrents, true), 'debug');
        $this->set(compact('productrents',));
    }

    /**
     * View method
     *
     * @param string|null $id Productrent id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productrent  = $this->Productrent
            ->findById($id)
            ->contain(['Gender','Type'])
            ->firstOrFail();
        $this->set(compact('productrent'));

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productrent = $this->Productrent->newEmptyEntity();
        if ($this->request->is('post')) {
            $productrent = $this->Productrent->patchEntity($productrent, $this->request->getData());
            if ($this->Productrent->save($productrent)) {
                $this->Flash->success(__('Le produit a été sauvergarder.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__("Le produit n'as pas été sauver.essayer a nouveau."));
        }
        else {
            $this->set(compact('productrent'));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Productrent id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productrent = $this->Productrent->get($id, [
            'contain' => ['Gender','Type'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productrent = $this->Productrent->patchEntity($productrent, $this->request->getData());
            if ($this->Productrent->save($productrent)) {
                $this->Flash->success(__('le produit a bien été sauvegarder.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__("Le produit n'as pas été sauvegarder.essayer a nouveau"));
        }
        $this->set(compact('productrent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Productrent id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productrent = $this->Productrent->get($id);
        if ($this->Productrent->delete($productrent)) {
            $this->Flash->success(__('The productrent has been deleted.'));
        } else {
            $this->Flash->error(__('The productrent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
