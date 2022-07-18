<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dictionary Terms') }}
        </h2>
    </x-slot>

    @php
        $default_input = 'w-full px-4 py-3 border';
    @endphp

    <x-body>
        <a href={{ route('dictionary-terms-index') }} class="block text-sm font-semibold underline mb-5">
            Go Back </a>
        @if (session()->has('success'))
            <p
                class="w-full mx-auto bg-green-500 bg-opacity-10 py-4 px-4 lg:px-6 text-green-500 text-sm font-medium mb-5">
                {{ session('success') }}</p>
        @enderror

        <form action={{ route('dictionary-terms-add') }} method="POST"
            class="border border-gray-300 bg-gray-50 mx-auto py-10 px-5 lg:px-6">
            <h1 class="text-gray-600 text-3xl font-bold mb-6">Add Dictionary Term</h1>
            @csrf
            <input name="term" type="text" placeholder="Term"
                class="w-full px-4 py-3 border @error('term') border-red-500 @enderror border-gray-300"
                value="{{ old('term') }}" />
            @error('term')
                <p class="text-red-500 text-sm font-medium py-1">
                    {{ $message }}</p>
            @enderror

            <textarea name="description"
                class="w-full px-4 py-3 mt-5 border resize-none @error('description') border-red-500 @enderror border-gray-300"
                placeholder="Description" rows="10">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm font-medium py-1">
                    {{ $message }}</p>
            @enderror
            <button name="submit" type="submit"
                class="w-full bg-gray-600 text-white text-sm font-medium py-4 mt-5">Add</button>
        </form>
</x-body>


</div>
</x-app-layout>
