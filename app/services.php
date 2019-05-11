<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $table = "services";

    protected $fillable = [
        'title', 'description', 'image', 'status'
    ];
}
