<?php

namespace App\Livewire;

use App\Models\Property;
use App\Models\HousePlan;
use Livewire\Component;

class DataSearch extends Component
{
    public $search = '';
    public $searchResults = [];
    public $isSearching = false;
    public $showDropdown = false;

    public function performSearch()
    {
        $this->reset(['searchResults', 'isSearching', 'showDropdown']);

        if (strlen($this->search) < 2) {
            return;
        }

        $this->isSearching = true;
        $this->showDropdown = true;

        $searchTerm = '%' . $this->search . '%';

        // Search in properties table
        $properties = Property::where('title', 'like', $searchTerm)
            ->orWhere('description', 'like', $searchTerm)
            ->orWhere('location', 'like', $searchTerm)
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'type' => 'property',
                    'description' => $item->description,
                    'images' => $item->images ?? '[]' // Add images, default to empty JSON array
                ];
            });

        // Search in house_plans table
        $housePlans = HousePlan::where('title', 'like', $searchTerm)
            ->orWhere('description', 'like', $searchTerm)
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->name,
                    'type' => 'house_plan',
                    'description' => $item->description,
                    'images' => $item->images ?? '[]' // Add images, default to empty JSON array
                ];
            });

        $this->searchResults = $properties->concat($housePlans)->take(10)->toArray();
        $this->isSearching = false;
    }

    public function resetSearch()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.data-search');
    }
}