@extends('admin.layout')

@section('title', 'Coupons Management')

@section('content')
<div class="p-6">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
        <h1 class="text-2xl font-bold">Coupons Management</h1>
        <div class="flex gap-2">
            <button
                class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2 rounded shadow transition">
                <i class="bi bi-file-earmark-arrow-down"></i> Export to CSV
            </button>
            <button
                class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded shadow transition"
                id="addCouponBtn">
                <i class="bi bi-plus-lg"></i> Add Coupon
            </button>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-2 mb-4">
        <input type="text" placeholder="Search coupons by code..."
            class="w-full md:w-1/2 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400" />
        <select class="w-full md:w-1/6 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-400">
            <option>All Types</option>
            <option>Percentage</option>
            <option>Flat</option>
        </select>
    </div>
    <div class="bg-white rounded-xl shadow border p-4 overflow-x-auto">
        <table class="min-w-full">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="py-2 px-4">Code</th>
                    <th class="py-2 px-4">Discount</th>
                    <th class="py-2 px-4">Type</th>
                    <th class="py-2 px-4">Expiry</th>
                    <th class="py-2 px-4">Status</th>
                    <th class="py-2 px-4 min-w-[80px]">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-2 px-4 font-semibold">WELCOME10</td>
                    <td class="py-2 px-4">10%</td>
                    <td class="py-2 px-4"><span
                            class="bg-blue-100 text-blue-700 text-xs font-semibold px-2 py-1 rounded">Percentage</span>
                    </td>
                    <td class="py-2 px-4">2024-12-31</td>
                    <td class="py-2 px-4"><span
                            class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded">Active</span>
                    </td>
                    <td class="py-2 px-4 min-w-[100px] flex gap-2">
                        <button
                            class="flex items-center gap-1 text-sm bg-blue-600 hover:bg-blue-700 text-white font-semibold px-3 py-1 rounded shadow transition">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                        <button
                            class="flex items-center gap-1 text-sm bg-red-600 hover:bg-red-700 text-white font-semibold px-3 py-1 rounded shadow transition">
                            <i class="bi bi-x-lg"></i> Delete
                        </button>
                    </td>

                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-2 px-4 font-semibold">FRESH50</td>
                    <td class="py-2 px-4">₹50</td>
                    <td class="py-2 px-4"><span
                            class="bg-blue-100 text-blue-700 text-xs font-semibold px-2 py-1 rounded">Flat</span></td>
                    <td class="py-2 px-4">2024-11-30</td>
                    <td class="py-2 px-4"><span
                            class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded">Active</span>
                    </td>
                    <td class="py-2 px-4 min-w-[100px] flex gap-2">
                        <button
                            class="flex items-center gap-1 text-sm bg-blue-600 hover:bg-blue-700 text-white font-semibold px-3 py-1 rounded shadow transition">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                        <button
                            class="flex items-center gap-1 text-sm bg-red-600 hover:bg-red-700 text-white font-semibold px-3 py-1 rounded shadow transition">
                            <i class="bi bi-x-lg"></i> Delete
                        </button>
                    </td>

                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-50 transition">
                    <td class="py-2 px-4 font-semibold">BLING20</td>
                    <td class="py-2 px-4">20%</td>
                    <td class="py-2 px-4"><span
                            class="bg-blue-100 text-blue-700 text-xs font-semibold px-2 py-1 rounded">Percentage</span>
                    </td>
                    <td class="py-2 px-4">2024-10-15</td>
                    <td class="py-2 px-4"><span
                            class="bg-red-100 text-red-700 text-xs font-semibold px-2 py-1 rounded">Expired</span></td>
                    <td class="py-2 px-4 min-w-[100px] flex gap-2">
                        <button
                            class="flex items-center gap-1 text-sm bg-blue-600 hover:bg-blue-700 text-white font-semibold px-3 py-1 rounded shadow transition">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                        <button
                            class="flex items-center gap-1 text-sm bg-red-600 hover:bg-red-700 text-white font-semibold px-3 py-1 rounded shadow transition">
                            <i class="bi bi-x-lg"></i> Delete
                        </button>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Add Coupon Modal -->
<div id="addCouponModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-40 hidden">
    <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md relative">
        <button id="closeCouponModal" class="absolute top-3 right-3 text-gray-500 hover:text-red-500 text-2xl"><i
                class="bi bi-x-lg"></i></button>
        <h2 class="text-xl font-bold mb-4 flex items-center gap-2"><i class="bi bi-plus-lg text-blue-600"></i> Add
            Coupon</h2>
        <form>
            <div class="mb-4">
                <label class="block font-semibold mb-1">Code</label>
                <input type="text" class="w-full border rounded px-3 py-2" placeholder="Enter coupon code" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-1">Discount</label>
                <input type="text" class="w-full border rounded px-3 py-2" placeholder="e.g. 10% or 100" required>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-1">Type</label>
                <select class="w-full border rounded px-3 py-2" required>
                    <option value="">-- Select Type --</option>
                    <option value="percentage">Percentage</option>
                    <option value="flat">Flat</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-1">Expiry</label>
                <input type="date" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-6">
                <label class="block font-semibold mb-1">Status</label>
                <select class="w-full border rounded px-3 py-2" required>
                    <option value="active">Active</option>
                    <option value="expired">Expired</option>
                </select>
            </div>
            <div class="flex gap-3 mt-6">
                <button type="button" id="cancelCouponModal"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-5 py-2 rounded shadow w-1/2">Cancel</button>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded shadow w-1/2">Add
                    Coupon</button>
            </div>
        </form>
    </div>
</div>

<script>
function toggleDropdown(btn) {
    // Close all other dropdowns
    document.querySelectorAll('.dropdown-menu').forEach(menu => menu.classList.add('hidden'));
    // Toggle this one
    btn.nextElementSibling.classList.toggle('hidden');
    // Close on click outside
    document.addEventListener('click', function handler(e) {
        if (!btn.parentNode.contains(e.target)) {
            btn.nextElementSibling.classList.add('hidden');
            document.removeEventListener('click', handler);
        }
    });
}

document.getElementById('addCouponBtn').addEventListener('click', function() {
    document.getElementById('addCouponModal').classList.remove('hidden');
});

document.getElementById('closeCouponModal').addEventListener('click', function() {
    document.getElementById('addCouponModal').classList.add('hidden');
});

document.getElementById('cancelCouponModal').addEventListener('click', function() {
    document.getElementById('addCouponModal').classList.add('hidden');
});

window.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        document.getElementById('addCouponModal').classList.add('hidden');
    }
});
</script>
@endsection