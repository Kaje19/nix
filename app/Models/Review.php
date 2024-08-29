<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $primaryKey = 'review_id';

    public $timestamps = false;

    protected $fillable = [
        'rating',
        'comments',
        'package_id',
        'booking_id',
        'client_id',
        'created_at',
    ];

    // Relationships
    public function eventPackage()
    {
        return $this->belongsTo(EventPackage::class, 'package_id', 'package_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'client_id');
    }

    // Add any additional relationships or methods if needed
}
