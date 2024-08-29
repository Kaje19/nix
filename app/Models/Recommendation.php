<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    protected $table = 'recommendation';

    protected $primaryKey = 'reco_id';

    public $timestamps = false;

    protected $fillable = [
        'client_id',
        'event_id',
        'package_id',
        'created_at',
    ];

    // Relationships
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'client_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'event_id');
    }

    public function eventPackage()
    {
        return $this->belongsTo(EventPackage::class, 'package_id', 'package_id');
    }

    // Add any additional relationships or methods if needed
}
