@extends('admin.layout')

@section('title', 'Contact Messages')

@section('content')
{{-- 
  This Blade template provides a modern, responsive "Contact Messages" management page.
  - It's styled entirely with Tailwind CSS, matching the "Blingit Grocery" theme.
  - Features a clean header, an improved table layout, and an interactive modal for viewing full messages.
  - The page is fully responsive for a seamless experience on all devices.
  - All icons are replaced with high-quality inline SVGs for optimal performance.
--}}

<div>
    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-extrabold text-gray-800">Contact Messages</h1>
            <p class="text-gray-500 mt-1">Review and respond to inquiries from your customers.</p>
        </div>
        <button class="w-full sm:w-auto flex items-center justify-center gap-2 bg-green-600 hover:bg-green-700 text-white font-bold px-5 py-2.5 rounded-lg shadow-lg hover:shadow-green-500/30 transition-all duration-300 transform hover:-translate-y-0.5 mt-4 sm:mt-0">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
            Export All
        </button>
    </div>

    <!-- Messages Table -->
    <div class="bg-white rounded-2xl shadow-lg border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="py-3 px-6 text-left font-semibold text-gray-600">#</th>
                        <th class="py-3 px-6 text-left font-semibold text-gray-600">From</th>
                        <th class="py-3 px-6 text-left font-semibold text-gray-600">Subject</th>
                        <th class="py-3 px-6 text-left font-semibold text-gray-600">Message</th>
                        <th class="py-3 px-6 text-left font-semibold text-gray-600">Received</th>
                        <th class="py-3 px-6 text-left font-semibold text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @php
                        $messages = [
                            ['id' => 1, 'name' => 'Aarav Patel', 'email' => 'aarav@example.com', 'subject' => 'Product Inquiry', 'message' => 'Hello, I would like to know more about the organic vegetables. Are they certified? Thanks!', 'date' => 'July 18, 2025'],
                            ['id' => 2, 'name' => 'Sneha Mehta', 'email' => 'sneha@example.com', 'subject' => 'Feedback on Delivery', 'message' => 'Great service! My order arrived in less than 10 minutes. Just wanted to say thanks for the amazing speed and quality.', 'date' => 'July 17, 2025'],
                            ['id' => 3, 'name' => 'Vikram Singh', 'email' => 'vikram@example.com', 'subject' => 'Issue with my order #1002', 'message' => 'Hi, I seem to be missing an item from my recent order. Can someone please look into this?', 'date' => 'July 16, 2025'],
                        ];
                    @endphp
                    @foreach($messages as $message)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="py-4 px-6 font-semibold text-gray-700">{{ $message['id'] }}</td>
                        <td class="py-4 px-6">
                            <div class="font-medium text-gray-800">{{ $message['name'] }}</div>
                            <div class="text-xs text-gray-500">{{ $message['email'] }}</div>
                        </td>
                        <td class="py-4 px-6 font-medium text-gray-700">{{ $message['subject'] }}</td>
                        <td class="py-4 px-6 text-gray-600 truncate max-w-xs">{{ $message['message'] }}</td>
                        <td class="py-4 px-6 text-gray-600">{{ $message['date'] }}</td>
                        <td class="py-4 px-6">
                            <div class="flex items-center gap-2">
                                <button class="viewMessageBtn text-green-600 hover:text-green-800 p-2 hover:bg-green-50 rounded-full transition-colors" title="View Message"
                                    data-name="{{$message['name']}}"
                                    data-email="{{$message['email']}}"
                                    data-subject="{{$message['subject']}}"
                                    data-message="{{$message['message']}}"
                                    data-date="{{$message['date']}}">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                </button>
                                <button class="text-red-600 hover:text-red-800 p-2 hover:bg-red-50 rounded-full transition-colors" title="Delete">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- View Message Modal -->
<div id="messageModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-2xl relative transform transition-all scale-95 opacity-0">
        <button id="closeMessageModal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <h2 id="modalTitle" class="text-2xl font-bold mb-4 text-gray-800">Message Details</h2>
        <div class="border-t border-gray-200 pt-4 space-y-4">
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1 font-semibold text-gray-500">From:</div>
                <div id="modalFromName" class="col-span-2 font-medium text-gray-800"></div>
            </div>
             <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1 font-semibold text-gray-500">Email:</div>
                <div id="modalFromEmail" class="col-span-2 text-gray-600"></div>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1 font-semibold text-gray-500">Date:</div>
                <div id="modalDate" class="col-span-2 text-gray-600"></div>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1 font-semibold text-gray-500">Subject:</div>
                <div id="modalSubject" class="col-span-2 font-medium text-gray-800"></div>
            </div>
            <div class="space-y-2">
                <label class="block font-semibold text-gray-500">Message:</label>
                <p id="modalMessage" class="text-gray-700 bg-gray-50 p-4 rounded-lg border border-gray-200 whitespace-pre-wrap"></p>
            </div>
        </div>
        <div class="flex justify-end gap-4 mt-8">
            <button type="button" id="cancelMessageModal" class="bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold px-5 py-2.5 rounded-lg transition">Close</button>
            <a href="#" id="replyBtn" class="bg-green-600 hover:bg-green-700 text-white font-bold px-5 py-2.5 rounded-lg shadow-md hover:shadow-lg transition flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path></svg>
                Reply
            </a>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('messageModal');
    const modalContent = modal.querySelector('div');
    const viewBtns = document.querySelectorAll('.viewMessageBtn');
    const closeBtn = document.getElementById('closeMessageModal');
    const cancelBtn = document.getElementById('cancelMessageModal');
    
    const modalFromName = document.getElementById('modalFromName');
    const modalFromEmail = document.getElementById('modalFromEmail');
    const modalDate = document.getElementById('modalDate');
    const modalSubject = document.getElementById('modalSubject');
    const modalMessage = document.getElementById('modalMessage');
    const replyBtn = document.getElementById('replyBtn');

    function openModal(data) {
        modalFromName.textContent = data.name;
        modalFromEmail.textContent = data.email;
        modalDate.textContent = data.date;
        modalSubject.textContent = data.subject;
        modalMessage.textContent = data.message;
        replyBtn.href = `mailto:${data.email}?subject=RE: ${data.subject}`;
        
        modal.classList.remove('hidden');
        setTimeout(() => {
            modalContent.classList.remove('scale-95', 'opacity-0');
        }, 10);
    }

    function closeModal() {
        modalContent.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 200);
    }

    viewBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const data = {
                name: this.dataset.name,
                email: this.dataset.email,
                subject: this.dataset.subject,
                message: this.dataset.message,
                date: this.dataset.date,
            };
            openModal(data);
        });
    });

    closeBtn.addEventListener('click', closeModal);
    cancelBtn.addEventListener('click', closeModal);

    window.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });
});
</script>
@endsection
