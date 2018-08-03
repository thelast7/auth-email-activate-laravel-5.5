<?php

namespace App\Events\Auth;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use App\User;

class UserActivationEmail
{
    //cara buat file ini = php artisan make:event Auth\\UserActivatonEmail
    use Dispatchable, SerializesModels;

    public $user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
