<section class="bg-white py-12">
    <div class="container mx-auto px-4">
      <!-- Section Header -->
      <div class="bg-orange-500 text-white font-bold py-1 px-3 inline-block rounded-tr-md">
        Featured House Plans
      </div>
      
      <div class="border border-gray-300 w-full p-6">
        <!-- Introduction Text -->
        <div class="text-center mb-8">
          <h2 class="text-3xl font-bold text-gray-800 mb-4">Find Your Dream Home Blueprint</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">Browse our collection of professionally designed house plans perfect for any budget and lifestyle. From cozy cottages to luxury estates.</p>
        </div>
        
        <!-- House Plans Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
          <!-- House Plan 1 -->
          
          @foreach ($house_plans as $item)
              
          @php
          $array = json_decode($item->images);
         @endphp
          
          <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
            <div class="h-48 bg-gray-100 relative overflow-hidden">
              <div class="absolute top-0 right-0 bg-orange-500 text-white text-xs font-bold px-2 py-1">BESTSELLER</div>
              <img src="{{asset($array[0])}}" alt="Modern Farmhouse Plan" class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
              <h3 class="font-bold text-lg text-gray-800">{{$item->title}}</h3>
              <div class="flex items-center text-sm text-gray-600 mt-2">
                <div class="flex items-center mr-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg>
                  <span>{{$item->bedrooms}} Beds</span>
                </div>
                <div class="flex items-center mr-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                  <span>{{$item->bathrooms}} Baths</span>
                </div>
                <div class="flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5" />
                  </svg>
                  <span>{{$item->size}}sq ft</span>
                </div>
              </div>
              <div class="mt-4 flex justify-between items-center">
                <span class="font-bold text-gray-800">$499</span>
                <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded text-sm font-medium">View Plan</button>
              </div>
            </div>
          </div>
          @endforeach

        </div>
        
        <!-- Bottom Call to Action -->
        <div class="mt-10 text-center">
          <a href="#" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-bold px-6 py-3 rounded-lg transition-colors">
            Browse All House Plans
          </a>
          <p class="text-sm text-gray-500 mt-4">Over 5,000 plans available with customization options</p>
        </div>
        
        <!-- Features Section -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="flex items-start p-4 border border-gray-200 rounded-lg">
            <div class="flex-shrink-0 mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-lg text-gray-800">Guaranteed Plans</h3>
              <p class="text-gray-600 mt-1">All our blueprints are architect-certified and built to local code specifications</p>
            </div>
          </div>
          
          <div class="flex items-start p-4 border border-gray-200 rounded-lg">
            <div class="flex-shrink-0 mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-lg text-gray-800">Custom Modifications</h3>
              <p class="text-gray-600 mt-1">Easily request modifications to any plan to fit your specific needs and preferences</p>
            </div>
          </div>
          
          <div class="flex items-start p-4 border border-gray-200 rounded-lg">
            <div class="flex-shrink-0 mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <h3 class="font-bold text-lg text-gray-800">Budget-Friendly</h3>
              <p class="text-gray-600 mt-1">Save thousands compared to custom architect fees with our pre-drawn house plans</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>