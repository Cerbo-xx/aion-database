<?php

namespace App\Http\Controllers;

use App\ClientItems;
use Illuminate\Http\Request;

class ItemController extends Controller
{
	public function show($lang, $id) {
		$item = ClientItems::where('id', $id)->first();
		if(empty($item))
		{
			return view('data.unknown_item', ['id' => $id]);
		}
		
		if($item->equipment_slots == 'none')
		{
			$view = 'data.other_item';
		}
		else
		{
			$view = 'data.equipment_item';
		}
		
		/**
		* Create max level for manastone regarding item level
		**/
		if($item->level <= 10) $item->msLevel = 20; elseif($item->level <= 20) $item->msLevel = 30;
		elseif($item->level <= 30) $item->msLevel = 40;	elseif($item->level <= 40) $item->msLevel = 50;
		elseif($item->level <= 50) $item->msLevel = 60; else $item->msLevel = 70;
		
		/**
		* Create manastone slots regarding item quality
		**/
		if($item->item_type == 'abyss' and !in_array($item->equipment_slots, array('wing','right_or_left_ear','neck','right_or_left_finger','waist')))
			$item->msSlot = 6;
		elseif($item->expire_time > 0)
			$item->msSlot = 0;
		elseif($item->armor_type == 'no_armor' and $item->equipment_slots != 'sub') // Exclude Shields with equipment_slots = 'sub'
			$item->msSlot = 0;
		elseif(in_array($item->equipment_slots, array('wing','right_or_left_ear','neck','right_or_left_finger','waist')))
			$item->msSlot = 0;
		else
		{
			switch ($item->quality) {
				case 'epic':
					$item->msSlot = 5;
					break;
				case 'unique':
					$item->msSlot = 4;
					break;
				case 'legend':
					$item->msSlot = 3;
					break;
				case 'rare':
					$item->msSlot = 2;
					break;
				case 'common':
				default:
					$item->msSlot = 1;
					break;
			}
		}
		
		return view($view, [
			'lang'	=> $lang,
            'item'	=> $item,
			'loop'	=> 0
        ]);
	}
	
}
