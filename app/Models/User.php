<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\{hasMany, belongsTo};
use App\Constants\GeneralStatus;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends BaseModel
{
    use HasApiTokens, HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'email_verified_at',
        'phone',
        'phone_verified_at',
        'role',
        'status',
        'password',
        'registration_date',
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
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $with = [
        'roles',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

    public $translatable = [

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

    public function getActiveRole()
    {
        return $this->roles()->where('status', GeneralStatus::STATUS_ACTIVE)->first();
    }

    public function scopeFilter($query, $data)
    {
        if (isset($data['status']))
        {
            $query->whereHas('roles', function ($q) use ($data) {
                $q->where('status', $data['status']);
            });
        }

        if (isset($data['role']))
        {
            $query->whereHas('roles', function ($q) use ($data) {
                $q->where('role_code', $data['role']);
            });
        }

        return $query;
    }

    public function countries(): belongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function roles(): HasMany
    {
        return $this->hasMany(UserRoles::class);
    }


    public function advertisements(): HasMany
    {
        return $this->hasMany(Advertisements::class);
    }

    public function messagesSent(): HasMany
    {
        return $this->hasMany(Messages::class, 'sender_id');
    }

    public function messagesReceived(): HasMany
    {
        return $this->hasMany(Messages::class, 'receiver_id');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Reviews::class);
    }

    public function favorites(): HasMany
    {
        return $this->hasMany(Favorites::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payments::class);
    }


}
