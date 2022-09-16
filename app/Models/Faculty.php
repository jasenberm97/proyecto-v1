<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function career()
    {
        return $this->hasMany(Career::class);
    }

    public static function careers($id){
        return Career::where('faculty_id','=', $id)->get();
    }
}
