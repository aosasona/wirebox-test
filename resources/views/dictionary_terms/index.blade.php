<x-app-layout>

    @php
        $row_style = 'py-3';
    @endphp

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dictionary Terms') }}
        </h2>
    </x-slot>

    <x-body>
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-600">Dictionary Terms</h1>
            <a href={{ route('dictionary-terms-add') }}
                class="bg-gray-600 text-gray-100 hover:bg-gray-300 hover:text-gray-600 text-sm transition-all px-6 py-3">Add</a>
        </div>

        @if (count($dictionary_terms) < 1)
            <p class="text-center my-24 text-gray-500">No dictionary terms yet.</p>
        @else
            <table class="w-full">
                <thead class="bg-gray-600 text-gray-50 py-2">
                    <tr>
                        <th class="{{ $row_style }}">Term</th>
                        <th class="{{ $row_style }}">Description</th>
                        <th class="{{ $row_style }}">Created By</th>
                    </tr>
                </thead>
                <tbody class="text-center bg-gray-300 text-gray-800">
                    @foreach ($dictionary_terms as $dictionary_term)
                        <tr>
                            <td class="{{ $row_style }}">{{ $dictionary_term->term }}</td>
                            <td class="{{ $row_style }} text-left">{{ $dictionary_term->description }}</td>
                            <td class="{{ $row_style }}">{{ $dictionary_term->user->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
        @endif
    </x-body>


    </div>
</x-app-layout>
