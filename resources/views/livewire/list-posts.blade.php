<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @foreach ($posts as $post)
        <div class="py-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow sm:rounded-lg my-4 py-4 px-4">
                <div>
                    <span class="text-lg font-bold">
                        {{ $post->user->name }}
                    </span>
                    <span
                        class="text-gray-600"
                    >
                        {{ $post->created_at->diffForHumans() }}
                    </span>
                    <button
                        wire:click="showUpdateForm({{ $post->id }})"
                        class="p-2"
                    >Edit</button>
                    <button
                        onclick="return confirm('Apakah anda yakin?') || event.stopImmediatePropagation()"
                        wire:click="delete({{ $post->id }})"
                        class="p-2"
                    >Delete</button>
                </div>
                <div>
                    @if ($updateStateId !== $post->id)
                        <span>{{ $post->body }}</span>
                    @endif

                    @if ($updateStateId === $post->id)
                    <textarea
                        wire:model="body"
                        rows="3"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                    ></textarea>
                    <div class="flex justify-end">
                        <button
                            wire:click="update({{ $post->id }})"
                            class="inline-flex justify-center py-2 px-4 mt-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Update
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
