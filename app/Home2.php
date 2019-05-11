<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home2 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'home2s';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'category'];

    
}
