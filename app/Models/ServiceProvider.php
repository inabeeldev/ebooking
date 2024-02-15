<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class ServiceProvider extends Model implements Authenticatable
{
    use HasFactory, AuthenticableTrait;


    protected $fillable = ['name', 'email', 'service_type', 'cnic','phone', 'password'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
