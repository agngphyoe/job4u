<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantCompany extends Model
{
    use HasFactory;
    protected $table = 'applicant_companies';
    protected $guarded = [];
}
