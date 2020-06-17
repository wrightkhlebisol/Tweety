@extends('layouts.app')


@section('content')

<header class="mb-6 relative">
    <img src="/images/default-profile-banner.jpg" alt="">

    <div class="flex justify-between items-center mb-4">
        <div>
            <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>

            <p class="text-sm">Joined {{ $user->created_at->diffForHumans()}}</p>
        </div>

        <div class="flex">
            <a href="#" class="rounded-full text-xs py-2 px-4 border border-gray-300 text-black mr-2">Edit Profile</a>

            <form method="POST" action="/profiles/{{$user->name}}/follow">
                @csrf
                <button type="submit" href="#" class="bg-blue-500 rounded-full shadow text-xs py-2 px-4 text-white">
                    {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
                </button>
            </form>
        </div>
        
    </div>

    <p class="text-sm">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ex iure nesciunt explicabo incidunt, voluptatibus dicta voluptatum perspiciatis aut unde cum ratione impedit error sed laudantium fugiat harum temporibus. Labore?xplicabo incidunt, volu unde cum psum dolor sit amet consectetur
    </p>

    <img 
        src="{{ $user->avatar }}" alt="" 
        style="width: 150px; left: calc(50% - 75px); top: 138px;" 
        class="rounded-full mr-2 top-0 absolute"
    >


</header>

<hr>

    @include('_timeline', ['tweets' => $user->tweets])


@stop
