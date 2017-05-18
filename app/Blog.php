<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = array('id', 'title', 'description', 'author', 'tag');
}
