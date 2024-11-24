@extends('app.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <h1>Сообщения</h1>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="mt-4">
            @if(isset($messages) && $messages->isEmpty())
                <p>Нет входящих сообщений</p>
            @else
                <ul>
                    @foreach($messages as $message)
                        <div class="card mb-3">
                            <div class="card-body">
                                <p class="card-text"><strong>Имя:</strong> {{ $message->name }}</p>
                                <p class="card-text"><strong>Email:</strong> {{ $message->email }}</p>
                                <p class="card-text"><strong>Телефон:</strong> {{ $message->phone }}</p>
                                <p class="card-text"><strong>Тема:</strong> {{ $message->themes }}</p>
                                <p class="card-text"><strong>Сообщение:</strong> {{ $message->message }}</p>
                            </div>
                            <button class="btn-success" onclick="window.location.href='{{ route('update', $message->id) }}'">Редактировать</button>
                            <form action="{{ route('delete', $message->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn-warning">Удалить</button>
                            </form>
                        </div>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
