<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ApplicationsTable extends Table{

    public function initialize(array $config)
    {
        $this->belongsTo('Interns')
            ->setForeignKey('intern_id');
        $this->belongsTo('Offers')
            ->setForeignKey('offer_id');
    }
    public function validationDefault(Validator $validator)
    {
       
    }
}

?>