<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Room;

class Guest extends Model
{
    use HasFactory;

    protected $table = 'guests';
    protected $guarded = ['id'];

    public function rooms() {
        return $this->belongsTo(Room::class);
    }

}
