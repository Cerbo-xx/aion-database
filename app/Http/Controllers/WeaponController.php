<?php

namespace App\Http\Controllers;

use App\ClientItems;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    public function index() {
		return view('data.table', [
			'type'	=> 'Weapons',
            'items' => ClientItems::where('weapon_type', '<>', '')
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
	
	public function type($type) {
		switch ($type) {
			case 'mace': 			$weaponType = '1h_mace'; 	$legend = 'masses';		break;
			case 'dagger': 			$weaponType = '1h_dagger'; 	$legend = 'dagues';		break;
			case 'polearm': 		$weaponType = '2h_polearm'; $legend = 'guisarmes';	break;
			case '2h_sword': 		$weaponType = '2h_sword'; 	$legend = 'espadons';	break;
			case 'staff': 			$weaponType = '2h_staff'; 	$legend = 'bâtons';		break;
			case 'bow': 			$weaponType = 'bow'; 		$legend = 'arcs';		break;
			case 'orb': 			$weaponType = '2h_orb'; 	$legend = 'orbes';		break;
			case 'book': 			$weaponType = '2h_book'; 	$legend = 'livres';		break;
			case 'sword': default: 	$weaponType = '1h_sword'; 	$legend = 'épées';		break;
		}
		return view('data.table', [
			'type'	=> 'Affichage des ' . $legend,
            'items' => ClientItems::where('weapon_type', '=', $weaponType)
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
