<?php

namespace App\Models;

use http\Message;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageModel extends Model
{
    use HasFactory;

    protected $table = 'message';

    protected $fillable = ['name', 'email', 'phone', 'themes', 'message'];

    }
