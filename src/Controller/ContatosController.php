<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Contatos Controller
 *
 * @property \App\Model\Table\ContatosTable $Contatos
 * @method \App\Model\Entity\Contato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContatosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $contatos = $this->paginate($this->Contatos);

        $this->set(compact('contatos'));
    }

    /**
     * View method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contato = $this->Contatos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('contato'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contato = $this->Contatos->newEmptyEntity();
        if ($this->request->is('post')) {
            $contato = $this->Contatos->patchEntity($contato, $this->request->getData());
            if ($this->Contatos->save($contato)) {
                $this->Flash->success(__('O contato foi salvo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('erro ao salvar, tente novamente'));
        }
        $this->set(compact('contato'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contato = $this->Contatos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contato = $this->Contatos->patchEntity($contato, $this->request->getData());
            if ($this->Contatos->save($contato)) {
                $this->Flash->success(__('contato atualizado'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('nao foi possivel alterar dados, tente novamente'));
        }
        $this->set(compact('contato'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contato = $this->Contatos->get($id);
        if ($this->Contatos->delete($contato)) {
            $this->Flash->success(__('O contato foi deletado'));
        } else {
            $this->Flash->error(__('erro ao deletar'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
