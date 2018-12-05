<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasOne('Addresses')
            ->primaryKey('id');
    }
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('email', 'A email is required')
            ->notEmpty('password', 'A password is required')
            ->notEmpty('role', 'A role is required')
            ->add('role', 'inList', [
                'rule' => ['inList', ['advisor', 'intern']],
                'message' => 'Please enter a valid role'
            ]);
    }

}
?>