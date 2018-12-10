<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class RequirementsTable extends Table
{

    public function initialize(array $config)
    {
        $this->belongsTo('Offers')
            ->setForeignKey('offer_id');


    }

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('id', 'A id is required');

    }

}
?>