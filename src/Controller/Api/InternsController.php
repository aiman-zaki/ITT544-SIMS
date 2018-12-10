<?php
   
namespace App\Controller\Api;

 use App\Controller\AppController;
 use Cake\Event\Event;

class InternsController  extends AppController
{
    
    public function index(){
        if ($this->request->is(['patch'])) {
            $intern = $this->Interns->get($this->request->getData('id'));
            $intern = $this->Interns->patchEntity($intern,$this->request->getData());
            if($this->Interns->save($intern)){
                echo "test";
            } else{
                echo "error";
            }
        } else if($this->request->is(['post'])){
            $intern = $this->Interns->newEntity();
            $intern = $this->Interns->patchEntity($intern,$this->request->getData());
            $this->interns->save($interns);
        }
        else {
            $this->viewBuilder()->className('json');
            $interns = $this->Interns->find('all')->contain(['Educations','Achievements']);
            $this->set('interns',$interns);
            $this->set('_serialize',['interns']);
        }

    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index','all']);

    }

}

?>