<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Director extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'email'];

    public function department(): HasMany
    {
        return $this->hasMany(Department::class, 'director_id', 'id');
    }

    public function assign(): HasMany
    {
        return $this->hasMany(AssignDept::class, 'director_id', 'id');
    }
}
