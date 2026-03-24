<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách danh mục</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-6xl mx-auto py-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold">Quản lý danh mục</h1>
            <div class="flex gap-2">
                <a href="{{ route('home') }}" class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">Trang chủ</a>
                <a href="{{ route('category.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Thêm mới</a>
            </div>
        </div>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">{{ session('success') }}</div>
        @endif

        <div class="bg-white shadow rounded-lg overflow-hidden">
            <table class="min-w-full text-left divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Tên</th>
                        <th class="px-4 py-3">Cha</th>
                        <th class="px-4 py-3">Kích hoạt</th>
                        <th class="px-4 py-3">Hành động</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($categories as $category)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-3">{{ $category->id }}</td>
                            <td class="px-4 py-3">{{ $category->name }}</td>
                            <td class="px-4 py-3">{{ $category->parent ? $category->parent->name : '-' }}</td>
                            <td class="px-4 py-3">{{ $category->is_active ? 'Có' : 'Không' }}</td>
                            <td class="px-4 py-3 space-x-1">
                                <a href="{{ route('category.edit', $category->id) }}" class="text-blue-600 hover:underline">Sửa</a>
                                <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Bạn có muốn xóa?')">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="p-4">Chưa có danh mục nào.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
