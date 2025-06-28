<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-gray-100 p-6">
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold">Property Management</h3>
            <button id="addPropertyBtn"
                class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg flex items-center">
                <i class="fas fa-plus mr-2"></i> Add Property
            </button>
        </div>
        <div class="mb-4 flex flex-wrap items-center justify-between">
            <div class="relative w-64">
                <input type="text" placeholder="Search properties..."
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500">
                <button class="absolute right-2 top-2 text-gray-500">
                    <i class="fas fa-search"></i>
                </button>
            </div>

        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-3 px-4 text-left">ID</th>
                        <th class="py-3 px-4 text-left">Property</th>
                        <th class="py-3 px-4 text-left">Address</th>
                        <th class="py-3 px-4 text-left">Price</th>
                        <th class="py-3 px-4 text-left">Status</th>
                        <th class="py-3 px-4 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    @php
                    $array = json_decode($item->images, true); // true makes it an array
                    @endphp
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $item->id }}</td>
                        <td class="py-3 px-4">
                            <div class="flex items-center gap-3">
                                @if(!empty($array[0]))
                                <img src="{{ asset($array[0]) }}" class="w-16 h-16 rounded object-cover"
                                    alt="Property Image">
                                @endif
                                <span class="font-medium text-gray-800">{{ $item->title }}</span>
                            </div>
                        </td>
                        <td class="py-3 px-4">{{ $item->location }}</td>
                        <td class="py-3 px-4">${{ $item->price }}</td>
                        <td class="py-3 px-4"><span
                                class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Available</span></td>
                        <td class="py-3 px-4">
                            <div class="flex space-x-2">
                                <button class="edit-button text-blue-500 hover:text-blue-700"
                                    onclick="showModal('edit-modal-{{ $item->id }}')">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>

                    <!-- Edit modal for each property -->
                    <div id="edit-modal-{{ $item->id }}"
                        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
                        <div
                            class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md max-h-screen overflow-y-auto mx-4 sm:mx-auto sm:w-5/6 md:w-4/5 lg:w-3/5 xl:w-1/2">
                            <div class="flex justify-between items-center mb-4">
                                <h2 class="text-2xl text-gray-800 font-bold">Edit Property</h2>
                                <button onclick="closeEditModal('edit-modal-{{ $item->id }}')"
                                    class="text-gray-500 hover:text-gray-700">
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
                                        <label class="block text-gray-700 mb-2">Price</label>
                                        <input type="number" name="price" value="{{ $item->price }}"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 mb-2">Location</label>
                                        <input type="text" name="location" value="{{ $item->location }}"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 mb-2">Status</label>
                                        <select name="status"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
                                            <option value="Available"
                                                {{ $item->status == 'Available' ? 'selected' : '' }}>Available</option>
                                            <option value="Pending" {{ $item->status == 'Pending' ? 'selected' : '' }}>
                                                Pending</option>
                                            <option value="Sold" {{ $item->status == 'Sold' ? 'selected' : '' }}>Sold
                                            </option>
                                        </select>
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
                                    @if(!empty($array))
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        @foreach($array as $image)
                                        <div class="relative">
                                            <img src="{{ asset($image) }}" class="h-16 w-16 object-cover rounded"
                                                alt="Property Image">
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                                <div class="flex justify-end space-x-2">
                                    <button type="button" onclick="closeEditModal('edit-modal-{{ $item->id }}')"
                                        class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400">Cancel</button>
                                    <button type="submit"
                                        class="px-4 py-2 bg-orange-500 text-white rounded-lg hover:bg-orange-600">Update
                                        Property</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4 flex justify-between items-center">
            <p class="text-gray-500">Showing 1 to {{ count($data) }} of {{ count($data) }} entries</p>
            <div class="flex space-x-1">
                <button class="px-3 py-1 bg-gray-200 rounded-md hover:bg-gray-300">Previous</button>
                <button class="px-3 py-1 bg-blue-600 text-white rounded-md">1</button>
                <button class="px-3 py-1 bg-gray-200 rounded-md hover:bg-gray-300">Next</button>
            </div>
        </div>
    </div>

    <!-- Add Property Modal -->
    <div id="propertyModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-3xl max-h-screen overflow-y-auto">
            <div class="flex justify-between items-center border-b p-4">
                <h3 class="text-lg font-semibold">Add New Property</h3>
                <button id="closeModalBtn" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6">

                @include('agent.forms.property_form')
            </div>
        </div>
    </div>

    <script>
    // DOM Elements
    const propertyModal = document.getElementById('propertyModal');
    const addPropertyBtn = document.getElementById('addPropertyBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const cancelBtn = document.getElementById('cancelBtn');

    // Event Listeners
    addPropertyBtn.addEventListener('click', function() {
        propertyModal.classList.remove('hidden');
    });

    closeModalBtn.addEventListener('click', function() {
        propertyModal.classList.add('hidden');
    });

    cancelBtn.addEventListener('click', function() {
        propertyModal.classList.add('hidden');
    });

    // Close modal when clicking outside
    propertyModal.addEventListener('click', function(e) {
        if (e.target === this) {
            propertyModal.classList.add('hidden');
        }
    });

    // Edit modal functions
    function showModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }

    function closeEditModal(id) {
        document.getElementById(id).classList.add('hidden');
    }

    // Optional: Click outside to close any edit modal
    document.querySelectorAll('[id^="edit-modal-"]').forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
            }
        });
    });
    </script>
</body>

</html>