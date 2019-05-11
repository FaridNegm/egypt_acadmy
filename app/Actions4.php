<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actions4 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'actions4s';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id--route-group=admin';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content'];

    
}
