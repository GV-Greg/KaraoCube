<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = ['singer', 'song', 'song_id', 'status'];

    public function getStatusColorAttribute()
    {
        if($this->song_id != null) {
            if($this->status ==='new') {
                return 'green';
            } else {
                return 'blue';
            }
        } else {
            return 'orange';
        }
    }

    public function getHeureAttribute()
    {
        return $this->updated_at->format('H:m');
    }
}
