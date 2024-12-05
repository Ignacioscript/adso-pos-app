<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'phone' ,'job_type_id', 'hired_date','location_id'];

    public function jobType(): BelongsTo
    {
        return $this->belongsTo(JobType::class);
    }
}
