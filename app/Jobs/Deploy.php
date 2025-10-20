<?php

namespace App\Jobs;

use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Broadcasting\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\Middleware\WithoutOverlapping;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class Deploy implements ShouldQueue, ShouldBeUnique {
    use Queueable, Batchable;

    public function __construct(public string $projectName) {
    }

    public function handle(): void {
        info("starting deploying {$this->projectName}");
        sleep(5);
        info("finished deploying {$this->projectName}");
        // Cache::lock('deployments')->block(60 * 60, function () {
        //     info("starting deploying {$this->projectName}");
        //     sleep(5);
        //     info("finished deploying {$this->projectName}");
        // });
        // Redis::funnel('deployments')
        //     ->limit(5)
        //     ->block(10)
        //     ->then(function () {
        //         info("starting deploying {$this->projectName}");
        //         sleep(5);
        //         info("finished deploying {$this->projectName}");
        //     });
    }
    public function uniqueId() {
        return 'deployments';
    }
    public function uniqueFor() {
        return 60;
    }

    // public function middleware() {
    //     return [
    //         new WithoutOverlapping('deployments', 10)
    //     ];
    // }
}
