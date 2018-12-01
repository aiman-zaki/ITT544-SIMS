<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class OffersController extends AppController{

    public function index(){
        $this->set('offers', $this->Offers->find('all'));
    }
    public function login(){

    }
    public function logout(){

    }
    public function view($id){

        $companies = TableRegistry::get('companies');
        $offer = $this->Offers->get($id, [
            'contain' => []
        ]);

        $company = $companies->get($offer['company_id'],
        [
            'contain' => []
        ]);
        $this->set('offer',$offer);
        $this->set('company',$company);
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