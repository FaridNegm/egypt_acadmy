<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home5 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'home5s';

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
