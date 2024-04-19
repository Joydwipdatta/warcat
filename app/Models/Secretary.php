<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Secretary extends Model
{
    use HasFactory;

    public function secassign(): HasMany
    {
        return $this->hasMany(SecAssign::class, 'secretary_id', 'id');
    }
}
