<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormModel;

class FormController extends Controller
{

    public function showForm(Request $request)
    {
     return view('form');
    }

    public function handleForm(Request $request)
    {
        $validationData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'themes' => 'required|max:50',
            'message' => 'required|max:255'
        ]);

        FormModel::create($validationData);

        return redirect()->back()->with('success', 'Thanks for contacting us!');


    }
}
