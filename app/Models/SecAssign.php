<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SecAssign extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_id',
        'secretary_id'

    ];
    protected $table = "sec_assigns";

    public function secretary(): BelongsTo
    {
        return $this->belongsTo(Secretary::class, 'secretary_id', 'id');
    }
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
