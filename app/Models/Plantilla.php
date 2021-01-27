<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plantilla extends Model
{
    public $timestamps = false;
    protected $fillable = [
		'id',
		'name',
		'plantilla'
	];
		
}
