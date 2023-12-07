<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class HelpdeskController extends Controller
{
    //
    public function handleTelegramWebhook()
    {
        // $update = Telegram::commandsHandler(true);

        // return response("OK");

        return ("OK");
    }
}
