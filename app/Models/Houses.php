<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houses extends Model
{
    use HasFactory;
    protected $fillable = [
        'house_no',
        'category_id',
        'description',
        'price',
    ];


    // Define the relationship with the Categories model
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    // Define the relationship with Tenants model
    public function tenants()
    {
        return $this->hasMany(Tenants::class, 'house_id');
    }
}