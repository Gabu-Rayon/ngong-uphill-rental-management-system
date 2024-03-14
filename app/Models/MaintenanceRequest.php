<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceRequest extends Model
{
    use HasFactory;
    protected $fillable = [ 'tenant_id','subject' ,'request','status'];

    // Define relationships if necessary


    public function tenant()
    {
        return $this->belongsTo(Tenants::class, 'tenant_id');
    }

}