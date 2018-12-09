<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class OffersTable extends Table
{

    public function initialize(array $config)
    {
        $this->belongsTo('Company')
            ->setForeignKey('company_id');

        $this->hasMany('Requirements',['dependent' => true]);
        $this->hasMany('Applications',['dependent' => true]);
    }
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('id', 'A id is required');

    }

}
?>