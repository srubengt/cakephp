<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Proyectos Controller
 *
 * @property \App\Model\Table\ProyectosTable $Proyectos
 */
class ProyectosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $proyectos = $this->paginate($this->Proyectos);

        $this->set(compact('proyectos'));
        $this->set('_serialize', ['proyectos']);
    }

    /**
     * View method
     *
     * @param string|null $id Proyecto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proyecto = $this->Proyectos->get($id, [
            'contain' => ['Alumnos']
        ]);

        $this->set('proyecto', $proyecto);
        $this->set('_serialize', ['proyecto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proyecto = $this->Proyectos->newEntity();
        if ($this->request->is('post')) {
            $proyecto = $this->Proyectos->patchEntity($proyecto, $this->request->data);
            if ($this->Proyectos->save($proyecto)) {
                $this->Flash->success(__('The proyecto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The proyecto could not be saved. Please, try again.'));
            }
        }
        $alumnos = $this->Proyectos->Alumnos->find('list', ['limit' => 200]);
        $this->set(compact('proyecto', 'alumnos'));
        $this->set('_serialize', ['proyecto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proyecto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proyecto = $this->Proyectos->get($id, [
            'contain' => ['Alumnos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proyecto = $this->Proyectos->patchEntity($proyecto, $this->request->data);
            if ($this->Proyectos->save($proyecto)) {
                $this->Flash->success(__('The proyecto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The proyecto could not be saved. Please, try again.'));
            }
        }
        $alumnos = $this->Proyectos->Alumnos->find('list', ['limit' => 200]);
        $this->set(compact('proyecto', 'alumnos'));
        $this->set('_serialize', ['proyecto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proyecto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proyecto = $this->Proyectos->get($id);
        if ($this->Proyectos->delete($proyecto)) {
            $this->Flash->success(__('The proyecto has been deleted.'));
        } else {
            $this->Flash->error(__('The proyecto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
