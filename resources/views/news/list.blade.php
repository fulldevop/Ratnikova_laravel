@extends('layouts.main')

@section('title', 'Новости')

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <div class="container">
        <h2>Новости по категории {{ $categoryInfo['name'] }}</h2>
        <div class="row justify-content-center">
            @forelse($newsList as $news)
                @if($news['category_id'] === $categoryInfo['id'])
                    <div class="col-md-12 card">
                        <div class="card-body">
                            <h3>{{ $news['title'] }}</h3>
                            @if(!$news['isPrivate'])
                                <a href="{{ route('news.newsOne', ['category' => $categoryInfo['category'], 'id' => $news['id']]) }}">Подробнее...</a>
                            @else
                                <p>У вас нет прав для просмотра данной новости</p>
                            @endif
                        </div>
                    </div>
                @endif
            @empty
                <p>Новостей нет</p>
            @endforelse
        </div>
    </div>
@endsection
