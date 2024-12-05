<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Evenementenbeheer Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-2 gap-4 max-w-2xl mx-auto p-4">
                      <a href="/events" class="flex flex-col items-center justify-center p-6 bg-white rounded-lg shadow-md hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-2 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span class="text-gray-800 font-medium">Events</span>
                      </a>

                      <a href="/attendees" class="flex flex-col items-center justify-center p-6 bg-white rounded-lg shadow-md hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-2 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <span class="text-gray-800 font-medium">Attendees</span>
                      </a>

                      <a href="/users" class="flex flex-col items-center justify-center p-6 bg-white rounded-lg shadow-md hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-2 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="text-gray-800 font-medium">Users</span>
                      </a>

                      <a href="/roles" class="flex flex-col items-center justify-center p-6 bg-white rounded-lg shadow-md hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-2 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="text-gray-800 font-medium">Roles</span>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
