@extends('admin.layout')

@section('title', 'Products Management')

@section('content')
<div class="p-2 md:p-6 bg-gradient-to-br from-blue-50 via-white to-green-50 min-h-screen">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-2">
        <h1 class="text-2xl md:text-3xl font-extrabold text-gray-800 tracking-tight flex items-center gap-2">
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18"/></svg>
            Products Management
        </h1>
        <div class="flex gap-2">
            <button class="bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white font-semibold px-5 py-2 rounded-lg shadow flex items-center gap-2 transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                Export to CSV
            </button>
            <button class="bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-semibold px-5 py-2 rounded-lg shadow flex items-center gap-2 transition-all duration-200" id="addProductBtn">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                Add Product
            </button>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-3 mb-6">
        <div class="relative w-full md:w-1/2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35"/></svg>
            </span>
            <input type="text" class="w-full pl-10 pr-3 py-2 border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:outline-none bg-white text-gray-800 placeholder-gray-400 shadow-sm" placeholder="Search products by name or SKU...">
        </div>
        <select class="w-full md:w-48 px-3 py-2 border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:outline-none bg-white text-gray-800 shadow-sm">
            <option>All Categories</option>
            <option>Bakery Items</option>
            <option>Organic Products</option>
            <option>Instant Foods</option>
            <option>Frozen Foods</option>
            <option>Confectionery</option>
            <option>Dairy</option>
            <option>Condiments</option>
            <option>Snacks</option>
        </select>
    </div>
    <div class="bg-white rounded-2xl shadow-xl overflow-x-auto border border-blue-100">
        <table class="min-w-full text-sm md:text-base">
            <thead>
                <tr class="bg-gradient-to-r from-blue-100 to-green-100 text-left">
                    <th class="py-3 px-4 font-semibold text-gray-700">Name</th>
                    <th class="py-3 px-4 font-semibold text-gray-700">SKU</th>
                    <th class="py-3 px-4 font-semibold text-gray-700">Category</th>
                    <th class="py-3 px-4 font-semibold text-gray-700">Price</th>
                    <th class="py-3 px-4 font-semibold text-gray-700">Quantity</th>
                    <th class="py-3 px-4 font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach([
                    ['Maggie','8901058000269','Bakery Items','₹45.00',100],
                    ['Pasta Delight','8901058000270','Organic Products','₹48.00',14],
                    ['Instant Soup','8901058000271','Instant Foods','₹28.00',1],
                    ['Cup Noodles','8901058000272','Frozen Foods','₹29.00',136],
                    ['Rice Bowl','8901058000273','Confectionery','₹29.00',141],
                    ['Paneer Tikka Wrap','8901058000274','Confectionery','₹52.00',126],
                    ['Veg Biryani','8901058000275','Instant Foods','₹41.00',79],
                    ['Chicken Curry','8901058000276','Bakery Items','₹48.00',127],
                    ['Fresh Milk','8901058000277','Dairy','₹55.00',60],
                    ['Brown Bread','8901058000278','Bakery Items','₹35.00',45],
                    ['Tomato Ketchup','8901058000279','Condiments','₹65.00',32],
                    ['Potato Chips','8901058000280','Snacks','₹20.00',200],
                    ['Eggs (12 pack)','8901058000281','Dairy','₹70.00',50],
                ] as $product)
                <tr class="hover:bg-blue-50 transition">
                    <td class="py-3 px-4 font-medium text-gray-900">{{ $product[0] }}</td>
                    <td class="py-3 px-4 text-gray-700">{{ $product[1] }}</td>
                    <td class="py-3 px-4">
                        <span class="bg-gradient-to-r from-blue-200 to-green-200 text-blue-800 px-3 py-1 rounded-full text-xs font-semibold shadow-sm">
                            {{ $product[2] }}
                        </span>
                    </td>
                    <td class="py-3 px-4 text-green-700 font-semibold">{{ $product[3] }}</td>
                    <td class="py-3 px-4">
                        <span class="px-3 py-1 rounded-full text-xs font-bold shadow-sm
                            @if($product[4] <= 5)
                                bg-yellow-100 text-yellow-700
                            @else
                                bg-green-100 text-green-700
                            @endif
                        ">
                            {{ $product[4] }}
                        </span>
                    </td>
                    <td class="py-3 px-4 flex gap-2">
                        <button class="text-blue-600 hover:bg-blue-100 p-2 rounded-full transition" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:bg-red-100 p-2 rounded-full transition" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Add Product Modal -->
<div id="addProductModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40 hidden">
    <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-md relative border-2 border-blue-200">
        <button id="closeProductModal" class="absolute top-3 right-3 text-gray-500 hover:text-red-500 text-2xl transition">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <h2 class="text-2xl font-extrabold mb-6 flex items-center gap-2 text-blue-700">
            <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            Add Product
        </h2>
        <form>
            <div class="mb-4">
                <label class="block font-semibold mb-1 text-gray-700">Product Name</label>
                <input type="text" class="w-full border border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none" placeholder="Enter product name" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-1 text-gray-700">SKU</label>
                <input type="text" class="w-full border border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none" placeholder="Enter SKU" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-1 text-gray-700">Category</label>
                <select class="w-full border border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none" required>
                    <option value="">-- Select Category --</option>
                    <option>Bakery Items</option>
                    <option>Organic Products</option>
                    <option>Instant Foods</option>
                    <option>Frozen Foods</option>
                    <option>Confectionery</option>
                    <option>Dairy</option>
                    <option>Condiments</option>
                    <option>Snacks</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-1 text-gray-700">Price</label>
                <input type="number" class="w-full border border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none" placeholder="Enter price" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-1 text-gray-700">Quantity</label>
                <input type="number" class="w-full border border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none" placeholder="Enter quantity" required>
            </div>
            <div class="mb-6">
                <label class="block font-semibold mb-1 text-gray-700">Image</label>
                <input type="file" class="w-full border border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-300 focus:outline-none">
            </div>
            <div class="flex gap-3 mt-6">
                <button type="button" id="cancelProductModal" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-5 py-2 rounded-lg shadow w-1/2 transition">Cancel</button>
                <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-semibold px-5 py-2 rounded-lg shadow w-1/2 transition">Add Product</button>
            </div>
        </form>
    </div>
</div>
<script>
document.getElementById('addProductBtn').addEventListener('click', function() {
    document.getElementById('addProductModal').classList.remove('hidden');
});
document.getElementById('closeProductModal').addEventListener('click', function() {
    document.getElementById('addProductModal').classList.add('hidden');
});
document.getElementById('cancelProductModal').addEventListener('click', function() {
    document.getElementById('addProductModal').classList.add('hidden');
});
window.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        document.getElementById('addProductModal').classList.add('hidden');
    }
});
</script>
@endsection
