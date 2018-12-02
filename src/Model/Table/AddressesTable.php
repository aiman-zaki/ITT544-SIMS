<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class AddressesTable extends Table{
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('room', 'Room is required');
    }
}

?>