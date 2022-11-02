<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;

    protected $fillable = ['apply_id','approved'];

    public function apply()
    {
        return $this->belongsTo(\App\Models\Apply::class);
    }
}
