<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class InternsTable extends Table{
    public function initialize(array $config)
    {
        $this->belongsTo('Users')
            ->setForeignKey('id');
        $this->hasMany('Applications');
        $this->hasMany('Educations');
        $this->hasMany('Achievements');
        $this->belongsTo('Advisors')
            ->foreignKey('advisor_id');
    }
  
}

?>