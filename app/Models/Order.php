<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'item_id',
        'price',
    ];

    public function users() {
        return $this->belongsTo(Account::class, "account_id", "id");
    }

    public function item() {
        return $this->hasOne(Item::class, "id", "item_id");
    }
}
