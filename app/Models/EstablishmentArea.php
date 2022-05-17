<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstablishmentArea extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'user_created_at',
    //     'user_updated_at'
    // ];
    protected $table = "establishment_areas";
    protected $primarykey = 'id';
    public function establishment()
    {
        return $this->hasMany(establishment::class);
    }
}
