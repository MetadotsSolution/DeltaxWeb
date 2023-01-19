<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxAccount extends Model
{
    use HasFactory;

    public function taxes()
    {
        return $this->hasMany(Tax::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
 