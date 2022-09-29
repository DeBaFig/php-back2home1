<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reference',
        'description',
        'address',
        'total_size',
        'useful_size',
        'private_size',
        'price',
        'townhouse_price',
        'master_bedrooms',
        'bedrooms',
        'bathroom',
        'parking_lot',
        'property_type',
        'publish_at',
        'status',
        'purpose',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'publish_at' => 'timestamp',
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
