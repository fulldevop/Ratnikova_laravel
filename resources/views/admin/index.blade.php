@extends('layouts.app')
@section('title', 'Админка')

@section('menu')
    @include('menu.admin')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>Добро пожаловать, {{ $name }}!</h3>
                <p>Вы моожете создать новость на странице <a href="{{ route('admin.add_news') }}">Добавить новость</a></p>
            </div>
        </div>
    </div>
@endsection
