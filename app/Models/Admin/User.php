<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Role;

class User extends Model
{
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    protected $filablle = [
        'name',
        'login',
        'email',
        'passsword'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $casts = ['email_verified_at' => "datetime"];



    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    // public function isAdministrator(): bool
    // {
    //     return $this->roles()->where('name')->exists();
    // }

    // public function isUser(): bool
    // {
    //     return $this->roles()->where('user')->exists();
    // }

    // public function isDisabled(): bool
    // {
    //     return $this->roles()->where('disabled')->exists();
    // }

}
