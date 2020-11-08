@extends('index')

@section('content')
    @component('partials.hero')
        {{ $page_title }}
    @endcomponent
@endsection
