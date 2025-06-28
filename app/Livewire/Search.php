<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Property;
use App\Models\HousePlan;

class Search extends Component
{
    public $query = '';
    public $results = [];
    public $isSearching = false;

    public function search()
    {
        if (empty($this->query)) {
            $this->results = [];
            return;
        }

        $this->isSearching = true;

        // Search in properties table
        $properties = Property::where('title', 'like', '%'.$this->query.'%')
            ->orWhere('description', 'like', '%'.$this->query.'%')
            ->limit(5)
            ->get();

        // Search in house_plans table
        $housePlans = HousePlan::where('name', 'like', '%'.$this->query.'%')
            ->orWhere('description', 'like', '%'.$this->query.'%')
            ->limit(5)
            ->get();

        // Combine and format results
        $this->results = [
            'properties' => $properties,
            'house_plans' => $housePlans
        ];

        $this->isSearching = false;
    }

    public function render()
    {
        return view('livewire.search');
    }
}