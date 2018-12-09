<?php
   
namespace App\Controller\Api;

 use App\Controller\AppController;
 use Cake\Event\Event;

class UsersController extends AppController
{
    
    public function index(){

        $this->viewBuilder()->className('json');
        $users = $this->Users->find('all')->contain(['Advisors','Interns']);
        $this->set('users',$users);
        $this->set('_serialize',['users']);
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);

    }

}

?>