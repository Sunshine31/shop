@extends('layouts\master')
@section('title', 'Все категории')
@section('content')
  @foreach ($categories as $category)
  < class="panel">
    <a href="{{ route('category', $category->code) }}">
      <img src="http://internet-shop.tmweb.ru/storage/categories/mobile.jpg">
      <h2>{{ $category->name }}</h2>
    </a>
    <p>
      {{ $category->description }}
    </p>
  @endforeach
@endsection
