<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BotController extends Controller
{
    
    public function __construct() {
    	
    }

    public function update() {

    	$response = Telegram::setWebhook(['url' => 'https://bst.dev/'. env('TELEGRAM_BOT_TOKEN', '') .'/webhook']);

    	

    }


}
