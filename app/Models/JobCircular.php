<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCircular extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'job_category_id',
        'organization_name',
        'designation',
        'application_deadline',
        'company_logo',
        'vacancy_count',
        'job_location',
        'minimum_salary',
        'published_date',
        'education',
        'experience',
        'requirements',
        'responsibilities',
        'benefits',
        'employment_status'
    ];
}
