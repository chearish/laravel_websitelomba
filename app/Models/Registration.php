<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $primaryKey = 'registration_id';

    protected $fillable = [
        'registration_date',
        'registration_status',
        'payment_proof',
        'team_id',
        'category_id',
    ];

    // Relationship: Registration belongs to a Team
    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    // Relationship: Registration belongs to a Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
