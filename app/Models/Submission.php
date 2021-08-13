<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = ['singer', 'song', 'song_id', 'status'];

    public function getStatusColorAttribute()
    {
        return [
                'new' => 'green',
                'launched' => 'blue',
            ][$this->status] ?? 'gray';
    }

    public function getHeureAttribute()
    {
        return $this->updated_at->format('H:m');
    }
}
