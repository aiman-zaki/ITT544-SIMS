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
    }

}
?>