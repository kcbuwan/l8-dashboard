<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
        <div class="max-w-7xl mx-auto mt-10">
            <div class="bg-white">
                <x-jet-welcome />
            </div>
        </div>
    
</x-app-layout>
