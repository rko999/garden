@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ config('request.title') }}</h1>
    <h5>Page {{ $requests->currentPage() }} of {{ $requests->lastPage() }}</h5>
    <hr>
    <ul>
        @foreach ($requests as $request)
            <li>
                <a href="{{ route('request.detail', ['id' => $request->id]) }}">{{ $request->title }}</a>
                <em>({{ $request->published_at }})</em>
                <p>
                    {{ str_limit($request->demand) }}
                </p>
            </li>
        @endforeach
    </ul>
    <hr>
    {!! $requests->render() !!}
</div>
@endsection
