<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'runs','wins', 'about'];

    public function betters() {
        return $this->hasMany(Better::class);
    }
}
