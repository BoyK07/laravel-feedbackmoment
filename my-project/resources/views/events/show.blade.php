<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $event->title }}
            </h2>
            <a href="{{ route('events.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">
                Back to Events
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Event Details -->
                    <div class="mb-8">
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Description</h3>
                            <p class="text-gray-600 dark:text-gray-400">{{ $event->description }}</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Start Time</h3>
                                <p class="text-gray-600 dark:text-gray-400">{{ $event->start_time->format('d/m/Y H:i') }}</p>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">End Time</h3>
                                <p class="text-gray-600 dark:text-gray-400">{{ $event->end_time->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Location</h3>
                            <p class="text-gray-600 dark:text-gray-400">{{ $event->location }}</p>
                        </div>
                    </div>

                    <!-- Attendees Section -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Attendees</h3>
                        @if($event->attendees->count() > 0)
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                @foreach($event->attendees as $attendee)
                                    <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-lg">
                                        <p class="font-medium text-gray-700 dark:text-gray-300">{{ $attendee->name }}</p>
                                        <p class="text-gray-500 dark:text-gray-400 text-sm">{{ $attendee->email }}</p>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-500 dark:text-gray-400">No attendees yet.</p>
                        @endif
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-8 flex space-x-4">
                        <a href="{{ route('events.edit', $event) }}"
                           class="px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700">
                            Edit Event
                        </a>
                        <form action="{{ route('events.destroy', $event) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700"
                                    onclick="return confirm('Are you sure you want to delete this event?')">
                                Delete Event
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
