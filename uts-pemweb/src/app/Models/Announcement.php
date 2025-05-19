<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'scholarship_id',
        'published_at',
    ];

    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }
}
