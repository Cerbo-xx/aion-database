<?php

namespace App\Http\Controllers;

use App\ClientItems;
use Illuminate\Http\Request;

class ArmorController extends Controller
{
    public function index($lang) {
		return view('data.table', [
			'lang'	=> $lang,
			'type'	=> 'Armor',
            'items' => ClientItems::where('armor_type', '<>', '')
						->where('level', '<=', 55)
						->where('level', '>', 1)
						->where('quality', '<>', 'mythic')
						->where('desc', 'not like', '%test%')
						->where('desc_fr', 'not like', '%test%')
						->orderByRaw("FIELD(quality, 'epic', 'unique', 'legend', 'rare', 'common') ASC")
						->orderBy('level', 'desc')
						->orderBy('desc_fr', 'asc')
						->paginate(100)
        ]);
	}
	
	public function type($lang, $type) {
		switch ($type) {
			case 'no_armor': 		$legend = 'costumes';	break;
			case 'robe': 			$legend = 'tissu';		break;
			case 'leather': 		$legend = 'cuir';		break;
			case 'chain': 			$legend = 'mailles';	break;
			case 'plate': default: 	$legend = 'plaques';	break;
		}
		return view('data.table', [
			'lang'	=> $lang,
			'type'	=> 'Affichage des armures en ' . $type,
            'items' => ClientItems::where('armor_type', '=', $type)
						->where('level', '<=', 55)
						->where('level', '>', 1)
						->where('quality', '<>', 'mythic')
						->where('desc', 'not like', '%test%')
						->where('desc_fr', 'not like', '%test%')
						->orderByRaw("FIELD(quality, 'epic', 'unique', 'legend', 'rare', 'common') ASC")
						->orderBy('level', 'desc')
						->orderBy('desc_fr', 'asc')
						->paginate(100)
        ]);
	}
	
	public function part($lang, $type, $part) {
		switch ($type) {
			case 'no_armor': 		$legend2 = 'costumes';	break;
			case 'robe': 			$legend2 = 'tissu';		break;
			case 'leather': 		$legend2 = 'cuir';		break;
			case 'chain': 			$legend2 = 'mailles';	break;
			case 'plate': default: 	$legend2 = 'plaques';	break;
		}
		switch ($part) {
			case 'head': 			$legend = 't&ecirc;te';	$legend2 = '';	break;
			case 'shield':			$legend = 'bouclier';	$legend2 = '';	$part = 'sub';	break;
			case 'torso': 			$legend = 'torses';				break;
			case 'glove': 			$legend = 'gants';				break;
			case 'shoulder': 		$legend = 'spalli&egrave;res';	break;
			case 'leg': 			$legend = 'jambi&egrave;res';	break;
			case 'foot': default: 	$legend = 'bottes';				$part = 'foot'; break;
		}
		return view('data.table', [
			'type'	=> 'Affichage des ' . $legend . ' en ' . $legend2,
            'items' => ClientItems::where('armor_type', '=', $type)
						->where('equipment_slots', 'like', '%' . $part . '%')
						->where('level', '<=', 55)
						->where('level', '>', 1)
						->where('quality', '<>', 'mythic')
						->where('desc', 'not like', '%test%')
						->where('desc_fr', 'not like', '%test%')
						->orderByRaw("FIELD(quality, 'epic', 'unique', 'legend', 'rare', 'common') ASC")
						->orderBy('level', 'desc')
						->orderBy('desc_fr', 'asc')
						->paginate(100)
        ]);
	}
}
