<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $primaryKey = 'member_id';

    protected $fillable = [
        'member_name',
        'gender',
        'birth_date',
        'position',
        'team_id',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
