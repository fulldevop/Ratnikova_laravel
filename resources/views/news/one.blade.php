@extends('layouts.main')
@section('title', 'Новость')

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="card-header">{{ $news['title'] }}</h2>
                    <div class="card-body">
                        @if (!$news['isPrivate'])
                            <p>{{ $news['description'] }}</p>
                        @else
                            <br>Нет прав!
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
