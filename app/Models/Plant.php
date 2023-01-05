<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    //relaciones
    public function plantCategory()
    {
        return $this->belongsTo(PlantCategory::class, 'category_id');
    }


    use HasFactory;
    protected $table = 'plants';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'water_date',
        'category_id',
        'garden_id',
        'next_water_date',
    ];

    public static $destroyRules = [
        'plant_id' => 'integer|required|exists:plants,id'
    ];

    public static $waterRules = [
        'plant_id' => 'integer|required|exists:plants,id'
    ];

    public static $createRules = [
        'category_id' => 'integer|required|exists:plant_categories,id',
        'garden_id' => 'integer|required|exists:gardens,id',
        'name' => 'nullable'
    ];
}
