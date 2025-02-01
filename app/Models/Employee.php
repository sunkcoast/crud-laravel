<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes ;

    protected $guarded = [];
    protected $dates = ['created_at'];

    public function cabang()
    {
        return $this->hasOne(Cabang::class);
    }
    
    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
