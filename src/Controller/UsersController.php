<?php
// src/Controller/UsersController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;


class UsersController extends AppController
{
    
    public function beforeFilter(Event $event)
    {   
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    
    }
    public function home(){
        
    }
    public function index()
    {
        $this->set('users', $this->Users->find('all'));
    }

    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }
    public function add()
    {
        $addresses = TableRegistry::get('addresses');
        $user = $this->Users->newEntity();
        $address = $addresses->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
           
                if ($this->Users->save($user)) {
                    if($user['role_id'] == 2){
                        $interns = TableRegistry::get('Interns');
                        $educations = TableRegistry::get('Educations');
                        $intern = $interns->newEntity();
                        $education = $educations->newEntity();
                        $intern->id = $user['id'];
                        $address->id = $user['id'];
                        $education->id = $user['id'];
                        $interns->save($intern);
                        $addresses->save($address);
                        $educations->save($education);
                        $this->Flash->success(__('The user has been saved.'));
                        return $this->redirect(['action' => 'login']);
                    } else if($user['role_id'] == 1){
                        $advisors = TableRegistry::get('Advisors');
                        $advisor = $advisors->newEntity();
                        $advisor->id = $user['id'];
                        $address->id = $user['id'];
                        $advisors->save($advisor);
                        $addresses->save($address);
                        $this->Flash->success(__('The user has been saved.'));
                        return $this->redirect(['action' => 'login']);
               
                    } else if ($user['role_id'] == 3){
                        $companies = TableRegistry::get('Companies');
                        $company = $companies->newEntity();
                        $company->id = $user['id'];
                        $address->id = $user['id'];
                        $companies->save($company);
                        $addresses->save($address);
                        $this->Flash->success(__('The user has been saved.'));
                        return $this->redirect(['action' => 'login']);
                     }
                    $this->Flash->error(__('Unable to add the user.'));
                }
               
            }
            $this->set('user', $user);
    }
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid email or password, try again'));
        }
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function profile(){
        $id = $this->Auth->user('id');
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        $this->set(compact('user'));
        $base_url = WWW_ROOT.'img/users/profile/'.$user['id'].'/';
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                
                $file = $user['upload'];
                $ext = substr(strtolower(strrchr($file['name'],'.')),1);
                $arr_ext = array('jpg','jpeg','png');

    
                 //only process if the extension is valid
                 if(in_array($ext, $arr_ext))
                 {
                     
                     //do the actual uploading of the file. First arg is the tmp name, second arg is
                     //where we are putting it
                     if(!file_exists($base_url)){
                        mkdir($base_url, 0777, true);
                     }
                     //check current photo
                     if(file_exists($base_url.'profile.jpg')){
                        unlink($base_url.'profile.jpg');
                     }
                   
                     move_uploaded_file($file['tmp_name'], $base_url.'profile.jpg');
                    
                   #  rename($base_url.'profile.jpg',$base_url.'profile.jpg'. $dm);
                     
                 }

                return $this->redirect(['action' => 'profile']);
            }
            
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        if(file_exists($base_url)){
            $dm = '?'.filemtime($base_url);
            $this->set('dm',$dm);
        }
    }


}

?>