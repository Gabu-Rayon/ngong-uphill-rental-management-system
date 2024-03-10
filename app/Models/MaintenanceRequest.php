<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceRequest extends Model
{
    use HasFactory;
    protected $fillable = ['maintenance_ticket_id', 'tenant_id', 'request'];

    // Define relationships if necessary
    

    public function tenant()
    {
        return $this->belongsTo(Tenants::class);
    }
}