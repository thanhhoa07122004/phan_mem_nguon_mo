<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-50 to-pink-100 min-h-screen">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-2xl">
            <div class="bg-white rounded-lg shadow-2xl overflow-hidden">
                <!-- Header -->
                <div class="bg-gradient-to-r from-purple-600 to-pink-600 px-6 py-8 md:px-12 md:py-12">
                    <h1 class="text-4xl font-bold text-white">Chi tiết sản phẩm</h1>
                    <p class="text-purple-100 mt-2">Thông tin chi tiết về sản phẩm</p>
                </div>

                <!-- Content -->
                <div class="p-8 md:p-12">
                    <!-- Product Info Card -->
                    <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-lg p-8 mb-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Product ID -->
                            <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow">
                                <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center mb-4">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <label class="text-sm font-medium text-gray-500 uppercase tracking-wide mb-2">Mã sản phẩm</label>
                                <p class="text-4xl font-bold text-purple-600">{{ $id }}</p>
                            </div>

                            <!-- Additional Info -->
                            <div class="flex flex-col justify-center p-6 bg-white rounded-lg shadow">
                                <label class="text-sm font-medium text-gray-500 uppercase tracking-wide mb-4">Trạng thái</label>
                                <div class="inline-flex items-center">
                                    <span class="inline-flex items-center justify-center px-4 py-2 rounded-full text-lg font-semibold bg-green-100 text-green-700">
                                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                        Hoạt động
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Details Table -->
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-4">Thông tin chi tiết</h2>
                        <table class="w-full">
                            <tbody class="divide-y divide-gray-300">
                                <tr class="hover:bg-purple-50">
                                    <td class="px-4 py-3 font-semibold text-gray-700">Loại sản phẩm</td>
                                    <td class="px-4 py-3 text-gray-600">Sản phẩm tiêu chuẩn</td>
                                </tr>
                                <tr class="hover:bg-purple-50">
                                    <td class="px-4 py-3 font-semibold text-gray-700">Nhà cung cấp</td>
                                    <td class="px-4 py-3 text-gray-600">Có sẵn</td>
                                </tr>
                                <tr class="hover:bg-purple-50">
                                    <td class="px-4 py-3 font-semibold text-gray-700">Tạo lúc</td>
                                    <td class="px-4 py-3 text-gray-600">{{ date('d/m/Y H:i:s') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('product.index') }}" class="flex-1 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 text-center shadow-lg">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                            Xem tất cả sản phẩm
                        </a>
                        <a href="{{ route('home') }}" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-3 px-6 rounded-lg transition-all duration-300 text-center">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Quay lại trang chủ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
