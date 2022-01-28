<?php

namespace App\Http\Controllers;

use App\Jobs\SendTextJob;

class SendController extends Controller
{
    public function sendText()
    {
        SendTextJob::dispatch()->onQueue('text');
    }
}
