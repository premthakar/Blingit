@extends('admin.layout')

@section('title', 'Category Management')

@section('content')
<div class="p-6">
    <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
        <h1 class="text-2xl font-bold">Category Management</h1>
        <button id="addCategoryBtn" class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2 rounded shadow transition">
            <i class="bi bi-plus-lg text-lg"></i>
            Add Category
        </button>
    </div>
    <div class="bg-white rounded-xl shadow border p-4 overflow-x-auto">
        <table class="min-w-full rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="py-3 px-4 font-semibold">#</th>
                    <th class="py-3 px-4 font-semibold">Name</th>
                    <th class="py-3 px-4 font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-3 px-4 font-semibold">1</td>
                    <td class="py-3 px-4"><span class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded"></i>Fruits</span></td>
                    <td class="py-3 px-4 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:bg-blue-50 px-3 py-1 rounded transition"><i class="bi bi-pencil"></i> Edit</button>
                        <button class="flex items-center gap-1 text-red-600 hover:bg-red-50 px-3 py-1 rounded transition"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-3 px-4 font-semibold">2</td>
                    <td class="py-3 px-4"><span class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded"></i>Vegetables</span></td>
                    <td class="py-3 px-4 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:bg-blue-50 px-3 py-1 rounded transition"><i class="bi bi-pencil"></i> Edit</button>
                        <button class="flex items-center gap-1 text-red-600 hover:bg-red-50 px-3 py-1 rounded transition"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-3 px-4 font-semibold">3</td>
                    <td class="py-3 px-4"><span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-2 py-1 rounded"></i>Dairy & Eggs</span></td>
                    <td class="py-3 px-4 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:bg-blue-50 px-3 py-1 rounded transition"><i class="bi bi-pencil"></i> Edit</button>
                        <button class="flex items-center gap-1 text-red-600 hover:bg-red-50 px-3 py-1 rounded transition"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-3 px-4 font-semibold">4</td>
                    <td class="py-3 px-4"><span class="bg-orange-100 text-orange-700 text-xs font-semibold px-2 py-1 rounded"></i>Bakery</span></td>
                    <td class="py-3 px-4 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:bg-blue-50 px-3 py-1 rounded transition"><i class="bi bi-pencil"></i> Edit</button>
                        <button class="flex items-center gap-1 text-red-600 hover:bg-red-50 px-3 py-1 rounded transition"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-3 px-4 font-semibold">5</td>
                    <td class="py-3 px-4"><span class="bg-pink-100 text-pink-700 text-xs font-semibold px-2 py-1 rounded"></i>Snacks</span></td>
                    <td class="py-3 px-4 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:bg-blue-50 px-3 py-1 rounded transition"><i class="bi bi-pencil"></i> Edit</button>
                        <button class="flex items-center gap-1 text-red-600 hover:bg-red-50 px-3 py-1 rounded transition"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-3 px-4 font-semibold">6</td>
                    <td class="py-3 px-4"><span class="bg-blue-100 text-blue-700 text-xs font-semibold px-2 py-1 rounded"></i>Beverages</span></td>
                    <td class="py-3 px-4 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:bg-blue-50 px-3 py-1 rounded transition"><i class="bi bi-pencil"></i> Edit</button>
                        <button class="flex items-center gap-1 text-red-600 hover:bg-red-50 px-3 py-1 rounded transition"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-3 px-4 font-semibold">7</td>
                    <td class="py-3 px-4"><span class="bg-purple-100 text-purple-700 text-xs font-semibold px-2 py-1 rounded"></i>Personal Care</span></td>
                    <td class="py-3 px-4 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:bg-blue-50 px-3 py-1 rounded transition"><i class="bi bi-pencil"></i> Edit</button>
                        <button class="flex items-center gap-1 text-red-600 hover:bg-red-50 px-3 py-1 rounded transition"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-3 px-4 font-semibold">8</td>
                    <td class="py-3 px-4"><span class="bg-gray-100 text-gray-700 text-xs font-semibold px-2 py-1 rounded"></i>Household</span></td>
                    <td class="py-3 px-4 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:bg-blue-50 px-3 py-1 rounded transition"><i class="bi bi-pencil"></i> Edit</button>
                        <button class="flex items-center gap-1 text-red-600 hover:bg-red-50 px-3 py-1 rounded transition"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-3 px-4 font-semibold">9</td>
                    <td class="py-3 px-4"><span class="bg-cyan-100 text-cyan-700 text-xs font-semibold px-2 py-1 rounded"></i>Frozen Foods</span></td>
                    <td class="py-3 px-4 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:bg-blue-50 px-3 py-1 rounded transition"><i class="bi bi-pencil"></i> Edit</button>
                        <button class="flex items-center gap-1 text-red-600 hover:bg-red-50 px-3 py-1 rounded transition"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-3 px-4 font-semibold">10</td>
                    <td class="py-3 px-4"><span class="bg-emerald-100 text-emerald-700 text-xs font-semibold px-2 py-1 rounded"></i>Organic</span></td>
                    <td class="py-3 px-4 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:bg-blue-50 px-3 py-1 rounded transition"><i class="bi bi-pencil"></i> Edit</button>
                        <button class="flex items-center gap-1 text-red-600 hover:bg-red-50 px-3 py-1 rounded transition"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-3 px-4 font-semibold">11</td>
                    <td class="py-3 px-4"><span class="bg-red-100 text-red-700 text-xs font-semibold px-2 py-1 rounded"></i>Spices</span></td>
                    <td class="py-3 px-4 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:bg-blue-50 px-3 py-1 rounded transition"><i class="bi bi-pencil"></i> Edit</button>
                        <button class="flex items-center gap-1 text-red-600 hover:bg-red-50 px-3 py-1 rounded transition"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-3 px-4 font-semibold">12</td>
                    <td class="py-3 px-4"><span class="bg-amber-100 text-amber-700 text-xs font-semibold px-2 py-1 rounded"></i>Grains</span></td>
                    <td class="py-3 px-4 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:bg-blue-50 px-3 py-1 rounded transition"><i class="bi bi-pencil"></i> Edit</button>
                        <button class="flex items-center gap-1 text-red-600 hover:bg-red-50 px-3 py-1 rounded transition"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div id="addCategoryModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40 hidden">
    <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md relative">
        <button id="closeCategoryModal" class="absolute top-3 right-3 text-gray-500 hover:text-red-500 text-2xl"><i class="bi bi-x-lg"></i></button>
        <h2 class="text-xl font-bold mb-4 flex items-center gap-2"><i class="bi bi-plus-lg text-green-600"></i> Add Category</h2>
        <form>
            <div class="mb-4">
                <label class="block font-semibold mb-1">Category Name</label>
                <input type="text" class="w-full border rounded px-3 py-2" placeholder="Enter category name" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-1">Badge Color</label>
                <input type="color" class="w-12 h-8 p-0 border rounded" value="#22c55e">
            </div>
            <div class="flex gap-3 mt-6">
                <button type="button" id="cancelCategoryModal" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-5 py-2 rounded shadow w-1/2">Cancel</button>
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2 rounded shadow w-1/2">Add Category</button>
            </div>
        </form>
    </div>
</div>
<script>
document.getElementById('addCategoryBtn').addEventListener('click', function() {
    document.getElementById('addCategoryModal').classList.remove('hidden');
});
document.getElementById('closeCategoryModal').addEventListener('click', function() {
    document.getElementById('addCategoryModal').classList.add('hidden');
});
document.getElementById('cancelCategoryModal').addEventListener('click', function() {
    document.getElementById('addCategoryModal').classList.add('hidden');
});
window.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        document.getElementById('addCategoryModal').classList.add('hidden');
    }
});
</script>
@endsection 