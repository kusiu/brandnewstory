<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
    ];

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function meta()
    {
        return $this->hasMany(Meta::class);
    }

    public function getMeta(string $name)
    {
        return $this->meta()->where('key', $name)->value('value');
    }
}
