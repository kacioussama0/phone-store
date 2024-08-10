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

    public function device_type(){
        return $this->belongsTo(Type::class,'type_id');
    }

    public function issues(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Issue::class,'device_issues','device_id','issue_id');
    }


   public function getTypeAttribute() {
        return $this->device_type->name;
   }



}
