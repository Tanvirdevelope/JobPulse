<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEmployeesInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_id',
        'company_role',
        'gender',
        'contact',
        'address',
        'photo',
        'joining_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
