<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $fillable =[
        'organization_id',
        'name',
        'timekeeper_id',
        'user_id',
    ];

    public function organization()
    {
        return $this->hasOne(Organization::class);
    }
    public function shtat()
    {
        return $this->hasMany(State::class);
    }

}
