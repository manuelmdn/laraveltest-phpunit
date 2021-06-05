<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
        
    }

    public function getSlugAttribute($key)
    {
        return str_replace(' ','-',$this->name);
    }

    public function href()
    {
        return "blog/{$this->slug}";
    }
}
