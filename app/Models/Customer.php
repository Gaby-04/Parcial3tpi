<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory;

        public static function Usuarioscustomer(){
            $customerData = file_get_contents('../database.json');
            return $customerData;
        }
    
}
