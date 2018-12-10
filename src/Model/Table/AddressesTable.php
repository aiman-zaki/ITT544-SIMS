<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class AddressesTable extends Table{

    public function initialize(array $config)
    {
        $this->belongsTo('Users')->setForeignKey('id');
    }
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('room', 'Room is required');
    }
}

?>