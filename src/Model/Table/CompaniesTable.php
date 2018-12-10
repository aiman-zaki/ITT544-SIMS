<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CompaniesTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->belongsTo('Users',[
            'foreignKey' => 'id'
        ]);
        $this->hasMany('Offers');

    }
    public function validationDefault(Validator $validator)
    {
      
    
    }
}

