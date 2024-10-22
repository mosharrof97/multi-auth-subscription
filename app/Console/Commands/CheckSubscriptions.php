<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckSubscriptions extends Command
{
    protected $signature = 'subscriptions:check';

    protected $description = 'Check and update expired subscriptions';

    public function handle()
    {
        // যেসব সাবস্ক্রিপশনের মেয়াদ শেষ হয়ে গেছে সেগুলো খুঁজে বের করা
        $expiredSubscriptions = Subscription::where('end_date', '<', Carbon::now())
            ->where('is_active', true)
            ->get();

        foreach ($expiredSubscriptions as $subscription) {
            $subscription->update(['is_active' => false]);
            // এখানে আপনি ইউজারকে নোটিফিকেশনও পাঠাতে পারেন সাবস্ক্রিপশন এক্সপায়ার হওয়ার বিষয়ে
        }

        $this->info('Expired subscriptions have been deactivated.');
    }
}
