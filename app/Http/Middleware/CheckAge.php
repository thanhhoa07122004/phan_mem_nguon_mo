<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Cho phép đi qua nếu đang ở trang nhập tuổi hoặc đang gửi form lưu tuổi
        if ($request->is('auth/age', 'auth/storeAge')) {
            return $next($request);
        }

        // 2. Lấy giá trị tuổi từ session
        $age = $request->session()->get('age');

        // 3. Nếu chưa nhập tuổi -> Chuyển hướng sang trang nhập tuổi
        if ($age === null || $age === '') {
            return redirect('/auth/age');
        }

        // 4. Nếu đã nhập nhưng không phải số hợp lệ hoặc nhỏ hơn 18 -> Cấm truy cập
        if (filter_var($age, FILTER_VALIDATE_INT) === false || (int) $age < 18) {
            return response('Không được phép truy cập', 403);
        }

        // 5. Hợp lệ (>= 18) -> Cho phép đi tiếp vào trang chủ
        return $next($request);
    }
}