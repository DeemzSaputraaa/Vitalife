<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}

    <div class="py-6 flex justify-center">
        <div class="w-full max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="p-3 sm:p-6 bg-white dark:bg-gray-500 shadow sm:rounded-lg">
                <div class="max-w-lg mx-auto">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-3 sm:p-6 bg-white dark:bg-gray-500 shadow sm:rounded-lg">
                <div class="max-w-lg mx-auto">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-3 sm:p-6 bg-white dark:bg-gray-500 shadow sm:rounded-lg">
                <div class="max-w-lg mx-auto">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
