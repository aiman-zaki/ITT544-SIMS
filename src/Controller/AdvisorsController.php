<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

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
        $addresses = TableRegistry::get('Addresses');
        $id = $this->Auth->user('id');
        $advisor = $this->Advisors->get($id, [
            'contain' => []
        ]);
        $address = $addresses->get($id,[
            'contain' => []
        ]);
        $this->set(compact('advisor'));
        $this->set(compact('address'));
        if ($this->request->is(['patch', 'post', 'put'])) {
            $advisor = $this->Advisors->patchEntity($advisor, $this->request->getData());
            
            $address = $addresses->patchEntity($address,$this->request->getData());
                if ($this->Advisors->save($advisor)) {
                    $addresses->save($address);
                    $this->Flash->success(__('Data has been saved.'));
                    return $this->redirect(['action' => 'profile']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
    }

    public function mentee(){

    }


    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
       
    }
}
?>