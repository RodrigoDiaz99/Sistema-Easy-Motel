<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'establishments_id',
        'product_inventories_id',
        'product_types_id',
        'name',
        'description',
        'user_created_at',
        'user_updated_at'
    ];
}
