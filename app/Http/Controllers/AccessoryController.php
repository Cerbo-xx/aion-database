<?php

namespace App\Http\Controllers;

use App\ClientItems;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    public function index($lang) {
		return view('data.table', [
			'lang'	=> $lang,
			'type'	=> 'Accessory',
            'items' => ClientItems::whereIn('equipment_slots', array('right_or_left_ear','neck','right_or_left_finger','waist','wing'))
						->where('level', '<=', 55)
						->where('level', '>', 1)
						->where('quality', '<>', 'mythic')
						->where('desc', 'not like', '%test%')
						->where('desc_fr', 'not like', '%test%')
						->orderByRaw("FIELD(quality, 'epic', 'unique', 'legend', 'rare', 'common') ASC")
						->orderBy('level', 'desc')
						->orderBy('id', 'asc')
						->paginate(100)
        ]);
	}
	
	public function type($lang, $type) {
		switch ($type) {
			case 'wing': 			$accessoryType = 'wing'; 				$legend = 'ailes';					break;
			case 'earring': 		$accessoryType = 'right_or_left_ear'; 	$legend = 'boucles d\'oreille';		break;
			case 'necklace': 		$accessoryType = 'neck'; 				$legend = 'colliers';				break;
			case 'ring': 			$accessoryType = 'right_or_left_finger';$legend = 'anneaux';				break;
			case 'belt': default:	$accessoryType = 'waist'; 				$legend = 'ceintures';				break;
		}
		return view('data.table', [
			'lang'	=> $lang,
			'type'	=> 'Affichage des ' . $legend,
            'items' => ClientItems::where('equipment_slots', '=', $accessoryType)
						->where('level', '<=', 55)
						->where('level', '>', 1)
						->where('quality', '<>', 'mythic')
						->where('desc', 'not like', '%test%')
						->where('desc_fr', 'not like', '%test%')
						->orderByRaw("FIELD(quality, 'epic', 'unique', 'legend', 'rare', 'common') ASC")
						->orderBy('level', 'desc')
						->orderBy('id', 'asc')
						->paginate(100)
        ]);
	}
}
