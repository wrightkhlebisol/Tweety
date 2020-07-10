<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form action="/tweets" method="POST">
        @csrf
        <textarea name="body" required class="w-full" placeholder="What's up doc?" autofocus></textarea>

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img src="{{ auth()->user()->avatar }}" alt="your avatar" class="rounded-full mr-2 w-10">

            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-10 text-sm hover:bg-blue-600 text-white">Publish</button>
        </footer>

    </form>

    <div>
        @error('body')
            <p class="text-red-500 text-sm mt-2">
                {{ $message }}
            </p>
        @enderror
    </div>
</div>
