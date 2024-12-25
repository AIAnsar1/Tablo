<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payments extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'service_type',
        'payment_method',
        'amount',
        'user_id',
        'advertisement_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [

    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [

    ];

    public $translatable = [

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ad(): BelongsTo
    {
        return $this->belongsTo(Advertisements::class);
    }
}
