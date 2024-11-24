@extends('app.app')
@section('content')
    <div class="container d-flex justify-content-center">
        <h1>
            Сообщения
        </h1>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="mt-4">
            @if($messages1->isEmpty())
                <p>Нет входящих сообщений</p>
            @else
                <ul>
                    @foreach($messages1 as $message)
                        <div class="card mb-3">
                            <div class="card-body">
                                <p class="card-text">{{$message->name}}</p>
                                <p class="card-text">{{$message->email}}</p>
                                <p class="card-text">{{$message->phone}}</p>
                                <p class="card-text">{{$message->themes}}</p>
                                <p class="card-text">{{$message->message}}</p>
                            </div>
                        </div>
                @endforeach
            @endif</ul>
        </div>
    </div>


@endsection
