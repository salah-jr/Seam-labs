<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ["type"];
    protected $guarded = ['customer_phone', 'customer_name', 'table_number', 'service_charge', 'waiter_name', 'fees'];
    protected $hidden = ['created_at', 'updated_at'];

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
