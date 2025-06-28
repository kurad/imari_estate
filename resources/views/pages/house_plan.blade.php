<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imari Real Estate - Property Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-50">
    <!-- Header with Navigation -->
    @include('navbar.navbar')
    
    <!-- Property Listings -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-bold text-blue-900 mb-8">Featured House Plans</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($housePlans as $plan)

            @php
            $array = json_decode($plan->images);
           @endphp
            <!-- Property Card -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-2">
                <div class="relative">
                    @if($plan->images)
                        <img src="{{ asset($array[0]) }}" alt="{{ $plan->title }}" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500" />
                    @else
                        <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Default House Image" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500" />
                    @endif
                    @if($plan->status == 'featured')
                        <div class="absolute top-4 right-4 bg-orange-500 text-white text-sm font-medium px-3 py-1 rounded-full">Featured</div>
                    @endif
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-start">
                        <h3 class="text-xl font-bold text-blue-900">{{ $plan->title }}</h3>
                        <span class="text-blue-900 font-bold text-xl">${{ number_format($plan->price, 0) }}</span>
                    </div>
                    
                    <div class="mt-4 flex items-center text-gray-600 text-sm">
                        <span class="mr-4"><i class="fas fa-map-marker-alt mr-1"></i> {{ $plan->location }}</span>
                        <span class="mr-4"><i class="fas fa-building mr-1"></i> {{ $plan->type }}</span>
                    </div>
                    
                    <div class="mt-4 flex justify-between">
                        <span class="flex items-center"><i class="fas fa-bed mr-2 text-blue-900"></i> {{ $plan->bedrooms }} Beds</span>
                        <span class="flex items-center"><i class="fas fa-bath mr-2 text-blue-900"></i> {{ $plan->bathrooms }} Baths</span>
                        <span class="flex items-center"><i class="fas fa-ruler-combined mr-2 text-blue-900"></i> {{ $plan->size }} sqft</span>
                    </div>
                    
                    <div class="mt-6">
                        <a href="{{ route('house_plans.show', $plan->id) }}" class="block w-full text-center bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-4 rounded-md transition-all duration-300">View Details</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-12">
                <p class="text-lg text-gray-600">No house plans available at the moment.</p>
            </div>
            @endforelse
        </div>
        
        <div class="text-center mt-10">
            <a href="" class="inline-block border-2 border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white font-medium py-3 px-8 rounded-md transition-all duration-300">View All House Plans</a>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-12">
        @include('navbar.footer')
    </footer>
</body>
</html>