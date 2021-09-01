<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <h1 class="text-center font-bold text-xl">Register</h1>

            <form action="/register" method="post" class="mt-10 bg-blue-200 border border-gray-200 p-6 rounded-xl">
                @csrf
                <div class="mb-6">
                    <label for="block mb-2 upperace font-bold text-xs text-gray-700 " for="name">
                        Name
                    </label>

                    <input class=" border border-gray-400 p-2  w-full" type="text" name="name" id="name"
                        value="{{ old('name') }}" required>
                    @error('name')
                        <div class="text-red-500 text-xs mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="block mb-2 upperace font-bold text-xs text-gray-700 " for="username">
                        Username
                    </label>

                    <input class=" border border-gray-400 p-2  w-full" type="text" name="username" id="username"
                        value="{{ old('username') }}" required>
                    @error('username')
                        <div class=" text-red-500 text-xs mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="block mb-2 upperace font-bold text-xs text-gray-700 " for="email">
                        Email
                    </label>

                    <input class=" border border-gray-400 p-2  w-full" type="email" name="email" id="email"
                        value="{{ old('name') }}" required>
                    @error('email')
                        <div class="text-red-500 text-xs mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="block mb-2 upperace font-bold text-xs text-gray-700 " for="password">
                        Password
                    </label>

                    <input class=" border border-gray-400 p-2  w-full" type="password" name="password" id="password"
                        required>
                    @error('password')
                        <div class="text-red-500 text-xs mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="block mb-2 upperace font-bold text-xs text-gray-700 " for="submit">

                    </label>

                    <button class="border border-gray-400 p-2 w-full" type="submit">Submit</button>
                </div>
                
                @if ($errors->any()){
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs"> {{ $error }}</li>
                        @endforeach
                    </ul>
                    }
                @endif
            </form>
        </main>
    </section>
</x-layout>
