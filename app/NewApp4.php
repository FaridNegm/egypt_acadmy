<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewApp4 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'new_app4s';

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
