<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Properties Card -->
    <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-blue-600">
        <div class="flex justify-between items-center">
            <h3 class="text-gray-500">Total Properties</h3>
            <div class="bg-blue-100 p-2 rounded-full">
                <i class="fas fa-home text-blue-600"></i>
            </div>
        </div>
        <p class="text-2xl font-bold mt-2">{{ count($data) }}</p>
        <div class="grid grid-cols-3 gap-2 mt-4 text-xs">
            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded">Sale: {{ $total_properties_for_sale }}</span>
            <span class="bg-green-100 text-green-800 px-2 py-1 rounded">Rent: {{ $total_properties_for_rent }}</span>
            <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded">Short Stay:
                {{ $total_properties_for_short_stay }}</span>
        </div>
    </div>

    <!-- Total Users Card -->
    <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-orange-500">
        <div class="flex justify-between items-center">
            <h3 class="text-gray-500">Total Users</h3>
            <div class="bg-orange-100 p-2 rounded-full">
                <i class="fas fa-users text-orange-500"></i>
            </div>
        </div>
        <p class="text-2xl font-bold mt-2">{{ $total_users }}</p>
        <p class="text-green-500 text-sm mt-2"><i class="fas fa-arrow-up"></i> {{ count($users) }} active users</p>
    </div>

    <!-- New Messages Card -->
    <div class="bg-white rounded-lg shadow-md p-6 border-t-4 border-green-600">
        <div class="flex justify-between items-center">
            <h3 class="text-gray-500">New Messages</h3>
            <div class="bg-green-100 p-2 rounded-full">
                <i class="fas fa-envelope text-green-600"></i>
            </div>
        </div>
        <p class="text-2xl font-bold mt-2">{{ count($message) }}</p>
        <p class="text-sm mt-2">
            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Unread:
                {{ $message->where('read', false)->count() }}</span>
        </p>
    </div>

</div>
