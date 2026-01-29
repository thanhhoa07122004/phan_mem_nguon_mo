
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bàn cờ {{ $n }}x{{ $n }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .board-cell {
            width: 50px;
            height: 50px;
        }
        .board-cell.dark {
            background: linear-gradient(135deg, #2C3E50 0%, #34495E 100%);
        }
        .board-cell.light {
            background: linear-gradient(135deg, #ECF0F1 0%, #D5DBDB 100%);
        }
        .board-cell:hover {
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-xl">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-white mb-2">Bàn cờ vua</h1>
            <p class="text-indigo-200 text-xl">{{ $n }} × {{ $n }} ô</p>
        </div>

        <!-- Board Container -->
        <div class="bg-white rounded-xl shadow-2xl p-8 mb-8">
            <!-- Chess Board -->
            <div class="inline-block border-4 border-gray-900 rounded-lg overflow-hidden mx-auto">
                <table class="border-collapse">
                    @for ($i = 0; $i < $n; $i++)
                        <tr>
                            @for ($j = 0; $j < $n; $j++)
                                @php $isDark = (($i + $j) % 2) === 0; @endphp
                                <td class="board-cell {{ $isDark ? 'dark' : 'light' }} cursor-pointer transition-opacity" 
                                    title="Ô [{{ $i }}, {{ $j }}]"></td>
                            @endfor
                        </tr>
                    @endfor
                </table>
            </div>

            <!-- Info -->
            <div class="mt-8 text-center">
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="bg-indigo-50 rounded-lg p-4">
                        <p class="text-gray-600 text-sm">Tổng ô</p>
                        <p class="text-2xl font-bold text-indigo-600">{{ $n * $n }}</p>
                    </div>
                    <div class="bg-purple-50 rounded-lg p-4">
                        <p class="text-gray-600 text-sm">Kích thước</p>
                        <p class="text-2xl font-bold text-purple-600">{{ $n }}×{{ $n }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Button -->
        <div class="text-center">
            <a href="{{ url('/') }}" class="inline-flex items-center justify-center bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold py-3 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Quay lại trang chủ
            </a>
        </div>
    </div>
</body>
</html>
