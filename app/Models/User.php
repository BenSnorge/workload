<?php

namespace App\Models;

use Laravel\Cashier\Cashier;
use Laravel\Cashier\Billable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Bus\Queueable;
use function Illuminate\Events\queueable;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'line1',
        'line2',
        'city',
        'state',
        'country',
        'postal_code',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Create a new SetupIntent instance.
     *
     * @param  array  $options
     * @return \Stripe\SetupIntent
     */
    /* public function createSetupIntent(array $options = [])
    {
        return $this->stripe()->setupIntents->create($options);
    } */

    public function line1(): ?string
    {
        return $this->line1;
    }
    public function line2(): ?string
    {
        return $this->line2;
    }
    public function city(): ?string
    {
        return $this->city;
    }
    public function state(): ?string
    {
        return $this->state;
    }
    public function country(): ?string
    {
        return $this->country;
    }
    public function postalCode(): ?string
    {
        return $this->postal_code;
    }

    protected static function booted()
    {
        static::updated(queueable(function ($customer) {
            if ($customer->hasStripeId()) {
                $customer->syncStripeCustomerDetails();
            }
        }));
    }

    public function stripeAddress()
    {
        return [
            'city' => $this->city(),
            'country' => $this->country(),
            'line1' => $this->line1(),
            'line2' => $this->line2(),
            'postal_code' => $this->postalCode(),
            'state' => $this->state(),
        ];
    }
}
