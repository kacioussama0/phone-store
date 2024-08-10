<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Issue extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    public function devices() {
        return $this->belongsToMany(Device::class, 'device_issues', 'issue_id', 'device_id');
    }

}
