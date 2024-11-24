<?php

namespace App\Http\Controllers;

use App\Models\UpdateModel;
use Illuminate\Http\Request;
use App\Models\DeleteModel;

class DeleteController extends Controller
{
    public function delete(Request $request, $id)
    {
        $record = DeleteModel::findOrFail($id);
        $record->delete();
        return redirect()->back()->with('success', 'Сообщение удалено.');
    }
}
