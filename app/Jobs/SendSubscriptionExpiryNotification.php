<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\User;
use Mail;

class SendSubscriptionExpiryNotification implements ShouldQueue
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle()
    {
        // ইমেইল পাঠানোর লজিক এখানে থাকবে
        Mail::to($this->user->email)->send(new SubscriptionExpiredMail($this->user));
    }
}

