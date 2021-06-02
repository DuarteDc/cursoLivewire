<div>
    <x-table>
        <table class="min-w-full divide-y divide-gray-200">
            <div class="px-6 py-4 flex items-center">
                <x-jet-input type="text" wire:model="search" placeholder="Buscar..." class="flex-1 mr-4" />
                @livewire('create-post')
            </div>
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        wire:click="order('id')">
                        ID
                        @if ($sort == 'id')
                            @if ($direction == 'asc')
                                <i class="fa fa-sort-asc float-right"></i>
                            @else
                                <i class="fa fa-sort-desc float-right"></i>
                            @endif
                        @else
                            <i class="fa fa-sort float-right"></i>
                        @endif
                    </th>
                    <th scope="col"
                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        wire:click="order('name')">
                        Title
                        @if ($sort == 'name')
                            @if ($direction == 'asc')
                                <i class="fa fa-sort-asc float-right"></i>
                            @else
                                <i class="fa fa-sort-desc float-right"></i>
                            @endif
                        @else
                            <i class="fa fa-sort float-right"></i>
                        @endif
                    </th>
                    <th scope="col"
                        class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        wire:click="order('course_id')">
                        Content
                        @if ($sort == 'course_id')
                            @if ($direction == 'asc')
                                <i class="fa fa-sort-asc float-right"></i>
                            @else
                                <i class="fa fa-sort-desc float-right"></i>
                            @endif
                        @else
                            <i class="fa fa-sort float-right"></i>
                        @endif
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        Date
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($posts as $post)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $post->id }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $post->name }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <div class="text-sm text-gray-900">{{ $post->course_id }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium mx-auto">
                           @livewire('edit-post', ['post' => $post], key($post->id))
                        </td>
                    </tr>
                @empty
                    <div class="px-6 py-4  w-full">
                        <p class="px-auto">No hay coincidencias</p>
                    </div>
                @endforelse
            </tbody>
        </table>
    </x-table>
</div>
