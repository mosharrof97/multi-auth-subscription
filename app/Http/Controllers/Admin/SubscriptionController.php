<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plan;
use Auth;

class SubscriptionController extends Controller
{
    public function applySubscription($id)
    {
        // Subscription Plan ID ইনপুট থেকে নিন
        $subscriptionPlan = Plan::findOrFail($id);

        // বর্তমানে লগ-ইন করা user কে subscription plan-এ subscribe করুন
        $user = Auth::user();
        $user->subscribeToPlan($subscriptionPlan);

        return redirect()->route('dashboard');
        // return response()->json([
        //     'message' => 'You have successfully subscribed to the plan!',
        //     'subscription_plan' => $subscriptionPlan
        // ]);
    }
}
