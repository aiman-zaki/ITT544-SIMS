<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class InternsTable extends Table{
    public function initialize(array $config)
    {
        $this->belongsTo('Users')->setForeignKey('id');
        $this->hasMany('Certificates',['dependent' => true]);
        $this->hasMany('Applications',['dependent' => true]);
        $this->hasMany('Educations',['dependent' => true]);
        $this->hasMany('Achievements',['dependent' => true]);
        $this->belongsTo('Advisors',[
            'foreignKey' => 'id',
            ]);
    }
  
}

?>