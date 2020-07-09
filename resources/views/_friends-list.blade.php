<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    
    @auth()
        @forelse(auth()->user()->follows as $user)
        <a href="{{route('profile', $user->name )}}">
            <li class="mb-4">
                <div class="flex items-center text-sm">
                    <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2">

                    {{ $user->name }}
                </div>
            </li>
        </a>
        @empty
        <p>No friends yet</p>
        @endforelse
    @endauth
    
</ul>
