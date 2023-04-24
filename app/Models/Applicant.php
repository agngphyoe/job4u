<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $table = 'applicants';
    protected $guarded = [];
}
