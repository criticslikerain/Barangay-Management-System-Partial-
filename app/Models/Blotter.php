<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blotter extends Model
{
    protected $fillable = [
        'user_id', 'incident_time', 'incident_location', 'incident_description', 
        'type_of_incident', 'involved_parties', 'witnesses', 'desired_resolution', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
