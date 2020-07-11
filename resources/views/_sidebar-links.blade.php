<ul>
    <li>
        <a href="{{route('home')}}" class="font-bold text-lg mb-4 block">Home</a>
    </li>
    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block">Explore</a>
    </li>
    {{--  <li>
        <a href="#" class="font-bold text-lg mb-4 block">Notifications</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">Messages</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">Bookmarks</a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">Lists</a>
    </li>  --}}
    @auth
    <li>
        <a href="{{ route('profile', auth()->user()) }}" class="font-bold text-lg mb-4 block">Profile</a>
    </li>

     <li>
        <div class="mb-6">
            <form method="post" action="/logout">
                @csrf
                <button type="submit" class="bg-blue-400 text-white rounded-full py-1 px-4 hover:bg-blue-500">Logout</button>
            </form>
        </div>
    </li>

    @else
    <li>
        <a href="/tweets" class="font-bold text-lg mb-4 block">Profile</a>
    </li>
    @endauth
    {{--  <li>
        <a href="#" class="font-bold text-lg mb-4 block">More</a>
    </li>  --}}

   
</ul>