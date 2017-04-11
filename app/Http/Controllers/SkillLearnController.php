<?php

namespace App\Http\Controllers;

use App\ClientItems;
use Illuminate\Http\Request;

class SkillLearnController extends Controller
{
	public function skillbook($lang, $class = null) {
		$items = ClientItems::where('skill_to_learn', '<>', '')
						->where('level', '<=', 55)
						->where('quality', '<>', 'mythic')
						->where('desc', 'not like', '%test%')
						->where('desc_fr', 'not like', '%test%')
						->filter($class)
						->orderByRaw("FIELD(quality, 'epic', 'unique', 'legend', 'rare', 'common') ASC")
						->orderBy('level', 'desc')
						->orderBy('id', 'asc')
						->paginate(100);
						
		return view('data.table', [
			'type'	=> 'Affichage des grimoires de comp&eacute;tence',
            'items' => $items
        ]);
	}
	public function stigma($lang, $class = null) {
		return view('data.table', [
			'type'	=> 'Affichage des pierres de stigma',
            'items' => ClientItems::where('gain_skill1', '<>', '')
						->where('level', '<=', 55)
						->where('quality', '<>', 'mythic')
						->where('desc', 'not like', '%test%')
						->where('desc_fr', 'not like', '%test%')
						->filter($class)
						->orderByRaw("FIELD(quality, 'epic', 'unique', 'legend', 'rare', 'common') ASC")
						->orderBy('level', 'desc')
						->orderBy('id', 'asc')
						->paginate(100)
        ]);
	}
}
