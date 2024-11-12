<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $primaryKey = 'team_id';

    protected $fillable = [
        'team_name',
        'total_member',
        'description',
        'status_pendaftaran',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship: Team can have many Members
    public function members()
    {
        return $this->hasMany(Member::class, 'team_id');
    }

    // Relationship: Team can have multiple Registrations
    public function registrations()
    {
        return $this->hasMany(Registration::class, 'team_id');
    }
}
