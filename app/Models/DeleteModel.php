<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeleteModel extends Model
{
    use HasFactory;

    protected $table = 'message';
    protected $fillable =['name', 'email', 'phone', 'themes', 'message'];
}
