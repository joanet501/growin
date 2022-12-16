<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garden extends Model
{
    use HasFactory;
    public function plants()
    {
        return $this->hasMany(Plant::class);
    }
    // PROTECTED
    protected $fillable = [
        'name',
        'user_id'
    ];
    protected $table = 'gardens';


    // RULES
    public static $createGardenRules = [
        'name' => 'required|string',
    ];
    public static $deleteRules = [
        'id' => 'required',
    ];
}
