<div class="p-5 flex flex-col items-center">
    <!-- Items per page selection -->
    <div class="mb-3">
        
        <input type="text" placeholder="Search" wire:input="$dispatch('updatingPerPage')" wire:model.lazy="search" class="p-2 me-3 outline-none border focus:border focus:border-emerald-600">

        <label for="perPage">Items per page:</label>
        <select wire:model="perPage" wire:change="$dispatch('updatingPerPage')" id="perPage">
            @foreach($options as $option)
                <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>

    </div>

    <!-- Items list -->
    <div class="grid grid-cols-8 gap-2">
        @foreach($items as $item)
            <div class="bg-sky-900 text-white p-5">{{ $item->name }}</div>
        @endforeach
    </div>
        

    <div id="pagination" class="w-[50%] my-3">
        <!-- Pagination links -->
        {{ $items->links() }}
    </div>
</div>

