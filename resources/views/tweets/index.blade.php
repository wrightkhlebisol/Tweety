@extends('layouts.app')

@section('content')
    @include('_publish-tweet-panel')

    
    @include('_timeline', ['tweets' => $tweets])
@endsection
