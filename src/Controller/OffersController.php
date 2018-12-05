<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;

class OffersController extends AppController{

    public function index(){

        $id = $this->Auth->user('id');
        $role = $this->Auth->user('role_id');
        if($role != 3){
            $this->set('offers', $this->Offers->find('all'));
        } else {
            $query = $this->Offers->find()->where(['company_id' => $id]);
            $this->set('offers',$query->all());
        }
    }
    public function login(){

    }
    public function logout(){

    }
    public function view($id){

        $companies = TableRegistry::get('companies');
        $address = TableRegistry::get('addresses');
        $offer = $this->Offers->get($id, [
            'contain' => []
        ]);

        $company = $companies->get($offer['company_id'],
        [
            'contain' => []
        ]);

        $address =$address->get($offer['company_id'],[
            'contain' => []
        ]);
        $this->set('offer',$offer);
        $this->set('company',$company);
        $this->set('address',$address);
    }   

    public function add(){
        $offer = $this->Offers->newEntity();
        $id = $this->Auth->user('id');
        if ($this->request->is('post')) {
            $offer = $this->Offers->patchEntity($offer, $this->request->getData());
            $offer->company_id = $id;
            if ($this->Offers->save($offer)) {
                $this->Flash->success(__('The Offers has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The Offers could not be saved. Please, try again.'));
        }
        $this->set(compact('offer'));

    }
    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $offer = $this->Offers->get($id);
        $uid = $this->Auth->user('id');
        if($offer['company_id'] == $uid){
            if ($this->Offers->delete($offer)) {
                $this->Flash->success(__('The Offers has been deleted.'));
            } else {
                $this->Flash->error(__('The Offers could not be deleted. Please, try again.'));
            }
        } else {
            $this->Flash->error(__('You are not the owner'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function applicant($id = null){
        $interns = TableRegistry::get('Interns');

        $users = $interns->find('all')
                ->autoFields(true)
                ->join([
                    'table' => 'Applications',
                    'alias' => 'a',
                    'type' => 'inner',
                    'conditions' => ['a.offer_id' => $id ],
                ]);
        $this->set('users',$users);
        $this->set('offer_id',$id);
    }


    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
 
    }
}
?>