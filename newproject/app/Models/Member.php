<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email'];


    public function groupData()
    {
        return $this->hasOne(Group::class);
    }


    public function groupsManyData()
    {
        return $this->hasMany('App\Models\Group');
    }
}
