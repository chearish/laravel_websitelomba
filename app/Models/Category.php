<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name',
        'description',
    ];

    // Relationship: Category can have many Registrations
    public function registrations()
    {
        return $this->hasMany(Registration::class, 'category_id');
    }
}
