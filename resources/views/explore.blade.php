@extends('layouts.app')

@section('content')
    @foreach ($users as $user)
        <a href="{{$user->profilePath()}}" class="flex items-center mb-5">
            <img src="{{$user->avatar}}" 
            alt="{{$user->username}}'s avatar" 
            width="60" 
            class="mr-4 rounded"
            >

            <div>
                <h4 class="font-bold"> {{ '@' . $user->username }} </h4>
            </div>

            {{$users->links()}}
        </a>
    @endforeach
@stop
