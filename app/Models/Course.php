<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function tutorship()
    {
        return $this->hasMany(Tutorship::class);
    }
}
