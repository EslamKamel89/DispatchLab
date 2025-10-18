<?php

namespace App\Jobs;

use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessPayment implements ShouldQueue {
    use Queueable, Batchable;


    public function __construct() {
        //
    }


    public function handle(): void {
        if ($this->batch()->canceled()) {
            return;
        }
        info('Process Payment');
    }
}
