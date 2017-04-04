<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\Lang;

class ClientItems extends Model
{	
	protected $table	= 'client_items';
	protected $fillable	= ['desc'];
	public $timestamps = false;
	
	public function relatedName()
    {
        return $this->hasOne('App\ItemString', 'name', 'desc');
    }
	
	public function scopeFilter($query, $class) {
		if(!empty($class))
		{
			$query->where($class, '>', 0)
				  /* ->orWhere(Lang::get('aion.aion_start_class.' . $class), '>', 0) */;
		}
		
		return $query;
	}
	
}
