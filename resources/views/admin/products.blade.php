@extends('admin.layout')

@section('title', 'Products Management')

@section('content')
<div class="p-2 md:p-6">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-2">
        <h1 class="text-xl md:text-2xl font-bold">Products Management</h1>
        <div class="flex gap-2">
            <button class="bg-green-600 hover:bg-green-700 text-white font-medium px-4 py-2 rounded flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                Export to CSV
            </button>
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded flex items-center gap-2" id="addProductBtn">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                Add Product
            </button>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-2 mb-4">
        <div class="relative w-full md:w-1/2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35"/></svg>
            </span>
            <input type="text" class="w-full pl-10 pr-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-blue-200 focus:outline-none bg-gray-50 text-gray-800 placeholder-gray-400" placeholder="Search products by name or SKU...">
        </div>
        <select class="w-full md:w-48 px-3 py-2 border border-gray-200 rounded focus:ring-2 focus:ring-blue-200 focus:outline-none bg-gray-50 text-gray-800">
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
    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="min-w-full text-sm md:text-base">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="py-2 px-4">Name</th>
                    <th class="py-2 px-4">SKU</th>
                    <th class="py-2 px-4">Category</th>
                    <th class="py-2 px-4">Price</th>
                    <th class="py-2 px-4">Quantity</th>
                    <th class="py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4">Maggie</td>
                    <td class="py-2 px-4">8901058000269</td>
                    <td class="py-2 px-4"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Bakery Items</span></td>
                    <td class="py-2 px-4">₹45.00</td>
                    <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">100</span></td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:underline" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Pasta Delight</td>
                    <td class="py-2 px-4">8901058000270</td>
                    <td class="py-2 px-4"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Organic Products</span></td>
                    <td class="py-2 px-4">₹48.00</td>
                    <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">14</span></td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:underline" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Instant Soup</td>
                    <td class="py-2 px-4">8901058000271</td>
                    <td class="py-2 px-4"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Instant Foods</span></td>
                    <td class="py-2 px-4">₹28.00</td>
                    <td class="py-2 px-4"><span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">1</span></td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:underline" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Cup Noodles</td>
                    <td class="py-2 px-4">8901058000272</td>
                    <td class="py-2 px-4"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Frozen Foods</span></td>
                    <td class="py-2 px-4">₹29.00</td>
                    <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">136</span></td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:underline" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Rice Bowl</td>
                    <td class="py-2 px-4">8901058000273</td>
                    <td class="py-2 px-4"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Confectionery</span></td>
                    <td class="py-2 px-4">₹29.00</td>
                    <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">141</span></td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:underline" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Paneer Tikka Wrap</td>
                    <td class="py-2 px-4">8901058000274</td>
                    <td class="py-2 px-4"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Confectionery</span></td>
                    <td class="py-2 px-4">₹52.00</td>
                    <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">126</span></td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:underline" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Veg Biryani</td>
                    <td class="py-2 px-4">8901058000275</td>
                    <td class="py-2 px-4"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Instant Foods</span></td>
                    <td class="py-2 px-4">₹41.00</td>
                    <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">79</span></td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:underline" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Chicken Curry</td>
                    <td class="py-2 px-4">8901058000276</td>
                    <td class="py-2 px-4"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Bakery Items</span></td>
                    <td class="py-2 px-4">₹48.00</td>
                    <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">127</span></td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:underline" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Fresh Milk</td>
                    <td class="py-2 px-4">8901058000277</td>
                    <td class="py-2 px-4"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Dairy</span></td>
                    <td class="py-2 px-4">₹55.00</td>
                    <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">60</span></td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:underline" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Brown Bread</td>
                    <td class="py-2 px-4">8901058000278</td>
                    <td class="py-2 px-4"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Bakery Items</span></td>
                    <td class="py-2 px-4">₹35.00</td>
                    <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">45</span></td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:underline" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Tomato Ketchup</td>
                    <td class="py-2 px-4">8901058000279</td>
                    <td class="py-2 px-4"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Condiments</span></td>
                    <td class="py-2 px-4">₹65.00</td>
                    <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">32</span></td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:underline" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Potato Chips</td>
                    <td class="py-2 px-4">8901058000280</td>
                    <td class="py-2 px-4"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Snacks</span></td>
                    <td class="py-2 px-4">₹20.00</td>
                    <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">200</span></td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:underline" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">Eggs (12 pack)</td>
                    <td class="py-2 px-4">8901058000281</td>
                    <td class="py-2 px-4"><span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Dairy</span></td>
                    <td class="py-2 px-4">₹70.00</td>
                    <td class="py-2 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">50</span></td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-2.828 0L9 13z"/></svg>
                        </button>
                        <button class="text-red-600 hover:underline" title="Delete">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Add Product Modal -->
<div id="addProductModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40 hidden">
    <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md relative">
        <button id="closeProductModal" class="absolute top-3 right-3 text-gray-500 hover:text-red-500 text-2xl"><svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
        <h2 class="text-xl font-bold mb-4 flex items-center gap-2"><svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg> Add Product</h2>
        <form>
            <div class="mb-4">
                <label class="block font-semibold mb-1">Product Name</label>
                <input type="text" class="w-full border rounded px-3 py-2" placeholder="Enter product name" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-1">SKU</label>
                <input type="text" class="w-full border rounded px-3 py-2" placeholder="Enter SKU" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-1">Category</label>
                <select class="w-full border rounded px-3 py-2" required>
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
                <label class="block font-semibold mb-1">Price</label>
                <input type="number" class="w-full border rounded px-3 py-2" placeholder="Enter price" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-1">Quantity</label>
                <input type="number" class="w-full border rounded px-3 py-2" placeholder="Enter quantity" required>
            </div>
            <div class="mb-6">
                <label class="block font-semibold mb-1">Image</label>
                <input type="file" class="w-full border rounded px-3 py-2">
            </div>
            <div class="flex gap-3 mt-6">
                <button type="button" id="cancelProductModal" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-5 py-2 rounded shadow w-1/2">Cancel</button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded shadow w-1/2">Add Product</button>
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