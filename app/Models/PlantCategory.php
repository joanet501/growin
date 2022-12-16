<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantCategory extends Model
{
    use HasFactory;
    protected $table = 'plant_categories';
    protected $fillable = [
        'name',
        'description',
        'water_period',
        'image_url',
    ];


    // RULES
    public static $storeRules = [
        'name' => 'required|string|unique:plant_categories,name',
        'description' => 'required|string',
        'water_period' => 'required|integer',
        'image_url' => 'required|string|max:255',
    ];

    public static $deleteRules = [
        'id' => 'required|number',
    ];

}
