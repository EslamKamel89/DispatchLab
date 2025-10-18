<?php

namespace App\Jobs;

use DateTime;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendWelcomeEmail implements ShouldQueue {
    use Queueable, Batchable;

    public function __construct() {
    }



    public function handle() {
        if ($this->batch()->canceled()) {
            return;
        }
        info('Send Welcome Email');
    }
}
