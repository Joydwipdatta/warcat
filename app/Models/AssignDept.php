<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssignDept extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_id',
        'director_id'

    ];
    protected $table = "assign_depts";

    /**
     * Get the categories
     *
     */


    public function director(): BelongsTo
    {
        return $this->belongsTo(Director::class, 'director_id', 'id');
    }
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
