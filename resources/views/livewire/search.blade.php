<div>
    <div class="relative" x-data="{ open: @entangle('query').defer }">
        <!-- Search Input -->
        <div class="relative">
            <input 
                type="text" 
                wire:model.debounce.500ms="query" 
                wire:keydown.debounce.500ms="search"
                placeholder="Search properties and plans..."
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                @focus="open = true"
                @click.away="open = false"
            >
            
            <!-- Loading Spinner -->
            @if($isSearching)
                <div class="absolute right-3 top-2.5">
                    <svg class="animate-spin h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
            @endif
        </div>
    
        <!-- Search Results Dropdown -->
        @if(!empty($query) && $open)
            <div class="absolute z-10 mt-1 w-full bg-white border border-gray-200 rounded-lg shadow-lg max-h-96 overflow-y-auto">
                @if(count($results['properties']) > 0 || count($results['house_plans']) > 0)
                    <!-- Properties Results -->
                    @if(count($results['properties']) > 0)
                        <div class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100">
                            Properties
                        </div>
                        @foreach($results['properties'] as $property)
                            <a href="{{ route('properties.show', $property->id) }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                @if($property->images->first())
                                    <img 
                                        src="{{ $property->images->first()->getUrl('thumb') }}" 
                                        alt="{{ $property->title }}"
                                        class="w-10 h-10 rounded-md object-cover mr-3"
                                    >
                                @else
                                    <div class="w-10 h-10 rounded-md bg-gray-200 mr-3 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif
                                <div>
                                    <div class="font-medium">{{ $property->title }}</div>
                                    <div class="text-xs text-gray-500">{{ $property->address }}</div>
                                </div>
                            </a>
                        @endforeach
                    @endif
    
                    <!-- House Plans Results -->
                    @if(count($results['house_plans']) > 0)
                        <div class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100">
                            House Plans
                        </div>
                        @foreach($results['house_plans'] as $plan)
                            <a href="{{ route('house-plans.show', $plan->id) }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                @if($plan->image)
                                    <img 
                                        src="{{ $plan->image->getUrl('thumb') }}" 
                                        alt="{{ $plan->name }}"
                                        class="w-10 h-10 rounded-md object-cover mr-3"
                                    >
                                @else
                                    <div class="w-10 h-10 rounded-md bg-gray-200 mr-3 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif
                                <div>
                                    <div class="font-medium">{{ $plan->name }}</div>
                                    <div class="text-xs text-gray-500">{{ $plan->square_feet }} sqft</div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                @else
                    <div class="px-4 py-2 text-sm text-gray-500">
                        No results found for "{{ $query }}"
                    </div>
                @endif
            </div>
        @endif
    </div>
</div>