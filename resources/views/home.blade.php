@extends('layouts.app')

@section('title-block')
    Головна сторінка
@endsection

@section('content')
    <h1>Головна сторінка</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet repellendus exercitationem dolorum iusto quasi error esse nam debitis porro. Velit cumque harum vero, alias tenetur esse consequuntur culpa quis doloribus!</p>
@endsection

@section('aside')
    @parent
    <p>Додатковий текст</p>
@endsection