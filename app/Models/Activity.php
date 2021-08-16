<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';
    protected $fillable = ['status', 'next_event', 'image'];
    protected $dates = ['next_event'];

    public function getEventAttribute()
    {
        return $this->next_event->format('d/m/Y');
    }
}
