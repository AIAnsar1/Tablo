<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'parent_id',
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


    public function advertisements(): HasMany
    {
        return $this->hasMany(Advertisements::class);
    }

    public function filters(): HasMany
    {
        return $this->hasMany(Filters::class);
    }
}
