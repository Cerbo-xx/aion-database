<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemQuality extends Model
{
	public $timestamps = false;
	
	public function getQuality($value)
    {
        switch ($value) {
			case 'mythic':
				return 6;
				break;
			case 'epic':
				return 5;
				break;
			case 'unique':
				return 4;
				break;
			case 'legend':
				return 3;
				break;
			case 'rare':
				return 2;
				break;
			case 'common':
				return 1;
				break;
			case 'junk':
			default:
				return 0;
				break;
		}
    }
}
