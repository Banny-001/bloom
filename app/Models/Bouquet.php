<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bouquet extends Model
{
    use HasFactory;

    protected $table='bouquet';


    protected $fillable=[
            'name',
            'description',
            'amount',
            'is_active'
    ];
}
