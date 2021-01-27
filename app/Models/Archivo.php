<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    protected $fillable = [
		'id',
		'registration_number',
		'brand',
		'model',
        'type',
        'fuel_type',
        'doors',
        'year',
        'is_active'
	];
}
