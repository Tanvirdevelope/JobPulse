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
        'candidate_address',
        'candidate_birth',
        'candidate_age',
        'candidate_gender',
        'candidate_image',
        'candidate_signature',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function job_application(): BelongsTo
    {
        return $this->belongsTo(JobApplication::class);
    }
    public function company_info(): BelongsTo
    {
        return $this->belongsTo(CompanyInfo::class);
    }
}
