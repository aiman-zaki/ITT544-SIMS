<?php
   
namespace App\Controller\Api;

 use App\Controller\AppController;
 use Cake\Event\Event;

class AdvisorsController extends AppController
{
    
    public function index(){
        if ($this->request->is(['patch'])) {
            $advisor = $this->Advisors->get($this->request->getData('id'));
            $advisor = $this->Advisors->patchEntity($advisor,$this->request->getData());
            if($this->Advisors->save($advisor)){
                echo "test";
            } else{
                echo "error";
            }
        } else if($this->request->is(['post'])){
            $advisor = $this->Advisors->newEntity();
            $advisor = $this->Advisors->patchEntity($advisor,$this->request->getData());
            $this->advisors->save($advisors);
        }
        else {
            $this->viewBuilder()->className('json');
            $advisors = $this->Advisors->find('all');
            $this->set('advisors',$advisors);
            $this->set('_serialize',['advisors']);
        }

    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index','all']);

    }

}

?>