<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The table associated with the model.
     *
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
