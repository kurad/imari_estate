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
    @include('navbar.subnavbar')
   

    <!-- Property Listings -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-bold text-blue-900 mb-8">Featured Properties</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($properties as $item)
           
            @php
            $array = json_decode($item->images);
           @endphp
            <!-- Property Card 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 hover:-translate-y-2">
                    <div class="relative">
                        <img src="{{asset($array[0])}}" alt="Modern Apartment" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500" />
                        <div class="absolute top-4 right-4 bg-orange-500 text-white text-sm font-medium px-3 py-1 rounded-full">Featured</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <h3 class="text-xl font-bold text-blue-900">{{$item->title}}</h3>
                            <span class="text-blue-900 font-bold text-xl">{{$item->price}}</span>
                        </div>
                        <div class="flex items-center text-gray-500 mt-2">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>{{$item->location}}</span>
                        </div>
                        <div class="flex justify-between mt-4">
                            <div class="flex items-center">
                                <i class="fas fa-bed text-gray-400 mr-1"></i>
                                <span class="text-gray-600">{{$item->bathrooms}} beds</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-bath text-gray-400 mr-1"></i>
                                <span class="text-gray-600">{{$item->bedrooms}} baths</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-ruler-combined text-gray-400 mr-1"></i>
                                <span class="text-gray-600">{{$item->size}}sq ft</span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="#" class="block w-full text-center bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-4 rounded-md transition-all duration-300">View Details</a>
                        </div>
                    </div>
                </div>
            
                @endforeach
            <!-- Property Card 2 -->
           
           
        </div>
        
        <div class="text-center mt-10">
            <a href="#" class="inline-block border-2 border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white font-medium py-3 px-8 rounded-md transition-all duration-300">View All Properties</a>
        </div>

    </div>
           
                    
                        <!-- Footer -->
                        <!-- Footer -->
    <footer class="bg-blue-900 text-white py-12">
        @include('navbar.footer')
     </footer>