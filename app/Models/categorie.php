<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categorie extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'id','name','image'
    ];

    /**
     * Get all of the comments for the categorie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product_category(): HasMany
    {
        return $this->hasMany(product::class, 'category_id', 'id');
    }
}
