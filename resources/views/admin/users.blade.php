@extends('admin.layout')

@section('title', 'Users')

@section('content')
<div class="p-2 md:p-6">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-2">
        <h1 class="text-2xl md:text-3xl font-extrabold text-gray-800 tracking-tight">Users</h1>
        <button class="flex items-center gap-2 bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white font-semibold px-6 py-2 rounded-lg shadow transition-all duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
            </svg>
            Add User
        </button>
    </div>
    <div class="bg-white rounded-2xl shadow-lg overflow-x-auto border border-gray-100">
        <table class="min-w-full text-sm md:text-base">
            <thead>
                <tr class="bg-gradient-to-r from-gray-100 to-gray-200 text-gray-700 uppercase text-xs tracking-wider">
                    <th class="py-3 px-5 rounded-tl-2xl">#</th>
                    <th class="py-3 px-5">Name</th>
                    <th class="py-3 px-5">Email</th>
                    <th class="py-3 px-5">Role</th>
                    <th class="py-3 px-5 rounded-tr-2xl">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 px-5 font-semibold text-gray-500">1</td>
                    <td class="py-3 px-5 flex items-center gap-3">
                        <span class="inline-block w-8 h-8 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-bold">J</span>
                        John Doe
                    </td>
                    <td class="py-3 px-5 text-gray-600">john@example.com</td>
                    <td class="py-3 px-5">
                        <span class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Admin</span>
                    </td>
                    <td class="py-3 px-5 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium px-3 py-1 rounded transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6-6 3 3-6 6H9v-3z"/>
                            </svg>
                            Edit
                        </button>
                        <button class="flex items-center gap-1 text-red-600 hover:text-red-800 font-medium px-3 py-1 rounded transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Delete
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 px-5 font-semibold text-gray-500">2</td>
                    <td class="py-3 px-5 flex items-center gap-3">
                        <span class="inline-block w-8 h-8 bg-pink-100 text-pink-700 rounded-full flex items-center justify-center font-bold">J</span>
                        Jane Smith
                    </td>
                    <td class="py-3 px-5 text-gray-600">jane@example.com</td>
                    <td class="py-3 px-5">
                        <span class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Admin</span>
                    </td>
                    <td class="py-3 px-5 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium px-3 py-1 rounded transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6-6 3 3-6 6H9v-3z"/>
                            </svg>
                            Edit
                        </button>
                        <button class="flex items-center gap-1 text-red-600 hover:text-red-800 font-medium px-3 py-1 rounded transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Delete
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 px-5 font-semibold text-gray-500">3</td>
                    <td class="py-3 px-5 flex items-center gap-3">
                        <span class="inline-block w-8 h-8 bg-yellow-100 text-yellow-700 rounded-full flex items-center justify-center font-bold">A</span>
                        Amit Kumar
                    </td>
                    <td class="py-3 px-5 text-gray-600">amitkumar@example.com</td>
                    <td class="py-3 px-5">
                        <span class="inline-block px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-semibold">Guest</span>
                    </td>
                    <td class="py-3 px-5 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium px-3 py-1 rounded transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6-6 3 3-6 6H9v-3z"/>
                            </svg>
                            Edit
                        </button>
                        <button class="flex items-center gap-1 text-red-600 hover:text-red-800 font-medium px-3 py-1 rounded transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Delete
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 px-5 font-semibold text-gray-500">4</td>
                    <td class="py-3 px-5 flex items-center gap-3">
                        <span class="inline-block w-8 h-8 bg-purple-100 text-purple-700 rounded-full flex items-center justify-center font-bold">P</span>
                        Priya Verma
                    </td>
                    <td class="py-3 px-5 text-gray-600">priya.verma@example.com</td>
                    <td class="py-3 px-5">
                        <span class="inline-block px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-semibold">Guest</span>
                    </td>
                    <td class="py-3 px-5 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium px-3 py-1 rounded transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6-6 3 3-6 6H9v-3z"/>
                            </svg>
                            Edit
                        </button>
                        <button class="flex items-center gap-1 text-red-600 hover:text-red-800 font-medium px-3 py-1 rounded transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Delete
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 px-5 font-semibold text-gray-500">5</td>
                    <td class="py-3 px-5 flex items-center gap-3">
                        <span class="inline-block w-8 h-8 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center font-bold">R</span>
                        Rahul Singh
                    </td>
                    <td class="py-3 px-5 text-gray-600">rahul.singh@example.com</td>
                    <td class="py-3 px-5">
                        <span class="inline-block px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-semibold">Guest</span>
                    </td>
                    <td class="py-3 px-5 flex gap-2">
                        <button class="flex items-center gap-1 text-blue-600 hover:text-blue-800 font-medium px-3 py-1 rounded transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536M9 13l6-6 3 3-6 6H9v-3z"/>
                            </svg>
                            Edit
                        </button>
                        <button class="flex items-center gap-1 text-red-600 hover:text-red-800 font-medium px-3 py-1 rounded transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection