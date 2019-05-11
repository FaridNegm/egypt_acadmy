<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class works extends Model
{
    protected $table = "works";

    protected $fillable = [
        'title', 'section', 'description', 'image', 'status'
    ];


}
