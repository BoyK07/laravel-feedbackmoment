<x-app-layout>
	<x-slot name="header">
		<h2 class="text-center font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			{{ __('Evenementenbeheer Dashboard') }}
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900 dark:text-gray-100">
					<div class="grid grid-cols-2 gap-4 max-w-2xl mx-auto p-4">
						<a href="{{ route('events.index') }}" class="flex flex-col items-center justify-center p-6 bg-white rounded-lg shadow-md hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-2 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							<span class="text-gray-800 font-medium">Events</span>
						</a>

						<a href="{{ route('events.calendar') }}" class="flex flex-col items-center justify-center p-6 bg-white rounded-lg shadow-md hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg">
							<svg viewBox="0 0 24 24" class="h-10 w-10 mb-2" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 9H21M7 3V5M17 3V5M6 12H8M11 12H13M16 12H18M6 15H8M11 15H13M16 15H18M6 18H8M11 18H13M16 18H18M6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4802 21 18.9201 21 17.8V8.2C21 7.07989 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V17.8C3 18.9201 3 19.4802 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21Z" stroke="#000000" stroke-width="2" stroke-linecap="round"></path> </g></svg>
							<span class="text-gray-800 font-medium">Events Calendar</span>
						</a>

						<a href="{{ route('users.index') }}" class="flex flex-col items-center justify-center p-6 bg-white rounded-lg shadow-md hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-2 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
							</svg>
							<span class="text-gray-800 font-medium">Users</span>
						</a>

						<a href="{{ route('roles.index') }}" class="flex flex-col items-center justify-center p-6 bg-white rounded-lg shadow-md hover:-translate-y-1 transition-transform duration-200 hover:shadow-lg">
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
