<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Rule Controller
 *
 * @property \App\Model\Table\RuleTable $Rule
 * @method \App\Model\Entity\Rule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RuleController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $rule = $this->paginate($this->Rule);

        $this->set(compact('rule'));
    }

    /**
     * View method
     *
     * @param string|null $id Rule id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rule = $this->Rule->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('rule'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rule = $this->Rule->newEmptyEntity();
        if ($this->request->is('post')) {
            $rule = $this->Rule->patchEntity($rule, $this->request->getData());
            if ($this->Rule->save($rule)) {
                $this->Flash->success(__('The rule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rule could not be saved. Please, try again.'));
        }
        $this->set(compact('rule'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rule id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rule = $this->Rule->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rule = $this->Rule->patchEntity($rule, $this->request->getData());
            if ($this->Rule->save($rule)) {
                $this->Flash->success(__('The rule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rule could not be saved. Please, try again.'));
        }
        $this->set(compact('rule'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rule id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rule = $this->Rule->get($id);
        if ($this->Rule->delete($rule)) {
            $this->Flash->success(__('The rule has been deleted.'));
        } else {
            $this->Flash->error(__('The rule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
