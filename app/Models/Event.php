<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    public $timestamps = false;
    protected $table = 'event';
    protected $primaryKey = 'event_id';
}
