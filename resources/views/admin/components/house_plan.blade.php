<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    
    
    
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold">House Plan Management</h3>
        <button id="addHousePlanBtn"
            class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg flex items-center">
            <i class="fas fa-plus mr-2"></i> Add House Plan
        </button>
    </div>



    @if(session('success'))
    <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Your form goes here -->
    <div class="mb-4 flex flex-wrap items-center justify-between">
        <div class="relative w-64">
            <input type="text" placeholder="Search house plans..."
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500">
            <button class="absolute right-2 top-2 text-gray-500">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($house_plan as $item)
            @php
                $array = json_decode($item->images, true);
            @endphp

            <div class="border rounded-lg overflow-hidden">
                <div class="bg-gray-200 h-48 flex items-center justify-center">
                    @if (!empty($array[0]))
                        <img src="{{ asset($array[0]) }}" class="w-full h-full rounded object-cover"
                            alt="Property Image">
                    @endif
                </div>
                <div class="p-4">
                    <h4 class="font-semibold">{{ $item->title }}</h4>
                    <p class="text-gray-600 text-sm">{{ $item->bedrooms }} Bedrooms • {{ $item->bathrooms }} Bathrooms •
                        {{ $item->size }} sq ft</p>
                    <div class="mt-3 flex justify-between items-center">
                        <span class="font-bold text-blue-600">${{ $item->price }}</span>
                        <div class="flex space-x-2">
                            <button class="edit-button text-blue-500 hover:text-blue-700" data-id="{{ $item->id }}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-4 flex justify-between items-center">
        <p class="text-gray-500">Showing 1 to {{ count($house_plan) }} of {{ count($house_plan) }} entries</p>
        <div class="flex space-x-1">
            <button class="px-3 py-1 bg-gray-200 rounded-md hover:bg-gray-300">Previous</button>
            <button class="px-3 py-1 bg-blue-600 text-white rounded-md">1</button>
            <button class="px-3 py-1 bg-gray-200 rounded-md hover:bg-gray-300">Next</button>
        </div>
    </div>
</div>

<!-- Edit Modals -->
@foreach ($house_plan as $item)
    <div id="edit-modal-{{ $item->id }}"
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div
            class="bg-white rounded-lg shadow-lg p-6 w-full max-h-screen overflow-y-auto mx-4 sm:mx-auto sm:w-5/6 md:w-4/5 lg:w-3/5 xl:w-1/2">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl text-gray-800 font-bold">Edit House Plan</h2>
                <button class="close-modal text-gray-500 hover:text-gray-700" data-id="{{ $item->id }}">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 mb-2">Title</label>
                        <input type="text" name="title" value="{{ $item->title }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Price ($)</label>
                        <input type="number" name="price" value="{{ $item->price }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Bedrooms</label>
                        <input type="number" name="bedrooms" value="{{ $item->bedrooms }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Bathrooms</label>
                        <input type="number" name="bathrooms" step="0.5" value="{{ $item->bathrooms }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Size (sq ft)</label>
                        <input type="number" name="size" value="{{ $item->size }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Description</label>
                    <textarea name="description" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">{{ $item->description }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Images</label>
                    <input type="file" name="images[]" multiple
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                    @if (!empty($array))
                        <div class="flex flex-wrap gap-2 mt-2">
                            @foreach ($array as $image)
                                <div class="relative">
                                    <img src="{{ asset($image) }}" class="h-16 w-16 object-cover rounded"
                                        alt="House Plan Image">
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button"
                        class="cancel-button px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400"
                        data-id="{{ $item->id }}">Cancel</button>
                    <button type="submit"
                        class="px-4 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600">Update House
                        Plan</button>
                </div>
            </form>
        </div>
    </div>
@endforeach

