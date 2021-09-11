@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="post">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="avatar-profile" width="40" height="40"
                    class="rounded-full" />
                <h2 class="ml-4">Want to Participate?</h2>

            </header>
            <div class="mt-6">
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring " id=""
                    placeholder="say somethings..." rows="5" required></textarea>
            </div>

          

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200 pt-6">
                <x-button>Post</x-button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="text-red-500 hover:underline">Register</a> or <a href="/login"
            class="text-red-500 hover:underline">Login </a> for Participate to Commant in each
        Others :)
    </p>

@endauth
