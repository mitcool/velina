<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    protected $fillable = [
        'name',
        'description',
        'name_en',
        'description_en',
        'price',
        'image',
        'stock',
        'category_id',
        'is_selected',
        'period'
    ];

    public function name(){
        if(app()->currentLocale()=='bg'){
            return $this->name;
        }
        return $this->name_en;
    }
     public function description(){
        if(app()->currentLocale()=='bg'){
            return $this->description;
        }
        return $this->description_en;
    }
    public function category(){
        return $this->hasOne('App\Models\PictureCategory','id','category_id');
    }
    public function period_details(){
        return $this->hasOne('App\Models\PicturePeriod','id','period');
    }
}
