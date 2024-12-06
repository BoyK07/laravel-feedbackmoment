<div>
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900 dark:text-gray-100">
					<form wire:submit.prevent="store">
						<div class="mb-4">
							<label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
							<input wire:model="name" type="text" id="name"
								class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
							@error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
						</div>

						<div class="mb-4">
							<label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
							<textarea wire:model="description" id="description"
								class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
							@error('description') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
						</div>

						<div class="flex justify-end">
							<button type="submit"
								class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">
								Create Role
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
