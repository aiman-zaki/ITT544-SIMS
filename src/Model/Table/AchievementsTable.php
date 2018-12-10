<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class AchievementsTable extends Table{

    public function initialize(array $config)
    {
        $this->belongsTo('Interns',['foreignKey' => 'intern_id' ]);
    }

}

?>