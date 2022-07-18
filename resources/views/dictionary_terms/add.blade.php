<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dictionary Terms') }}
        </h2>
    </x-slot>

    <x-body>
        @if (session('error'))
            <p class="w-full bg-red-500 bg-opacity-10 py-4 px-4 lg:px-6 text-red-500 text-sm font-medium">
                {{ session('error') }}</p>
        @endif
        <form action={{ route('dictionary-terms-add') }} method="POST">
            @csrf
            <button type="submit">Add</button>
        </form>
    </x-body>


    </div>
</x-app-layout>
