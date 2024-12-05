<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Event
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('events.update', $event) }}" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div>
                            <x-input-label for="title" value="Title" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                value="{{ old('title', $event->title) }}" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <!-- Description -->
                        <div>
                            <x-input-label for="description" value="Description" />
                            <textarea id="description" name="description"
                                class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                required rows="4">{{ old('description', $event->description) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        <!-- Start Time -->
                        <div>
                            <x-input-label for="start_time" value="Start Time" />
                            <x-text-input id="start_time" name="start_time" type="datetime-local"
                                class="mt-1 block w-full"
                                value="{{ old('start_time', $event->start_time->format('Y-m-d\TH:i')) }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('start_time')" />
                        </div>

                        <!-- End Time -->
                        <div>
                            <x-input-label for="end_time" value="End Time" />
                            <x-text-input id="end_time" name="end_time" type="datetime-local"
                                class="mt-1 block w-full"
                                value="{{ old('end_time', $event->end_time->format('Y-m-d\TH:i')) }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('end_time')" />
                        </div>

                        <!-- Location -->
                        <div>
                            <x-input-label for="location" value="Location" />
                            <x-text-input id="location" name="location" type="text"
                                class="mt-1 block w-full"
                                value="{{ old('location', $event->location) }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('location')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>Update Event</x-primary-button>
                            <a href="{{ route('events.index') }}"
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
