<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class InternsController extends AppController{
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