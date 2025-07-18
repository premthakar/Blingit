@extends('admin.layout')

@section('title', 'Coupons Management')

@section('content')
<div class="p-8 bg-gradient-to-br from-blue-50 via-white to-green-50 min-h-screen">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
        <h1 class="text-3xl font-black text-gray-900 tracking-tight flex items-center gap-3 drop-shadow-lg">
            <i class="bi bi-ticket-perforated text-blue-600"></i>
            Coupons Management
        </h1>
        <div class="flex gap-2">
            <button class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2 rounded-2xl shadow-lg transition-all">
                <i class="bi bi-file-earmark-arrow-down"></i> Export to CSV
            </button>
            <button class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-2xl shadow-lg transition-all" id="addCouponBtn">
                <i class="bi bi-plus-lg"></i> Add Coupon
            </button>
        </div>
    </div>
    <div class="flex flex-col md:flex-row gap-4 mb-6">
        <input type="text" placeholder="Search coupons by code..." class="w-full md:w-1/2 px-5 py-3 border-0 rounded-2xl shadow focus:outline-none focus:ring-2 focus:ring-green-400 bg-white/80" />
        <select class="w-full md:w-1/6 px-5 py-3 border-0 rounded-2xl shadow focus:outline-none focus:ring-2 focus:ring-green-400 bg-white/80">
            <option>All Types</option>
            <option>Percentage</option>
            <option>Flat</option>
        </select>
    </div>
    <div class="bg-white/80 backdrop-blur-md rounded-3xl shadow-lg p-6 overflow-x-auto">
        <table class="min-w-full text-base">
            <thead>
                <tr class="bg-gradient-to-r from-blue-100 to-green-100 text-gray-900">
                    <th class="py-4 px-6 font-bold">Code</th>
                    <th class="py-4 px-6 font-bold">Discount</th>
                    <th class="py-4 px-6 font-bold">Type</th>
                    <th class="py-4 px-6 font-bold">Expiry</th>
                    <th class="py-4 px-6 font-bold">Status</th>
                    <th class="py-4 px-6 font-bold min-w-[80px]">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="even:bg-gray-50 hover:bg-green-100 transition">
                    <td class="py-4 px-6 font-mono">WELCOME10</td>
                    <td class="py-4 px-6">10%</td>
                    <td class="py-4 px-6"><span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Percentage</span></td>
                    <td class="py-4 px-6">2024-12-31</td>
                    <td class="py-4 px-6"><span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Active</span></td>
                    <td class="py-4 px-6 min-w-[100px] flex gap-2">
                        <button class="flex items-center gap-1 text-sm bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-xl shadow transition-all">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                        <button class="flex items-center gap-1 text-sm bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-xl shadow transition-all">
                            <i class="bi bi-x-lg"></i> Delete
                        </button>
                    </td>
                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-100 transition">
                    <td class="py-4 px-6 font-mono">FRESH50</td>
                    <td class="py-4 px-6">₹50</td>
                    <td class="py-4 px-6"><span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Flat</span></td>
                    <td class="py-4 px-6">2024-11-30</td>
                    <td class="py-4 px-6"><span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Active</span></td>
                    <td class="py-4 px-6 min-w-[100px] flex gap-2">
                        <button class="flex items-center gap-1 text-sm bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-xl shadow transition-all">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                        <button class="flex items-center gap-1 text-sm bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-xl shadow transition-all">
                            <i class="bi bi-x-lg"></i> Delete
                        </button>
                    </td>
                </tr>
                <tr class="even:bg-gray-50 hover:bg-green-100 transition">
                    <td class="py-4 px-6 font-mono">BLING20</td>
                    <td class="py-4 px-6">20%</td>
                    <td class="py-4 px-6"><span class="bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">Percentage</span></td>
                    <td class="py-4 px-6">2024-10-15</td>
                    <td class="py-4 px-6"><span class="bg-red-100 text-red-700 text-xs font-semibold px-3 py-1 rounded-full">Expired</span></td>
                    <td class="py-4 px-6 min-w-[100px] flex gap-2">
                        <button class="flex items-center gap-1 text-sm bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-xl shadow transition-all">
                            <i class="bi bi-pencil"></i> Edit
                        </button>
                        <button class="flex items-center gap-1 text-sm bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded-xl shadow transition-all">
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
    <div class="bg-white/90 backdrop-blur-md rounded-3xl shadow-2xl p-10 w-full max-w-md relative">
        <button id="closeCouponModal" class="absolute top-3 right-3 text-gray-500 hover:text-red-500 text-2xl"><i class="bi bi-x-lg"></i></button>
        <h2 class="text-2xl font-black mb-6 flex items-center gap-2"><i class="bi bi-plus-lg text-blue-600"></i> Add Coupon</h2>
        <form>
            <div class="mb-5">
                <label class="block font-semibold mb-1">Code</label>
                <input type="text" class="w-full border-0 rounded-2xl px-4 py-3 bg-gray-100 focus:ring-2 focus:ring-blue-400" placeholder="Enter coupon code" required>
            </div>
            <div class="mb-5">
                <label class="block font-semibold mb-1">Discount</label>
                <input type="text" class="w-full border-0 rounded-2xl px-4 py-3 bg-gray-100 focus:ring-2 focus:ring-blue-400" placeholder="e.g. 10% or 100" required>
            </div>
            <div class="mb-5">
                <label class="block font-semibold mb-1">Type</label>
                <select class="w-full border-0 rounded-2xl px-4 py-3 bg-gray-100 focus:ring-2 focus:ring-blue-400" required>
                    <option value="">-- Select Type --</option>
                    <option value="percentage">Percentage</option>
                    <option value="flat">Flat</option>
                </select>
            </div>
            <div class="mb-5">
                <label class="block font-semibold mb-1">Expiry</label>
                <input type="date" class="w-full border-0 rounded-2xl px-4 py-3 bg-gray-100 focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div class="mb-8">
                <label class="block font-semibold mb-1">Status</label>
                <select class="w-full border-0 rounded-2xl px-4 py-3 bg-gray-100 focus:ring-2 focus:ring-blue-400" required>
                    <option value="active">Active</option>
                    <option value="expired">Expired</option>
                </select>
            </div>
            <div class="flex gap-3 mt-6">
                <button type="button" id="cancelCouponModal" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-5 py-2 rounded-2xl shadow w-1/2">Cancel</button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded-2xl shadow w-1/2">Add Coupon</button>
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