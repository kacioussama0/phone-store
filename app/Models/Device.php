<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];


    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function types()
    {
        return $this->belongsToMany(Type::class,'type_devices');
    }

}
