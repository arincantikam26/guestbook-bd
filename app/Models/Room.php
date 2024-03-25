<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';
    protected $guarded = ['id'];

    protected static function booted()
    {
        static::updating(function ($room) {
            if ($room->isDirty('status') && $room->status === false) {
                $room->room()->update(['status' => false]);
            }
        });
    }

    public function room() {
        return $this->hasMany(Guest::class);
    }

}
