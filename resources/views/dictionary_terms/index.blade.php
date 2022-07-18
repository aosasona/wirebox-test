<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dictionary Terms') }}
        </h2>
    </x-slot>

    <x-body>
        <h1 class="text-4xl md:text-5xl font-bold text-gray-600">Dictionary Terms</h1>
        <a href={{ route('dictionary-terms-add') }} class="">Add</a>

        <h5 class="my-4 text-sm">Sorting Alphabetically</h5>

        @if (count($dictionaryTerms) < 1)
            <p class="text-center my-24 text-gray-500">No dictionary terms yet.</p>
        @else
        @endif
    </x-body>


    </div>
</x-app-layout>
