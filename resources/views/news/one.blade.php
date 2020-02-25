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
                    <h2 class="card-header">{{ $news->title }}</h2>
                    <div class="card-body">
                        <div class="card-img" style="background-image: url({{ $item->image ?? asset('img/default.jpg') }}); width: 640px; height: 480px"></div>
                        @if (!$news->isPrivate)
                            <p>{{ $news->description }}</p>
                        @else
                            <br>Нет прав!
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
