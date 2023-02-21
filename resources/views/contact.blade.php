@extends('layouts.app')

@section('title-block')
    Контакти
@endsection

@section('content')
    <h1>Контакти</h1>
    
    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введіть ваше ім'я</label>
            <input type="text" name="name" placeholder="Введіть ваше ім'я" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введіть ваш email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Введіть тему повідомлення</label>
            <input type="text" name="subject" placeholder="Введіть тему повідомлення" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Ваше повідомлення</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введіть ваше повідомлення" ></textarea><br>
        </div>

        <button type="submit" class="btn btn-success">Відправити</button><br>
    </form>
@endsection