<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model

{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'cpf',
        'email_owner',
        'address',
        'number',
        'district',
        'city',
        'state',
        'cep',
        'phone1',
        'phone2',
        'publish_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'publish_at' => 'timestamp',
        'email_user' => 'string'
        
    ];

    public function property()
    {
        return $this->hasMany(Property::class);
    }
}