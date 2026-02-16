<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'position_id',
        'branch_or_site_id',
        'user_id',
        'employee_number',
        'emergency_contact_number',
        'department',
        'employee_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
