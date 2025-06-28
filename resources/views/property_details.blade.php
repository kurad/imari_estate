<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $property->title }} - Imari Real Estate</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-50">
    <!-- Header with Navigation -->
    @include('navbar.navbar')

    <!-- Property Details Section -->
    <div class="container mx-auto px-4 py-8">
        <!-- Property Title and Price -->
        <div class="mb-6">
            <div class="flex justify-between items-start">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">{{ $property->title }}</h1>
                    <p class="text-blue-600 font-medium mt-1">{{ $property->location }}</p>
                </div>
                <div class="text-right">
                    <p class="text-2xl font-bold text-orange-500">RWF{{ number_format($property->price) }}</p>
                    @if($property->size)
                        <p class="text-gray-600 text-sm">RWF{{ number_format($property->price / $property->size) }}/sq ft</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- Image Gallery -->
        <div class="mb-8">
            @if($property->images)
                @php
                    $images = json_decode($property->images);
                @endphp

                {{-- @dd($images) --}}
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <!-- Main Image -->
                    <div class="md:col-span-2 row-span-2">
                        <img src="{{ asset( $images[0]) }}" 
                             alt="{{ $property->title }}" 
                             class="w-full h-full object-cover rounded-lg shadow-md">
                    </div>
                    <!-- Secondary Images -->
                    @if(count($images) > 1)
                        @foreach(array_slice($images, 1, 3) as $image)
                            <div class="hidden md:block">
                                <img src="{{ asset( $image) }}" 
                                     alt="{{ $property->title }}" 
                                     class="w-full h-full object-cover rounded-lg shadow-md">
                            </div>
                        @endforeach
                    @endif
                </div>
                @if(count($images) > 1)
                    <div class="mt-4 flex space-x-2 overflow-x-auto md:hidden">
                        @foreach(array_slice($images, 1) as $image)
                            <img src="{{ asset('storage/' . $image) }}" 
                                 alt="{{ $property->title }}" 
                                 class="w-32 h-24 object-cover rounded-lg shadow">
                        @endforeach
                    </div>
                @endif
            @else
                <!-- Placeholder if no images -->
                <div class="bg-gray-200 rounded-lg h-64 flex items-center justify-center text-gray-500">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span class="ml-2">No images available</span>
                </div>
            @endif
        </div>

        <!-- Property Details Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Left Column - Description -->
            <div class="md:col-span-2">
                <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Description</h2>
                    <p class="text-gray-700 mb-4">
                        {{ $property->description ?? 'No description available.' }}
                    </p>
                </div>

                <!-- Video Section -->
                @if($property->video_link)
                    <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                        <h2 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Property Video</h2>
                        <div class="aspect-w-16 aspect-h-9">
                            @php
                                $url = $property->video_link;
                                if (strpos($url, 'youtu.be/') !== false) {
                                    $videoId = substr(parse_url($url, PHP_URL_PATH), 1);
                                } else {
                                    $parsedUrl = parse_url($url);
                                    parse_str($parsedUrl['query'] ?? '', $params);
                                    $videoId = $params['v'] ?? '';
                                }
                            @endphp
                            <iframe
                                src="https://www.youtube.com/embed/{{ $videoId }}"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                class="w-full h-[400px] rounded-lg"
                            ></iframe>
                        </div>
                    </div>
                @endif

                <!-- Features -->
                @if($property->features)
                    <div class="bg-white p-6 rounded-lg shadow-sm">
                        <h2 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Features</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach(json_decode($property->features) as $feature)
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-orange-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-700">{{ $feature }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <!-- Right Column - Agent and Actions -->
            <div>
                <!-- Agent Card -->
                <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Contact Information</h2>
                    <div class="mb-4">
                        <h3 class="font-bold text-gray-800">IMARI Real Estate</h3>
                        <p class="text-blue-600 text-sm">Your Property Solutions</p>
                    </div>
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-medium mb-2">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        {{ $property->contact }}
                    </button>
                    <button class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg font-medium">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Schedule Tour
                    </button>
                </div>

                <!-- Property Facts -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h2 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Property Facts</h2>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Property Type:</span>
                            <span class="font-medium">{{ $property->type }}</span>
                        </div>
                        @if($property->type !== 'Plot')
                            <div class="flex justify-between">
                                <span class="text-gray-600">Bedrooms:</span>
                                <span class="font-medium">{{ $property->bedrooms }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Bathrooms:</span>
                                <span class="font-medium">{{ $property->bathrooms }}</span>
                            </div>
                        @endif
                        @if($property->size)
                            <div class="flex justify-between">
                                <span class="text-gray-600">Size:</span>
                                <span class="font-medium">{{ number_format($property->size) }} sq ft</span>
                            </div>
                        @endif
                        <div class="flex justify-between">
                            <span class="text-gray-600">Status:</span>
                            <span class="font-medium">{{ $property->status }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="mt-8 bg-white p-6 rounded-lg shadow-sm">
            <h2 class="text-xl font-bold text-gray-800 mb-4 border-b pb-2">Location</h2>
            
            <p class="mt-3 text-gray-600">{{ $property->location }}</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-12">
        @include('navbar.footer')
    </footer>
</body>
</html>