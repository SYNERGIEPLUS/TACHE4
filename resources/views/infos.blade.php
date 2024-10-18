<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Carte 1 -->
            <div class="bg-blue-500 text-white p-6 rounded-lg shadow">
                <h4 class="font-semibold text-lg">{{ __('Total Projects') }}</h4>
                <p class="text-2xl">10</p>
            </div>

            <!-- Carte 2 -->
            <div class="bg-green-500 text-white p-6 rounded-lg shadow">
                <h4 class="font-semibold text-lg">{{ __('Active Projects') }}</h4>
                <p class="text-2xl">5</p>
            </div>

            <!-- Carte 3 -->
            <div class="bg-yellow-500 text-white p-6 rounded-lg shadow">
                <h4 class="font-semibold text-lg">{{ __('Completed Projects') }}</h4>
                <p class="text-2xl">3</p>
            </div>

            <!-- Carte 4 -->
            <div class="bg-red-500 text-white p-6 rounded-lg shadow">
                <h4 class="font-semibold text-lg">{{ __('Pending Tasks') }}</h4>
                <p class="text-2xl">7</p>
            </div>

            <!-- Carte 5 -->
            <div class="bg-purple-500 text-white p-6 rounded-lg shadow">
                <h4 class="font-semibold text-lg">{{ __('Total Users') }}</h4>
                <p class="text-2xl">25</p>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
