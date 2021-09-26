<div>
    {{-- The best athlete wants his opponent at his best. --}}
    {{ $body }}
    <textarea
        wire:model="body"
        rows="3"
        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
        placeholder="your post"
    ></textarea>
    <div class="flex justify-end">
        <button
            wire:click="createPost"
            class="inline-flex justify-center py-2 px-4 mt-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        >
            Save
        </button>
    </div>
</div>
