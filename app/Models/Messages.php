<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Messages extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'content',
        'is_read',
        'sent_at',
        'ad_in',
        'sender_id',
        'receiver_id',
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

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function advertisements(): BelongsTo
    {
        return $this->belongsTo(Advertisements::class);
    }
}
