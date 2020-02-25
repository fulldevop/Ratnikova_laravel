@extends('layouts.main')
@section('title', 'Новости')

@section('menu')
    @include('menu.main')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2>Категории</h2>
            @forelse($newsCategories as $category)
                <div class="col-md-12">
                    <a href="{{ route('news.category', $category->category) }}">{{ $category->name }}</a>
                </div>
            @empty
                <p>Нет категорий</p>
            @endforelse

        </div>
    </div>
@endsection
