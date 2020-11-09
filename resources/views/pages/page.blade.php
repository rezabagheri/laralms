@extends('index')

@section('content')
    @component('partials.hero')
        {{ $page->title }}
    @endcomponent
    <p>{{ $page->content }}</p>
@endsection
