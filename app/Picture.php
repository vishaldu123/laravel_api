<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
	
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["url","emp_id"];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
