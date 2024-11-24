<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UpdateModel;

class UpdateController extends Controller
{
    public function dataInPlaceholder($id)
    {
        $record = UpdateModel::findOrFail($id);

        return view('reform', compact('record'));
    }

    public function Update(Request $request, $id)
    {
        $record = UpdateModel::findOrFail($id);

        $validateData = $request->validate([

            'name' => 'max:255',
            'email' => 'email|max:255',
            'phone' => 'max:255',
            'themes' => 'max:255',
            'message' => 'max:255',
        ]);

        $record->update($validateData);

        return redirect()->route('reform', $record->id)->with('success', 'Данные успешно обновлены');

    }
}
