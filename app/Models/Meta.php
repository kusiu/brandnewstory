<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    const TYPE_PHONE = 'phone';

    protected $fillable = [
        'user_id',
        'key',
        'value',
    ];

    protected $table = 'meta';
}
