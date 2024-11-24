<?php

namespace App\Http\Controllers;

use App\Models\MessageModel;
use http\Message;
use Illuminate\Http\Request;
use function Brotli\compress_add;

class MessageController extends Controller
{
    public function messages()
    {
        // Получаем все записи из таблицы message
        $messages = MessageModel::all();

        // Передаем данные в шаблон
        return view('UsersViews.message', compact('messages'));

    }

    public function sendId($id){

        $message = MessageModel::findOrFail($id);

        return view('UsersViews.message', compact('message'));
    }

}
