<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;


class ApisController extends AppController{
   
  public function index(){

  }

  public function beforeFilter(Event $event)
  {
      parent::beforeFilter($event);

      $this->Auth->allow(['index']);

  }

}
?>