  <form action="{{ route('properties.store') }}" method="POST"  enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl">
     @csrf
    <!-- Property Title -->
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Property Title</label>
        <input type="text" name="title" class="w-full border border-gray-300 rounded-lg p-2" placeholder="e.g. 3 Bedroom Apartment in Kigali">
      </div>
  
      <!-- Property Type -->
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Property Type</label>
        <select name="type" id="property-type" class="w-full border border-gray-300 rounded-lg p-2">
          <option>House</option>
          <option>Apartment</option>
          <option>Room</option>
          <option>Villa</option>
          <option>Airbnb</option>
          <option>Plot</option>
          <option>Studio Room</option>
          <option>Comercial</option>
        </select>
      </div>
  
      <!-- Location -->
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Location</label>
        <input type="text" name="location" class="w-full border border-gray-300 rounded-lg p-2" placeholder="e.g. Kacyiru, Kigali">
      </div>
  
      <!-- Price -->
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Price</label>
        <input type="number" name="price" class="w-full border border-gray-300 rounded-lg p-2" placeholder="e.g. 30000000">
      </div>
  
      <!-- Bedrooms -->
      <div id="bedrooms-field">
        <label class="block text-sm font-medium text-gray-600 mb-1">Bedrooms</label>
        <input type="number" name="bedrooms" class="w-full border border-gray-300 rounded-lg p-2" placeholder="e.g. 3">
      </div>
  
      <!-- Bathrooms -->
      <div id="bathrooms-field">
        <label class="block text-sm font-medium text-gray-600 mb-1">Bathrooms</label>
        <input type="number" name="bathrooms" class="w-full border border-gray-300 rounded-lg p-2" placeholder="e.g. 2">
      </div>
  
      <!-- Size -->
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Size (m²)</label>
        <input type="number"  name="size" class="w-full border border-gray-300 rounded-lg p-2" placeholder="e.g. 120">
      </div>
  
      <!-- Property Status -->
      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Status</label>
        <select name="status" class="w-full border border-gray-300 rounded-lg p-2">
          <option>For Sale</option>
          <option>For Rent</option>
        </select>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-600 mb-1">Neighborhood</label>
        <select name="neighborhood" class="w-full border border-gray-300 rounded-lg p-2">
          <option>Downtown</option>
          <option>Suburbs</option>
          <option>Rural</option>
          <option>Downtown</option>
          <option>Countryside</option>
        </select>
      </div>
  
      <!-- Description -->
      <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-600 mb-1">Property Description</label>
        <textarea name="description" rows="4" class="w-full border border-gray-300 rounded-lg p-2" placeholder="Describe the property in detail..."></textarea>
      </div>
  
      <!-- Features -->
      <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-600 mb-1">Property Features</label>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
          <label class="flex items-center gap-2"><input type="checkbox" name="features[]"> Parking</label>
          <label class="flex items-center gap-2"><input type="checkbox" name="features[]"> Garden</label>
          <label class="flex items-center gap-2"><input type="checkbox" name="features[]"> Swimming Pool</label>
          <label class="flex items-center gap-2"><input type="checkbox" name="features[]"> Air Conditioning</label>
          <label class="flex items-center gap-2"><input type="checkbox" name="features[]"> Wi-Fi</label>
          <label class="flex items-center gap-2"><input type="checkbox" name="features[]"> Balcony</label>
        </div>
      </div>
  
      <!-- Images Upload -->
      <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-600 mb-1">Upload Images</label>
        <input type="file" name="images[]" multiple class="w-full border border-gray-300 rounded-lg p-2">
      </div>
  
      <!-- Contact Info -->
      <div class="md:col-span-2">
        <label class="block text-sm font-medium text-gray-600 mb-1">Your Contact (Phone or Email)</label>
        <input type="text" name="contact" class="w-full border border-gray-300 rounded-lg p-2" placeholder="e.g. +250 780 123 456 or email@example.com">
      </div>
  
      <!-- Submit -->
      <div class="flex justify-end p-4 border-t">
        {{-- <button onclick="closeModal()" class="px-4 py-2 text-gray-600 mr-2 rounded-lg hover:bg-gray-100">Cancel</button> --}}
        <button type="submit" class="px-4 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600">Add Property</button>
    </div>
    </form>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
            const typeSelect = document.getElementById('property-type');
            const bedroomsField = document.getElementById('bedrooms-field');
            const bathroomsField = document.getElementById('bathrooms-field');

            function toggleFields() {
              const selectedType = typeSelect.value;
              if (selectedType === 'Plot') {
                bedroomsField.style.display = 'none';
                bathroomsField.style.display = 'none';
              }else {
                bedroomsField.style.display = '';
                bathroomsField.style.display = '';
              }
            }
            typeSelect.addEventListener('change', toggleFields);
            toggleFields();
      })
    </script>
 
  