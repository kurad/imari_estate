
<div class="relative">
    <div class="relative flex gap-2">
        <div class="relative flex-1">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </div>
            <input 
                wire:model="search"
                type="text"
                placeholder="Search properties and house plans..."
                class="w-full pl-10 pr-4 py-2 border-2 border-blue-500 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
            
            @if(strlen($search) > 0)
                <button 
                    wire:click="resetSearch" 
                    class="absolute right-3 top-2.5"
                >
                    <svg class="h-5 w-5 text-gray-500 hover:text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            @endif
        </div>
        
        <button 
            wire:click="performSearch"
            wire:loading.attr="disabled"
            class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
            <span wire:loading.remove wire:target="performSearch">Search</span>
            <span wire:loading wire:target="performSearch">
                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </span>
        </button>
    </div>
    
    @if($showDropdown)
        <div class="absolute z-10 mt-1 w-full bg-white shadow-lg rounded-md border border-gray-200 max-h-96 overflow-y-auto">
            @if($isSearching)
                <div class="px-4 py-3 text-sm text-gray-500 flex justify-center">
                    <svg class="animate-spin h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
            @elseif(count($searchResults) > 0)
                <ul class="py-2">
                    @foreach($searchResults as $result)
                        <li class="hover:bg-gray-50">
                            <!-- Add link to property details page -->
                            <a href="{{ route('property_details', ['property' => $result['id']]) }}" class="block hover:bg-gray-100">
                                <div class="block px-4 py-3 text-sm cursor-pointer">
                                    <div class="flex items-start">
                                        @php
                                            $images = json_decode($result['images'], true);
                                            $firstImage = $images && count($images) > 0 ? $images[0] : null;
                                        @endphp
                                        
                                        @if($firstImage)
                                            <img 
                                                src="{{ asset(str_replace('\\', '/', $firstImage)) }}" 
                                                alt="{{ $result['title'] }}" 
                                                class="h-12 w-12 mr-3 object-cover rounded-md"
                                            />
                                        @else
                                            <!-- Icon based on type -->
                                            @if($result['type'] === 'property')
                                                <svg class="h-5 w-5 mr-2 text-blue-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                                </svg>
                                            @else
                                                <svg class="h-5 w-5 mr-2 text-green-500 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                            @endif
                                        @endif
                                        
                                        <div>
                                            <div class="font-medium text-gray-900">{{ $result['title'] }}</div>
                                            <div class="text-xs text-gray-500 mb-1">{{ ucfirst(str_replace('_', ' ', $result['type'])) }}</div>
                                            <div class="text-xs text-gray-600 line-clamp-2">{{ $result['description'] }}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-4 py-3 text-sm text-gray-500">No results found for "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>
