<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artwork extends Model
{
    protected $fillable = [
        'name',
        'description',
        'name_en',
        'description_en',
        'slug',
        'price',
        'image',
        'stock',
        'category_id',
        'is_selected',
        'period'
    ];

    protected static function booted()
    {
        // Only fill an empty slug, so renaming an artwork doesn't break existing links
        static::saving(function (Artwork $artwork) {
            if (empty($artwork->slug)) {
                $artwork->slug = static::uniqueSlug($artwork->name_en ?: $artwork->name, $artwork->id);
            }
        });
    }

    public static function uniqueSlug($title, $ignoreId = null)
    {
        $base = Str::slug($title, '-', 'bg') ?: 'artwork';
        $slug = $base;
        $i = 2;

        while (static::where('slug', $slug)->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))->exists()) {
            $slug = $base.'-'.$i++;
        }

        return $slug;
    }

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
