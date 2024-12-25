<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FilterValues extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'value',
        'ad_in',
        'filter_id',
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

    public function advertisements(): BelongsTo
    {
        return $this->belongsTo(Advertisements::class);
    }

    public function filters(): BelongsTo
    {
        return $this->belongsTo(Filters::class);
    }
}
