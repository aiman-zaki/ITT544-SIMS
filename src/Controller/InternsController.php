<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class InternsController extends AppController{
   
    public function index(){
        $users = TableRegistry::get('Users');
        $query = $users->find()->where(['role_id' => 2]);

        $this->set('interns',$query->all());
    }
    public function login(){

    }
    public function logout(){

    }
    public function view($id = null)
    {   
        $data = null;
        $users = TableRegistry::get('Users');
        $user = $users->get($id,[
            'contain' => []
        ]);

        $intern = $this->Interns->get($id, [
            'contain' => []
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])){
            $advisor_id = $this->Auth->user('id');
            $intern->advisor_id = $advisor_id;
            $this->Interns->save($intern);
            $this->Flash->success("Added to your mentee list");
        }
        $this->set('user',$user);
        $this->set('intern', $intern);
        $this->set('data',$data);
    }

    public function viewAward($id){
        $intern = $this->Interns->get($id, [
            'contain' => []
        ]);
        $this->set('intern',$intern);
    }
    public function viewExp($id){
        $intern = $this->Interns->get($id, [
            'contain' => []
        ]);
        $this->set('intern',$intern);
    }
    public function add(){

    }
    public function delete(){

    }
    public function deleteAdvisor(){
        if ($this->request->is(['patch','post','put'])){
            $intern_id = $this->request->getData()['intern_id'];

            $query = $this->Interns->query();
            $query->update()
                ->set(['advisor_id' => null])
                ->where(['id' => $intern_id])
                ->execute();
            $this->Flash->success(__("Eliminated from your mentee"));
            return $this->redirect(['action' => 'index']);
        }
    }
    public function profile(){  
        $id = $this->Auth->user('id');
        $intern = $this->Interns->get($id, [
            'contain' => []
        ]);
        $this->set(compact('intern'));
        if ($this->request->is(['patch', 'post', 'put'])) {
            $intern = $this->Interns->patchEntity($intern, $this->request->getData());
            if($intern['cgpa'] <= 4){
                if ($this->Interns->save($intern)) {
                    $this->Flash->success(__('Data has been saved.'));
                    return $this->redirect(['action' => 'profile']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $this->Flash->error(__('Enter valid A CGPA'));
            
        }
    }

    public function beforeFilter(Event $event)
    {

    }
}
?>