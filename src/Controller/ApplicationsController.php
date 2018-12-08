<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;


class ApplicationsController extends AppController{
   
    public function index(){
    
    }
    public function add(){
        $this->request->allowMethod(['post','put']);
        $id = $this->Auth->user('id');
        $offer_id = $this->request->getData()['offer_id'];
        $limit = $this->Applications->find()->where(['intern_id' => $id])->count();
        if($limit < 3){
            $application = $this->Applications->newEntity();
            $application->intern_id = $id;
            $application->offer_id = $offer_id;
            $application->status = "Pending";
            $this->Applications->save($application);
            return $this->redirect(['controller'=>'Offers','action' => 'index']);
        } else {
            $this->Flash->error('You reached your limit to apply for any internship!');
            return $this->redirect(['controller'=>'Offers','action' => 'view',$offer_id]);
        }
    }
    public function view(){

    }

    public function list(){
        $id = $this->Auth->user('id');
        $query = $this->Applications->find('all')->contain('Offers')->where(['intern_id' => $id]);
        $this->set('applications',$query->all());

     

    }
    public function accept($offer_id,$intern_id){
        $this->request->allowMethod(['post', 'put']);
        $application = $this->Applications->find()->where(['offer_id'=>$offer_id,'intern_id'=>$intern_id])->first();
        $application->status = "Approved";
        $this->Applications->save($application);
        return $this->redirect(['controller'=>'Offers','action' => 'index']);
    }

    public function deny($offer_id,$intern_id){
        $this->request->allowMethod(['post', 'put']);
        $application = $this->Applications->find()->where(['offer_id'=>$offer_id,'intern_id'=>$intern_id])->first();
        $application->status = "Denied";
        $this->Applications->save($application);
        return $this->redirect(['controller'=>'Offers','action' => 'index']);
    
    }
    public function pending($offer_id,$intern_id){
        $this->request->allowMethod(['post', 'put']);
        $application = $this->Applications->find()->where(['offer_id'=>$offer_id,'intern_id'=>$intern_id])->first();
        $application->status = "Pending";
        $this->Applications->save($application);
        return $this->redirect(['controller'=>'Offers','action' => 'index']);
    
    }

}
?>