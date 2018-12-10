<?php
   
namespace App\Controller\Api;

 use App\Controller\AppController;
 use Cake\Event\Event;
 use Cake\ORM\TableRegistry;
class UsersController extends AppController
{
    
    public function index(){
        if ($this->request->is(['patch'])) {
            $user = $this->Users->get($this->request->getData('id'));
            $user = $this->Users->patchEntity($user,$this->request->getData());
            if($this->Users->save($user)){
                echo "test";
            } else{
                echo "error";
            }
        } else if($this->request->is(['post'])){
            $user = $this->Users->newEntity();
            $user = $this->Users->patchEntity($user,$this->request->getData());
            $this->Users->save($user);
        }
        else if($this->request->is(['delete'])){
            $user = $this->Users->get($this->request->getData('id'));
            if($user['role_id'] == 2){
                $interns = TableRegistry::get('Interns');
                $intern = $interns->get($user['id']);
                
                $interns->delete($intern);
                $this->Users->delete($user);
                
            }elseif($user['role_id'] == 1){
                $advisors = TableRegistry::get('Advisors');
                $advisor = $advisors->get($user['id']);
                $advisors->delete($advisor);
                $this->Users->delete($user);
            } elseif($user['role_id'] ==3){
                $companies = TableRegistry::get('Companies');
                $company = $companies->get($user['id']);
                
                $companies->delete($company);
                $this->Users->delete($user);
            }
        }
        else {
            $this->viewBuilder()->className('json');
            $users = $this->Users->find('all')->contain(['Advisors','Interns']);
            $this->set('users',$users);
            $this->set('_serialize',['users']);
        }

    }
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);

    }

}

?>