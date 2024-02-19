<?php

namespace App\Models;

use App\Models\Service;
use App\Models\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;


    protected $fillable = [
        'service_id', 'service_provider_id', 'booking_no', 'name', 'email', 'phone',
        'contact_through', 'message', 'status','booking_date_time'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }
}
