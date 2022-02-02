<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Rappasoft\LaravelAuthenticationLog\Traits\AuthenticationLoggable;

class User extends Authenticatable
{
    use LogsActivity;
    use HasApiTokens, HasFactory, Notifiable, TwoFactorAuthenticatable, AuthenticationLoggable;
    use \App\Http\Traits\UsesUuid;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnlyDirty('true')
        ->useLogName('user')
        ->logOnly(['name','email']);
    }

    protected $casts = [
        'updated_at' => 'datetime',
        'created_at' => 'datetime',
    ];

    protected $guarded = ['id'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function setPasswordAttribute($value)
    {
        if (!empty($value)) {
            if (preg_match('/^\$2y\$[0-9]*\$.{50,}$/', $value)) {
                $this->attributes['password'] = $value;
            } else {
                $this->attributes['password'] = Hash::make($value);
            }
            return true;
        }
        return false;
    }

    public function isProfileOwner()
    {
        return $this->id === Auth::user()->id;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Get all of the applicants for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function applicants()
    {
        return $this->hasMany(Applicant::class, 'doctor_id');
    }

    public function hasAnyRole(string $role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }

    public function hasAnyRoles(array $role)
    {
        return null !== $this->roles()->whereIn('name', $role)->first();
    }
}
