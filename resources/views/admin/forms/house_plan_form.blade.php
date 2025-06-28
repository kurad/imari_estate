

<form action="{{ route('house_plan.store') }}" method="POST"  enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl">
    @csrf
   <!-- Property Title -->
     <div>
       <label class="block text-sm font-medium text-gray-600 mb-1">Property Title</label>
       <input type="text" name="title" class="w-full border border-gray-300 rounded-lg p-2" placeholder="e.g. 3 Bedroom Apartment in Kigali">
     </div>
 
     <!-- Property Type -->
     <div>
       <label class="block text-sm font-medium text-gray-600 mb-1">Property Type</label>
       <select name="type" class="w-full border border-gray-300 rounded-lg p-2">
         <option>House</option>
         <option>Apartment</option>
         <option>Land</option>
         <option>Office</option>
         <option>Commercial</option>
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
     <div>
       <label class="block text-sm font-medium text-gray-600 mb-1">Bedrooms</label>
       <input type="number" name="bedrooms" class="w-full border border-gray-300 rounded-lg p-2" placeholder="e.g. 3">
     </div>
 
     <!-- Bathrooms -->
     <div>
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
    <!-- Submit -->
    <div class="mt-6 flex justify-end space-x-3">
        <button type="button" onclick="closeModal()" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">Cancel</button>
        <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">Save House Plan</button>
    </div>
   </form>

 




