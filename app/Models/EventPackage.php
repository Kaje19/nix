<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPackage extends Model
{
    use HasFactory;

    protected $table = 'event_packages';

    protected $primaryKey = 'package_id';

    public $timestamps = false;

    protected $fillable = [
        'package_name',
        'package_type',
        'description',
        'photo',
        'price',
        'guest',
        'created_at',
    ];

    // Relationships
    public function services()
    {
        return $this->hasMany(Service::class, 'package_id', 'package_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'package_id', 'package_id');
    }

    // Add any additional relationships or methods if needed
}
