
    @if (session()->has('success')){
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
            class="fixed bg-green-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
            <p class="___class_+?17___">{{ session('success') }}</p>
        </div>
        }
    @endif