<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_worker',
        'worker_name',
        'email',
        'gender',
        'birthday',
        'hired_date',
        'telphone',
        'privilege',
        'image',
    ];
}
