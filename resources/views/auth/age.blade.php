<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-50 to-blue-100 p-4">
        @if (session('error'))
    <div class="alert alert-danger bg-red-200 text-red-800 rounded p-4 mb-4 w-full max-w-md">
        {{ session('error') }}
    </div>
@endif
    <form action="/auth/storeAge" method="POST" class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        @csrf
        <label for="age" class="block mb-2">Nhập tuổi:</label>
        <input type="number" name="age" id="age" required class="w-full p-2 border rounded mb-4">
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Gửi</button>
    </form>
</body>
</html>