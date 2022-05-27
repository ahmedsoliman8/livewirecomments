<x-app-layout xmlns:livewire="http://www.w3.org/1999/html">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Article {{$article->slug}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <livewire:comments :model="$article"/>

        </div>
    </div>
</x-app-layout>
