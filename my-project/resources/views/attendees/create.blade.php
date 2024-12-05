<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Attendees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('attendees.store', $eventId) }}" class="space-y-6">
                        @csrf

                        <div>
                            <x-input-label value="Select Users" />
                            <div class="mt-4 space-y-2">
                                @foreach($users as $user)
                                    <div class="flex items-center">
                                        <input type="checkbox"
                                               name="users[]"
                                               value="{{ $user->id }}"
                                               id="user-{{ $user->id }}"
                                               class="rounded border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                        <label for="user-{{ $user->id }}"
                                               class="ml-2 text-sm text-gray-600 dark:text-gray-400">
                                            {{ $user->name }} ({{ $user->email }})
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('users')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>Add Selected Attendees</x-primary-button>
                            <a href="{{ route('attendees.show', $eventId) }}"
                               class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
