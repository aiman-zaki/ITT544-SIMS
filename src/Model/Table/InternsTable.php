<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class InternsTable extends Table{
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('cgpa', 'CGPA is required');
    }
}

?>