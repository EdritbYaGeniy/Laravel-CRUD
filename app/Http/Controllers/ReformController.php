<?php

namespace App\Http\Controllers;

use App\Models\ReformModel;
use http\Message;
use Illuminate\Http\Request;

class ReformController extends Controller
{
    public function reform(){

        $reform = ReformModel::all();

        return view('UsersViews.message', compact('reform'));
    }
}
