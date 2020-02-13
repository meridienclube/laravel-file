<?php

namespace ConfrariaWeb\File\Listeners;

use Illuminate\Support\Facades\Log;

class UploadFile
{

    public function __construct()
    {
        Log::info('$event');
    }

    public function handle($event)
    {
       Log::info($event);
    }
}
