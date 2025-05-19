<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $table = 'scholarships'; // Nama tabel di database

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'type',
        'status',
    ];

    // Jika kamu ingin konversi otomatis tanggal:
    protected $dates = [
        'start_date',
        'end_date',
    ];
}
