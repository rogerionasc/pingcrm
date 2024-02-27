<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
