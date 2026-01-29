<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 flex items-center justify-center p-4 flex-col">
            @if (session('error'))
    <div class="alert alert-danger mb-4 p-4 bg-red-100 text-red-700 border border-red-400 rounded-lg w-full max-w-md">
        {{ session('error') }}
    </div>
@endif
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Register</h1>
        <form action="/auth/checkRegister" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            @csrf
            <div class="flex flex-col">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex flex-col">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex flex-col">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex flex-col">
                <label for="student_id">Mã sinh viên</label>
                <input type="text" name="student_id" id="student_id" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex flex-col">
                <label for="class">Lớp môn học</label>
                <select name="class" id="class" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="67pm1">67pm1</option>
                    <option value="67pm2">67pm2</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="gender">Giới tính</label>
                <select name="gender" id="gender" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="male">Nam</option>
                    <option value="female">Nữ</option>
                </select>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-600 transition-colors duration-300">Register</button>
            </div>
        </form>
        </div>
    
</body>
</html>