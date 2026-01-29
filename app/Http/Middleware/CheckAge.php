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
        if ($request->is('auth/age','auth/age/*')) {
            return $next($request);
        }
        // Lấy giá trị tuổi từ session hoặc từ input hiện tại
      $age = $request->session()->get('age', $request->input('age'));

      // Kiểm tra nếu tuổi không phải là số hợp lệ
      if (is_array($age)) {
        $age = null;
      } elseif ($age !== null) {
        $age = trim((string) $age);
      }

      // Nếu tuổi không được cung cấp hoặc không phải là số nguyên hợp lệ
      if ($age === null || $age === '' || filter_var($age, FILTER_VALIDATE_INT) === false) {
        return redirect()->route('age')->with('error', 'Vui lòng nhập tuổi hợp lệ.');
      }

      $age = (int) $age;
      if ($age < 18) {
        return redirect()->route('age')->with('error', 'Bạn phải đủ 18 tuổi trở lên để truy cập trang này.');
      }
        return $next($request);
    }
}
