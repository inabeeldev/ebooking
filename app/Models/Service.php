<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_provider_id', 'name', 'description', 'service_type', 'image'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }
}
