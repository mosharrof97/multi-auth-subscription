<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\HasOne;
// use App\Models\Subscription;
// use App\Models\Plan;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasPermissions, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }

    // Subscription plan apply করার মেথড
    public function subscribeToPlan(Plan $subscriptionPlan)
    {
        // পুরোনো subscription থাকলে সেটি update করে দিন
        if ($this->subscription) {
            $this->subscription->update([
                'plan_id' => $subscriptionPlan->id,
                'start_date' => now(),
                'end_date' => now()->addDays($subscriptionPlan->duration_in_days),
                'is_active' => true,
            ]);
        } else {
            // নতুন subscription তৈরি করুন
            $this->subscription()->create([
                'plan_id' => $subscriptionPlan->id,
                'start_date' => now(),
                'end_date' => now()->addDays($subscriptionPlan->duration_in_days),
                'is_active' => true,
            ]);
        }
    }
}
