<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reserve extends Model
{
    protected $table = "reserves";

    protected $fillable = [
        'name', 'time', 'price', 'degree', 'documentation', 'status'
    ];

}
