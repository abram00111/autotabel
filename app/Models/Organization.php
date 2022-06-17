<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    protected $fillable =[
        'long_name',
        'short_name',
        'director_fio',
        'address',
        'user_id',
    ];
    public function division()
    {
        return $this->hasMany(Division::class);
    }
    use HasFactory;

}
