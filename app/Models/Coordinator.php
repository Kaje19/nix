<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    use HasFactory;

    protected $table = 'coordinator';

    protected $primaryKey = 'coor_id';

    public $timestamps = false;

    protected $fillable = [
        'coor_username',
        'coor_pass',
        'coor_email',
        'coor_fname',
        'coor_lname',
        'coor_birthday',
        'gender',
        'coor_contact',
        'city',
        'acc_created',
    ];

    // If needed, you can define relationships here
}
