<?php

namespace App\Http\Controllers\Goddess;

use App\Http\Controllers\Controller;
use App\Sorcerers\Goddess\Models\Bot;
use Faker\Generator;
use Illuminate\Http\Request;

class BotController extends Controller
{
    public function createBot($name)
    {
        Bot::createNewBot($name);

        return 'ok';
    }
}
