<?php 

namespace App\Models;

class UserModel extends Model{

    private static $table = "user";

    public function __construct(){
        parent::__construct(self::$table);
    }

}






?>