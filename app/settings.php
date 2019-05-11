<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    protected $table = "settings";

    protected $fillable = [
        'name', 'facebook', 'twitter', 'github', 'google', 'pinterest', 'linked_id', 'status'
    ];

}
