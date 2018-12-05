<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class AdvisorsTable extends Table{

    public function initialize(array $config)
    {
        $this->hasMany('Interns');
    }
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('room', 'Room is required');
    }
}

?>