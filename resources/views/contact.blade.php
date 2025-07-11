@extends('layout')

@section('title', 'Contact Us | Blingit Grocery')

@section('content')
<div class="bg-gradient-to-br from-yellow-50 via-green-50 to-white min-h-screen py-12">
    <div class="container mx-auto px-4">
        <h1
            class="text-3xl md:text-4xl font-extrabold text-green-800 mb-2 text-center flex items-center justify-center gap-2">
            <i class="bi bi-chat-dots-fill text-yellow-500 text-4xl"></i>
            Contact Us
        </h1>
        <p class="text-center text-gray-600 text-lg mb-10">Have a question or feedback? We'd love to hear from you!</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Form -->
            <form class="bg-white rounded-2xl shadow-xl border-2 border-green-100 p-8 space-y-5">
                <div>
                    <label class="block mb-1 font-semibold text-gray-700">Name</label>
                    <input type="text"
                        class="w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Your Name">
                </div>
                <div>
                    <label class="block mb-1 font-semibold text-gray-700">Email</label>
                    <input type="email"
                        class="w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Your Email">
                </div>
                <div>
                    <label class="block mb-1 font-semibold text-gray-700">Message</label>
                    <textarea rows="5"
                        class="w-full px-4 py-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500"
                        placeholder="Your Message"></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-xl transition shadow-lg hover:-translate-y-0.5">
                    Send Message
                </button>
            </form>
            <!-- Contact Info -->
            <div
                class="bg-white rounded-2xl shadow-xl border-2 border-yellow-100 p-8 flex flex-col justify-center gap-6">
                <!-- Customer Support -->
                <div class="flex items-start gap-4">
                    <i class="bi bi-envelope-fill text-yellow-500 text-3xl"></i>
                    <div>
                        <div class="text-gray-800 font-bold">Customer Support</div>
                        <div class="text-gray-600">support@blingit.com</div>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-start gap-4">
                    <i class="bi bi-telephone-fill text-green-600 text-3xl"></i>
                    <div>
                        <div class="text-gray-800 font-bold">Phone</div>
                        <div class="text-gray-600">+91 98765 43210</div>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="flex items-start gap-4">
                    <i class="bi bi-whatsapp text-green-500 text-3xl"></i>
                    <div>
                        <div class="text-gray-800 font-bold">WhatsApp Support</div>
                        <div class="text-gray-600">+91 90000 12345</div>
                    </div>
                </div>

                <!-- Sales -->
                <div class="flex items-start gap-4">
                    <i class="bi bi-briefcase-fill text-blue-500 text-3xl"></i>
                    <div>
                        <div class="text-gray-800 font-bold">Sales Enquiries</div>
                        <div class="text-gray-600">sales@blingit.com</div>
                    </div>
                </div>

                <!-- Address -->
                <div class="flex items-start gap-4">
                    <i class="bi bi-geo-alt-fill text-red-500 text-3xl"></i>
                    <div>
                        <div class="text-gray-800 font-bold">Corporate Office</div>
                        <div class="text-gray-600">123, Market Street, Mumbai, Maharashtra, India - 400001</div>
                    </div>
                </div>

                <!-- Warehouse -->
                <div class="flex items-start gap-4">
                    <i class="bi bi-box-seam text-indigo-500 text-3xl"></i>
                    <div>
                        <div class="text-gray-800 font-bold">Warehouse</div>
                        <div class="text-gray-600">Plot No. 78, MIDC Industrial Area, Navi Mumbai</div>
                    </div>
                </div>

                <!-- Office Hours -->
                <div class="flex items-start gap-4">
                    <i class="bi bi-clock-fill text-purple-600 text-3xl"></i>
                    <div>
                        <div class="text-gray-800 font-bold">Office Hours</div>
                        <div class="text-gray-600">Mon - Sat: 9:00 AM – 6:00 PM</div>
                    </div>
                </div>

                <!-- Website -->
                <div class="flex items-start gap-4">
                    <i class="bi bi-globe text-cyan-600 text-3xl"></i>
                    <div>
                        <div class="text-gray-800 font-bold">Website</div>
                        <div class="text-gray-600">
                            <a href="https://www.blingit.com" target="_blank"
                                class="text-green-600 hover:underline">www.blingit.com</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection