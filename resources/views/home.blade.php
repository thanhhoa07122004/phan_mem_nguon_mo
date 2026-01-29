<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Ứng dụng quản lý</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-2xl">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-5xl font-bold text-gray-900 mb-4">Chào mừng bạn</h1>
                <p class="text-xl text-gray-600">Chọn chức năng bên dưới để bắt đầu</p>
            </div>

            <!-- Navigation Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Product Management -->
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2"></div>
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Quản lý sản phẩm</h2>
                        <div class="space-y-3">
                            <a href="{{ route('product.index') }}" class="flex items-center p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition-colors text-blue-600 hover:text-blue-700 font-medium">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                                Danh sách sản phẩm
                            </a>
                            <a href="{{ route('product.add') }}" class="flex items-center p-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors text-green-600 hover:text-green-700 font-medium">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                                Thêm sản phẩm
                            </a>
                            <a href="{{ route('product.show', '123') }}" class="flex items-center p-3 bg-purple-50 hover:bg-purple-100 rounded-lg transition-colors text-purple-600 hover:text-purple-700 font-medium">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                Xem chi tiết sản phẩm
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Student Info -->
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="bg-gradient-to-r from-orange-500 to-red-500 h-2"></div>
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Thông tin sinh viên</h2>
                        <div class="space-y-3">
                            <a href="{{ route('student.show') }}" class="flex items-center p-3 bg-orange-50 hover:bg-orange-100 rounded-lg transition-colors text-orange-600 hover:text-orange-700 font-medium">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Xem mặc định
                            </a>
                            <a href="{{ route('student.show', ['Phạm Thị Thanh Hoa', '0022467']) }}" class="flex items-center p-3 bg-red-50 hover:bg-red-100 rounded-lg transition-colors text-red-600 hover:text-red-700 font-medium">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Phạm Thị Thanh Hoa (0022467)
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Game -->
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
                    <div class="bg-gradient-to-r from-green-500 to-teal-500 h-2"></div>
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Trò chơi</h2>
                        <a href="{{ route('banco.show', 8) }}" class="flex items-center p-3 bg-green-50 hover:bg-green-100 rounded-lg transition-colors text-green-600 hover:text-green-700 font-medium">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                            Bàn cờ 8x8
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
