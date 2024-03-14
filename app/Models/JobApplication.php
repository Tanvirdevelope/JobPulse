<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    protected $fillable = [
        'user_id',
        'company_id',
        'job_id',
        'first_name',
        'last_name',
        'address',
        'gender',
        'birth_date',
        'image',
        'signature',
        'cv',
    ];
}
