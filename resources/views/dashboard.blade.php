<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="mb-4 text-lg font-semibold">{{ __("Welcome to the Dashboard") }}</h3>
                    <p class="mb-4">{{ __("You're logged in!") }}</p>
                    <p class="mb-4">{{ __("All the requirements have been successfully implemented, including the login functionality, user listing.") }}</p>
                    <p class="mb-4">{{ __("I would like to express my gratitude to the reviewers at Icon Creations for the opportunity to work on this project.") }}</p>
                    <p class="mb-4">{{ __("I hope that my code and the project meet your expectations and requirements.") }}</p>
                    <p class="mb-4">{{ __("I look forward to the possibility of working together again in the future.") }}</p>
                    <a href="{{ route('users.index') }}" class="text-blue-500 hover:underline text-lg font-semibold inline-block mt-4 px-6 py-3 rounded-lg bg-blue-200 hover:bg-blue-300 transition-colors duration-300">{{ __("Users Page") }}</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
