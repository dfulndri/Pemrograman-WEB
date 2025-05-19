<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    // Dapat tabel dari mana
    protected $table = 'footers';

    // Dapat field dari tabel footer
    protected $fillable = [
        'footer',
    ];
}