<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
    protected $table = "teams";

    protected $fillable = [
        'name', 'position', 'description', 'image', 'status'
    ];

}
