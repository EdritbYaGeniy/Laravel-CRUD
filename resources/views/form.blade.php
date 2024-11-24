@extends("app.app")

@section('title', 'Форма')

@section('content')
        <div class="container mt-5">
            <h2 class="container d-flex justify-content-center">Заполните форму</h2>
            <form action="{{route('form_submit')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class="mb-3 mt-3" >Имя:</label>
                    <input type="text" class="form-control"  name="name" placeholder="Введите ваше имя">
                    <label for="name" class="mb-3 mt-3">Электронная почта:</label>
                    <input type="text" class="form-control"  name="email" placeholder="Введите почту">
                    <label for="name" class="mb-3 mt-3">Телефон:</label>
                    <input type="text" class="form-control"  name="phone" placeholder="Введите телефон">
                    <label for="name" class="mb-3 mt-3">Тема:</label>
                    <input type="text" class="form-control"  name="themes" placeholder="Введите тему для сообщения" required>
                    <label for="name" class="mb-3 mt-3">Письмо:</label>
                    <textarea class="form-control"  name="message" placeholder="Введите содержимое сообщения"></textarea>
                </div>
                <div class="container full-height d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
@endsection
