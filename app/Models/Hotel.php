<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id',
        'name',
        'address',
        'city',
        'state',
        'country',
        'phone',
        'description',
        'rating',
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
