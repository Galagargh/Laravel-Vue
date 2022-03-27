<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealership extends Model
{
    use HasFactory;

    protected $table = 'dealership';

    public function cars()
    {
        return $this->hasMany(Post::class);
    }
}
