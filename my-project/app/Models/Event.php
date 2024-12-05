<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "start_time",
        "end_time",
        "location",
    ];

    protected $casts = [
        "start_time"=> "datetime",
        "end_time"=> "datetime",
    ];

    public function attendees(): HasMany
    {
        return $this->hasMany(Attendee::class);
    }
}