<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Prompts\Key;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';
    

    protected $fillable = [
        'category_name',
        'description',
    ];

    // Relationship: Category can have many Registrations
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'registration', 'category_id', 'team_id')
                    ->withPivot('payment_proof', 'registration_status')
                    ->withTimestamps();    }
}
