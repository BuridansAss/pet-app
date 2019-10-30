<?php


namespace App\Sorcerers\Goddess\Models;


use App\Repository\Sbot;
use Faker\Generator;
use Illuminate\Database\Eloquent\Model;


class Bot
{
    /**
     * @param $name string
     */
    public static function createNewBot($name)
    {
        $bot = new Sbot();

        $bot->name = $name;
        $bot->level = 1;
        $bot->exp = 0;
        $bot->bag = '{}';
        $bot->weapon_id = 0;
        $bot->armor_id = 0;
        $bot->spells = '{}';
        $bot->place = 0;
        $bot->finding = 0;

        $bot->save();
    }
}