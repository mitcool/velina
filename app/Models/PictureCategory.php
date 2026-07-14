<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PictureCategory extends Model
{
    public function artworks(){
        return $this->hasMany('App\Models\Artwork','category_id','id');
    }
    public function selected_artworks(){
        return $this->hasMany('App\Models\Artwork','category_id','id')->where('is_selected',1);
    }
    public function periods(){
        return $this->hasMany('App\Models\PicturePeriod','category_id','id');
    }
    public function name(){
        if(app()->currentLocale()=='bg'){
            return $this->name;
        }
        return $this->name_en;
    }
    
}
