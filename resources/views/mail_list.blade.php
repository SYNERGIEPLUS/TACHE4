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
            </div>

            <!-- Liste des Utilisateurs -->
            <div class="mt-8">
                <h3 class="font-semibold text-lg">{{ __('User List') }}</h3>
                <table class="min-w-full bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                    <thead class="bg-gray-200 dark:bg-gray-700">
                        <tr>
                            <th class="py-2 px-4 text-left text-gray-600 dark:text-gray-200">{{ __('Name') }}</th>
                            <th class="py-2 px-4 text-left text-gray-600 dark:text-gray-200">{{ __('Email') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="border-b dark:border-gray-600">
                                <td class="py-2 px-4">{{ $user->name }}</td>
                                <td class="py-2 px-4">{{ $user->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
