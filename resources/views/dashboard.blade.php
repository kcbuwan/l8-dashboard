<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
    <div class="p-8 px-4">
        <div class="flex flex-wrap -mr-3">
            @include('components.widget')
            @include('components.activity')
            @include('components.latest-signup')
        </div>
    </div>
    
</x-app-layout>
