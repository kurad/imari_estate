<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imari - Real Estate Website</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="mb-4 flex flex-wrap items-center justify-between">
            <div class="relative w-64">
                <input type="text" placeholder="Search users..."
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
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-left">Role</th>
                        <th class="py-3 px-4 text-left">Status</th>
                        <th class="py-3 px-4 text-left">Joined</th>
                        <th class="py-3 px-4 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $item)
                        <tr class="border-b">
                            <td class="py-3 px-4">{{ $item->id }}</td>
                            <td class="py-3 px-4">{{ $item->name }}</td>
                            <td class="py-3 px-4">{{ $item->email }}</td>
                            <td class="py-3 px-4">
                                <span
                                    class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">{{ $item->role }}</span>
                            </td>
                            <td class="py-3 px-4">
                                @php
                                    $statusColors = [
                                    'active' => 'bg-green-100 text-green-800',
                                    'inactive' => 'bg-red-100 text-red-800',
                                    'pending' => 'bg-yellow-100 text-yellow-800',
                                    ];
                                    $color = $statusColors[$item->status] ?? 'bg-gray-100 text-gray-800';
                                @endphp
                                <span class="{{ $color }} px-2 py-1 rounded-full text-xs">
                                    {{ ucfirst($item->status) }}
                                </span>
                            </td>
                            <td class="py-3 px-4">{{ $item->created_at }}</td>
                            <td class="py-3 px-4">
                                <div x-data="{ open: false }" class="inline">
                                    <button @click="open = true" class="text-blue-600 hover:text-blue-800"
                                        type="button">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div x-show="open" x-cloak
                                        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40">
                                        <div @click.away="open = false"
                                            class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
                                            <div class="flex justify-between items-center mb-4">
                                                <h2 class="text-lg font-semibold">Edit User</h2>
                                                <button @click="open = false"
                                                    class="text-gray-500 hover:text-gray-700 text-2xl leading-none">&times;</button>
                                            </div>
                                            <form method="POST"
                                                action="{{ route('user.update', $item->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-4">
                                                    <label class="block text-gray-700 mb-1">Role</label>
                                                    <select name="role"
                                                        class="w-full px-4 py-2 rounded-lg border border-gray-300">
                                                        <option value="user"
                                                            {{ $item->role == 'user' ? 'selected' : '' }}>
                                                            User</option>
                                                        <option value="admin"
                                                            {{ $item->role == 'admin' ? 'selected' : '' }}>
                                                            Admin</option>
                                                        <option value="agent"
                                                            {{ $item->role == 'agent' ? 'selected' : '' }}>
                                                            Agent</option>
                                                    </select>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="block text-gray-700 mb-1">Status</label>
                                                    <select name="status"
                                                        class="w-full px-4 py-2 rounded-lg border border-gray-300">
                                                        <option value="active"
                                                            {{ $item->status == 'active' ? 'selected' : '' }}>
                                                            Active
                                                        </option>
                                                        <option value="inactive"
                                                            {{ $item->status == 'inactive' ? 'selected' : '' }}>
                                                            Inactive
                                                        </option>
                                                        <option value="pending"
                                                            {{ $item->status == 'pending' ? 'selected' : '' }}>
                                                            Pending
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="flex justify-end space-x-2">
                                                    <button type="button" @click="open = false"
                                                        class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Cancel</button>
                                                    <button type="submit"
                                                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save
                                                        changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Modal -->
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4 flex justify-between items-center">
            <p class="text-gray-500">Showing 1 to {{ count($users) }} of {{ count($users) }} entries</p>
            <div class="flex space-x-1">
                <button class="px-3 py-1 bg-gray-200 rounded-md">Previous</button>
                <button class="px-3 py-1 bg-blue-600 text-white rounded-md">1</button>
                <button class="px-3 py-1 bg-gray-200 rounded-md">Next</button>
            </div>
        </div>
    </div>
</body>

</html>