<!-- Add House Plan Modal -->
<div id="housePlanModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-3xl max-h-[90vh] overflow-y-auto">
        <div class="flex justify-between items-center border-b p-4">
            <h3 class="text-lg font-semibold">Add New House Plan</h3>
            <button id="closeHousePlanModalBtn" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="p-6">
            <form id="housePlanForm" action="/house_plan" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 mb-2">Title*</label>
                        <input type="text" 
                             name="title"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                            required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Type*</label>
                        <select name="type"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                            required>
                            <option value="">Select Type</option>
                            <option value="House">House</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Villa">Villa</option>
                            <option value="Cottage">Cottage</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Location*</label>
                        <input type="text" name="location"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                            required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Price ($)*</label>
                        <input type="number" name="price" step="0.01"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                            required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Bedrooms*</label>
                        <input type="number" name="bedrooms"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                            required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Bathrooms*</label>
                        <input type="number" name="bathrooms"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                            required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Size (sq ft)*</label>
                        <input type="number" name="size"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                            required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Status*</label>
                        <select name="status"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                            required>
                            <option value="">Select Status</option>
                            <option value="For Sale">For Sale</option>
                            <option value="For Rent">For Rent</option>
                            <option value="Sold">Sold</option>
                            <option value="Rented">Rented</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2">Contact Information*</label>
                        <input type="text" name="contact"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                            required>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 mb-2">Features</label>
                        <div class="space-y-2" id="features-container">
                            <!-- First feature input -->
                            <div class="flex">
                                <input type="text" name="features[]"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                                    placeholder="e.g. Swimming pool">
                                <button type="button" onclick="addFeatureField()" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">+</button>
                            </div>
                        </div>
                    </div>
                    
                 
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Description</label>
                    <textarea name="description" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Images (JPG, JPEG, PNG, max 2MB each)</label>
                    <input type="file" name="images[]" multiple accept="image/jpg,image/jpeg,image/png"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" id="cancelHousePlanBtn"
                        class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400">Cancel</button>
                    <button type="submit"
                        class="px-4 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600">Add Property</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>


                        function addFeatureField() {
                            const container = document.getElementById('features-container');
                            const newField = document.createElement('div');
                            newField.className = 'flex';
                            newField.innerHTML = `
                                <input type="text" name="features[]"
                                    class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                                    placeholder="Another feature">
                                <button type="button" onclick="this.parentElement.remove()" class="ml-2 px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">×</button>
                            `;
                            container.appendChild(newField);
                        }
                  
    document.addEventListener('DOMContentLoaded', function() {
        // Add House Plan Modal
        const housePlanModal = document.getElementById('housePlanModal');
        const addHousePlanBtn = document.getElementById('addHousePlanBtn');
        const closeHousePlanModalBtn = document.getElementById('closeHousePlanModalBtn');
        const cancelHousePlanBtn = document.getElementById('cancelHousePlanBtn');

        // Show add modal
        addHousePlanBtn.addEventListener('click', function() {
            housePlanModal.classList.remove('hidden');
        });

        // Hide add modal
        function hideAddModal() {
            housePlanModal.classList.add('hidden');
        }

        closeHousePlanModalBtn.addEventListener('click', hideAddModal);
        cancelHousePlanBtn.addEventListener('click', hideAddModal);

        // Close add modal when clicking outside
        housePlanModal.addEventListener('click', function(e) {
            if (e.target === this) {
                hideAddModal();
            }
        });

        // Edit Modals Functionality
        function showEditModal(id) {
            const modal = document.getElementById(`edit-modal-${id}`);
            if (modal) {
                modal.classList.remove('hidden');
            }
        }

        function hideEditModal(id) {
            const modal = document.getElementById(`edit-modal-${id}`);
            if (modal) {
                modal.classList.add('hidden');
            }
        }

        // Event delegation for edit buttons
        document.addEventListener('click', function(e) {
            // Edit button click
            if (e.target.closest('.edit-button')) {
                const button = e.target.closest('.edit-button');
                showEditModal(button.getAttribute('data-id'));
                return;
            }

            // Close button click
            if (e.target.closest('.close-modal')) {
                const button = e.target.closest('.close-modal');
                hideEditModal(button.getAttribute('data-id'));
                return;
            }

            // Cancel button click
            if (e.target.closest('.cancel-button')) {
                const button = e.target.closest('.cancel-button');
                hideEditModal(button.getAttribute('data-id'));
                return;
            }

            // Click outside modal content
            if (e.target.matches('[id^="edit-modal-"]')) {
                const modalId = e.target.id;
                const id = modalId.replace('edit-modal-', '');
                hideEditModal(id);
            }
        });

        // Form submission handling
        document.getElementById('housePlanForm')?.addEventListener('submit', function(e) {
            // Form will submit normally, you can add AJAX here if needed
        });

        // Close modals with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                // Hide add modal if visible
                if (!housePlanModal.classList.contains('hidden')) {
                    hideAddModal();
                    return;
                }

                // Hide any visible edit modal
                const visibleEditModal = document.querySelector('[id^="edit-modal-"]:not(.hidden)');
                if (visibleEditModal) {
                    const id = visibleEditModal.id.replace('edit-modal-', '');
                    hideEditModal(id);
                }
            }
        });
    });
</script>
