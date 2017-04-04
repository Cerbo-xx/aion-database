<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/**
		 * RegEx used into Notepad++ to convert in Schema format:
		 * (integer example, full list at https://laravel.com/docs/5.4/migrations#creating-columns)
		 *
		 * Find: `(.*)` int\((.*)\)
		 * Replace: $table->integer\('\1', \2\);
		*/
		
        Schema::create('client_items', function(Blueprint $table) {
			$table->integer('id');
			$table->string('name', 64);
			$table->string('desc', 64)->nullable();
			$table->string('desc_en', 255)->nullable();
			$table->string('desc_fr', 255)->nullable();
			$table->string('desc_long', 64)->nullable();
			$table->string('desc_long_en', 512)->nullable();
			$table->string('desc_long_fr', 512)->nullable();
			$table->string('desc_proc', 64)->nullable();
			$table->string('desc_proc_en', 255)->nullable();
			$table->string('desc_proc_fr', 255)->nullable();
			$table->string('desc_craftman', 64)->nullable();
			$table->string('desc_craftman_en', 255)->nullable();
			$table->string('desc_craftman_fr', 255)->nullable();
			$table->enum('armor_type', ['robe','leather','chain','plate','no_armor'])->nullable();
			$table->string('category', 255)->nullable();
			$table->string('weapon_type', 255)->nullable();
			$table->string('item_type', 255)->nullable();
			$table->integer('equip_type')->nullable();
			$table->string('skill_to_learn', 255)->nullable();
			$table->string('summon_housing_object', 255)->nullable();
			$table->string('abyss_item', 255)->nullable();
			$table->integer('abyss_item_count')->nullable();
			$table->integer('abyss_point')->nullable();
			$table->string('activate_target', 255)->nullable();
			$table->string('activate_target_race', 255)->nullable();
			$table->integer('activation_count')->nullable();
			$table->integer('activation_level')->nullable();
			$table->string('activation_mode', 255)->nullable();
			$table->string('activation_skill', 255)->nullable();
			$table->integer('agi')->nullable();
			$table->string('ammo_bone', 255)->nullable();
			$table->string('ammo_fx', 255)->nullable();
			$table->integer('ammo_speed')->nullable();
			$table->string('area_to_use', 255)->nullable();
			$table->integer('assassin')->nullable();
			$table->integer('assassin_max')->nullable();
			$table->integer('attack_delay')->nullable();
			$table->float('attack_gap', 8, 2)->nullable();
			$table->float('attack_range', 8, 2)->nullable();
			$table->string('attack_type', 255)->nullable();
			$table->float('basic_length', 8, 2)->nullable();
			$table->integer('blade_fx')->nullable();
			$table->integer('block')->nullable();
			$table->integer('bm_restrict_category')->nullable();
			$table->string('bonus_apply', 255)->nullable();
			$table->string('bonus_attr1', 64)->nullable();
			$table->string('bonus_attr10', 64)->nullable();
			$table->string('bonus_attr11', 64)->nullable();
			$table->string('bonus_attr12', 64)->nullable();
			$table->string('bonus_attr2', 64)->nullable();
			$table->string('bonus_attr3', 64)->nullable();
			$table->string('bonus_attr4', 64)->nullable();
			$table->string('bonus_attr5', 64)->nullable();
			$table->string('bonus_attr6', 64)->nullable();
			$table->string('bonus_attr7', 64)->nullable();
			$table->string('bonus_attr8', 64)->nullable();
			$table->string('bonus_attr9', 64)->nullable();
			$table->string('bonus_attr_a1', 64)->nullable();
			$table->string('bonus_attr_a2', 64)->nullable();
			$table->string('bonus_attr_a3', 64)->nullable();
			$table->string('bonus_attr_a4', 64)->nullable();
			$table->string('bonus_attr_b1', 64)->nullable();
			$table->string('bonus_attr_b2', 64)->nullable();
			$table->string('bonus_attr_b3', 64)->nullable();
			$table->string('bonus_attr_b4', 64)->nullable();
			$table->tinyInteger('breakable')->nullable();
			$table->integer('breakdown')->nullable();
			$table->integer('burn_on_attack')->nullable();
			$table->integer('burn_on_defend')->nullable();
			$table->tinyInteger('can_composite_weapon')->nullable();
			$table->tinyInteger('can_deposit_to_account_warehouse')->nullable();
			$table->tinyInteger('can_deposit_to_character_warehouse')->nullable();
			$table->tinyInteger('can_deposit_to_guild_warehouse')->nullable();
			$table->integer('can_dye')->nullable();
			$table->tinyInteger('can_exchange')->nullable();
			$table->tinyInteger('can_proc_enchant')->nullable();
			$table->tinyInteger('can_sell_to_npc')->nullable();
			$table->tinyInteger('can_split')->nullable();
			$table->integer('cannot_changeskin')->nullable();
			$table->tinyInteger('cannot_extraction')->nullable();
			$table->tinyInteger('cannot_matter_enchant')->nullable();
			$table->tinyInteger('cannot_matter_option')->nullable();
			$table->integer('cash_available_minute')->nullable();
			$table->integer('cash_item')->nullable();
			$table->integer('cash_social')->nullable();
			$table->integer('cash_title')->nullable();
			$table->integer('casting_delay')->nullable();
			$table->integer('chanter')->nullable();
			$table->integer('chanter_max')->nullable();
			$table->integer('charge_level')->nullable();
			$table->float('charge_price1', 8, 2)->nullable();
			$table->float('charge_price2', 8, 2)->nullable();
			$table->integer('cleric')->nullable();
			$table->integer('cleric_max')->nullable();
			$table->string('combat_equip_bone', 255)->nullable();
			$table->string('combat_item_fx', 255)->nullable();
			$table->string('combineskill', 255)->nullable();
			$table->string('confirm_to_delete_cash_item', 255)->nullable();
			$table->string('cosmetic_name', 255)->nullable();
			$table->string('coupon_item', 255)->nullable();
			$table->integer('coupon_item_count')->nullable();
			$table->string('craft_recipe_info', 255)->nullable();
			$table->integer('critical')->nullable();
			$table->integer('damage_reduce')->nullable();
			$table->string('default_color_f', 255)->nullable();
			$table->string('default_color_m', 255)->nullable();
			$table->string('difficulty', 255)->nullable();
			$table->integer('disassembly_item')->nullable();
			$table->integer('dmg_decal')->nullable();
			$table->string('doc_bg', 255)->nullable();
			$table->integer('dodge')->nullable();
			$table->string('dyeing_color', 255)->nullable();
			$table->integer('elementalist')->nullable();
			$table->integer('elementalist_max')->nullable();
			$table->string('equip_bone', 255)->nullable();
			$table->string('equipment_slots', 255)->nullable();
			$table->integer('expire_time')->nullable();
			$table->string('extra_currency_item', 255)->nullable();
			$table->integer('extra_currency_item_count')->nullable();
			$table->integer('extract_skin_type')->nullable();
			$table->integer('f2p_pack_available')->nullable();
			$table->string('f2p_pack_name', 255)->nullable();
			$table->integer('fighter')->nullable();
			$table->integer('fighter_max')->nullable();
			$table->integer('gain_level1')->nullable();
			$table->integer('gain_level2')->nullable();
			$table->string('gain_skill1', 255)->nullable();
			$table->string('gain_skill2', 255)->nullable();
			$table->integer('gathering_point')->nullable();
			$table->string('gender_permitted', 255)->nullable();
			$table->integer('guild_level_permitted')->nullable();
			$table->integer('hit_accuracy')->nullable();
			$table->integer('hit_count')->nullable();
			$table->string('icon_name', 255)->nullable();
			$table->integer('inven_warehouse_max_extendlevel')->nullable();
			$table->tinyInteger('item_drop_permitted')->nullable();
			$table->string('item_fx', 255)->nullable();
			$table->integer('knight')->nullable();
			$table->integer('knight_max')->nullable();
			$table->integer('kno')->nullable();
			$table->integer('level')->nullable();
			$table->tinyInteger('lore')->nullable();
			$table->integer('mage')->nullable();
			$table->integer('mage_max')->nullable();
			$table->integer('magical_hit_accuracy')->nullable();
			$table->integer('magical_resist')->nullable();
			$table->integer('magical_skill_boost')->nullable();
			$table->string('material', 255)->nullable();
			$table->integer('max_damage')->nullable();
			$table->integer('max_stack_count')->nullable();
			$table->string('mesh', 255)->nullable();
			$table->integer('mesh_change')->nullable();
			$table->integer('min_damage')->nullable();
			$table->string('motion_name', 255)->nullable();
			$table->tinyInteger('no_enchant')->nullable();
			$table->integer('option_slot_bonus')->nullable();
			$table->string('ownership_world', 255)->nullable();
			$table->integer('package_permitted')->nullable();
			$table->integer('parry')->nullable();
			$table->integer('physical_defend')->nullable();
			$table->integer('price')->nullable();
			$table->integer('price_per_use')->nullable();
			$table->integer('priest')->nullable();
			$table->integer('priest_max')->nullable();
			$table->integer('proc_enchant_effect_occur_left_prob')->nullable();
			$table->integer('proc_enchant_effect_occur_prob')->nullable();
			$table->string('proc_enchant_skill', 255)->nullable();
			$table->integer('proc_enchant_skill_level')->nullable();
			$table->string('proc_fx', 255)->nullable();
			$table->string('quality', 255)->nullable();
			$table->integer('quest')->nullable();
			$table->integer('ranger')->nullable();
			$table->integer('ranger_max')->nullable();
			$table->integer('reduce_max')->nullable();
			$table->tinyInteger('remove_when_logout')->nullable();
			$table->integer('require_shard')->nullable();
			$table->string('require_skill1', 255)->nullable();
			$table->integer('require_skill1_lv')->nullable();
			$table->string('require_skill2', 255)->nullable();
			$table->integer('require_skill2_lv')->nullable();
			$table->string('return_alias', 255)->nullable();
			$table->integer('return_worldid')->nullable();
			$table->float('scale', 8, 2)->nullable();
			$table->integer('scout')->nullable();
			$table->integer('scout_max')->nullable();
			$table->tinyInteger('soul_bind')->nullable();
			$table->string('stat_enchant_type', 255)->nullable();
			$table->integer('stat_enchant_value')->nullable();
			$table->string('stigma_type', 255)->nullable();
			$table->integer('str')->nullable();
			$table->integer('sub_enchant_material_effect')->nullable();
			$table->string('sub_enchant_material_effect_type', 255)->nullable();
			$table->string('tag', 255)->nullable();
			$table->integer('target_item_level_max')->nullable();
			$table->integer('target_item_level_min')->nullable();
			$table->integer('temporary_exchange_time')->nullable();
			$table->string('tool_type', 255)->nullable();
			$table->string('trail_tex', 255)->nullable();
			$table->string('ui_sound_type', 255)->nullable();
			$table->integer('unit_sell_count')->nullable();
			$table->integer('use_delay')->nullable();
			$table->integer('use_delay_type_id')->nullable();
			$table->string('use_fx', 255)->nullable();
			$table->string('use_fx_bone', 255)->nullable();
			$table->string('visual_slot', 255)->nullable();
			$table->integer('warrior')->nullable();
			$table->integer('warrior_max')->nullable();
			$table->integer('weapon_boost_value')->nullable();
			$table->integer('wizard')->nullable();
			$table->integer('wizard_max')->nullable();
			$table->integer('sub_enchant_material_many')->nullable();
			$table->string('func_pet_name', 255)->nullable();
			$table->integer('charge_capacity')->nullable();
			$table->integer('doping_pet_useable')->nullable();
			$table->string('drop_each_member', 255)->nullable();
			$table->integer('func_pet_dur_minute')->nullable();
			$table->string('init_coolt_instance', 255)->nullable();
			$table->integer('trial_user_can_vendor_buy')->nullable();
			$table->integer('use_emblem')->nullable();
			$table->string('custom_idle_anim', 255)->nullable();
			$table->string('custom_run_anim', 255)->nullable();
			$table->string('custom_jump_anim', 255)->nullable();
			$table->string('custom_rest_anim', 255)->nullable();
			$table->integer('anim_expire_time')->nullable();
			$table->string('race_permitted', 255)->nullable();
			$table->primary('id');
			$table->index('id');
			$table->index('desc');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('client_items');
    }
}
