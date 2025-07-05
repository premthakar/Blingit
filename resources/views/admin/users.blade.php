@extends('admin.layout')

@section('title', 'Users')

@section('content')
<div class="p-2 md:p-6">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-2">
        <h1 class="text-xl md:text-2xl font-bold">Users</h1>
        <button class="bg-green-600 hover:bg-green-700 text-white font-medium px-4 py-2 rounded">Add User</button>
    </div>
    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="min-w-full text-sm md:text-base">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="py-2 px-4">#</th>
                    <th class="py-2 px-4">Name</th>
                    <th class="py-2 px-4">Email</th>
                    <th class="py-2 px-4">Role</th>
                    <th class="py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4">1</td>
                    <td class="py-2 px-4">John Doe</td>
                    <td class="py-2 px-4">john@example.com</td>
                    <td class="py-2 px-4">Admin</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">Edit</button>
                        <button class="text-red-600 hover:underline" title="Delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">2</td>
                    <td class="py-2 px-4">Jane Smith</td>
                    <td class="py-2 px-4">jane@example.com</td>
                    <td class="py-2 px-4">Admin</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">Edit</button>
                        <button class="text-red-600 hover:underline" title="Delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">3</td>
                    <td class="py-2 px-4">Amit Kumar</td>
                    <td class="py-2 px-4">amitkumar@example.com</td>
                    <td class="py-2 px-4">Guest</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">Edit</button>
                        <button class="text-red-600 hover:underline" title="Delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">4</td>
                    <td class="py-2 px-4">Priya Verma</td>
                    <td class="py-2 px-4">priya.verma@example.com</td>
                    <td class="py-2 px-4">Guest</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">Edit</button>
                        <button class="text-red-600 hover:underline" title="Delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4">5</td>
                    <td class="py-2 px-4">Rahul Singh</td>
                    <td class="py-2 px-4">rahul.singh@example.com</td>
                    <td class="py-2 px-4">Guest</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="Edit">Edit</button>
                        <button class="text-red-600 hover:underline" title="Delete">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection 