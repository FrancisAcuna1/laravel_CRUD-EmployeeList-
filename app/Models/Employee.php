<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'acuna_employee_list';


    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $fillable = [
    'firstname'
    ,
    'middlename'
    ,
    'lastname'
    ,
    'date_of_birth'
    ,
    'civil_status'
    ,
    'email'
    ,
    'street'
    ,
    'barangay'
    ,
    'municipality'
    ,
    'zip_code'
    ,
    'job_title'
    ,
    'salary'
    ,
    'employment_status'
    ,
    'employee_photo'
    ,
    ];

}
