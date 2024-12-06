<div>
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900 dark:text-gray-100">
					<div class="overflow-x-auto">
						<div class="mb-4 flex justify-end">
							<a href="{{ route('roles.create') }}"
								class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
									stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
								</svg>
								Create Role
							</a>
						</div>
						<table class="min-w-full bg-white dark:bg-gray-700 rounded-lg overflow-hidden">
							<thead class="bg-gray-100 dark:bg-gray-600">
								<tr>
									<th class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">ID</th>
									<th class="w-1/4 px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
									<th class="w-1/3 px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Description</th>
									<th class="w-1/6 px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
								</tr>
							</thead>
							<tbody class="divide-y divide-gray-200 dark:divide-gray-500">
								@forelse ($roles as $role)
									<tr class="group hover:bg-gray-50 dark:hover:bg-gray-600">
										<td class="px-6 py-4">{{ $role->id }}</td>
										<td class="px-6 py-4">{{ $role->name }}</td>
										<td class="px-6 py-4">{{ $role->description }}</td>
										<td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex space-x-3">
											<a href="{{ route('roles.edit', $role->id) }}"
												class="text-yellow-600 hover:text-yellow-900 dark:text-yellow-400 dark:hover:text-yellow-300">
												<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
													stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
													<path stroke-linecap="round" stroke-linejoin="round"
														d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
												</svg>
											</a>
											<button wire:click="delete({{ $role->id }})"
												onclick="return confirm('Are you sure you want to delete this role?')"
												class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">
												<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
													stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
													<path stroke-linecap="round" stroke-linejoin="round"
														d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
												</svg>
											</button>
										</td>
									</tr>
								@empty
									<tr>
										<td colspan="4" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">No roles found.</td>
									</tr>
								@endforelse
							</tbody>
						</table>
						<div class="mt-4">
							{{ $roles->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>