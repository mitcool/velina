<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PicturePeriod extends Model
{
    public function name(){
        if(app()->currentLocale()=='bg'){
            return $this->name;
        }
        return $this->name_en;
    }
}
