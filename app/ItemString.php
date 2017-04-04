<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemString extends Model
{
    protected $table	= 'client_strings_item';
	protected $fillable	= ['name','body'];
	public $timestamps = false;

}
