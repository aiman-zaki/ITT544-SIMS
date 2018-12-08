<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CertificatesTable extends Table{

    public function initialize(array $config)
    {
        $this->belongsTo('Interns');
    }

}

?>