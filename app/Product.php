<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function producer()
    {
        return $this->belongsTo(Producer::class);
    }

    public function rubrics()
    {
        return $this->belongsToMany(Rubric::class);
    }
}
