<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'id',
        'code',
        'first_name',
        'last_name',
        'rank',
        'station',
        'qualified_aircrafts',
        'email',
        'status'
    ];
}
