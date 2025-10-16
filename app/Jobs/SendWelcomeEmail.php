<?php

namespace App\Jobs;

use DateTime;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendWelcomeEmail implements ShouldQueue {
    use Queueable;
    // public  $count = 0;
    // public $backoff = 2;

    public function __construct() {
    }

    // public function retryUntil(): DateTime {
    //     return now()->addSeconds(100);
    // }

    // public function tries(): int {
    //     return 4;
    // }

    public function handle(): void {
        sleep(1);
        // throw new \Exception('sorry cant send the email');
        info('hello world');
    }
}
