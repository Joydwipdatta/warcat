<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;

    public function director(): BelongsTo
    {
        return $this->belongsTo(Director::class, 'director_id', 'id');
    }
    public function assign(): HasMany
    {
        return $this->hasMany(AssignDept::class, 'director_id', 'id');
    }
    public function secassign(): HasMany
    {
        return $this->hasMany(SecAssign::class, 'department_id', 'id');
    }
}
