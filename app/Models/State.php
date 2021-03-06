<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $fillable =[
        'organization_id',
        'division_id',
        'position',
        'stake',
        'timetable',
        'hours_per_week',
        'rezgim',
        'surname',
        'lastname',
        'patronymic',
        'payment',
        'mo',
        'to',
        'we',
        'th',
        'fr',
        'sa',
        'su',
        'dinner',
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
}
