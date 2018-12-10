<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;


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

}

