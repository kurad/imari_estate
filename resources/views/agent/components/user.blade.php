<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    {{-- <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold">User Management</h3>
        <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg flex items-center">
            <i class="fas fa-plus mr-2"></i> Add User
        </button>
    </div> --}}
    <div class="mb-4 flex flex-wrap items-center justify-between">
        <div class="relative w-64">
            <input type="text" placeholder="Search users..." class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500">
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
                    <th class="py-3 px-4 text-left">Name</th>
                    <th class="py-3 px-4 text-left">Email</th>
                    <th class="py-3 px-4 text-left">Role</th>
                    <th class="py-3 px-4 text-left">Joined</th>
                    <th class="py-3 px-4 text-left">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $item)
                    
               
                <tr class="border-b">


                    <td class="py-3 px-4">{{ $item->id }}</td>
                    <td class="py-3 px-4">{{ $item->name }}</td>
                    
                    <td class="py-3 px-4">{{ $item->email }}</td>
                    <td class="py-3 px-4"><span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">{{ $item->role }}</span></td>
                    <td class="py-3 px-4">{{ $item->created_at }}</td>
                    <td class="py-3 px-4">
                        <div class="flex space-x-2">
                           <button class="text-blue-600 hover:text-blue-800"><i class="fas fa-edit"></i></button>
                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                            
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4 flex justify-between items-center">
        <p class="text-gray-500">Showing 1 to 3 of 3 entries</p>
        <div class="flex space-x-1">
            <button class="px-3 py-1 bg-gray-200 rounded-md">Previous</button>
            <button class="px-3 py-1 bg-blue-600 text-white rounded-md">1</button>
            <button class="px-3 py-1 bg-gray-200 rounded-md">Next</button>
        </div>
    </div>
</div>