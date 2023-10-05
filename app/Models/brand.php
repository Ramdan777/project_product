<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class brand extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'id','name','web_address','image'
    ];

    /**
     * Get all of the comments for the brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product_brand(): HasMany
    {
        return $this->hasMany(product::class, 'brand_id', 'id');
    }
}
