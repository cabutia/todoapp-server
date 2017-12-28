<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'objId', 'title', 'description', 'category_id'
    ];

    public function category()
    {
      return $this->belongsTo('App\Category');
    }
}
