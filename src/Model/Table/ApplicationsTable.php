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
        $this->hasMany('Comments');
    }
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('id', 'A id is required');

    }
}

?>