<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function mutasi()
    {
        return $this->hasOne(Post::class);
    }

    public function identitas()
    {
        return $this->hasOne(Post::class);
    }
}
