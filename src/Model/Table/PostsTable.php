<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table{
    
    public function validationDefault(Validator $validator){
        $validator->requirePresence(['nom','prenom']);
        return $validator;
    }
    
}
