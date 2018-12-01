<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Offer extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
    
    // Make all fields mass assignable except for primary key field "id".
      // ...
}


?>