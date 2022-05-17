<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'establishment_id',
        'room_types_id',
        'shellies_id',
        'section_rooms_id',
        'room_capacity',
        'user_created_at',
        'user_updated_at'
    ];
}
