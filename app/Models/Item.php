<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];
    protected $hidden = ['created_at', 'updated_at'];

    public function orderItems(): HasMany
    {
        return $this->hasMany(orderItem::class);
    }
}
