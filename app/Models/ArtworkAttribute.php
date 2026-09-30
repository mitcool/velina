<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtworkAttribute extends Model
{
    protected $fillable = [
        'artwork_id',
        'alt',
        'alt_en',
        'title',
        'title_en',
    ];

    public function artwork(){
        return $this->belongsTo('App\Models\Artwork','artwork_id','id');
    }

    public function alt(){
        if(request()->segment(1)=='bg'){
            return $this->alt;
        }
        return $this->alt_en;
    }
    public function title(){
        if(request()->segment(1)=='bg'){
            return $this->title;
        }
        return $this->title_en;
    }
}
