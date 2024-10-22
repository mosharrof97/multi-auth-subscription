<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class RenewSubscriptionJob implements ShouldQueue
{
    use Queueable;

    public $subscription;

    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    public function handle()
    {
        $this->subscription->update([
            'start_date' => now(),
            'end_date' => now()->addMonth(),
        ]);
    }
}
