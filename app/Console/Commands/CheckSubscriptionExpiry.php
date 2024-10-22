<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Subscription;

class CheckSubscriptionExpiry extends Command
{
    protected $signature = 'subscriptions:check-expiry';
    protected $description = 'Check for expired subscriptions and deactivate them';

    public function handle()
    {
        $expiredSubscriptions = Subscription::where('end_date', '<', now())
                                             ->where('is_active', true)
                                             ->get();

        foreach ($expiredSubscriptions as $subscription) {
            $subscription->update(['is_active' => false]);
            // আপনি এখানে ইমেইল পাঠানোর কোডও যোগ করতে পারেন
        }

        $this->info('Expired subscriptions have been deactivated.');
    }
}
