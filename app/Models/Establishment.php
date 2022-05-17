<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'location',
        'capacity',
        'establishment_areas',
        'owner_id',
        'establishment_types_id',
        'user_created_at',
        'user_updated_at'
    ];
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
