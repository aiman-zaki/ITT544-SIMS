<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class AdvisorsController extends AppController{
    public function index(){

    }
    public function login(){

    }
    public function logout(){

    }
    public function view(){

    }
    public function add(){

    }
    public function delete(){

    }
    public function profile(){  
        $email = $this->Auth->user('email');
        $advisor = $this->Advisors->get($email, [
            'contain' => []
        ]);
        $this->set(compact('advisor'));
        if ($this->request->is(['patch', 'post', 'put'])) {
            $advisor = $this->Advisors->patchEntity($advisor, $this->request->getData());
                if ($this->Advisors->save($advisor)) {
                    $this->Flash->success(__('Data has been saved.'));
                    return $this->redirect(['action' => 'profile']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout']);
    }
}
?>