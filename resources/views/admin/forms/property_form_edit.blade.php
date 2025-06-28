<form action="{{ route('properties.update', $item->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- Property Title -->
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Property Title</label>
        <input type="text" name="title" value="{{ old('title', $item->title) }}" class="w-full border border-gray-300 rounded-lg p-2">
    </div>

    <!-- Property Type -->
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Property Type</label>
        <select name="type" class="w-full border border-gray-300 rounded-lg p-2">
            @foreach (['House', 'Apartment', 'Land', 'Office', 'Commercial'] as $type)
                <option value="{{ $type }}" @selected(old('type', $item->type) === $type)>{{ $type }}</option>
            @endforeach
        </select>
    </div>

    <!-- Location -->
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Location</label>
        <input type="text" name="location" value="{{ old('location', $item->location) }}" class="w-full border border-gray-300 rounded-lg p-2">
    </div>

    <!-- Price -->
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Price</label>
        <input type="number" name="price" value="{{ old('price', $item->price) }}" class="w-full border border-gray-300 rounded-lg p-2">
    </div>

    <!-- Bedrooms -->
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Bedrooms</label>
        <input type="number" name="bedrooms" value="{{ old('bedrooms', $item->bedrooms) }}" class="w-full border border-gray-300 rounded-lg p-2">
    </div>

    <!-- Bathrooms -->
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Bathrooms</label>
        <input type="number" name="bathrooms" value="{{ old('bathrooms', $item->bathrooms) }}" class="w-full border border-gray-300 rounded-lg p-2">
    </div>

    <!-- Size -->
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Size (m²)</label>
        <input type="number" name="size" value="{{ old('size', $item->size) }}" class="w-full border border-gray-300 rounded-lg p-2">
    </div>

    <!-- Property Status -->
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Status</label>
        <select name="status" class="w-full border border-gray-300 rounded-lg p-2">
            @foreach (['For Sale', 'For Rent'] as $status)
                <option value="{{ $status }}" @selected(old('status', $item->status) === $status)>{{ $status }}</option>
            @endforeach
        </select>
    </div>

    <!-- Description -->
    <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-600 mb-1">Property Description</label>
        <textarea name="description" rows="4" class="w-full border border-gray-300 rounded-lg p-2">{{ old('description', $item->description) }}</textarea>
    </div>

    <!-- Features -->
    @php
        $selectedFeatures = json_decode($item->features, true) ?? [];
    @endphp
    <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-600 mb-1">Property Features</label>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
            @foreach (['Parking', 'Garden', 'Swimming Pool', 'Air Conditioning', 'Wi-Fi', 'Balcony'] as $feature)
                <label class="flex items-center gap-2">
                    <input type="checkbox" name="features[]" value="{{ $feature }}" {{ in_array($feature, old('features', $selectedFeatures)) ? 'checked' : '' }}>
                    {{ $feature }}
                </label>
            @endforeach
        </div>
    </div>

    <!-- Images Upload -->
    <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-600 mb-1">Upload New Images (optional)</label>
        <input type="file" name="images[]" multiple class="w-full border border-gray-300 rounded-lg p-2">
        
        @if ($item->images_name)
            <div class="mt-4 grid grid-cols-2 md:grid-cols-4 gap-2">
                @foreach (json_decode($tem->images_name) as $img)
                    <div>
                        <img src="{{ asset('property_images/' . $img) }}" class="w-full h-32 object-cover rounded" alt="Image">
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Contact Info -->
    <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-600 mb-1">Your Contact (Phone or Email)</label>
        <input type="text" name="contact" value="{{ old('contact', $item->contact) }}" class="w-full border border-gray-300 rounded-lg p-2">
    </div>

    <!-- Submit -->
    <div class="flex justify-end p-4 border-t">
      
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Update Property</button>
    </div>
</form>
