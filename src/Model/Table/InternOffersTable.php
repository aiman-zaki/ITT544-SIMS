<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class InternOffersTable extends Table{
    
    public function initialize(array $config){

        parent::initialize($config);
        $this->setTable('internoffers');
        $this->belongsTo('Companies',[
            'foreignKey' => 'id',
            ]);
    }


}
?>