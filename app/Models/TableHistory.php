<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'organization_id',
        'division_id',
        'tabel',
        'user_id',
    ];
    public function organization()
    {
        return $this->morphTo(Organization::class);
    }
    public function division()
    {
        return $this->morphTo(Division::class);
    }
    public function state()
    {
        return $this->morphTo(State::class);
    }

}
