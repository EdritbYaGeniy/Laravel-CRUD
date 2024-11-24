@extends("app.app")

@section('title', 'Редактирование')

@section('content')
    <div class="container mt-5">
        <h2 class="container d-flex justify-content-center">Редактирование сообщений</h2>
        <form action="{{route('update', $record->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="mb-3 mt-3" >Имя:</label>
                <input type="text" class="form-control"  name="name" placeholder="{{$record->name}}" >
                <label for="name" class="mb-3 mt-3">Электронная почта:</label>
                <input type="text" class="form-control"  name="email" placeholder="{{$record->email}}">
                <label for="name" class="mb-3 mt-3">Телефон:</label>
                <input type="text" class="form-control"  name="phone" placeholder="{{$record->phone}}">
                <label for="name" class="mb-3 mt-3">Тема:</label>
                <input type="text" class="form-control"  name="themes" placeholder="{{$record->themes}}">
                <label for="name" class="mb-3 mt-3">Письмо:</label>
                <textarea class="form-control"  name="message" placeholder="{{$record->message}}"></textarea>
            </div>
            <div class="container full-height d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </form>
    </div>
@endsection
