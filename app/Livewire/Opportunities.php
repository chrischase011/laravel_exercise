<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;

class Opportunities extends Component
{
    use WithPagination;
    public $perPage = 20; // Default number of items per page
    public $options = [20, 50, 100, 250]; // Options for items per page
    protected $queryString = ['perPage']; // Keep perPage in the URL

    ## MY MODIFICATION ##
    // Add listeners to apply $dispatch
    protected $listeners = ['updatingPerPage'];

    public $search = '';
    public $isLoading = true;

    public function updatingPerPage()
    {
        $this->resetPage(); // Reset to the first page when perPage changes
    }
    public function render()
    {
        if($this->search == '') {
            $items = Item::paginate($this->perPage);
        } 
        else {
            $items = Item::where('name', 'like', '%' . $this->search . '%')->paginate($this->perPage);
        }

        $this->isLoading = false;
        return view('livewire.opportunities', [
            'items' => $items
        ]);
    }
}
