<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $guarded = ['id']; //Tat ca tru id
    protected $timestamp = true;
}
