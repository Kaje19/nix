<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPreference extends Model
{
    use HasFactory;

    protected $table = 'event_preferences';

    protected $primaryKey = 'preferences_id';

    public $timestamps = false;

    protected $fillable = [
        'event_type',
        'theme',
        'budget_range',
        'guest_count',
        'event_id',
        'client_id',
        'created_at',
    ];

    // Relationships
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'event_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'client_id');
    }

    // Add any additional relationships or methods if needed
}
