<?php
   
namespace App\Controller\Api;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class OffersController extends AppController
{
    
    public function index(){
        if ($this->request->is(['patch'])) {
            $offers = $this->Offers->get($this->request->getData('id'));
            $offer = $this->Offers->patchEntity($offers,$this->request->getData());
            $this->Offers->save($offers);
        } else if($this->request->is(['post'])){
            $offers = $this->Offers->newEntity();
            $offer = $this->Offers->patchEntity($offers,$this->request->getData());
            $this->Offers->save($offers);
        }
        else {
            $this->viewBuilder()->className('json');
            $offers = $this->Offers->find('all')->contain(['Requirements','Applications']);
            $this->set('offers',$offers);
            $this->set('_serialize',['offers']);
        }
    }



    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index','all']);

    }

}

?>