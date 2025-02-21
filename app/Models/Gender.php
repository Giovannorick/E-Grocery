<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(Account::class, "gender_id", "id");
    }
}
