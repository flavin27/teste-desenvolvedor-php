<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Consumer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id'
    ];
    public function account(): HasOne
    {
        return $this->hasOne(Account::class);
    }
    public function order(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
