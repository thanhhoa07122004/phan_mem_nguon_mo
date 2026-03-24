<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm danh mục</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-3xl mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Tạo danh mục mới</h1>
        <form action="{{ route('category.store') }}" method="POST" class="bg-white p-6 rounded shadow">
            @csrf

            <div class="mb-4">
                <label class="block mb-1 font-medium">Tên danh mục</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full border px-3 py-2 rounded" required>
                @error('name')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">Mô tả</label>
                <textarea name="description" class="w-full border px-3 py-2 rounded">{{ old('description') }}</textarea>
                @error('description')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">Ảnh (URL)</label>
                <input type="text" name="image" value="{{ old('image') }}" class="w-full border px-3 py-2 rounded" placeholder="https://...">
                @error('image')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">Danh mục cha</label>
                <select name="parent_id" class="w-full border px-3 py-2 rounded">
                    <option value="">-- Chọn --</option>
                    @foreach($categories as $item)
                        <option value="{{ $item->id }}" {{ old('parent_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('parent_id')<p class="text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="mb-6">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox" name="is_active" {{ old('is_active', true) ? 'checked' : '' }}>
                    <span class="ml-2">Kích hoạt</span>
                </label>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Lưu</button>
                <a href="{{ route('category.index') }}" class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">Hủy</a>
            </div>
        </form>
    </div>
</body>
</html>
