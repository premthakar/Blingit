@extends('admin.layout')

@section('title', 'Contact Messages')

@section('content')
<div class="p-2 md:p-6">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-2">
        <h1 class="text-xl md:text-2xl font-bold">Contact Messages</h1>
        <button class="bg-green-600 hover:bg-green-700 text-white font-medium px-4 py-2 rounded">
            <i class="fas fa-envelope-open-text mr-1"></i> Export
        </button>
    </div>

    <div class="bg-white rounded shadow overflow-x-auto">
        <table class="min-w-full text-sm md:text-base">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="py-2 px-4">#</th>
                    <th class="py-2 px-4">Name</th>
                    <th class="py-2 px-4">Email</th>
                    <th class="py-2 px-4">Subject</th>
                    <th class="py-2 px-4">Message</th>
                    <th class="py-2 px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td class="py-2 px-4">1</td>
                    <td class="py-2 px-4">Aarav Patel</td>
                    <td class="py-2 px-4">aarav@example.com</td>
                    <td class="py-2 px-4">Product Inquiry</td>
                    <td class="py-2 px-4 truncate max-w-xs">Hello, I want to know more about your products...</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="View"><i class="fas fa-eye"></i></button>
                        <button class="text-red-600 hover:underline" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4">2</td>
                    <td class="py-2 px-4">Sneha Mehta</td>
                    <td class="py-2 px-4">sneha@example.com</td>
                    <td class="py-2 px-4">Feedback</td>
                    <td class="py-2 px-4 truncate max-w-xs">Great service! Just wanted to say thanks...</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="View"><i class="fas fa-eye"></i></button>
                        <button class="text-red-600 hover:underline" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4">2</td>
                    <td class="py-2 px-4">Sneha Mehta</td>
                    <td class="py-2 px-4">sneha@example.com</td>
                    <td class="py-2 px-4">Feedback</td>
                    <td class="py-2 px-4 truncate max-w-xs">Great service! Just wanted to say thanks...</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="View"><i class="fas fa-eye"></i></button>
                        <button class="text-red-600 hover:underline" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4">2</td>
                    <td class="py-2 px-4">Sneha Mehta</td>
                    <td class="py-2 px-4">sneha@example.com</td>
                    <td class="py-2 px-4">Feedback</td>
                    <td class="py-2 px-4 truncate max-w-xs">Great service! Just wanted to say thanks...</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="View"><i class="fas fa-eye"></i></button>
                        <button class="text-red-600 hover:underline" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4">2</td>
                    <td class="py-2 px-4">Sneha Mehta</td>
                    <td class="py-2 px-4">sneha@example.com</td>
                    <td class="py-2 px-4">Feedback</td>
                    <td class="py-2 px-4 truncate max-w-xs">Great service! Just wanted to say thanks...</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="View"><i class="fas fa-eye"></i></button>
                        <button class="text-red-600 hover:underline" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4">2</td>
                    <td class="py-2 px-4">Sneha Mehta</td>
                    <td class="py-2 px-4">sneha@example.com</td>
                    <td class="py-2 px-4">Feedback</td>
                    <td class="py-2 px-4 truncate max-w-xs">Great service! Just wanted to say thanks...</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="View"><i class="fas fa-eye"></i></button>
                        <button class="text-red-600 hover:underline" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4">2</td>
                    <td class="py-2 px-4">Sneha Mehta</td>
                    <td class="py-2 px-4">sneha@example.com</td>
                    <td class="py-2 px-4">Feedback</td>
                    <td class="py-2 px-4 truncate max-w-xs">Great service! Just wanted to say thanks...</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="View"><i class="fas fa-eye"></i></button>
                        <button class="text-red-600 hover:underline" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4">2</td>
                    <td class="py-2 px-4">Sneha Mehta</td>
                    <td class="py-2 px-4">sneha@example.com</td>
                    <td class="py-2 px-4">Feedback</td>
                    <td class="py-2 px-4 truncate max-w-xs">Great service! Just wanted to say thanks...</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="View"><i class="fas fa-eye"></i></button>
                        <button class="text-red-600 hover:underline" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4">2</td>
                    <td class="py-2 px-4">Sneha Mehta</td>
                    <td class="py-2 px-4">sneha@example.com</td>
                    <td class="py-2 px-4">Feedback</td>
                    <td class="py-2 px-4 truncate max-w-xs">Great service! Just wanted to say thanks...</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="View"><i class="fas fa-eye"></i></button>
                        <button class="text-red-600 hover:underline" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4">2</td>
                    <td class="py-2 px-4">Sneha Mehta</td>
                    <td class="py-2 px-4">sneha@example.com</td>
                    <td class="py-2 px-4">Feedback</td>
                    <td class="py-2 px-4 truncate max-w-xs">Great service! Just wanted to say thanks...</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="View"><i class="fas fa-eye"></i></button>
                        <button class="text-red-600 hover:underline" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4">2</td>
                    <td class="py-2 px-4">Sneha Mehta</td>
                    <td class="py-2 px-4">sneha@example.com</td>
                    <td class="py-2 px-4">Feedback</td>
                    <td class="py-2 px-4 truncate max-w-xs">Great service! Just wanted to say thanks...</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="View"><i class="fas fa-eye"></i></button>
                        <button class="text-red-600 hover:underline" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4">2</td>
                    <td class="py-2 px-4">Sneha Mehta</td>
                    <td class="py-2 px-4">sneha@example.com</td>
                    <td class="py-2 px-4">Feedback</td>
                    <td class="py-2 px-4 truncate max-w-xs">Great service! Just wanted to say thanks...</td>
                    <td class="py-2 px-4 flex gap-2">
                        <button class="text-blue-600 hover:underline" title="View"><i class="fas fa-eye"></i></button>
                        <button class="text-red-600 hover:underline" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                
                <!-- Add more rows dynamically -->
            </tbody>
        </table>
    </div>
</div>
@endsection
