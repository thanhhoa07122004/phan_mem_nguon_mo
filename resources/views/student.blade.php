<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-50 to-purple-100 min-h-screen">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-lg shadow-2xl overflow-hidden">
                <!-- Header -->
                <div class="bg-gradient-to-r from-indigo-600 to-purple-600 px-6 py-8">
                    <h1 class="text-3xl font-bold text-white text-center">Thông tin sinh viên</h1>
                </div>

                <!-- Content -->
                <div class="p-8">
                    <div class="space-y-6">
                        <div class="border-b pb-4">
                            <label class="block text-sm font-medium text-gray-500 uppercase tracking-wide mb-2">Họ tên</label>
                            <p class="text-2xl font-semibold text-gray-900">{{ $name }}</p>
                        </div>
                        <div class="border-b pb-4">
                            <label class="block text-sm font-medium text-gray-500 uppercase tracking-wide mb-2">Mã số sinh viên (MSSV)</label>
                            <p class="text-2xl font-semibold text-indigo-600">{{ $mssv }}</p>
                        </div>
                    </div>

                    <!-- Action Button -->
                    <a href="{{ route('home') }}" class="mt-8 w-full inline-block bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold py-3 px-6 rounded-lg text-center transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Quay lại trang chủ
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
