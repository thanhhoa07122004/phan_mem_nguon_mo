<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 flex items-center justify-center p-4 flex-col">
        <h1 class="text-3xl font-bold text-gray-900 mb-6">Sign In</h1>
        <form action="/auth/checkSignIn" method="POST" class="space-y-4 bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
            @csrf
            <div class="flex flex-col">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="flex flex-col">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="flex flex-col">
                <label for="repass">Re-enter Password</label>
                <input type="password" name="repass" id="repass" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="flex flex-col">
                <label for="mssv">MSSV</label>
                <input type="text" name="mssv" id="mssv" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="flex flex-col">
                <label for="lopmonhoc">Lớp môn học</label>
                <input type="text" name="lopmonhoc" id="lopmonhoc" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="flex flex-col">
                <label for="gioitinh">Giới tính</label>
                <select name="gioitinh" id="gioitinh" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="male">Nam</option>
                    <option value="female">Nữ</option>
                </select>
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-600 transition-colors duration-300">Sign In</button>
            </div>
        </form>
    </div>
</body>
</html>