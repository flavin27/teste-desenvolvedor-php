<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Consumer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id'
    ];
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::CLASS);
    }
}
