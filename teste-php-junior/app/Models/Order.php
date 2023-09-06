<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Order extends Model
{
    use HasFactory;

    protected  $fillable = [
        'id',
        'consumer_id',
        'price',
        'status'
    ];

    public function consumer(): BelongsTo
    {
        return $this->belongsTo(Consumer::class);
    }
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'order_products_cart')->withPivot('quantity');

    }
    protected $casts = [
        'status' => OrderStatusEnum::class
    ];
}
