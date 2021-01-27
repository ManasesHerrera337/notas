<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles_user extends Model
{
    public $timestamps = false;
    protected $fillable = [
		'id',
		'id_user',
		'rol',
		'status'
	];

 	public function user()
    {
        return $this->belongsTo('User');
    }
}
