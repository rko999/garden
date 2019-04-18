@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $request->title }}</h1>
    <h5>{{ $request->published_at }}</h5>
    <hr>
    {!! nl2br(e($request->demand)) !!}
    <hr>
    <button class="btn btn-primary" onclick="history.go(-1)">
        « Back
    </button>
</div>
@endsection
