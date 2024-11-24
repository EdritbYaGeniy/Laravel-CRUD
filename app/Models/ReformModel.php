<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReformModel extends Model
{
    protected $table = 'message';

    protected $fillable = ['name', 'email', 'phone', 'themes', 'message'];
}
