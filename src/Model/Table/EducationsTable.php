<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class EducationsTable extends Table{
    
    public function initialize(array $config){

        parent::initialize($config);
        
        $this->belongsTo('Interns')
            ->foreignKey('interns_id');
    }


}
?>